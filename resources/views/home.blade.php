@extends('layouts.master')
@section('head')
@endsection
@section('content')
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCGCWXL" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="page-slice homepage-hero">
    <div class="page-slice__inner homepage-hero__wrapper" >
        <div class="row">
            <div class="small-12 columns slice__content">
                <h1 class="copy__hero fw7">
                    Find&nbsp;<a href="casting-calls/sitemap/index.html" class="fw7 txt-white cursor--default link--no-hover-highlight">jobs</a>.
                    Get&nbsp;<a href="talent/sitemap/index.html" class="fw7 txt-white cursor--default link--no-hover-highlight">cast</a>.
                </h1>

                <h2 class="copy__h2--light mb3 mb6-ns">
                    3,640 roles for actors, models, musicians and more, of all ages, looks, and levels of experience.
                </h2>

                <form method="post" action="https://www.starnow.com/">
                    <input id="Directory" name="Directory" type="hidden" value="" />

                    <div class="homepage-hero__search">
                        <div class="homepage-hero__search__input">
                            <label class="hidden" for="CategoryPath">Category</label>
                            <select class="homepage-hero__select" id="CategoryPath" name="CategoryPath">
                                <option value="/">All auditions &amp; jobs</option>
                                <option value="acting-jobs">Acting Jobs</option>
                                <option value="extras-jobs">Extras Jobs</option>
                                <option value="model-jobs">Modelling Jobs</option>
                                <option value="influencer-jobs">Influencer Jobs</option>
                                <option value="presenter-jobs">Presenter Jobs</option>
                                <option value="dance-jobs">Dance Jobs</option>
                                <option value="music-jobs">Music Jobs</option>
                                <option value="mua-stylist-jobs">Hair, Makeup &amp; Stylist Jobs</option>
                                <option value="photography-jobs">Photography Jobs</option>
                                <option value="film-crew-jobs">Film &amp; Stage Crew Jobs</option>
                                <option value="tv-reality-jobs">TV &amp; Reality Jobs</option>
                                <option value="general-jobs">Survival Jobs</option>
                            </select>
                        </div>
                        <!--
						-->
                        <div class="homepage-hero__search__input">
                            <label class="hidden" for="Location">Location</label>
                            <select class="homepage-hero__select" id="Location" name="Location">
                                <option value="/">Worldwide</option>
                                <option selected="selected" value="pakistan">In Pakistan</option>
                                <option disabled="disabled" value="/">----------</option>
                                <option value="uk">In the UK</option>
                                <option value="australia">In Australia</option>
                                <option value="usa">In the USA</option>
                                <option value="canada">In Canada</option>
                                <option value="nz">In NZ</option>
                                <option value="ireland">In Ireland</option>
                            </select>
                        </div>
                        <!--
						-->
                        <div id="divGender" class="homepage-hero__search__input show-for-medium-up">
                            <label class="hidden" for="Gender">Gender</label>
                            <select class="homepage-hero__select" id="Gender" name="Gender">
                                <option value="a">Any gender</option>
                                <option value="f">For Females</option>
                                <option value="m">For Males</option>
                            </select>
                        </div>
                        <!--
						-->
                        <div class="homepage-hero__search__input">
                            <input id="cmd_home_search" type="submit" class="btn btn--expand" value="Search jobs">
                        </div>
                    </div>
                </form>

                <div class="copy--large mv3 mv4-ns">
                    Looking for talent? <br class="show-for-small-only" /><span class="icon icon-bullhorn--small"></span><a class="link--white under" href="placelisting/index.html">Place a free casting call</a>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="trusted">
    <img src="https://staticsn.com/images/industry-trusted-15.svg" class="trusted__image" alt="Industry trusted for over 15 years">
