<!DOCTYPE html>

<html lang="en" class="fonts-loaded">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object#">
    <link rel="preconnect" href="https://staticsn.com">


    <script defer src="https://staticsn.com/Scripts/vendor/outdatedbrowser.min.js"></script>
    <script defer>
        var bannerShown = false;
        var promiseUnsupported = !(typeof Promise !== "undefined" && Object.prototype.toString.call(Promise.resolve()) ===
            '[object Promise]');
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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,900,300i,400i|Open+Sans+Condensed:300,300italic,700"
        rel="stylesheet" />
    <title>
        Register as talent - StarNow
    </title>
    <meta name="description" />
    <meta property="fb:app_id" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="canonical" href="https://www.starnow.com/register/" />

    <link rel="alternate" href="https://www.starnow.co.uk/register/" hreflang="en-GB" />
    <link rel="alternate" href="https://www.starnow.com.au/register/" hreflang="en-AU" />
    <link rel="alternate" href="https://www.starnow.com/register/" hreflang="en" />
    <link rel="alternate" href="https://www.starnow.com/register/" hreflang="x-default" />
    <link rel="alternate" href="https://www.starnow.co.nz/register/" hreflang="en-NZ" />
    <link rel="alternate" href="https://www.starnow.ie/register/" hreflang="en-IE" />
    <link rel="alternate" href="https://www.starnow.ca/register/" hreflang="en-CA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@StarNow" />
    <meta name="twitter:title" content="Register as talent" />
    <meta name="twitter:description"
        content="Auditions &amp; Jobs for Models, Actors, Musicians and Dancers. Reality TV Casting Calls. Create your free profile and get discovered." />
    <meta name="twitter:image" content="https://staticsn.com/images/social/twitter/default.jpg?v=1" />
    <meta property="og:site_name" content="StarNow" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Register as talent" />
    <meta property="og:description"
        content="Auditions &amp; Jobs for Models, Actors, Musicians and Dancers. Reality TV Casting Calls. Create your free profile and get discovered." />
    <meta property="og:url" content="https://www.starnow.com/register/" />
    <meta property="og:image" content="https://staticsn.com/images/social/facebook/default.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />


    <style>
        .worker-roles {
            display: inline-block;
            color: #1CB9D0 !important;
            margin: 5px;
            border: 1px solid #1CB9D0;
            border-radius: 30px;
            padding: 8px 18px;
            cursor: pointer;
            font-size: 14px;
        }
        /* .worker-roles:hover{
            background-color: #f3f3f3 !important;
        } */
        .worker-roles-active{
            background-color: #1CB9D0 !important;
            color: white !important;
        }
    </style>


    <script nonce="Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU">
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
            currentURL: "/register/?return_url=%2f",
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
        window.starnow.emailRegex =
            /^^[\w!#$%&'*+\-=?^`{}|\/]+(?:\.[\w!#$%&'*+\-=?^`{}|\/]+)*@[\w!#$%&'*+\-=?^`{}|\/]+(?:\.[\w!#$%&'*+\-=?^`{}|\/]+)+$$/;

        starnow.apiToken = {}
    </script>


    <!--[if lt IE 9]>
  <script src="https://staticsn.com/scripts/html5shiv.js"></script>
 <![endif]-->





    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1051265680" nonce="Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU">
    </script>
    <script nonce="Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU">
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

<body id="ctl00_mainBody"
    onload="starnow.initSearchFields(0, $(&#39;#ctl00_cphMain_registrationForm_location_countryID&#39;), $(&#39;#ctl00_cphMain_registrationForm_location_regionID&#39;), $(&#39;#ctl00_cphMain_registrationForm_location_zipCode&#39;), &#39;4&#39;)">






    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCGCWXL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->




    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es2015,es2016"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <nav class="nav nav--naked">
        <div class="relative">

            <a href="{{ route('home') }}" class="nav-logo--centered" tabindex="1" rel="home" title="Home">
                <img src="/images/logo.png" class="nav-logo__image" alt="StarNow" width="110">
            </a>


        </div>
    </nav>


    <div class="row page-spacer">
        <div class="small-12 columns">
            <h1>Login to your account</h1>
            <p class="mb3">
                <span class="no-wrap">Don't have an account? <a class="nounder"
                        href="{{ route("worker.register") }}">Sign up</a></span>
            </p>

            <div class="section">
                <form method="post" action="{{ route('worker.login.post') }}" id="aspnetForm">
                    @csrf
                    @include('common.partials.error-summary')
                    <h2 class="copy__h2">Enter your Login details</h2>
                    <fieldset class="fieldset-old ">
                        <label>Email Address <span class="req">*</span> </label><input class="input-half"
                            id="email" maxlength="50" name="email" type="text" value="" />
                        <label>Password <span class="req">*</span></label><input class="input-half"
                            id="password" maxlength="50" name="password" type="password" value="" />
                    </fieldset>

                    <div class="form-actions form-actions--flex"><input type="submit" value="Login"
                            class="button form-actions__primary-button" /></div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
