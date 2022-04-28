// Licensed under the MIT license.
// Copyright 2014 Luís Almeida
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