</div>
<div class="bg-white pt5">


    <div class="pa3 pb5 bg-white pt5-ns pb5-ns">
        <p class="ph4 ph0-ns txt-center txt-black-70">We've helped 1,000's of brands such as</p>
        <div class="flex flex-wrap justify-center center mw6 mw-100-ns mw8-l">
            <div class="brand-logo brand-logo-netflix"></div>
            <div class="brand-logo brand-logo-disney"></div>
            <div class="brand-logo brand-logo-bbc"></div>
            <div class="brand-logo brand-logo-fox"></div>
            <div class="brand-logo brand-logo-dove"></div>
            <div class="brand-logo brand-logo-wilhelmina"></div>
            <div class="brand-logo brand-logo-endemol"></div>
            <div class="brand-logo brand-logo-loreal"></div>
        </div>
    </div>
</div>
<div class="mv5 mw6 mw-100-ns mw8-l center db">



    <h2 class="hidden">Categories</h2>
    <div class="flex-ns flex-wrap-ns justify-between-ns">
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/acting-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-tomato">Acting Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/extras-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-hot-pink">Extras Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/model-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-purple">Modeling Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/influencer-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-indigo">Influencer Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/presenter-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-blue">Presenter Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/music-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-sky-blue-tint">Music Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/dance-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-teal">Dance Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/tv-reality-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-mantis">TV &amp; Reality Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/photography-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-lime">Photography Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/film-crew-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-lemon-shade">Film &amp; Stage Crew Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/mua-stylist-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-gold">Hair, Makeup &amp; Stylist Jobs</h2>
            </a>
        </div>
        <div class="w-50-m w-third-l">
            <a class="category-tile" href="casting-calls/general-jobs/all/pakistan/index.html">
                <h2 class="copy__h3 fw7 ma0 txt-orange">Survival Jobs</h2>
            </a>
        </div>
    </div>
</div>


