@extends('layouts.master')

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object#">

    <link rel="preconnect" href="https://staticsn.com" crossorigin>
    <link rel="dns-prefetch" href="https://staticsn.com">

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://ajax.googleapis.com" crossorigin>
    <link href="{{ asset('css/jobs.css') }}" rel="stylesheet" type="text/css" />



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


    <noscript id="deferred-styles">
        <link href="https://staticsn.com/_styles/all.css?v=EVb095nwuuMaVJr3GESXuU8e-x8bTuhQCYqa6d7Pbd81" rel="stylesheet" />


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,900,300i,400i|Open+Sans+Condensed:300,300italic,700" rel="stylesheet">
    </noscript>
    <script>
        var loadDeferredStyles = function() {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };

        document.addEventListener("DOMContentLoaded", loadDeferredStyles);
    </script>







    <title>Auditions, Jobs &amp; Casting Calls in Pakistan - StarNow</title>
    <meta name="description" content="All types of actors, models, dancers, musicians &amp; performers wanted from Pakistan. Also find jobs for photographers, film crew, makeup artists &amp; more! Jobs &amp; auditions listed daily!">
    <meta property="fb:app_id" content="192931954085724">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#7BC718">
    <link rel="manifest" href="/manifest.json">



    <link rel="canonical" href="https://www.starnow.com/casting-calls/all/pakistan" />

    <link rel="alternate" href="https://www.starnow.co.uk/casting-calls/all/pakistan" hreflang="en-GB" />
    <link rel="alternate" href="https://www.starnow.com.au/casting-calls/all/pakistan" hreflang="en-AU" />
    <link rel="alternate" href="https://www.starnow.com/casting-calls/all/pakistan" hreflang="en" />
    <link rel="alternate" href="https://www.starnow.com/casting-calls/all/pakistan" hreflang="x-default" />
    <link rel="alternate" href="https://www.starnow.co.nz/casting-calls/all/pakistan" hreflang="en-nz" />
    <link rel="alternate" href="https://www.starnow.ie/casting-calls/all/pakistan" hreflang="en-IE" />
    <link rel="alternate" href="https://www.starnow.ca/casting-calls/all/pakistan" hreflang="en-CA" />


    <link rel="next" href="https://www.starnow.com/casting-calls/all/pakistan?p=2" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@StarNow" />
    <meta name="twitter:title" content="Auditions, Jobs &amp; Casting Calls in Pakistan" />
    <meta name="twitter:description" content="All types of actors, models, dancers, musicians &amp; performers wanted from Pakistan. Also find jobs for photographers, film crew, makeup artists &amp; more! Jobs &amp; auditions listed daily!" />
    <meta name="twitter:image" content="https://staticsn.com/images/social/twitter/category0.jpg?v=1" />
    <meta property="og:site_name" content="StarNow" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Auditions, Jobs &amp; Casting Calls in Pakistan" />
    <meta property="og:description" content="All types of actors, models, dancers, musicians &amp; performers wanted from Pakistan. Also find jobs for photographers, film crew, makeup artists &amp; more! Jobs &amp; auditions listed daily!" />
    <meta property="og:url" content="https://www.starnow.com/casting-calls/all/pakistan" />
    <meta property="og:image" content="https://staticsn.com/images/social/facebook/category0.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />






    <script nonce="jEP4bD317r+3ff5vzdYOMsSqiJs41+yq">
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
            currentURL: "/casting-calls/all/pakistan/",
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


    <script nonce=jEP4bD317r+3ff5vzdYOMsSqiJs41+yq>
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



    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1051265680" nonce="jEP4bD317r+3ff5vzdYOMsSqiJs41+yq"></script>
    <script nonce="jEP4bD317r+3ff5vzdYOMsSqiJs41+yq">
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

