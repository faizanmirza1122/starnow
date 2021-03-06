(function($) {

	/**
	 * Copyright 2014, Digital Fusion
	 * Licensed under the MIT license.
	 * http://teamdf.com/jquery-plugins/license/
	 *
	 * @author Sam Sehnert
	 * @desc A small plugin that checks whether elements are within
	 *		 the user visible viewport of a web browser.
	 *		 only accounts for vertical position, not horizontal.
	 */
	$.fn.visible = function (partial) {
		var $t = $(this);

		if ($t.is(document) || $t.is(window)) return true;
		if ($t.length == 0 || $t.context == undefined) return false;

		var	$w = $(window),
			viewTop = $w.scrollTop(),
			viewBottom = viewTop + $w.height(),
			top = $t.offset().top,
			bottom = top + $t.height(),
			compareTop = partial === true ? bottom : top,
			compareBottom = partial === true ? top : bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
	};

})(jQuery);
(function($) {
	$.fn.jTruncate = function(h) {
		var i = { length: 300, minTrail: 20, moreText: 'more', lessText: 'less', ellipsisText: '...'};
		var h = $.extend(i, h);
		return this.each(function() {
			var obj = $(this);
			var a = obj.html();
			if (a.length > h.length + h.minTrail) {
				var b = a.indexOf(' ', h.length);
				if (b != -1) {
					var b = a.indexOf(' ', h.length);
					var c = a.substring(0, b);
					var d = a.substring(b);
					obj.html(c + '<span class="truncate_ellipsis">' + h.ellipsisText + '</span>' + '<span class="truncate_more">' + d + '</span>');
					obj.find('.truncate_more').css("display", "none");
					obj.append(' <span class="a truncate_more_link nounder">' + h.moreText + '</span>');
					var e = $('.truncate_more_link', obj);
					var f = $('.truncate_more', obj);
					var g = $('.truncate_ellipsis', obj);
					e.click(function() {
						if (e.text() == h.moreText) {
							f.css('display', 'inline');
							e.text(h.lessText);
							g.css('display', 'none');
						} else {
							f.css('display', 'none');
							e.text(h.moreText);
							g.css('display', 'inline');
						}
						return false;
					});
				}
			}
		});
	}
})(jQuery);
// Licensed under the MIT license.
// Copyright 2014 Lu??s Almeida
// https://github.com/luis-almeida/unveil

// Modified by Jarrod @ StarNow to support background images + performance enhancements

; (function ($) {

	$.fn.unveil = function (opts) {
		opts = opts || {};

		var $w = $(window),
			$c = opts.container || $w,
			th = opts.threshold || 0,
			wh = $w.height(),
			shouldUpgrade = opts.upgrade || false,
			images = this,
			upgradeImages = this,
			loaded, upgraded;

		this.one("unveil", function () {
			var $img = $(this),
				src = $img.attr("data-original");

			if (src) {
				if (this.nodeName === "IMG") {
					$img.attr("src", src).trigger("unveiled");
				} else {
					$img.css("background-image", "url(\"" + src + "\")").trigger("unveiled");
				}
			}
		});

		// Changes the image to that in the "data-upgrade" attribute.
		// Used for swapping out low-quality images for high-quality ones.
		this.one("upgrade", function () {
			if (!shouldUpgrade) return;

			var $img = $(this);
			var src = $img.attr("data-upgrade");

			if (src) {
				if (this.nodeName === "IMG") {
					$img.attr("src", src).trigger("upgraded");
				} else {
					$img.css("background-image", "url(\"" + src + "\")").trigger("upgraded");
				}
			}
		});

		function unveil() {
			// TODO: hijack existing visible() code?
			var inview = images.filter(function () {
				var $e = $(this);
				if ($e.is(":hidden")) return false;

				var wt = $w.scrollTop(),
					wb = wt + wh,
					et = $e.offset().top,
					eb = et + $e.height();

				return eb >= wt - th && et <= wb + th;
			});

			loaded = inview.trigger("unveil");
			images = images.not(loaded);
		}

		// TODO: This is almost 1:1 with above method;
		// best way to merge? How do you pass opts from a callback?
		// Via "this"?
		function upgrade() {
			var inview = upgradeImages.filter(function () {
				var $e = $(this);
				if ($e.is(":hidden")) return false;

				var wt = $w.scrollTop(),
					wb = wt + wh,
					et = $e.offset().top,
					eb = et + $e.height();

				return eb >= wt - th && et <= wb + th;
			});

			upgraded = inview.trigger("upgrade");
			upgradeImages = upgradeImages.not(upgraded);
		}

		function resize() {
			debounce(wh = $w.height(), 100);
			unveil();
		}

		function resizeUpgrade() {
			debounce(wh = $w.height(), 100);
			upgrade();
		}

		$c.on({
			"resize.unveil": debounce(resize, 100),
			"resize.upgrade": debounce(resizeUpgrade, 200),
			"scroll.unveil": debounce(unveil, 20),
			"lookup.unveil": debounce(unveil, 20),
			"scroll.upgrade": debounce(upgrade, 1000),
			"lookup.upgrade": debounce(upgrade, 1000)
		});

		unveil();

		window.setTimeout(function() {
			upgrade();
		}, 1000);

		return this;
	};

})(window.jQuery);