<div class="mh0 page-slice bg-sky-blue pa3 pa0-l">
    <div class="page-slice__inner">
        <div class="portfolio__image">
            <div class="portfolio__image-cover unveil" data-original="images/1.png" style="background-image: url('images/1.png');"></div>
        </div>
        <div class="portfolio__content txt-center txt-white ph0 pv4-ns">
            <h1 class="lh-title f4 mv3 f2-ns f1-l">
                Create a stunning profile
            </h1>
            <p class="mb5 f7 f5-l mw6 lh-copy">
                Design your own portfolio with photos &amp; videos to showcase your talent and catch the eye of casting&nbsp;professionals.
            </p>
            <div class="portfolio__button-container">
                <a class="btn btn--expand mt2 mw6 mw5-ns mb0-ns" href="register/member1bc7.html?return_url=%2fmystarnow%2fmycastingcalls.aspx&amp;is_talent=true">
                    Create your free&nbsp;profile
                </a>
                <a class="btn btn--expand mt2 mw6 mw5-ns mb0-ns btn--blue" href="home/pricing/index.html">See plans &amp; pricing</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-biege pa3 lazy bg-hat-guy-desktop ph5-m" data-original="images/2.png" style="background-image: url('images/2.png'); background-repeat:no-repeat; background-size: auto 100%">
    <div class="mw6 mw-100-ns mw8-l center db">
        <img class="center db dn-ns" alt="Talent" data-src="https://staticsn.com/images/home/actor-extra-model.jpg" width="290" height="275">
        <h2 class="copy__h1 txt-center--mobile mv3 f4 lh-title f2-ns mt7-l f1-l">Looking to cast talent?</h2>

        <p class="txt-center--mobile f7 mh3 mh0-ns mr5-m w-50-m mw6-l f5-l">
            Reach professional talent and fresh faces by <a class="link-inherit under" href="placelisting/index.html">placing a free casting call</a>.
            See applicants' experience, photos, videos, audio and more.
            Easily sort applications, make notes on them and cast the perfect talent.
            Contact and book talent direct.
        </p>

        <a class="btn btn--expand mv5 mw5-ns mb6-l" href="placelisting/index.html">
            <img class="dib lazy plus-icon mr1" data-src="https://staticsn.com/images/icons/svg/plus.svg" width="18" height="18" role="presentation">
            List a job (free)
        </a>
        <p class="txt-center--mobile f8 mh3 mb4 mh0-ns w-50-m f7-l">
            1,000's of casting professionals cast with StarNow every month.
        </p>
        <div class="flex-ns">
            <div class="w-50-m w-third-l">
                <div class="home-quote-bubble">
                    <p>&ldquo;I needed to find good people fast and StarNow was perfect. By the end of that day I had over 500 people to choose from,&nbsp;perfect&rdquo;</p>
                </div>
                <div class="w-100 inline-flex justify-center mb4">
                    <div class="circle casting-pro-logo">
                        <img src="/img/images/content/modelling-pages/models1-logo-round.png" width="60" height="60" alt="Revolver Casting Logo">
                    </div>
                    <p class="mb0 ml3 self-center txt-uppercase f9"><span class="txt-bold">Wayne Waterson</span><br />Revolver Casting</p>
                </div>
            </div>
            <div class="ml6-m ml4-l w-50-m w-third-l">
                <div class="home-quote-bubble">
                    <p>&ldquo;When we are looking for fresh faces to sign we turn to StarNow. Their global database of models and easy to use system is better than any other we've&nbsp;used.&rdquo;</p>
                </div>
                <div class="w-100 inline-flex justify-center mb4">
                    <div class="circle casting-pro-logo">
                        <img src="/img/images/content/modelling-pages/bridge-models-logo-round.png" width="60" height="60" alt="Models 1 Logo">
                    </div>
                    <p class="mb0 ml3 self-center txt-uppercase f9"><span class="txt-bold">Debbie</span><br />Models1</p>
                </div>
            </div>
            <div class="dn db-l ml4 w-third-l">
                <div class="home-quote-bubble">
                    <p>&ldquo;StarNow was the No. 1 supplier of referrals to our registration page across every region for the entire&nbsp;tour!&rdquo;</p>
                </div>
                <div class="w-100 inline-flex justify-center mb4">
                    <div class="circle casting-pro-logo">
                        <img data-src="https://staticsn.com/images/home/acting-agencies.png" width="60" height="60" alt="Universal Studios Logo">
                    </div>
                    <p class="mb0 ml3 self-center txt-uppercase f9"><span class="txt-bold">Tamzine Walshe</span><br />Connect Entertainment</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="flex flex-column flex-row-ns bg-kids lazy" data-original="images/1.png" style="background-image: url('images/screenshot.png');">
    <div class="pa3 pv4-m inline-flex flex-column content-center justify-center w-100 txt-white h-100">
        <h2 class="copy__h1 txt-center lh-title f4 mv3 f2-ns f1-l mt0-ns">Hey parents!</h2>
        <p class="txt-center mb5 mh1 mh0-ns self-center f7 f5-l mw6 lh-loose f4-ns mw7-ns mh4-m">We have Casting Professionals looking for babies, children and teens for Acting and Modelling roles in TV, Film and Magazines. Create a profile for your child and start&nbsp;applying!</p>
        <a href="register/index.html" class="btn btn--expand mb5 mw6 mw5-ns self-center mb0-ns">Create a Kid&#39;s Profile</a>
    </div>
</div>



<div class="flex flex-column flex-row-ns bg-alt-light-grey " data-original="images/1.png" style="background-image: url('images/3.png');background-repeat:no-repeat; ">
    <div class="spacer-seventwenty-sixhundy ">
    </div>
    <div class="pa3 pv4-m inline-flex flex-column content-center justify-center spacer-seventwenty-sixhundy">
        <h2 class="copy__h1 txt-center lh-title f4 mv3 f2-ns f1-l mt0-ns">From student actor to Netflix&#160;star</h2>
        <p class="txt-center mb5 mh1 mh0-ns self-center f7 f5-l mw6 lh-copy">
            <strong>
                <a class='link-inherit under' href='blog/241/an-update-from-2016-hollywood-immersive-winner-bruce-herbelinearle.html'>Bruce</a>
            </strong>
            won The StarNow Hollywood Immersive Global Acting competition, and after meetings with the Heads of <strong>Universal,&nbsp;Hasbro</strong>&nbsp;and&nbsp;<strong>Lionsgate</strong>, he was signed by a USA&nbsp;manager & has snapped up a leading role in the <strong>Netflix</strong> series <a class='txt-jet' href='https://www.netflix.com/title/80134695'>Free&nbsp;Rein</a>.
        </p>
        <a href="register/index.html" class="btn btn--expand mb5 mw6 mw5-ns self-center mb0-ns">Get started</a>
    </div>