@section('content')


    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCGCWXL" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

 <div class="row page-spacer">
        <div class="small-12 large-9 column">
            <div id="react_0HMH04R4SL1EI">
                <div>
                    <div class="flex flex-row justify-between items-start">
                        <h1 class="f2-ns">Auditions, Jobs &amp; Casting Calls in Pakistan</h1><a class="button f6 dn db-ns ml3" href="/Link.aspx?l=4780&amp;return_url=%2Fplacelisting" style="white-space:nowrap;min-width:120px">List a Job</a>
                    </div>
                    <div></div>
                    <div class="mb3">
                        <div class="categories-container">
                            <div class="accordion__content flex flex-wrap talent-directory-categories" style="height:auto"><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/acting-jobs/all/pakistan">Acting Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->57
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/extras-jobs/all/pakistan">Extras Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->8
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/model-jobs/all/pakistan">Modelling Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->18
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/influencer-jobs/all/pakistan">Influencer Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->18
                                        <!-- -->)
                                    </span>
                                    <div class="listing-pill listing-pill--blue" style="margin:2px 0px 0px 6px">BETA</div>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/presenter-jobs/all/pakistan">Presenter Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->5
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/music-jobs/all/pakistan">Music Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->58
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/photography-jobs/all/pakistan">Photography Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->2
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/tv-reality-jobs/all/pakistan">TV &amp; Reality Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->9
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/dance-jobs/all/pakistan">Dance Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->19
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/film-crew-jobs/all/pakistan">Film &amp; Stage Crew Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->13
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/mua-stylist-jobs/all/pakistan">Hair, Makeup &amp; Stylist Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->0
                                        <!-- -->)
                                    </span>
                                </a><a class="w-third-ns w-100 pa3 f7" href="/casting-calls/general-jobs/all/pakistan">Survival Jobs
                                    <!-- --> <span style="font-size:0.8rem" class="txt-black-50">(
                                        <!-- -->5
                                        <!-- -->)
                                    </span>
                                </a></div>
                        </div>
                    </div>
                    <div class="counter-grid-margins-l ">
                        <div class="bg-sky-blue-tint-3 row br2-l">
                            <div class="small-12 columns pt3 pb2 pr1">
                                <div class="filter-pill-container">
                                    <div class="filter-pill f8 pl3 mr2 mb2 auto_filter_location filter-pill--active">
                                        <p class="f8 txt-dark no-pointer-event filter-pill-text">
                                            <!-- -->Pakistan
                                        </p><svg class="filter-pill__chevron ml2 mr3 filter-pill__chevron--active" focusable="false" viewBox="0 0 11 6" aria-hidden="true" style="display:inline-block;fill:currentColor;height:24px;width:10px;user-select:none;pointer-events:none" width="10px">
                                            <path d="M1.0565088,0.0822897703 C1.14508756,0.0822897703 1.22344452,0.115280757 1.29158203,0.181263721 L5.30826812,4.07093998 L9.32495421,0.181263721 C9.39309172,0.115280757 9.47144868,0.0822897703 9.56002745,0.0822897703 C9.64860621,0.0822897703 9.72696317,0.115280757 9.79510068,0.181263721 L10.3061294,0.676133473 C10.374267,0.742116437 10.4083352,0.817995707 10.4083352,0.90377356 C10.4083352,0.989551412 10.374267,1.06543068 10.3061294,1.13141365 L5.54334135,5.74359974 C5.47520384,5.8095827 5.39684688,5.84257369 5.30826812,5.84257369 C5.21968936,5.84257369 5.1413324,5.8095827 5.07319489,5.74359974 L0.310406801,1.13141365 C0.242269292,1.06543068 0.208201048,0.989551412 0.208201048,0.90377356 C0.208201048,0.817995707 0.242269292,0.742116437 0.310406801,0.676133473 L0.821435566,0.181263721 C0.889573075,0.115280757 0.967930036,0.0822897703 1.0565088,0.0822897703 L1.0565088,0.0822897703 Z" fill-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="filter-pill f8 pl3 mr2 mb2 auto_filter_gender"><span class="filter__title f8 txt-dark no-pointer-event">Gender</span><svg class="filter-pill__chevron ml2 mr3" focusable="false" viewBox="0 0 11 6" aria-hidden="true" style="display:inline-block;fill:currentColor;height:24px;width:10px;user-select:none;pointer-events:none" width="10px">
                                            <path d="M1.0565088,0.0822897703 C1.14508756,0.0822897703 1.22344452,0.115280757 1.29158203,0.181263721 L5.30826812,4.07093998 L9.32495421,0.181263721 C9.39309172,0.115280757 9.47144868,0.0822897703 9.56002745,0.0822897703 C9.64860621,0.0822897703 9.72696317,0.115280757 9.79510068,0.181263721 L10.3061294,0.676133473 C10.374267,0.742116437 10.4083352,0.817995707 10.4083352,0.90377356 C10.4083352,0.989551412 10.374267,1.06543068 10.3061294,1.13141365 L5.54334135,5.74359974 C5.47520384,5.8095827 5.39684688,5.84257369 5.30826812,5.84257369 C5.21968936,5.84257369 5.1413324,5.8095827 5.07319489,5.74359974 L0.310406801,1.13141365 C0.242269292,1.06543068 0.208201048,0.989551412 0.208201048,0.90377356 C0.208201048,0.817995707 0.242269292,0.742116437 0.310406801,0.676133473 L0.821435566,0.181263721 C0.889573075,0.115280757 0.967930036,0.0822897703 1.0565088,0.0822897703 L1.0565088,0.0822897703 Z" fill-rule="evenodd"></path>
                                        </svg></div>
                                    <div class="filter-pill f8 pl3 mr2 mb2 auto_filter_age"><span class="filter__title f8 txt-dark no-pointer-event">Age</span><svg class="filter-pill__chevron ml2 mr3" focusable="false" viewBox="0 0 11 6" aria-hidden="true" style="display:inline-block;fill:currentColor;height:24px;width:10px;user-select:none;pointer-events:none" width="10px">
                                            <path d="M1.0565088,0.0822897703 C1.14508756,0.0822897703 1.22344452,0.115280757 1.29158203,0.181263721 L5.30826812,4.07093998 L9.32495421,0.181263721 C9.39309172,0.115280757 9.47144868,0.0822897703 9.56002745,0.0822897703 C9.64860621,0.0822897703 9.72696317,0.115280757 9.79510068,0.181263721 L10.3061294,0.676133473 C10.374267,0.742116437 10.4083352,0.817995707 10.4083352,0.90377356 C10.4083352,0.989551412 10.374267,1.06543068 10.3061294,1.13141365 L5.54334135,5.74359974 C5.47520384,5.8095827 5.39684688,5.84257369 5.30826812,5.84257369 C5.21968936,5.84257369 5.1413324,5.8095827 5.07319489,5.74359974 L0.310406801,1.13141365 C0.242269292,1.06543068 0.208201048,0.989551412 0.208201048,0.90377356 C0.208201048,0.817995707 0.242269292,0.742116437 0.310406801,0.676133473 L0.821435566,0.181263721 C0.889573075,0.115280757 0.967930036,0.0822897703 1.0565088,0.0822897703 L1.0565088,0.0822897703 Z" fill-rule="evenodd"></path>
                                        </svg></div>
                                    <div class="filter-pill f8 pl3 mr2 mb2 auto_filter_pay"><span class="filter__title f8 txt-dark no-pointer-event">Pay</span><svg class="filter-pill__chevron ml2 mr3" focusable="false" viewBox="0 0 11 6" aria-hidden="true" style="display:inline-block;fill:currentColor;height:24px;width:10px;user-select:none;pointer-events:none" width="10px">
                                            <path d="M1.0565088,0.0822897703 C1.14508756,0.0822897703 1.22344452,0.115280757 1.29158203,0.181263721 L5.30826812,4.07093998 L9.32495421,0.181263721 C9.39309172,0.115280757 9.47144868,0.0822897703 9.56002745,0.0822897703 C9.64860621,0.0822897703 9.72696317,0.115280757 9.79510068,0.181263721 L10.3061294,0.676133473 C10.374267,0.742116437 10.4083352,0.817995707 10.4083352,0.90377356 C10.4083352,0.989551412 10.374267,1.06543068 10.3061294,1.13141365 L5.54334135,5.74359974 C5.47520384,5.8095827 5.39684688,5.84257369 5.30826812,5.84257369 C5.21968936,5.84257369 5.1413324,5.8095827 5.07319489,5.74359974 L0.310406801,1.13141365 C0.242269292,1.06543068 0.208201048,0.989551412 0.208201048,0.90377356 C0.208201048,0.817995707 0.242269292,0.742116437 0.310406801,0.676133473 L0.821435566,0.181263721 C0.889573075,0.115280757 0.967930036,0.0822897703 1.0565088,0.0822897703 L1.0565088,0.0822897703 Z" fill-rule="evenodd"></path>
                                        </svg></div>
                                    <div class="filter-pill f8 pl3 mr2 mb2 auto_filter_keyword"><img class="" src="/images/icons/svg/magnifyingGlass.svg" width="18px" height="18px" style="display:inline-block;user-select:none;pointer-events:none" /><svg class="filter-pill__chevron ml2 mr3" focusable="false" viewBox="0 0 11 6" aria-hidden="true" style="display:inline-block;fill:currentColor;height:24px;width:10px;user-select:none;pointer-events:none" width="10px">
                                            <path d="M1.0565088,0.0822897703 C1.14508756,0.0822897703 1.22344452,0.115280757 1.29158203,0.181263721 L5.30826812,4.07093998 L9.32495421,0.181263721 C9.39309172,0.115280757 9.47144868,0.0822897703 9.56002745,0.0822897703 C9.64860621,0.0822897703 9.72696317,0.115280757 9.79510068,0.181263721 L10.3061294,0.676133473 C10.374267,0.742116437 10.4083352,0.817995707 10.4083352,0.90377356 C10.4083352,0.989551412 10.374267,1.06543068 10.3061294,1.13141365 L5.54334135,5.74359974 C5.47520384,5.8095827 5.39684688,5.84257369 5.30826812,5.84257369 C5.21968936,5.84257369 5.1413324,5.8095827 5.07319489,5.74359974 L0.310406801,1.13141365 C0.242269292,1.06543068 0.208201048,0.989551412 0.208201048,0.90377356 C0.208201048,0.817995707 0.242269292,0.742116437 0.310406801,0.676133473 L0.821435566,0.181263721 C0.889573075,0.115280757 0.967930036,0.0822897703 1.0565088,0.0822897703 L1.0565088,0.0822897703 Z" fill-rule="evenodd"></path>
                                        </svg></div>
                                    <div class="filter-pill-reset f8 ph3 mr2 mb2 auto_filter_reset"><span class="filter__title txt-dark">Reset</span></div>
                                    <div class="mv1 w-100">
                                        <div class="flag"><label for="react-jobs-from" class="flag__image"><input type="checkbox" checked="" class="option-toggle option-toggle--small" value="true" id="react-jobs-from" readonly="" /><label for="react-jobs-from"></label></label><label class="flag__body"><label for="react-jobs-from" class="option-toggle__label pointer">Include jobs where I can work from home or seek worldwide applications</label></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><a target="_self" class="button pl2 f6 w-100 w-auto-ns mt3"><span class="tippy-wrapper" tabindex="-1"><span class="flex items-center justify-center"><svg class="animation--bell-ring pl1" focusable="false" viewBox="0 0 25 25" aria-hidden="true" style="display:block;fill:currentColor;height:20px;width:20px;user-select:none;pointer-events:initial" height="20px" width="20px">
                                    <path d="M12 24c-.9 0-1.6-.3-2.2-.9-.6-.5-1-1.3-1-2.1h6.3c0 .8-.3 1.6-.9 2.1-.6.6-1.3.9-2.2.9zm10.6-7c.3.3.4.6.4 1s-.1.8-.4 1c-.3.4-.7.5-1.2.5H2.6A1.5 1.5 0 011 18c0-.4.1-.7.4-1l.2-.2c.7-.8 1.3-1.5 1.7-2.2.5-1.3.8-2.9.8-4.8A7 7 0 016 5a7.7 7.7 0 014.5-2.5v-1c0-.4.2-.8.5-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1.1.4.3.3.5.7.5 1.1v1c1.8.3 3.3 1.2 4.5 2.5a7 7 0 011.8 4.6v.2c0 2 .3 3.5.8 4.8.4.7 1 1.4 1.7 2.2l.2.2z" fill-rule="nonzero"></path>
                                </svg><span class="ml1">Create Job Alert</span></span></span></a>
                    <div class="flex flex-row justify-between mv3">
                        <p class="ml2-ns mt1 mt2-ns txt-black-60 f7"><strong>194</strong> <!-- -->jobs</p><select class="select-clean no-border f8-ns" style="max-width:220px">
                            <option value="f">Enhanced first</option>
                            <option selected="" value="p">Most popular</option>
                            <option value="n">Latest listings</option>
                            <option value="r">Best match</option>
                        </select>
                    </div>
                    <div class="section bg-white pa0 subtract-gird-margins-nl relative" style="overflow:visible">
                        @forelse ($jobs as $job)  
                        <ul class="ma0 pa0">
                            <li class="listing-card" id="listing_1172143">
                                <div class="listing-card__pills">
                                    <div class="listing-card__pills-spacer">
                                        <div class="listing-pill listing-pill--paid"> Paid </div>
                                    </div>
                                </div>
                                <div class="listing-card__watchlist auto_listing_watchlist_add">
                                    <div class="watchlist"></div>
                                </div>
                                <div class="listing-card__body">
                                    <h3 class="listing-card__heading"><a href="/listing/1172143/curve-brawn-model-search-2022-men-women/" target="_blank" class="listing-card__title auto_listing_title nounder" itemProp="title">{{ $job->title }}</a></h3>
                                    <div class="clearfix f8"><a href="/listing/1172143/curve-brawn-model-search-2022-men-women/" title="Curve + Brawn Model Search 2022 – Men &amp; Women" target="_blank" class="listing-card__photo mt1"><img src="https://snusercontent.global.ssl.fastly.net/listing-photo-small/359943.jpg" alt="Curve + Brawn Model Search 2022 – Men &amp; Women" /></a>{{ $job->description }}

                                        This is your…<a href="/listing/1172143/curve-brawn-model-search-2022-men-women/" target="_blank"> more</a>
                                        <div>
                                            <div class="listing-card__info">
                                                <div class="listing-card__info__img"><img src="https://staticsn.com/images/icons/svg/role_small_grey.svg" width="13" height="13" alt="Role" /></div>
                                                <div class="listing-card__info__text">Multiple roles</div>
                                            </div>
                                            <div class="listing-card__info">
                                                <div class="listing-card__info__img"><img src="https://staticsn.com/images/icons/svg/location_small_grey.svg" width="13" height="13" alt="Location" /></div>
                                                <div class="listing-card__info__text">Job can be done from home worldwide</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @empty
                            <h1>no data found</h1>
                        @endforelse
                        <div class="mh3 mv4">
                            <ul class="paging">
                                <li class="paging__item active"><a class="paging__link undefined" href="?p=1">1</a></li>
                                <li class="paging__item"><a class="paging__link" href="?p=2">2</a></li>
                                <li class="paging__item"><a class="paging__link" href="?p=3">3</a></li>
                                <li class="paging__item"><a class="paging__link" href="?p=4">4</a></li>
                                <li class="paging__item"><a class="paging__link" href="?p=5">5</a></li>
                                <li class="paging__item paging__button paging__button--next paging__button--only-item"><a class="paging__link" href="#">Next</a></li>
                                <li class="paging__item dn"><a class="paging__link" href="#">»</a></li>
                            </ul>
                        </div>
                        <div class="job-alert__container"><svg class="job-alert__icon" focusable="false" viewBox="0 0 69 50" aria-hidden="true" style="display:block;fill:currentColor;height:3rem;width:4.25rem;user-select:none;pointer-events:initial" height="3rem" width="4.25rem">
                                <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(0 2)">
                                        <path d="M28.5 34c-1 0-2.2-.4-3.6-1.3l-3.4-2.4-1.1-.8A1066 1066 0 0 1 1.8 16l-.8-.6c-.7-.5-1-1.2-1-2v-2.2a5 5 0 0 1 1.6-3.7c1-1 2.3-1.5 3.7-1.5h46.4c1.4 0 2.7.5 3.7 1.5a5 5 0 0 1 1.6 3.8v2c0 .9-.3 1.6-1 2.1l-.6.4c-3.2 2.5-9.4 7-18.8 13.7l-1 .8c-1.6 1.1-2.7 2-3.5 2.4a7.2 7.2 0 0 1-3.6 1.3z" fill="#1CB9CE" fill-rule="nonzero"></path>
                                        <path d="M55.9 19.7c.2-.3.5-.3.7-.2.3.2.4.4.4.7v22.5a5 5 0 0 1-1.6 3.8c-1 1-2.3 1.5-3.7 1.5H5.3c-1.4 0-2.7-.5-3.7-1.5A5 5 0 0 1 0 42.7V20.2c0-.3.1-.5.4-.6H1l17.2 12.5 1 1 4.3 2.9c1.8 1 3.4 1.4 4.9 1.4a10 10 0 0 0 4.9-1.5c1.1-.6 2.5-1.6 4.2-2.9l1.1-.9C47.5 26 53.2 21.7 56 19.7z" fill="#19A1B3"></path>
                                        <circle stroke="#FFF" stroke-width="3" fill="#FF0001" cx="53.5" cy="13.5" r="13.5"></circle>
                                    </g>
                                    <path d="M58.7 18c.2.3.3.6.3 1l-.3.9a1 1 0 0 1-.9.4h-2.7c0 .4-.2.9-.5 1.2-.3.3-.7.5-1.1.5-.4 0-.8-.2-1.1-.5-.3-.3-.5-.8-.5-1.3h-2.7a1 1 0 0 1-.9-.3c-.2-.3-.3-.6-.3-1 0-.3.1-.6.4-.9l.5-.7.5-1.3.2-2.3c0-.7.1-1.4.4-2 .3-.6.7-1.1 1.2-1.6.5-.4 1-.6 1.7-.7a.9.9 0 0 1-.2-.5c0-.3 0-.5.2-.6a.7.7 0 0 1 1.2 0l.2.6c0 .2 0 .3-.2.5.7 0 1.2.3 1.7.7a4.7 4.7 0 0 1 1.6 3.5c0 1 0 1.8.2 2.4l.5 1.3.6.7zm-5.9 2.6c-.1 0-.2 0-.3-.2a.6.6 0 0 1-.2-.4H52c0 .3 0 .5.2.7l.6.3h.1l.1-.2v-.1l-.2-.1z" fill="#FFF"></path>
                                </g>
                            </svg>
                            <h2 class="f6">Be the first to see new jobs</h2>
                            <p class="txt-center mb3">Email me jobs matching this search</p>
                            <form action="#" class="w-50-ns mh-auto mb1"><input type="email" name="email" value="" maxLength="50" class="input-clean job-alert__input mb2" placeholder="Enter your email" /><a target="_self" class="button job-alert__input f6 flex items-center justify-center"><span>Create job alert</span></a></form>
                            <p class="f9 txt-center mh-auto mt2 mb0">You can cancel emails at any time. By clicking &quot;Create job alert&quot; you agree to our <a href="/terms-and-conditions/">terms &amp; conditions</a>.</p>
                        </div>
                        <div class="bg-white flex justify-center pv5-ns pa3"><a class="button f6 w-100 w-auto-ns" href="/Link.aspx?l=4780&amp;return_url=%2Fplacelisting" style="white-space:nowrap;min-width:120px">List an Audition or Job - free</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dn db-l large-3 column">

            <script nonce="jEP4bD317r+3ff5vzdYOMsSqiJs41+yq">
                function bannerClick(id) {
                    if (ga) {
                        ga('send', 'event', {
                            'eventCategory': 'banner',
                            'eventAction': 'click',
                            'eventLabel': id
                        });
                    }
                    return true;
                }
            </script>
            <aside class="banner">


                <div class="xfb-page" data-href="https://www.facebook.com/starnow" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                </div>

            </aside>



        </div>
    </div>

    <div style="display:none" id="becomeAModel" class="modelling__jobs-footer flex items-center modelling__hero__bg bg--become-a-model relative">
        <div class="row modelling__jobs-footer__text">
            <div class="small-12 columns">

                <h1 class="w-70 w-60-ns txt-white mb4">How do I become a model<span class="modelling-hero-location"></span>?</h1>
                <p class="w-70 w-60-ns txt-white mb4">
                    We're seeing a trend towards more diversity in casting, which means there are plenty of modelling opportunities for a wide range of people who may want to give modelling<span class="modelling-hero-location"></span> a go. Find out more about what it takes to become a model and book jobs<span class="modelling-hero-location"></span>.
                </p>
                <a href="/models/how-to-become-a-model" class="button w-100 w-auto-ns">Learn how to become a model</a>
            </div>
        </div>
        <div class="w-40 modelling__jobs-footer__image hero__image--model"></div>
    </div>

    <div style="display:none" id="whatsAnAgency" class="modelling__jobs-footer flex items-center modelling__hero__bg bg--modelling-agencies relative">
        <div class="row modelling__jobs-footer__text">
            <div class="small-12 columns">

                <h1 class="w-70 w-60-ns txt-white mb4">What's a modelling agency?</h1>
                <p class="w-70 w-60-ns txt-white mb4">
                    A modelling agency is a business that represents models and finds them work. Find out how modelling agencies can help you find jobs and negotiate a fee, and what your agency will expect from you in return. A great agent can really help your career, so read our guide to be in the know on how modelling agencies can work for you.
                </p>
                <a href="/models/modelling-agencies" class="button w-100 w-auto-ns">Learn about modelling agencies</a>

            </div>
        </div>
        <div class="w-40 modelling__jobs-footer__image hero__image--agency"></div>
    </div>





    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es2015,es2016"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script nonce="jEP4bD317r+3ff5vzdYOMsSqiJs41+yq">
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
    <script src="https://staticsn.com/_scripts/castingCalls.js?v=1de9Wez5a40vFk_l9VJ6LiapG-K-JvPpuGC6O87RSeI1"></script>
    <script src="https://staticsn.com/_scripts/cookiesPopup.js?v=F4bW1SwmCa09jJomDxbQsVMiSsdsEvElJgFj0cEw-Rc1"></script>
    <script src="https://staticsn.com/_scripts/saveSearchPopup.js?v=Z5usIolx5ke7sQ_3RirEF12204rcH24Zft-Q1kyjui01"></script>
    <script src="https://staticsn.com/_scripts/vendor.js?v=H75mSAhi0C-BDxUYEGhELxQ602S44uwAPdGPe_LULJU1"></script>


    <script nonce="jEP4bD317r+3ff5vzdYOMsSqiJs41+yq">
        $(function() {
            starnow.initPageChrome();
        });
    </script>







    <script>
        (window.Components && Components.SaveSearchPopup) || document.write('<script type="text/javascript" src="/_scripts/saveSearchPopup.js?v=fallback' + Math.floor(Date.now() / 1000) + '">\x3C/script>')
    </script>
    <div id="react_0HMH04R4SL1EJ"></div>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            ReactDOM.render(React.createElement(Components.SaveSearchPopup, {
                "url": "/casting-calls/all/pakistan/",
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
            }), document.getElementById("react_0HMH04R4SL1EJ"))
        });
    </script>

    <script>
        console.warn("[.NET]", {}, "\nCall stack: Error\n    at MockConsole._handleCall (React.Core.Resources.shims.js:28:31)\n    at server.js:80210:13");
        ReactDOM.hydrate(React.createElement(CastingCalls.default, {
            "starnow": {
                "page": {},
                "environment": "www",
                "release": "1.0.0.0",
                "memberId": 0,
                "hasSignedInBefore": false,
                "staticUrl": "https://staticsn.com",
                "starNowApiUrl": "https://api.starnow.com",
                "feedUrl": "https://feed.starnow.com",
                "baseUrl": "https://www.starnow.com",
                "currentURL": "/casting-calls/all/pakistan/",
                "sessionCookie": "C539A5D1-BE9C-4128-8089-2FC2E87CC68A",
                "user": {
                    "memberLevel": {
                        "id": 0,
                        "label": "Trial",
                        "canAddFeaturedImages": false
                    },
                    "id": 0,
                    "anonymous": true,
                    "name": "Anonymous",
                    "firstName": "",
                    "memberType": "",
                    "stamp": 0,
                    "isPaidMember": false,
                    "isInTalentDirectory": false,
                    "applicationCount": 0,
                    "headshotUrl": "https://staticsn.com/images/register/no-headshot-25.png",
                    "profileUrl": "/0/",
                    "isPublic": false,
                    "isMinor": false,
                    "isEmailConfirmed": true
                }
            },
            "breadcrumbs": {
                "Breadcrumbs": [{
                    "Title": "Auditions \u0026 Jobs",
                    "Url": "/casting-calls/all/pakistan/"
                }, {
                    "Title": "All Categories",
                    "Url": null
                }],
                "Separator": "\u003cspan class=\u0022separator\u0022\u003e\u0026gt;\u003c/span\u003e"
            },
            "listings": [{
                "RoleText": "Multiple roles",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1172143/curve-brawn-model-search-2022-men-women/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/359943.jpg",
                "Categories": [{
                    "Name": "Other Model wanted",
                    "Path": "/casting-calls/model-jobs/other/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Curve + Brawn Model Search 2022 – Men \u0026 Women",
                "BodySnippet": "We’re back for another year searching the globe for fresh talent to take the curve and brawn modelling worlds by storm!\n\nThis is your chance to get scouted and kick-start your modelling career with two of the top curve model agencies in the world – MILK Management (UK) and Vivien’s Model Management (AU).\n\nOur agencies are looking for confident curvy women an",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": true,
                "ListingID": 1172143,
                "PaymentType": 14,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-03-20T19:59:37.367Z",
                "ValidThrough": "2022-04-24T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1177322/actors-pulse-scholarship-term-3-2022/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/343774.jpg",
                "Categories": [{
                    "Name": "Feature Film",
                    "Path": "/casting-calls/acting-jobs/feature-film/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "The Actors Pulse Scholarship - Term 3 2022",
                "BodySnippet": "ATTENTION ALL ASPIRING ACTORS\n\nAre you seeking a career in Film \u0026 TV? If so, The Actors Pulse is excited to offer all aspiring actors, aged 18+ the amazing opportunity to audition for The Actors Pulse Scholarship Term 2 2022.\n\nOur Scholarship is a rare and exciting incentive to offer 1 lucky actor the chance to have an in depth look and opportunity to study ",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": true,
                "ListingID": 1177322,
                "PaymentType": 13,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-04-04T09:09:24.893Z",
                "ValidThrough": "2022-05-25T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1179181/tiktok-influencer-talent-search-nomis-talent/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/363174.jpg",
                "Categories": [{
                    "Name": "Influencer",
                    "Path": "/casting-calls/influencer-jobs/all/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "TikTok Influencer Talent Search With Nomis Talent",
                "BodySnippet": "Welcome to Nomis Talent. We’re a global influencer talent management company based in Scotland, UK that provides exclusive representation to selected worldwide content creators.\n\nWe have a duty of care for everyone invloved, the brands we work with, our talent and their audience. Our representation gives that buffer of due diligence, from AD disclosure to pr",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": true,
                "ListingID": 1179181,
                "PaymentType": 14,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-04-13T15:46:52.283Z",
                "ValidThrough": "2022-05-13T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 21 to 60",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/399150/piano-violin-duos-cruise-ship-contracts-worldwide/",
                "LocationText": "UK. Apply worldwide.",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/49223.jpg",
                "Categories": [{
                    "Name": "Other Musician wanted",
                    "Path": "/casting-calls/music-jobs/other/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Piano/Violin Duos for Cruise Ship Contracts - Worldwide",
                "BodySnippet": "We are looking for piano/violin duos for high-end cruise ship contracts.\r\n\r\nPresentation must be excellent.\r\n\r\nLocation: Worldwide\r\n\r\nSalary: Excellent for the right duos\r\n\r\nThe duo will need to share a cabin with each other\r\n\r\nPerformance: Up to 4 sets/night as a duo\r\n\r\nContract length: generally 3-6 months, depending on ship location and itinerary\r\n\r\nDemo ",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 399150,
                "PaymentType": 14,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2012-11-02T23:58:04.023Z",
                "ValidThrough": "2022-09-23T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": false
            }, {
                "RoleText": "Females, aged 20 to 45",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/664864/experienced-professional-harpists-required-cruise-ship-contracts/",
                "LocationText": "UK. Apply worldwide.",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/49223.jpg",
                "Categories": [{
                    "Name": "Other Musician wanted",
                    "Path": "/casting-calls/music-jobs/other/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Experienced Professional Harpists Required for Cruise Ship Contracts",
                "BodySnippet": "We are looking for professional and experienced Harpists for worldwide cruise ship contracts.\r\nContracts of varying lengths.\r\nWould be an advantage if have worked on ships before.\r\nMust have an extensive play list with varying styles suited to various lounges playing in the background and other events throughout the cruise. \r\nExperience preferred and would b",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 664864,
                "PaymentType": 14,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2015-04-10T20:46:19.79Z",
                "ValidThrough": "2022-03-27T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": false
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1005666/graphical-designer-required-art-fashion-magazine-collaboration/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/264887.jpg",
                "Categories": [{
                    "Name": "Events \u0026 Promotions",
                    "Path": "/casting-calls/acting-jobs/events/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Graphical Designer is Required for Art Fashion Magazine Collaboration",
                "BodySnippet": "We are looking for the Graphical Design (last year/diploma) Students who would love to have a real experience with our art, fashion and entertainment print magazine for their portfolio development. We are not for profit magazine and all our magazine crew work as volunteers and so we do. There is no money exchange of any kind at any stage. We love our work an",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1005666,
                "PaymentType": 0,
                "IsPaid": false,
                "IsContra": false,
                "DatePosted": "2019-05-05T20:40:03.06Z",
                "ValidThrough": "2022-09-06T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1178128/several-actors-required-online-and-radio-commercials-260/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/362487.jpg",
                "Categories": [{
                    "Name": "Web",
                    "Path": "/casting-calls/acting-jobs/web/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Several Actors Required for Online and Radio Commercials - £260",
                "BodySnippet": "We require several actors to feature in radio adverts and online productions as part of a marketing campaign.\nNo previous experience necessary, just an enthusiastic and professional approach.\n\nYou will be provided with a script depicting a couple discussing the prospects and pitfalls of marriage. Full guidance provided.\n\nTime required: 2 hours",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1178128,
                "PaymentType": 12,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-04-07T20:30:04.337Z",
                "ValidThrough": "2022-05-30T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1174149/v-o-actors-american-british-accents-required-ongoing-fiction-roles/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": "TBC",
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/359781.jpg",
                "Categories": [{
                    "Name": "Voiceover \u0026 Radio",
                    "Path": "/casting-calls/acting-jobs/voiceover/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "V/O Actors With American/British Accents Required Ongoing Fiction Roles",
                "BodySnippet": "We are looking for VoiceOver artists to take part in ongoing/upcoming productions.\n\nWe are looking for American or British voiceover artists/convincing accents for our upcoming projects in fiction. WFH accepted.\n\nOur company has a range of genres including romance, sci-fiction, adventure, fantasy, horror etc.",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1174149,
                "PaymentType": 13,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-03-16T23:03:17.383Z",
                "ValidThrough": "2022-07-15T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Multiple roles",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1150908/casting-banished-actors-required/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": "Shooting will be in 2022 in L.A. ",
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/344735.jpg",
                "Categories": [{
                    "Name": "TV Series",
                    "Path": "/casting-calls/acting-jobs/tv-series/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Casting \u0022Banished\u0022 (Actors Required)",
                "BodySnippet": "Casting \u0022Banished\u0022, a mystical series about demons, banished into the modern human world, which they will have to learn to return home.\n\nCategory: SCRIPTED TV \u0026 VIDEO.\n\nNo participation fees are required. Travel and meals covered.\nProduction states: \u0022The amount paid depends on the hours of shooting, the role you play, and your experience, that\u0027s why your amo",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1150908,
                "PaymentType": 13,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2021-11-02T20:47:05.857Z",
                "ValidThrough": "2022-05-07T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Multiple roles",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1075537/two-actresses-required-help-produce-and-star-stageplay-wilma-rena/",
                "LocationText": "UK. Apply worldwide.",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/301182.jpg",
                "Categories": [{
                    "Name": "Theatre \u0026 Musicals",
                    "Path": "/casting-calls/acting-jobs/theatre/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Two Actresses Required to help Produce and Star in Stageplay Wilma \u0026 Rena",
                "BodySnippet": "\u0022Wilma and Rena\u0022 is romcom stageplay. \n\nI am looking for two actresses to both star in and help in the production of this debut* play.  \n\nThis can be produced in your locality or where you believe is best. \n\nAfter applying, the first act is linked in the associated website\n\n* = My main experience is as the YouTuber \u0027Ben Vaserlan\u0027 [that is part of my long You",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1075537,
                "PaymentType": 0,
                "IsPaid": false,
                "IsContra": false,
                "DatePosted": "2020-06-11T21:54:46.563Z",
                "ValidThrough": "2022-06-27T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": false
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1176923/voice-actors-amazing-voice-characters-we-want-your-talent-1500/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/349076.jpg",
                "Categories": [{
                    "Name": "Voiceover \u0026 Radio",
                    "Path": "/casting-calls/acting-jobs/voiceover/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Voice Actors with Amazing Voice Characters - We Want Your Talent - $1500",
                "BodySnippet": "If you’re a professional and established voice actor with a strong character reel. Who owns or has access to high-end recording resources… Keep reading!\n\nWe license your recordings for 12 months (no perpetuity buyouts) then renew your license for ongoing use.\n\nAbility to record lines as written - a must. \n\nSo is your ability to hold character and convey stro",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1176923,
                "PaymentType": 12,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-04-01T05:19:16.38Z",
                "ValidThrough": "2022-07-31T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1178125/presenter-required-marketing-video-half-day-375/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/362518.jpg",
                "Categories": [{
                    "Name": "Other Presenter",
                    "Path": "/casting-calls/presenter-jobs/other/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Presenter Required for Marketing Video - Half Day £375",
                "BodySnippet": "We\u0027re looking for a presenter to shoot a marketing video to be uploaded onto our website.\nYou will be provided with a full script and guidance to record the video from home.\n\nYou will be required to confidently present to the camera (with the recording made on a smartphone or other home device - no specialist equipment necessary).",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1178125,
                "PaymentType": 12,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-04-07T20:27:13.82Z",
                "ValidThrough": "2022-05-30T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1177199/actors-required-newcastle-and-online-feature-film/",
                "LocationText": "New South Wales, Australia. Apply worldwide.",
                "RehearsalText": "Production: July / August / September 2022. Exact dates pending.",
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-large/361884.jpg",
                "Categories": [{
                    "Name": "Feature Film",
                    "Path": "/casting-calls/acting-jobs/feature-film/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Actors Required in Newcastle (and online) for Feature Film",
                "BodySnippet": "The 4th feature film of writer/director Stuart McBratney, ‘Long Thought Lost’, will go into production in the 2nd half of 2022. The shoot will be on location in Newcastle, Australia, though a few sequences require actors from around the world to film short clips on phones. We’re looking for experienced professional actors for a variety of roles, so please in",
                "IsEnhanced": true,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1177199,
                "PaymentType": 13,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-04-03T05:40:58.803Z",
                "ValidThrough": "2022-07-01T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": false
            }, {
                "RoleText": "Multiple roles",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1172892/actors-required-feature-film-steal-away/",
                "LocationText": "USA. Apply worldwide.",
                "RehearsalText": null,
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/348635.jpg",
                "Categories": [{
                    "Name": "Feature Film",
                    "Path": "/casting-calls/acting-jobs/feature-film/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Actors Required for Feature Film - \u0027Steal Away\u0027",
                "BodySnippet": "Based on Andrew Ward’s epic Dark Midnight When I Rise, Steal Away is the legendary true story of the Ella Sheppard and the Fisk Jubilee Singers, a warrior choir of young former slaves fighting the KKK’s reign of terror against their schools, not with bullets or bombs but electrifying songs of faith and freedom.  \n\nSteal Away follows the choir’s titanic rise ",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1172892,
                "PaymentType": 13,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2022-03-10T02:29:50.827Z",
                "ValidThrough": "2022-05-17T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": false
            }, {
                "RoleText": "Multiple roles",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1133101/multitalented-performers-needed-festive-season-maldives/",
                "LocationText": "UK. Apply worldwide.",
                "RehearsalText": "TBA",
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/275646.jpg",
                "Categories": [{
                    "Name": "Dancer",
                    "Path": "/casting-calls/dance-jobs/dancers/pakistan/"
                }, {
                    "Name": "Other Musician wanted",
                    "Path": "/casting-calls/music-jobs/other/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "Multitalented Performers Needed for Festive Season in Maldives",
                "BodySnippet": "Searching for charismatic multi-talented artistes/dancers with at least 2+ skills for extended period over the festive season in Maldives - Asia.\n\nThe period may be around the length of 18 days in paradise for the chosen around the end of year.\n\nThe setup will be for charismatic, confident performers who can either have circus skills, sing, dance, aerial, pl",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1133101,
                "PaymentType": 13,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2021-06-29T10:25:29.18Z",
                "ValidThrough": "2022-05-02T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": false
            }, {
                "RoleText": "Females, aged 18 and over",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1120643/we-require-video-presenters-youtube-series-between-18-25/",
                "LocationText": "Job can be done from home worldwide",
                "RehearsalText": "March 30th",
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/1005.jpg",
                "Categories": [{
                    "Name": "Other Presenter",
                    "Path": "/casting-calls/presenter-jobs/other/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "We Require Video Presenters for a YouTube Series Between 18-25",
                "BodySnippet": "We require video presenters for an online video series between the ages of 18-25, please apply with resume and recent photos. Experience not essential as training will be provided, fluency in English preferred.",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1120643,
                "PaymentType": 10,
                "IsPaid": true,
                "IsContra": false,
                "DatePosted": "2021-04-21T22:09:45.803Z",
                "ValidThrough": "2022-04-30T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": true
            }, {
                "RoleText": "Anyone, aged 18 to 55",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1164498/top-model-2022-model-search-awards-fashion-event/",
                "LocationText": "London, UK. Apply worldwide.",
                "RehearsalText": "Short listed applicants will be contacted through their Star Now account and will need to complete an official Application Form through the Top Model website. Suitable applicants will then be contacted in writing by email and asked to either submit a follow-up Audition Video or Photographs, or will be invited to meet the Selection Panel. WE DO-NOT TELEPHONE APPLICANTS. Beware of scams and always check your Junk/Spam folders.",
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/318068.jpg",
                "Categories": [{
                    "Name": "Competitions \u0026 Pageants",
                    "Path": "/casting-calls/model-jobs/pageants/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "Title": "TOP MODEL 2022 Model Search Awards \u0026 Fashion Event",
                "BodySnippet": "APPLY NOW!\n\nHave YOU \u0022Got What It Takes\u0022 to become part of the global Top Model Family and experience the famous TOP MODEL runway during London Fashion Week in September 2022?\n\nYou could be transformed by top stylists and make-up artists... be coached by leading industry professionals... work with international designers... and all while having the chance of",
                "IsEnhanced": false,
                "IsClosingSoon": false,
                "IsStaffPick": false,
                "ListingID": 1164498,
                "PaymentType": 0,
                "IsPaid": false,
                "IsContra": false,
                "DatePosted": "2022-01-23T02:57:52.427Z",
                "ValidThrough": "2022-04-30T23:59:59Z",
                "IsWatchlisted": false,
                "UserHasApplied": false,
                "IsRemote": false
            }, {
                "RoleText": "Anyone, aged 21 to 65",
                "IsFreeToApply": false,
                "IsHighlighted": false,
                "ListingURL": "/listing/1078111/piano-vocal-entertainers-required-london-venues-cruise-ships/",
                "LocationText": "London, UK. Apply worldwide.",
                "RehearsalText": "Please apply now for auditions or more information.",
                "IsPriorityAccess": false,
                "ImagePath": "https://snusercontent.global.ssl.fastly.net/listing-photo-small/49223.jpg",
                "Categories": [{
                    "Name": "Keyboard",
                    "Path": "/casting-calls/music-jobs/keyboards/pakistan/"
                }],
                "ListingDisplayType": {
                    "IsWatchlistEntry": false,
                    "MatchingCastingCallType": null,
                    "ShowWatchlistButton": true,
                    "ShowHideButton": false,
                    "ShowDeleteButton": false
                },
                "CategoryFilterLookup": {
                    "0": [1, 2, 98, 3, 4, 97, 90, 92, 91],
                    "10": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "131": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "8": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "12": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "45": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "46": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "47": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "48": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "49": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "55": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "101": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "103": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "54": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "80": [1, 2, 97, 90, 91, 92, 98],
                    "7": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "20": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "21": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "58": [1, 2, 97, 90, 91, 92, 98],
                    "112": [1, 2, 97, 90, 91, 92, 98],
                    "115": [1, 2, 97, 90, 91, 92, 98],
                    "113": [1, 2, 97, 90, 91, 92, 98],
                    "117": [1, 2, 97, 90, 91, 92, 98],
                    "81": [1, 2, 97, 90, 91, 92, 98],
                    "114": [1, 2, 97, 90, 91, 92, 98],
                    "116": [1, 2, 97, 90, 91, 92, 98],
                    "146": [1, 2, 97, 90, 91, 92, 98],
                    "107": [1, 2, 97, 90, 91, 92, 98],
                    "110": [1, 2, 97, 90, 91, 92, 98],
                    "108": [1, 2, 97, 90, 91, 92, 98],
                    "109": [1, 2, 97, 90, 91, 92, 98],
                    "1": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "147": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "148": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "149": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "150": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "151": [1, 2, 3, 4, 97, 90, 91, 92, 98],
                    "152": [1, 2, 97, 90, 91, 92, 98],
                    "153": [1, 2, 97, 90, 91, 92, 98],
                    "154": [1, 2, 97, 90, 91, 92, 98],
                    "155": [1, 2, 97, 90, 91, 92, 98],
                    "156": [1, 2, 97, 90, 91, 92, 98],
                    "157": [1, 2, 97, 90, 91, 92, 98],
                    "158": [1, 2, 97, 90, 91, 92, 98],
                    "159": [1, 2, 97, 90, 91, 92, 98],
                    "160": [1, 2, 97, 90, 91, 92, 98],
                    "161": [1, 2, 97, 90, 91, 92, 98],
                    "162": [1, 2, 97, 90, 91, 92, 98],
                    "163": [1, 2, 97, 90, 91, 92, 98],
                    "164": [1, 2, 97, 90, 91, 92, 98],
                    "130": [1, 2, 90, 91, 92, 98]
                }
            },
            "searchParams": {
                "2": "152"
            },
            "canonicalUrl": "/casting-calls/all/pakistan",
            "regionLinkInfo": {
                "Label": "Popular Pakistan locations",
                "MoreLinks": [],
                "PopularLinks": []
            },
            "basename": "/casting-calls",
            "savedSearchCount": 0,
            "currentSearchIsSaved": false,
            "initialShowUpgradeCTA": false,
            "openListingInNewWindow": true,
            "castingCallsUrl": "/casting-calls/all/pakistan/"
        }), document.getElementById("react_0HMH04R4SL1EI"));
        ReactDOM.render(React.createElement(Components.SaveSearchPopup, {
            "url": "/casting-calls/all/pakistan/",
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
        }), document.getElementById("react_0HMH04R4SL1EJ"));
    </script>




    <script nonce="jEP4bD317r+3ff5vzdYOMsSqiJs41+yq">
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