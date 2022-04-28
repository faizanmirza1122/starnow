@extends('layouts.master')

@section('content')


<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object#">

    <link rel="preconnect" href="https://staticsn.com" crossorigin>
    <link rel="dns-prefetch" href="https://staticsn.com">

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://ajax.googleapis.com" crossorigin>



    <script defer src="https://staticsn.com/Scripts/vendor/outdatedbrowser.min.js"></script>
    <script defer>
        var bannerShown = false;
        var promiseUnsupported = !(typeof Promise !== "undefined" && Object.prototype.toString.call(Promise.resolve()) === '[object Promise]');
        //event listener form DOM ready
        function addLoadEvent(func) {

            function OnReadyListener() {
                if (!bannerShown && (document.readyState == "interactive" || document.readyState == "complete")) {
                    func();
                }
            }
            if (typeof window.onreadystatechange != 'function') {
                document.onreadystatechange = OnReadyListener;
            } else {
                var oldOnReadyStateChange = window.onreadystatechange;
                document.onreadystatechange = function() {
                    if (oldonload) {
                        oldOnReadyStateChange();
                    }
                    OnReadyListener();
                }
            }
        }

        //call function after DOM ready
        if (promiseUnsupported) {
            addLoadEvent(function() {
                if (typeof outdatedBrowser !== "undefined") {
                    outdatedBrowser({
                        bgColor: '#FD3C2E',
                        color: '#ffffff',
                        lowerThan: promiseUnsupported,
                        languagePath: ''
                    })
                    bannerShown = true;
                }
            });
        }
    </script>

    <link href="https://staticsn.com/_styles/all.css?v=EVb095nwuuMaVJr3GESXuU8e-x8bTuhQCYqa6d7Pbd81" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,900,300i,400i|Open+Sans+Condensed:300,300italic,700" rel="stylesheet">







    <title>Activity feed - Film Star Online</title>
    <meta name="description" content="Stay connected + get noticed.">
    <meta property="fb:app_id" content="192931954085724">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#7BC718">
    <link rel="manifest" href="/manifest.json">



    <link rel="canonical" href="https://www.starnow.com/feed/" />

    <link rel="alternate" href="https://www.starnow.co.uk/feed/" hreflang="en-GB" />
    <link rel="alternate" href="https://www.starnow.com.au/feed/" hreflang="en-AU" />
    <link rel="alternate" href="https://www.starnow.com/feed/" hreflang="en" />
    <link rel="alternate" href="https://www.starnow.com/feed/" hreflang="x-default" />
    <link rel="alternate" href="https://www.starnow.co.nz/feed/" hreflang="en-nz" />
    <link rel="alternate" href="https://www.starnow.ie/feed/" hreflang="en-IE" />
    <link rel="alternate" href="https://www.starnow.ca/feed/" hreflang="en-CA" />



    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@StarNow" />
    <meta name="twitter:title" content="Activity Feed" />
    <meta name="twitter:description" content="Stay connected + get noticed." />
    <meta name="twitter:image" content="https://staticsn.com/images/social/twitter/feed.jpg?v=1" />
    <meta property="og:site_name" content="StarNow" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Activity Feed" />
    <meta property="og:description" content="Stay connected + get noticed." />
    <meta property="og:url" content="https://www.starnow.com/feed/" />
    <meta property="og:image" content="https://staticsn.com/images/social/facebook/feed.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />






    <script nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh">
        (function(w, d, u) {
            w.readyQ = [];
            w.bindReadyQ = [];

            function p(x, y) {
                if (x == "ready") {
                    w.bindReadyQ.push(y);
                } else {
                    w.readyQ.push(x);
                }
            };
            var a = {
                ready: p,
                bind: p
            };
            w.$ = w.jQuery = function(f) {
                if (f === d || f === u) {
                    return a;
                } else {
                    p(f);
                }
            };
        })(window, document);

        window.starnow = {
            page: {},
            environment: "www",
            release: "1.0.0.0",
            memberId: 0,
            hasSignedInBefore: false,
            staticUrl: "https://staticsn.com",
            starNowApiUrl: "https://api.starnow.com",
            feedUrl: "https://feed.starnow.com",
            baseUrl: "https://www.starnow.com",
            currentURL: "/feed",
            sessionCookie: "C539A5D1-BE9C-4128-8089-2FC2E87CC68A",
            user: {
                memberLevel: {
                    id: 0,
                    label: "Trial",
                    canAddFeaturedImages: false
                },
                id: 0,
                anonymous: true,
                name: "Anonymous",
                firstName: "",
                memberType: "",
                stamp: 0,
                isPaidMember: false,
                isInTalentDirectory: false,
                applicationCount: 0,
                headshotUrl: "https://staticsn.com/images/register/no-headshot-25.png",
                profileUrl: "/0/",
                isPublic: false,
                isMinor: false,
                isEmailConfirmed: true
            }
        };
        window.starnow.emailRegex = /^^[\w!#$%&'*+\-=?^`{}|\/]+(?:\.[\w!#$%&'*+\-=?^`{}|\/]+)*@[\w!#$%&'*+\-=?^`{}|\/]+(?:\.[\w!#$%&'*+\-=?^`{}|\/]+)+$$/;

        starnow.apiToken = {}
    </script>


   
    <link href="https://staticsn.com/_styles/activity-feed.css?v=gN2Xj8kEREUA9dCpb0iYSEcIS0XormvNXvjUnVI4gOw1" rel="stylesheet" />






    <script nonce=fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-30091508-1', 'auto');
        ga('send', 'pageview');
    </script>



    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1051265680" nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh"></script>
    <script nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-1051265680');
    </script>




    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NCGCWXL");
    </script>
    <!-- End Google Tag Manager -->


</head>


    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCGCWXL" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->




    <div id="header-spacer"></div>


    <div class="af-help" id="help-section">
        <div class="row">
            <div class="small-12 columns">
                <div class="af-help__content">
                    <h1 class="af-help__title">Grow your network. Be seen. Get cast.</h1>
                    <p class="af-help__text">
                        Add photos, Like, and Follow to be seen by Casting Professionals and Industry Professionals.
                    </p>

                    <a class="button button--white button--outline txt-small txt-regular txt-body" href="/register/member/">
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="activity-feed-row" class="row collapse mt3">
        <div class="small-12 columns" id="photosDiv">
            <div id="activity-feed-root"></div>
        </div>
    </div>








    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es2015,es2016"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh">
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





    <script src="https://staticsn.com/_scripts/all.js?v=thVZE0_lcCkZjXnygKzH7i6gf1yVKWxWIkarfIMTM_Q1"></script>
    <script src="https://staticsn.com/_scripts/facebook.js?v=YDrH5w3AxJEUJ04547EFa6kF96TsBwnshDZK0IcK0J81"></script>
    <script src="https://staticsn.com/_scripts/cookiesPopup.js?v=F4bW1SwmCa09jJomDxbQsVMiSsdsEvElJgFj0cEw-Rc1"></script>
    <script src="https://staticsn.com/_scripts/saveSearchPopup.js?v=Z5usIolx5ke7sQ_3RirEF12204rcH24Zft-Q1kyjui01"></script>
    <script src="https://staticsn.com/_scripts/vendor.js?v=H75mSAhi0C-BDxUYEGhELxQ602S44uwAPdGPe_LULJU1"></script>


    <script nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh">
        activityFeedState = {
            feedUrl: "https://feed.starnow.com",
            memberId: 0,
            personaKey: "152_0_0"
        };
    </script>

    <script src="https://staticsn.com/_scripts/activityFeed.js?v=x0qPLfhFE8fBYFRvPcYWTJ1r8_bgcVUioXAolMyvwoQ1"></script>


    <script>
        $(function() {


            var headroom = new Headroom(document.getElementsByClassName("main-header")[0], {
                offset: 72
            });

            headroom.init();


            $("#header-spacer").css("height", $(".main-header").height());
        });
    </script>

    <script nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh">
        $(function() {
            // Stops the banner(s) from getting hidden by the header
            $("#header-spacer").css("height", $(".main-header").height());

            $(".js-close-help").on("click", function() {
                $("#help-section").addClass("hidden");

                Api.Request.post({
                    url: "/api2/profileoptionsapi/closeactivityfeedhelp",
                    processData: false,
                    contentType: false
                });
            });
        });
    </script>

    <script nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh">
        $(function() {
            starnow.initPageChrome();
        });
    </script>







    <script>
        (window.Components && Components.SaveSearchPopup) || document.write('<script type="text/javascript" src="/_scripts/saveSearchPopup.js?v=fallback' + Math.floor(Date.now() / 1000) + '">\x3C/script>')
    </script>
    <div id="react_0HMH04R4SQRF7"></div>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            ReactDOM.render(React.createElement(Components.SaveSearchPopup, {
                "url": "/feed/index",
                "global": {
                    "staticUrl": "https://staticsn.com",
                    "starNowApiUrl": "https://api.starnow.com"
                },
                "session": {
                    "guid": "C539A5D1-BE9C-4128-8089-2FC2E87CC68A",
                    "skinUrl": "starnow.com",
                    "trackOrigin": "untracked",
                    "trackSession": "untracked",
                    "member": {
                        "memberID": 0,
                        "name": ""
                    }
                }
            }), document.getElementById("react_0HMH04R4SQRF7"))
        });
    </script>

    <script>
        console.warn("[.NET]", {}, "\nCall stack: Error\n    at MockConsole._handleCall (React.Core.Resources.shims.js:28:31)\n    at server.js:80210:13");
        ReactDOM.render(React.createElement(Components.SaveSearchPopup, {
            "url": "/feed/index",
            "global": {
                "staticUrl": "https://staticsn.com",
                "starNowApiUrl": "https://api.starnow.com"
            },
            "session": {
                "guid": "C539A5D1-BE9C-4128-8089-2FC2E87CC68A",
                "skinUrl": "starnow.com",
                "trackOrigin": "untracked",
                "trackSession": "untracked",
                "member": {
                    "memberID": 0,
                    "name": ""
                }
            }
        }), document.getElementById("react_0HMH04R4SQRF7"));
    </script>




    <script nonce="fje8W0fH18gnVNbI4QUK4MXSfBxPYyFh">
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
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('set', 'autoConfig', 'false', '877372459094193');
        fbq('init', '877372459094193');
    </script>
    <div id="top-banner" class="animated-alert animated-alert--green animation--slide animated-alert--closed">
        <div class="animated-alert__text">
            <img src="https://staticsn.com/images/icons/tick-circle-black.png" alt="" />
            <span id="top-banner__text"></span>
        </div>
    </div>




    <div id="outdated">
        <h6>Your browser version is outdated</h6>
        <p>Some site features may not work properly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
        <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
    </div>

    @endsection