</div>



<div class="page-slice slice--testimonials show-for-medium-up">
    <div class="page-slice__inner">
        <div class="row">
            <div class="small-12 columns end">
                <h2 class="hidden">Testimonials</h2>
                <p class="db mt5 mh4 mb0 f5 txt-white txt-center">
                    StarNow has helped thousands of members find work, land an agent, and gain industry experience!
                </p>
            </div>
            <div style="display: inline-flex;">
                <div class="home-testimonial">
                    <div class="pa5 txt-center">
                        <a class="nounder" href="success-stories/index.html">
                            <img src="/img/images/content/modelling-pages/models1-logo-round.png" data-original="https://staticsn.com/images/home/testimonial-kasia.png" alt="Kasia S" class="mb3 unveil" width="112" height="112">
                            <p class="home-testimonial__text">
                                "I was cast as Marlene Moon in The Great Gatsby and my raw film test was used in the final edit of the film.
                                This was all thanks to an extras ad placed on StarNow... I don't think any bigger dreams could come true. Thank&nbsp;you!"
                            </p>
                            <span class="home-testimonial__name txt-small bold">KASIA&nbsp;S</span>
                        </a>
                    </div>
                </div>
                <div class="home-testimonial">
                    <div class="pa5 txt-center">
                        <a class="nounder" href="success-stories/index.html">
                            <img src="/img/images/content/modelling-pages/models1-logo-round.png" data-original="https://staticsn.com/images/home/testimonial-eve.png" alt="Eve-Yasmine Saoud-Easton" class="mb3 unveil" width="112" height="112">
                            <p class="home-testimonial__text">
                                "StarNow is a brilliant platform and a great first door into the industry. Thanks to StarNow I competed in the Miss Teen Galaxy pageant
                                where I learnt some really useful tips which helped me at a time when my self-esteem wasn't&nbsp;so&nbsp;good."
                            </p>
                            <span class="home-testimonial__name txt-small bold">EVE-YASMINE SAOUD-EASTON</span>
                        </a>
                    </div>
                </div>
                <div class="home-testimonial">
                    <div class="pa5 txt-center">
                        <a class="nounder" href="success-stories/index.html">
                            <img src="/img/images/content/modelling-pages/models1-logo-round.png" data-original="https://staticsn.com/images/home/testimonial-judah.png" alt="Judah S" class="mb3 unveil" width="112" height="112">
                            <p class="home-testimonial__text">
                                "I won a Global Acting Competition through StarNow! They flew me to LA for the course,
                                where I was able to gain US manager representation, and have since helped me sign with a top acting agent.
                                The site has been a huge help in getting me on the path to being a professional&nbsp;actor."
                            </p>
                            <span class="home-testimonial__name txt-small bold">JUDAH&nbsp;S</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="flex flex-column flex-row-ns bg-white " data-data-original="images/1.png" style="background-image: url('images/4.png'); background-repeat: no-repeat;">
    <div class="spacer-seventwenty-sixhundy order-last-ns">
        <img class="w-100 object-fit-cover object-position-right-top" data-original="images/1.png" style="background-image: url('images/4.png'); background-repeat: no-repeat;" alt="Customer Service" width="600" height="720">
    </div>
    <div class="pa3 pv4-m inline-flex flex-column content-center justify-center spacer-seventwenty-sixhundy">
        <h2 class="copy__h1 txt-center lh-title f4 mv3 f2-ns f1-l mt0-ns">You&#39;re in good hands</h2>
        <p class="txt-center mb5 mh1 mh0-ns self-center f7 f5-l mw6 lh-copy">Keeping our members safe and happy is our number one priority, and our Trust & Safety and Customer Success teams are here to help with all your questions.</p>
        <a href="register/index.html" class="btn btn--expand mb5 mw6 mw5-ns self-center mb0-ns">Get started</a>
    </div>
</div>





<script src="../cdn.polyfill.io/v2/polyfill.min834c.js?features=es2015,es2016"></script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script nonce="PZ5FkSIxZ7IrpwL0eTOueAx7b+r96M14">
    (function($, d) {
        $.each(readyQ, function(i, f) {
            $(f);
            console.warn("Misplaced script detected", f);
        });
        $.each(bindReadyQ, function(i, f) {
            $(d).bind("ready", f);
            console.warn("Misplaced script detected", f);
        });
    })(jQuery, document)
</script>
<script nonce="PZ5FkSIxZ7IrpwL0eTOueAx7b+r96M14">
    (function() {
        'use strict';
        var f, g = [];

        function l(a) {
            g.push(a);
            1 == g.length && f()
        }

        function m() {
            for (; g.length;) g[0](), g.shift()
        }
        f = function() {
            setTimeout(m)
        };

        function n(a) {
            this.a = p;
            this.b = void 0;
            this.f = [];
            var b = this;
            try {
                a(function(a) {
                    q(b, a)
                }, function(a) {
                    r(b, a)
                })
            } catch (c) {
                r(b, c)
            }
        }
        var p = 2;

        function t(a) {
            return new n(function(b, c) {
                c(a)
            })
        }

        function u(a) {
            return new n(function(b) {
                b(a)
            })
        }

        function q(a, b) {
            if (a.a == p) {
                if (b == a) throw new TypeError;
                var c = !1;
                try {
                    var d = b && b.then;
                    if (null != b && "object" == typeof b && "function" == typeof d) {
                        d.call(b, function(b) {
                            c || q(a, b);
                            c = !0
                        }, function(b) {
                            c || r(a, b);
                            c = !0
                        });
                        return
                    }
                } catch (e) {
                    c || r(a, e);
                    return
                }
                a.a = 0;
                a.b = b;
                v(a)
            }
        }

        function r(a, b) {
            if (a.a == p) {
                if (b == a) throw new TypeError;
                a.a = 1;
                a.b = b;
                v(a)
            }
        }

        function v(a) {
            l(function() {
                if (a.a != p)
                    for (; a.f.length;) {
                        var b = a.f.shift(),
                            c = b[0],
                            d = b[1],
                            e = b[2],
                            b = b[3];
                        try {
                            0 == a.a ? "function" == typeof c ? e(c.call(void 0, a.b)) : e(a.b) : 1 == a.a && ("function" == typeof d ? e(d.call(void 0, a.b)) : b(a.b))
                        } catch (h) {
                            b(h)
                        }
                    }
            })
        }
        n.prototype.g = function(a) {
            return this.c(void 0, a)
        };
        n.prototype.c = function(a, b) {
            var c = this;
            return new n(function(d, e) {
                c.f.push([a, b, d, e]);
                v(c)
            })
        };

        function w(a) {
            return new n(function(b, c) {
                function d(c) {
                    return function(d) {
                        h[c] = d;
                        e += 1;
                        e == a.length && b(h)
                    }
                }
                var e = 0,
                    h = [];
                0 == a.length && b(h);
                for (var k = 0; k < a.length; k += 1) u(a[k]).c(d(k), c)
            })
        }

        function x(a) {
            return new n(function(b, c) {
                for (var d = 0; d < a.length; d += 1) u(a[d]).c(b, c)
            })
        };
        window.Promise || (window.Promise = n, window.Promise.resolve = u, window.Promise.reject = t, window.Promise.race = x, window.Promise.all = w, window.Promise.prototype.then = n.prototype.c, window.Promise.prototype["catch"] = n.prototype.g);
    }());

    (function() {
        'use strict';
        var h = !!document.addEventListener;

        function k(a, b) {
            h ? a.addEventListener("scroll", b, !1) : a.attachEvent("scroll", b)
        }

        function w(a) {
            document.body ? a() : h ? document.addEventListener("DOMContentLoaded", a) : document.onreadystatechange = function() {
                "interactive" == document.readyState && a()
            }
        };

        function x(a) {
            this.a = document.createElement("div");
            this.a.setAttribute("aria-hidden", "true");
            this.a.appendChild(document.createTextNode(a));
            this.b = document.createElement("span");
            this.c = document.createElement("span");
            this.h = document.createElement("span");
            this.f = document.createElement("span");
            this.g = -1;
            this.b.style.cssText = "display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
            this.c.style.cssText = "display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
            this.f.style.cssText = "display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
            this.h.style.cssText = "display:inline-block;width:200%;height:200%;font-size:16px;";
            this.b.appendChild(this.h);
            this.c.appendChild(this.f);
            this.a.appendChild(this.b);
            this.a.appendChild(this.c)
        }

        function y(a, b) {
            a.a.style.cssText = "min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font:" + b + ";"
        }

        function z(a) {
            var b = a.a.offsetWidth,
                c = b + 100;
            a.f.style.width = c + "px";
            a.c.scrollLeft = c;
            a.b.scrollLeft = a.b.scrollWidth + 100;
            return a.g !== b ? (a.g = b, !0) : !1
        }

        function A(a, b) {
            function c() {
                var a = l;
                z(a) && null !== a.a.parentNode && b(a.g)
            }
            var l = a;
            k(a.b, c);
            k(a.c, c);
            z(a)
        };

        function B(a, b) {
            var c = b || {};
            this.family = a;
            this.style = c.style || "normal";
            this.weight = c.weight || "normal";
            this.stretch = c.stretch || "normal"
        }
        var C = null,
            D = null,
            H = !!window.FontFace;

        function I() {
            if (null === D) {
                var a = document.createElement("div");
                try {
                    a.style.font = "condensed 100px sans-serif"
                } catch (b) {}
                D = "" !== a.style.font
            }
            return D
        }

        function J(a, b) {
            return [a.style, a.weight, I() ? a.stretch : "", "100px", b].join(" ")
        }
        B.prototype.a = function(a, b) {
            var c = this,
                l = a || "BESbswy",
                E = b || 3E3,
                F = (new Date).getTime();
            return new Promise(function(a, b) {
                if (H) {
                    var q = function() {
                        (new Date).getTime() - F >= E ? b(c) : document.fonts.load(J(c, c.family), l).then(function(b) {
                            1 <= b.length ? a(c) : setTimeout(q, 25)
                        }, function() {
                            b(c)
                        })
                    };
                    q()
                } else w(function() {
                    function r() {
                        var b;
                        if (b = -1 != e && -1 != f || -1 != e && -1 != g || -1 != f && -1 != g)(b = e != f && e != g && f != g) || (null === C && (b = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent), C = !!b && (536 > parseInt(b[1],
                            10) || 536 === parseInt(b[1], 10) && 11 >= parseInt(b[2], 10))), b = C && (e == t && f == t && g == t || e == u && f == u && g == u || e == v && f == v && g == v)), b = !b;
                        b && (null !== d.parentNode && d.parentNode.removeChild(d), clearTimeout(G), a(c))
                    }

                    function q() {
                        if ((new Date).getTime() - F >= E) null !== d.parentNode && d.parentNode.removeChild(d), b(c);
                        else {
                            var a = document.hidden;
                            if (!0 === a || void 0 === a) e = m.a.offsetWidth, f = n.a.offsetWidth, g = p.a.offsetWidth, r();
                            G = setTimeout(q, 50)
                        }
                    }
                    var m = new x(l),
                        n = new x(l),
                        p = new x(l),
                        e = -1,
                        f = -1,
                        g = -1,
                        t = -1,
                        u = -1,
                        v = -1,
                        d = document.createElement("div"),
                        G = 0;
                    d.dir = "ltr";
                    y(m, J(c, "sans-serif"));
                    y(n, J(c, "serif"));
                    y(p, J(c, "monospace"));
                    d.appendChild(m.a);
                    d.appendChild(n.a);
                    d.appendChild(p.a);
                    document.body.appendChild(d);
                    t = m.a.offsetWidth;
                    u = n.a.offsetWidth;
                    v = p.a.offsetWidth;
                    q();
                    A(m, function(a) {
                        e = a;
                        r()
                    });
                    y(m, J(c, '"' + c.family + '",sans-serif'));
                    A(n, function(a) {
                        f = a;
                        r()
                    });
                    y(n, J(c, '"' + c.family + '",serif'));
                    A(p, function(a) {
                        g = a;
                        r()
                    });
                    y(p, J(c, '"' + c.family + '",monospace'))
                })
            })
        };
        window.FontFaceObserver = B;
        window.FontFaceObserver.prototype.check = B.prototype.a;
        "undefined" !== typeof module && (module.exports = window.FontFaceObserver);
    }());

    document.addEventListener("DOMContentLoaded", ready);

    function ready() {
        var htmlElement = document.getElementsByTagName("html")[0]

        function fontsLoaded() {
            htmlElement.classList.add("fonts-loaded")
            document.cookie = "fontsLoaded=true; path=/; max-age=604800; secure"; // 1 week
        }

        if (typeof window.Promise != "function") {
            fontsLoaded();
            return;
        }

        if (!htmlElement.classList.contains("fonts-loaded")) {
            var fontObservers = [];
            var loadFonts = {
                "Open Sans": {
                    normal: [300, 400, 600, 700, 800],
                    italic: [300, 400, 600, 700]
                },
                "Open Sans Condensed": {
                    normal: [300, 700],
                    italic: [300]
                }
            };

            Object.keys(loadFonts).map(function(font) {
                Object.keys(loadFonts[font]).map(function(style) {
                    loadFonts[font][style].map(function(weight) {
                        fontObservers.push(new FontFaceObserver(font, {
                            weight: weight,
                            style: style
                        }).check());
                    });
                });
            });

            Promise.all(fontObservers)
                .then(function() {
                    // All fonts downloaded:
                    fontsLoaded();
                }, function() {
                    // Something went and died:
                    fontsLoaded();
                });
        }
    };
</script>





<script src="../staticsn.com/_scripts/allcc73.js?v=thVZE0_lcCkZjXnygKzH7i6gf1yVKWxWIkarfIMTM_Q1"></script>
<script src="../staticsn.com/_scripts/facebook6db5.js?v=YDrH5w3AxJEUJ04547EFa6kF96TsBwnshDZK0IcK0J81"></script>
<script src="../staticsn.com/_scripts/unveilf77f.js?v=9b_DkuGfWI3AChpzAuCR6ZSfhwR-He5ERLZ_lbB6D5Y1"></script>
<script src="../staticsn.com/_scripts/staffPickWithTooltip242f.js?v=zMMfC7NxVpCTlYTqK_mjHfW6MDcYIHZ03EwZ8GmeAUE1"></script>
<script src="../staticsn.com/_scripts/listingListbd84.js?v=kRtkSRxBFRAS3nBpR30Ymdruj2ra-lrVi2auHghNcjY1"></script>
<script src="../staticsn.com/_scripts/cookiesPopupe2bb.js?v=F4bW1SwmCa09jJomDxbQsVMiSsdsEvElJgFj0cEw-Rc1"></script>
<script src="../staticsn.com/_scripts/saveSearchPopup8820.js?v=Z5usIolx5ke7sQ_3RirEF12204rcH24Zft-Q1kyjui01"></script>
<script src="../staticsn.com/_scripts/vendor3495.js?v=H75mSAhi0C-BDxUYEGhELxQ602S44uwAPdGPe_LULJU1"></script>


<script nonce="PZ5FkSIxZ7IrpwL0eTOueAx7b+r96M14">
    $(function() {
        $("#cmd_home_search").click(function() {
            if (!$("#divGender").is(":visible")) $("#Gender").val("a");
            return true;
        });


        var $u = $(".unveil");
        var $um = $(".unveil--medium-up");
        var c = {
            threshold: 400
        };

        $u.unveil(c);

        if (window.innerWidth > 640) {
            $um.unveil(c);
        }

        $(window).on("resize", debounce(function() {
            if (window.innerWidth > 640) {
                $u.css("background-image", "");
                $u.unveil(c);
                $um.unveil(c);
            } else {
                $um.css("background-image", "");
                $u.unveil(c);
            }
        }, 100));
    });
</script>

<script nonce="PZ5FkSIxZ7IrpwL0eTOueAx7b+r96M14">
    $(function() {
        starnow.initPageChrome();
    });
</script>




<script>
    (window.Components && Components.CookiesPopup) || document.write('<script type="text/javascript" src="/_scripts/cookiesPopup.js?v=fallback' + Math.floor(Date.now() / 1000) + '">\x3C/script>')
</script>
<div id="react_0HMGPRLPMNKK3"></div>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        ReactDOM.render(React.createElement(Components.CookiesPopup, {}), document.getElementById("react_0HMGPRLPMNKK3"))
    });
</script>


<script>
    (window.Components && Components.SaveSearchPopup) || document.write('<script type="text/javascript" src="/_scripts/saveSearchPopup.js?v=fallback' + Math.floor(Date.now() / 1000) + '">\x3C/script>')
</script>
<div id="react_0HMGPRLPMNKK4"></div>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        ReactDOM.render(React.createElement(Components.SaveSearchPopup, {
            "url": "/",
            "global": {
                "staticUrl": "https://staticsn.com",
                "starNowApiUrl": "https://api.starnow.com"
            },
            "session": {
                "guid": "568E7A16-7C4F-4B3D-8DE4-2FEECEB629CC",
                "skinUrl": "starnow.com",
                "trackOrigin": "",
                "trackSession": "",
                "member": {
                    "memberID": 0,
                    "name": ""
                }
            }
        }), document.getElementById("react_0HMGPRLPMNKK4"))
    });
</script>

<script>
    console.warn("[.NET]", {}, "\nCall stack: Error\n    at MockConsole._handleCall (React.Core.Resources.shims.js:28:31)\n    at server.js:80210:13");
    ReactDOM.render(React.createElement(Components.CookiesPopup, {}), document.getElementById("react_0HMGPRLPMNKK3"));
    ReactDOM.render(React.createElement(Components.SaveSearchPopup, {
        "url": "/",
        "global": {
            "staticUrl": "https://staticsn.com",
            "starNowApiUrl": "https://api.starnow.com"
        },
        "session": {
            "guid": "568E7A16-7C4F-4B3D-8DE4-2FEECEB629CC",
            "skinUrl": "starnow.com",
            "trackOrigin": "",
            "trackSession": "",
            "member": {
                "memberID": 0,
                "name": ""
            }
        }
    }), document.getElementById("react_0HMGPRLPMNKK4"));
</script>




<script nonce="PZ5FkSIxZ7IrpwL0eTOueAx7b+r96M14">
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        '../connect.facebook.net/en_US/fbevents.js');

    fbq('set', 'autoConfig', 'false', '877372459094193');
    fbq('init', '877372459094193');
</script>
<div id="top-banner" class="animated-alert animated-alert--green animation--slide animated-alert--closed">
    <div class="animated-alert__text">
        <img src="../staticsn.com/images/icons/tick-circle-black.png" alt="" />
        <span id="top-banner__text"></span>
    </div>
</div>




<div id="outdated">
    <h6>Your browser version is outdated</h6>
    <p>Some site features may not work properly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
    <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
</div>

@endsection