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
            <h1>Create your free profile</h1>
            <p class="mb3">
                <span class="no-wrap">Already a member? <a class="nounder"
                        href="{{ route("worker.login") }}">Sign in</a></span>
            </p>

            <div class="section">
                <form method="post" action="{{ route('worker.register.post') }}" id="aspnetForm">
                    @csrf
                    @include('common.partials.alerts')
                    @include('common.partials.error-summary')
                    <fieldset class="fieldset-old ">
                        <label>Email Address <span class="req">*</span> </label><input class="input-half"
                            id="email" maxlength="50" name="email" type="text" value="" />
                        <label>Password <span class="req">*</span></label><input class="input-half"
                            id="password" maxlength="50" name="password" type="password" value="" />
                    </fieldset>
                    <div id="ctl00_cphMain_registrationForm_regPanel">

                        <div class="form-section">
                            <h2 class="copy__h2 ">Select the jobs you're interested in</h2>
                            {{-- <fieldset class="fieldset-old">
                                <div class="mt3 w-100 w-70-ns">
                                    <div id="talentRegisterCategories">
                                        <div data-reactroot="">
                                            <div class="flex flex-wrap justify-start"><a target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_acting mr2 bg-white button--rounded button--outline">Acting</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_extras mr2 bg-white button--rounded button--outline">Extras</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_modelling mr2 bg-white button--rounded button--outline">Modelling</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_influencer mr2 bg-white button--rounded button--outline">Influencer</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_presenter mr2 bg-white button--rounded button--outline">Presenter</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_musician mr2 bg-white button--rounded button--outline">Musician</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_photography mr2 bg-white button--rounded button--outline">Photography</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_tv-&amp; reality mr2 bg-white button--rounded button--outline">TV
                                                    &amp; Reality</a><a target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_dancing mr2 bg-white button--rounded button--outline">Dancing</a><a
                                                    target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_film-&amp; stage crew mr2 bg-white button--rounded button--outline">Film
                                                    &amp; Stage Crew</a><a target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_hair,-makeup, &amp; styling mr2 bg-white button--rounded button--outline">Hair,
                                                    Makeup, &amp; Styling</a><a target="_self"
                                                    class="button mb2 fw6 f8 button--sky-blue auto_survival-jobs mr2 bg-white button--rounded button--outline">Survival
                                                    Jobs</a></div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset> --}}
                            <div class="mt-5">
                                @foreach ($workerRoles as $workerRole)
                                <div class="form-group"  style="display: inline-block !important;">
                                    <div class="form-check">
                                            <input class="form-check-input" style="display: none !important;" 
                                                type="checkbox" value="{{ $workerRole->id }}" 
                                                id="workerRole{{ $workerRole->id }}" name="worker_roles[]">
                                            <label class="worker-roles form-check-label "
                                                for="workerRole{{ $workerRole->id }}">
                                                {{ $workerRole->name }}
                                            </label>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="form-section">
                            <h2 class="copy__h2">Enter your details</h2>

                            <fieldset class="fieldset-old">
                                <div class="input-half">
                                    <fieldset class="fieldset-old input-half first last fieldset--name">
                                        <label>First name <span class="req">*</span>
                                        </label><input class="js-firstname" id="first_name" maxlength="20"
                                            name="first_name" type="text" value="" />
                                    </fieldset>
                                    <fieldset class="fieldset-old input-half last fieldset--name">
                                        <label>Last name <span class="req">*</span>
                                        </label><input class="js-lastname" id="last_name" maxlength="20"
                                            name="last_name" type="text" value="" />
                                    </fieldset>
                                </div>
                                <label>Username <span class="req">*</span></label><input
                                    class="input-half" id="username" maxlength="255" name="username" type="text"
                                    value="" />
                            </fieldset>
                            {{-- <fieldset class="fieldset-old"><label>Birth date <span
                                        class="req">*</span></label>
                                <p class="help">We use this to match you with relevant auditions & jobs</p>

                                <div class="input-group dmy">

                                    <label>
                                        <p>Day</p>
                                        <select name="ctl00$cphMain$registrationForm$birthDate$day"
                                            id="ctl00_cphMain_registrationForm_birthDate_day"
                                            class="inline input-small">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>

                                        </select>
                                    </label>

                                    <label>
                                        <p>Month</p>
                                        <select name="ctl00$cphMain$registrationForm$birthDate$month"
                                            id="ctl00_cphMain_registrationForm_birthDate_month"
                                            class="inline input-medium">
                                            <option value="0"></option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>

                                        </select>
                                    </label>
                                    <label class="no-wrap">
                                        <p>Year</p>

                                        <select name="ctl00$cphMain$registrationForm$birthDate$year"
                                            id="ctl00_cphMain_registrationForm_birthDate_year"
                                            class="inline--force input-small">
                                            <option value="0"></option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>

                                        </select>

                                    </label>
                                    <div class="clearfix"></div>
                                </div>




                            </fieldset> --}}

                            <fieldset class="fieldset-old ">
                                <label>Phone # (optional)</label><input class="input-half" id="phone"
                                    maxlength="255" name="phone" type="text" value="" />
                            </fieldset>

                            <fieldset class="fieldset-old ">
                                <label>Country <span class="req">*</span>
                                </label><select class="input-half mb2" id="country" name="country">
                                    <option value="">Choose country...</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="2">Australia</option>
                                    <option value="4">United States</option>
                                    <option value="5">Canada</option>
                                    <option value="1">New Zealand</option>
                                    <option value="7">Ireland</option>
                                    <option value="8">Afghanistan</option>
                                    <option value="9">Albania</option>
                                    <option value="10">Algeria</option>
                                    <option value="11">American Samoa</option>
                                    <option value="12">Andorra</option>
                                    <option value="13">Angola</option>
                                    <option value="14">Anguilla</option>
                                    <option value="15">Antigua and Barbuda</option>
                                    <option value="16">APO/FPO</option>
                                    <option value="17">Argentina</option>
                                    <option value="18">Armenia</option>
                                    <option value="19">Aruba</option>
                                    <option value="20">Austria</option>
                                    <option value="21">Azerbaijan Republic</option>
                                    <option value="22">Bahamas</option>
                                    <option value="23">Bahrain</option>
                                    <option value="24">Bangladesh</option>
                                    <option value="25">Barbados</option>
                                    <option value="26">Belarus</option>
                                    <option value="27">Belgium</option>
                                    <option value="28">Belize</option>
                                    <option value="29">Benin</option>
                                    <option value="30">Bermuda</option>
                                    <option value="31">Bhutan</option>
                                    <option value="32">Bolivia</option>
                                    <option value="33">Bosnia and Herzegovina</option>
                                    <option value="34">Botswana</option>
                                    <option value="35">Brazil</option>
                                    <option value="36">British Virgin Islands</option>
                                    <option value="37">Brunei Darussalam</option>
                                    <option value="38">Bulgaria</option>
                                    <option value="39">Burkina Faso</option>
                                    <option value="40">Burma</option>
                                    <option value="41">Burundi</option>
                                    <option value="42">Cambodia</option>
                                    <option value="43">Cameroon</option>
                                    <option value="44">Cape Verde Islands</option>
                                    <option value="45">Cayman Islands</option>
                                    <option value="46">Central African Republic</option>
                                    <option value="47">Chad</option>
                                    <option value="48">Chile</option>
                                    <option value="49">China</option>
                                    <option value="50">Colombia</option>
                                    <option value="51">Comoros</option>
                                    <option value="52">Congo</option>
                                    <option value="53">Cook Islands</option>
                                    <option value="54">Costa Rica</option>
                                    <option value="55">Cote d Ivoire</option>
                                    <option value="56">Croatia</option>
                                    <option value="57">Cyprus</option>
                                    <option value="58">Czech Republic</option>
                                    <option value="59">Denmark</option>
                                    <option value="60">Djibouti</option>
                                    <option value="61">Dominica</option>
                                    <option value="62">Dominican Republic</option>
                                    <option value="63">Ecuador</option>
                                    <option value="64">Egypt</option>
                                    <option value="65">El Salvador</option>
                                    <option value="66">Equatorial Guinea</option>
                                    <option value="67">Eritrea</option>
                                    <option value="68">Estonia</option>
                                    <option value="69">Ethiopia</option>
                                    <option value="70">Falkland Islands</option>
                                    <option value="71">Fiji</option>
                                    <option value="72">Finland</option>
                                    <option value="73">France</option>
                                    <option value="74">French Guiana</option>
                                    <option value="75">French Polynesia</option>
                                    <option value="76">Gabon Republic</option>
                                    <option value="77">Gambia</option>
                                    <option value="78">Georgia</option>
                                    <option value="79">Germany</option>
                                    <option value="80">Ghana</option>
                                    <option value="81">Gibraltar</option>
                                    <option value="82">Greece</option>
                                    <option value="83">Greenland</option>
                                    <option value="84">Grenada</option>
                                    <option value="85">Guadeloupe</option>
                                    <option value="86">Guam</option>
                                    <option value="87">Guatemala</option>
                                    <option value="88">Guernsey</option>
                                    <option value="89">Guinea</option>
                                    <option value="90">Guinea-Bissau</option>
                                    <option value="91">Guyana</option>
                                    <option value="92">Haiti</option>
                                    <option value="93">Honduras</option>
                                    <option value="94">Hong Kong</option>
                                    <option value="95">Hungary</option>
                                    <option value="96">Iceland</option>
                                    <option value="97">India</option>
                                    <option value="98">Indonesia</option>
                                    <option value="219">Iran</option>
                                    <option value="99">Israel</option>
                                    <option value="100">Italy</option>
                                    <option value="101">Jamaica</option>
                                    <option value="102">Jan Mayen</option>
                                    <option value="103">Japan</option>
                                    <option value="104">Jersey</option>
                                    <option value="105">Jordan</option>
                                    <option value="106">Kazakhstan</option>
                                    <option value="107">Kenya Coast Republic</option>
                                    <option value="108">Kiribati</option>
                                    <option value="109">Korea, South</option>
                                    <option value="110">Kuwait</option>
                                    <option value="111">Kyrgyzstan</option>
                                    <option value="112">Laos</option>
                                    <option value="113">Latvia</option>
                                    <option value="114">Lebanon</option>
                                    <option value="115">Lesotho</option>
                                    <option value="116">Liechtenstein</option>
                                    <option value="117">Lithuania</option>
                                    <option value="118">Luxembourg</option>
                                    <option value="119">Macau</option>
                                    <option value="120">Macedonia</option>
                                    <option value="121">Madagascar</option>
                                    <option value="122">Malawi</option>
                                    <option value="123">Malaysia</option>
                                    <option value="124">Maldives</option>
                                    <option value="125">Mali</option>
                                    <option value="126">Malta</option>
                                    <option value="127">Marshall Islands</option>
                                    <option value="128">Martinique</option>
                                    <option value="129">Mauritania</option>
                                    <option value="130">Mauritius</option>
                                    <option value="131">Mayotte</option>
                                    <option value="132">Mexico</option>
                                    <option value="133">Micronesia</option>
                                    <option value="134">Moldova</option>
                                    <option value="135">Monaco</option>
                                    <option value="136">Mongolia</option>
                                    <option value="220">Montenegro</option>
                                    <option value="137">Montserrat</option>
                                    <option value="138">Morocco</option>
                                    <option value="139">Mozambique</option>
                                    <option value="140">Namibia</option>
                                    <option value="141">Nauru</option>
                                    <option value="142">Nepal</option>
                                    <option value="143">Netherlands</option>
                                    <option value="144">Netherlands Antilles</option>
                                    <option value="145">New Caledonia</option>
                                    <option value="146">Nicaragua</option>
                                    <option value="147">Niger</option>
                                    <option value="148">Nigeria</option>
                                    <option value="149">Niue</option>
                                    <option value="150">Norway</option>
                                    <option value="151">Oman</option>
                                    <option selected="selected" value="152">Pakistan</option>
                                    <option value="153">Palau</option>
                                    <option value="154">Panama</option>
                                    <option value="155">Papua New Guinea</option>
                                    <option value="156">Paraguay</option>
                                    <option value="157">Peru</option>
                                    <option value="158">Philippines</option>
                                    <option value="159">Poland</option>
                                    <option value="160">Portugal</option>
                                    <option value="161">Puerto Rico</option>
                                    <option value="162">Qatar</option>
                                    <option value="163">Romania</option>
                                    <option value="164">Russia</option>
                                    <option value="165">Rwanda</option>
                                    <option value="166">Saint Helena</option>
                                    <option value="167">Saint Kitts-Nevis</option>
                                    <option value="168">Saint Lucia</option>
                                    <option value="169">Saint Pierre and Miquelon</option>
                                    <option value="170">Saint Vincent and the Grenadines</option>
                                    <option value="171">San Marino</option>
                                    <option value="172">Saudi Arabia</option>
                                    <option value="173">Senegal</option>
                                    <option value="221">Serbia</option>
                                    <option value="174">Seychelles</option>
                                    <option value="175">Sierra Leone</option>
                                    <option value="176">Singapore</option>
                                    <option value="177">Slovakia</option>
                                    <option value="178">Slovenia</option>
                                    <option value="179">Solomon Islands</option>
                                    <option value="180">Somalia</option>
                                    <option value="6">South Africa</option>
                                    <option value="181">Spain</option>
                                    <option value="182">Sri Lanka</option>
                                    <option value="183">Suriname</option>
                                    <option value="184">Svalbard</option>
                                    <option value="185">Swaziland</option>
                                    <option value="186">Sweden</option>
                                    <option value="187">Switzerland</option>
                                    <option value="188">Syria</option>
                                    <option value="189">Tahiti</option>
                                    <option value="190">Taiwan</option>
                                    <option value="191">Tajikistan</option>
                                    <option value="192">Tanzania</option>
                                    <option value="193">Thailand</option>
                                    <option value="194">Togo</option>
                                    <option value="195">Tonga</option>
                                    <option value="196">Trinidad and Tobago</option>
                                    <option value="197">Tunisia</option>
                                    <option value="198">Turkey</option>
                                    <option value="199">Turkmenistan</option>
                                    <option value="200">Turks and Caicos Islands</option>
                                    <option value="201">Tuvalu</option>
                                    <option value="202">Uganda</option>
                                    <option value="203">Ukraine</option>
                                    <option value="204">United Arab Emirates</option>
                                    <option value="205">Uruguay</option>
                                    <option value="206">Uzbekistan</option>
                                    <option value="207">Vanuatu</option>
                                    <option value="208">Vatican City State</option>
                                    <option value="209">Venezuela</option>
                                    <option value="210">Vietnam</option>
                                    <option value="211">Virgin Islands</option>
                                    <option value="212">Wallis and Futuna</option>
                                    <option value="213">Western Sahara</option>
                                    <option value="214">Western Samoa</option>
                                    <option value="215">Yemen</option>
                                    <option value="216">Yugoslavia</option>
                                    <option value="217">Zambia</option>
                                    <option value="218">Zimbabwe</option>
                                </select>
                            </fieldset>

                            <fieldset class="fieldset-old"><label>Gender <span class="req">*</span></label>
                                <div class="input-group inline">
                                    <label><input id="male" type="radio" name="gender" value="male" /> Male</label>
                                    <label><input id="female" type="radio" name="gender" value="female" />
                                        Female</label>
                                </div>
                            </fieldset>
                            <fieldset class="fieldset-old ">
                                <label class="mt2">Date of Birth <span
                                        class="req">*</span></label><input class="input-half" id="dob"
                                    maxlength="255" name="dob" type="date" value="" />
                            </fieldset>
                        </div>
                        <div class="form-section last">

                            <fieldset class="fieldset-old no-border--bottom pb0">
                                <label class="checkbox"><input id="ctl00_cphMain_registrationForm_termsAgree"
                                        type="checkbox" name="ctl00$cphMain$registrationForm$termsAgree" /> I have read
                                    and accepted StarNow's <a href='/terms-and-conditions/' target='_blank'>Terms of
                                        Use</a>, <a href='/privacy-policy/' target='_blank'>Privacy Policy</a> and <a
                                        href='/privacy-policy#general-collection-policy' target='_blank'>General
                                        Collection Policy</a>.</label>


                            </fieldset>
                        </div>

                    </div>

                    <div class="form-actions form-actions--flex"><input type="submit" name="register" value="Register"
                            class="button form-actions__primary-button" /></div>

                </form>
            </div>
        </div>
    </div>


    {{-- worker roles js --}}
    <script>
        $(document).ready(function () {
            $('.worker-roles').on('click', function () {
               // if has worker-roles.active class, remove it
                if ($(this).hasClass('worker-roles-active')) {
                     $(this).removeClass('worker-roles-active');
                } else {
                     // if not, add it
                     $(this).addClass('worker-roles-active');
                }
            });
        });
    </script>


    <script nonce="Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU">
        var onRCSubmit = function(token) {
            __doPostBack('ctl00$cphMain$registrationForm$submitButton', 'ctl00_cphMain_registrationForm_submitButton')
        };

        var onRCLoadCallback = function() {
            grecaptcha.render('ctl00_cphMain_registrationForm_submitButton', {
                'sitekey': '6LeWVCoUAAAAAJtITpSsOKx_t3byPkGb6VOfQaE4',
                'callback': onRCSubmit
            });
        };
    </script>
    <script nonce="Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU"
        src="https://www.google.com/recaptcha/api.js?onload=onRCLoadCallback&render=explicit" async defer></script>


    <script src="https://staticsn.com/_scripts/all.js?v=thVZE0_lcCkZjXnygKzH7i6gf1yVKWxWIkarfIMTM_Q1"></script>
    <script src="https://staticsn.com/_scripts/vendor.js?v=H75mSAhi0C-BDxUYEGhELxQ602S44uwAPdGPe_LULJU1"></script>
    <script src="https://staticsn.com/_scripts/facebook.js?v=YDrH5w3AxJEUJ04547EFa6kF96TsBwnshDZK0IcK0J81"></script>
    <script src="https://staticsn.com/_scripts/cookiesPopup.js?v=F4bW1SwmCa09jJomDxbQsVMiSsdsEvElJgFj0cEw-Rc1"></script>
    <script src="https://staticsn.com/_scripts/cat_selector.js?v=R4H-G7QzJbe3f5qbMZ0p8k-ZC7gzUA0RNdJHcJQhAG01"></script>
    <script src="https://staticsn.com/_scripts/credentialsComponent.js?v=qBptLyagEERJrCpyqZkLupWPjEdvSxwlQrSdXlj6PTo1">
    </script>





    <script nonce="Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU">
        $(function() {
            starnow.setInitialVisibility();
        });
        var arrRegions = new Array();
        arrRegions[2] = [{
            value: 0,
            text: 'Choose state...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 19,
            text: 'ACT'
        }, {
            value: 20,
            text: 'New South Wales'
        }, {
            value: 21,
            text: 'Northern Territory'
        }, {
            value: 22,
            text: 'Queensland'
        }, {
            value: 23,
            text: 'South Australia'
        }, {
            value: 24,
            text: 'Tasmania'
        }, {
            value: 25,
            text: 'Victoria'
        }, {
            value: 26,
            text: 'Western Australia'
        }];
        arrRegions[5] = [{
            value: 0,
            text: 'Choose region...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 204,
            text: 'Alberta'
        }, {
            value: 205,
            text: 'British Columbia'
        }, {
            value: 206,
            text: 'Manitoba'
        }, {
            value: 207,
            text: 'New Brunswick'
        }, {
            value: 208,
            text: 'Newfoundland and Labrador'
        }, {
            value: 209,
            text: 'Northwest Territories'
        }, {
            value: 210,
            text: 'Nova Scotia'
        }, {
            value: 211,
            text: 'Nunavut'
        }, {
            value: 212,
            text: 'Ontario'
        }, {
            value: 213,
            text: 'Prince Edward Island'
        }, {
            value: 214,
            text: 'Quebec'
        }, {
            value: 215,
            text: 'Saskatchewan'
        }, {
            value: 216,
            text: 'Yukon'
        }];
        arrRegions[73] = [{
            value: 0,
            text: 'Choose region...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 235,
            text: 'Alsace'
        }, {
            value: 236,
            text: 'Aquitaine'
        }, {
            value: 237,
            text: 'Auvergne'
        }, {
            value: 238,
            text: 'Basse-Normandie'
        }, {
            value: 239,
            text: 'Bourgogne'
        }, {
            value: 240,
            text: 'Bretagne'
        }, {
            value: 241,
            text: 'Centre'
        }, {
            value: 242,
            text: 'Champagne-Ardenne'
        }, {
            value: 243,
            text: 'Corse'
        }, {
            value: 244,
            text: 'Franche-Comté'
        }, {
            value: 245,
            text: 'Haute-Normandie'
        }, {
            value: 246,
            text: 'Ile-de-France'
        }, {
            value: 247,
            text: 'Languedoc-Roussillon'
        }, {
            value: 248,
            text: 'Limousin'
        }, {
            value: 249,
            text: 'Lorraine'
        }, {
            value: 250,
            text: 'Midi-Pyrénées'
        }, {
            value: 251,
            text: 'Nord-Pas-de-Calais'
        }, {
            value: 252,
            text: 'Pays de la Loire'
        }, {
            value: 253,
            text: 'Picardie'
        }, {
            value: 254,
            text: 'Poitou-Charentes'
        }, {
            value: 255,
            text: 'Provence-Alpes-Côte d\'Azur'
        }, {
            value: 256,
            text: 'Rhône-Alpes'
        }];
        arrRegions[79] = [{
            value: 0,
            text: 'Choose state...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 257,
            text: 'Baden-Württemberg'
        }, {
            value: 258,
            text: 'Bayern'
        }, {
            value: 259,
            text: 'Berlin'
        }, {
            value: 260,
            text: 'Brandenburg'
        }, {
            value: 261,
            text: 'Bremen'
        }, {
            value: 262,
            text: 'Hamburg'
        }, {
            value: 263,
            text: 'Hessen'
        }, {
            value: 264,
            text: 'Mecklenburg-Vorpommern'
        }, {
            value: 265,
            text: 'Niedersachsen'
        }, {
            value: 266,
            text: 'Nordrhein-Westfalen'
        }, {
            value: 267,
            text: 'Rheinland-Pfalz'
        }, {
            value: 268,
            text: 'Saarland'
        }, {
            value: 269,
            text: 'Sachsen'
        }, {
            value: 270,
            text: 'Sachsen-Anhalt'
        }, {
            value: 271,
            text: 'Schleswig-Holstein'
        }, {
            value: 272,
            text: 'Thüringen'
        }];
        arrRegions[7] = [{
            value: 0,
            text: 'Choose region...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 217,
            text: 'Dublin Region'
        }, {
            value: 273,
            text: 'Midland Region'
        }, {
            value: 221,
            text: 'North-West Region'
        }, {
            value: 218,
            text: 'South-East Region'
        }, {
            value: 220,
            text: 'South-West Region'
        }, {
            value: 219,
            text: 'Western Region'
        }];
        arrRegions[1] = [{
            value: 0,
            text: 'Choose region...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 2,
            text: 'Auckland'
        }, {
            value: 4,
            text: 'Bay Of Plenty'
        }, {
            value: 15,
            text: 'Canterbury'
        }, {
            value: 5,
            text: 'Gisborne'
        }, {
            value: 6,
            text: 'Hawkes Bay'
        }, {
            value: 9,
            text: 'Manawatu'
        }, {
            value: 13,
            text: 'Marlborough'
        }, {
            value: 12,
            text: 'Nelson Bays'
        }, {
            value: 1,
            text: 'Northland'
        }, {
            value: 17,
            text: 'Otago'
        }, {
            value: 18,
            text: 'Southland'
        }, {
            value: 7,
            text: 'Taranaki'
        }, {
            value: 16,
            text: 'Timaru/Oamaru'
        }, {
            value: 3,
            text: 'Waikato'
        }, {
            value: 10,
            text: 'Wairarapa'
        }, {
            value: 8,
            text: 'Wanganui'
        }, {
            value: 11,
            text: 'Wellington'
        }, {
            value: 14,
            text: 'West Coast'
        }];
        arrRegions[6] = [{
            value: 0,
            text: 'Choose region...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 222,
            text: 'Eastern Cape'
        }, {
            value: 223,
            text: 'Free State'
        }, {
            value: 224,
            text: 'Gauteng'
        }, {
            value: 225,
            text: 'Kwazulu Natal'
        }, {
            value: 226,
            text: 'Limpopo'
        }, {
            value: 227,
            text: 'Mpumalanga'
        }, {
            value: 228,
            text: 'North West'
        }, {
            value: 229,
            text: 'Northern Cape'
        }, {
            value: 230,
            text: 'Western Cape'
        }];
        arrRegions[3] = [{
            value: 0,
            text: 'Choose region...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 27,
            text: 'Aberdeen'
        }, {
            value: 28,
            text: 'Bath'
        }, {
            value: 29,
            text: 'Belfast'
        }, {
            value: 30,
            text: 'Birmingham'
        }, {
            value: 31,
            text: 'Blackburn'
        }, {
            value: 32,
            text: 'Blackpool'
        }, {
            value: 33,
            text: 'Bolton'
        }, {
            value: 34,
            text: 'Bournemouth'
        }, {
            value: 35,
            text: 'Bradford'
        }, {
            value: 36,
            text: 'Brighton'
        }, {
            value: 37,
            text: 'Bristol'
        }, {
            value: 38,
            text: 'Bromley'
        }, {
            value: 39,
            text: 'Cambridge'
        }, {
            value: 40,
            text: 'Canterbury'
        }, {
            value: 41,
            text: 'Cardiff'
        }, {
            value: 42,
            text: 'Carlisle'
        }, {
            value: 43,
            text: 'Chelmsford'
        }, {
            value: 44,
            text: 'Chester'
        }, {
            value: 45,
            text: 'Cleveland'
        }, {
            value: 46,
            text: 'Colchester'
        }, {
            value: 47,
            text: 'Coventry'
        }, {
            value: 48,
            text: 'Crewe'
        }, {
            value: 49,
            text: 'Croydon'
        }, {
            value: 50,
            text: 'Darlington'
        }, {
            value: 51,
            text: 'Dartford'
        }, {
            value: 52,
            text: 'Derby'
        }, {
            value: 53,
            text: 'Doncaster'
        }, {
            value: 54,
            text: 'Dorchester'
        }, {
            value: 55,
            text: 'Dudley'
        }, {
            value: 56,
            text: 'Dumfries'
        }, {
            value: 57,
            text: 'Dundee'
        }, {
            value: 59,
            text: 'Durham'
        }, {
            value: 60,
            text: 'Edinburgh'
        }, {
            value: 61,
            text: 'Enfield'
        }, {
            value: 62,
            text: 'Exeter'
        }, {
            value: 63,
            text: 'Falkirk'
        }, {
            value: 64,
            text: 'Galashiels'
        }, {
            value: 65,
            text: 'Glasgow'
        }, {
            value: 66,
            text: 'Gloucester'
        }, {
            value: 67,
            text: 'Guernsey'
        }, {
            value: 68,
            text: 'Guildford'
        }, {
            value: 69,
            text: 'Halifax'
        }, {
            value: 70,
            text: 'Harrogate'
        }, {
            value: 71,
            text: 'Harrow'
        }, {
            value: 72,
            text: 'Hemel Hempstead'
        }, {
            value: 73,
            text: 'Hereford'
        }, {
            value: 74,
            text: 'Huddersfield'
        }, {
            value: 75,
            text: 'Hull'
        }, {
            value: 76,
            text: 'Ilford'
        }, {
            value: 77,
            text: 'Inverness'
        }, {
            value: 78,
            text: 'Ipswich'
        }, {
            value: 79,
            text: 'Isle of man'
        }, {
            value: 234,
            text: 'Isle of Wight'
        }, {
            value: 80,
            text: 'Jersey'
        }, {
            value: 233,
            text: 'Kent'
        }, {
            value: 81,
            text: 'Kilmarnock'
        }, {
            value: 82,
            text: 'Kingston upon Thames'
        }, {
            value: 83,
            text: 'Kirkcaldy'
        }, {
            value: 84,
            text: 'Kirkwall'
        }, {
            value: 85,
            text: 'Lancaster'
        }, {
            value: 86,
            text: 'Leeds'
        }, {
            value: 87,
            text: 'Leicester'
        }, {
            value: 88,
            text: 'Lerwick'
        }, {
            value: 89,
            text: 'Lincoln'
        }, {
            value: 90,
            text: 'Liverpool'
        }, {
            value: 91,
            text: 'Llandrindod Wells'
        }, {
            value: 92,
            text: 'Llandudno'
        }, {
            value: 93,
            text: 'London'
        }, {
            value: 101,
            text: 'Luton'
        }, {
            value: 102,
            text: 'Manchester'
        }, {
            value: 103,
            text: 'Medway'
        }, {
            value: 104,
            text: 'Milton Keynes'
        }, {
            value: 105,
            text: 'Motherwell'
        }, {
            value: 106,
            text: 'Newcastle upon Tyne'
        }, {
            value: 107,
            text: 'Newport'
        }, {
            value: 108,
            text: 'Northampton'
        }, {
            value: 109,
            text: 'Norwich'
        }, {
            value: 110,
            text: 'Nottingham'
        }, {
            value: 111,
            text: 'Oldham'
        }, {
            value: 112,
            text: 'Oxford'
        }, {
            value: 113,
            text: 'Paisley'
        }, {
            value: 114,
            text: 'Perth'
        }, {
            value: 115,
            text: 'Peterborough'
        }, {
            value: 116,
            text: 'Plymouth'
        }, {
            value: 117,
            text: 'Portsmouth'
        }, {
            value: 118,
            text: 'Preston'
        }, {
            value: 119,
            text: 'Reading'
        }, {
            value: 120,
            text: 'Redhill'
        }, {
            value: 121,
            text: 'Romford'
        }, {
            value: 122,
            text: 'Salisbury'
        }, {
            value: 123,
            text: 'Sheffield'
        }, {
            value: 124,
            text: 'Shrewsbury'
        }, {
            value: 125,
            text: 'Slough'
        }, {
            value: 126,
            text: 'Southall'
        }, {
            value: 127,
            text: 'Southampton'
        }, {
            value: 128,
            text: 'Southend-on-Sea'
        }, {
            value: 129,
            text: 'St. Albans'
        }, {
            value: 130,
            text: 'Stevenage'
        }, {
            value: 203,
            text: 'Stirling'
        }, {
            value: 131,
            text: 'Stockport'
        }, {
            value: 132,
            text: 'Stoke-on-Trent'
        }, {
            value: 133,
            text: 'Sunderland'
        }, {
            value: 134,
            text: 'Sutton'
        }, {
            value: 135,
            text: 'Swansea'
        }, {
            value: 136,
            text: 'Swindon'
        }, {
            value: 137,
            text: 'Taunton'
        }, {
            value: 138,
            text: 'Telford'
        }, {
            value: 139,
            text: 'Tonbridge'
        }, {
            value: 140,
            text: 'Torquay'
        }, {
            value: 141,
            text: 'Truro'
        }, {
            value: 142,
            text: 'Twickenham'
        }, {
            value: 143,
            text: 'Wakefield'
        }, {
            value: 144,
            text: 'Walsall'
        }, {
            value: 145,
            text: 'Warrington'
        }, {
            value: 232,
            text: 'Warwickshire'
        }, {
            value: 146,
            text: 'Watford'
        }, {
            value: 147,
            text: 'Western Isles'
        }, {
            value: 148,
            text: 'Wigan'
        }, {
            value: 149,
            text: 'Wolverhampton'
        }, {
            value: 151,
            text: 'Worcester'
        }, {
            value: 274,
            text: 'Worthing'
        }, {
            value: 152,
            text: 'York'
        }];
        arrRegions[4] = [{
            value: 0,
            text: 'Choose state...'
        }, {
            value: 0,
            text: ''
        }, {
            value: 153,
            text: 'Alabama'
        }, {
            value: 154,
            text: 'Alaska'
        }, {
            value: 155,
            text: 'Arizona'
        }, {
            value: 156,
            text: 'Arkansas'
        }, {
            value: 157,
            text: 'California'
        }, {
            value: 158,
            text: 'Colorado'
        }, {
            value: 159,
            text: 'Connecticut'
        }, {
            value: 160,
            text: 'Delaware'
        }, {
            value: 161,
            text: 'Florida'
        }, {
            value: 162,
            text: 'Georgia'
        }, {
            value: 163,
            text: 'Hawaii'
        }, {
            value: 164,
            text: 'Idaho'
        }, {
            value: 165,
            text: 'Illinois'
        }, {
            value: 166,
            text: 'Indiana'
        }, {
            value: 167,
            text: 'Iowa'
        }, {
            value: 168,
            text: 'Kansas'
        }, {
            value: 169,
            text: 'Kentucky'
        }, {
            value: 170,
            text: 'Louisiana'
        }, {
            value: 171,
            text: 'Maine'
        }, {
            value: 172,
            text: 'Maryland'
        }, {
            value: 173,
            text: 'Massachusetts'
        }, {
            value: 174,
            text: 'Michigan'
        }, {
            value: 175,
            text: 'Minnesota'
        }, {
            value: 176,
            text: 'Mississippi'
        }, {
            value: 177,
            text: 'Missouri'
        }, {
            value: 178,
            text: 'Montana'
        }, {
            value: 179,
            text: 'Nebraska'
        }, {
            value: 180,
            text: 'Nevada'
        }, {
            value: 181,
            text: 'New Hampshire'
        }, {
            value: 182,
            text: 'New Jersey'
        }, {
            value: 183,
            text: 'New Mexico'
        }, {
            value: 184,
            text: 'New York'
        }, {
            value: 185,
            text: 'North Carolina'
        }, {
            value: 186,
            text: 'North Dakota'
        }, {
            value: 187,
            text: 'Ohio'
        }, {
            value: 188,
            text: 'Oklahoma'
        }, {
            value: 189,
            text: 'Oregon'
        }, {
            value: 190,
            text: 'Pennsylvania'
        }, {
            value: 191,
            text: 'Rhode Island'
        }, {
            value: 192,
            text: 'South Carolina'
        }, {
            value: 193,
            text: 'South Dakota'
        }, {
            value: 194,
            text: 'Tennessee'
        }, {
            value: 195,
            text: 'Texas'
        }, {
            value: 196,
            text: 'Utah'
        }, {
            value: 197,
            text: 'Vermont'
        }, {
            value: 198,
            text: 'Virginia'
        }, {
            value: 199,
            text: 'Washington'
        }, {
            value: 231,
            text: 'Washington D.C.'
        }, {
            value: 200,
            text: 'West Virginia'
        }, {
            value: 201,
            text: 'Wisconsin'
        }, {
            value: 202,
            text: 'Wyoming'
        }];

        $(function() {
            starnow.initPageChrome();
        });

        $(function() {
            var propsConfig = {
                "displayType": 1,
                "emailAddress": "",
                "password": "",
                "rememberMe": false,
                "displayRememberMe": true,
                "isBackstageAuthenticated": false,
                "hasPasswordError": false,
                "emailValidationError": 0,
                "passwordValidationResult": null,
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
            }
            const registerCredentialsRoot = document.getElementById("registerCredentialsContainer")
            if (registerCredentialsRoot) {
                ReactDOM.hydrate(
                    React.createElement(Components.CredentialsComponent, propsConfig),
                    registerCredentialsRoot);
            }
        });


        $(function() {
            var propsConfig = {
                "categoryIDs": null,
                "initialSelectedCategories": [],
                "initialSelectedSubCategories": [],
                "initialPendingCategoryID": 0,
                "cancelURL": null,
                "categories": [{
                    "categoryID": 10,
                    "categoryIDs": null,
                    "childCategories": [],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Acting",
                    "value": "10"
                }, {
                    "categoryID": 131,
                    "categoryIDs": null,
                    "childCategories": [],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Extras",
                    "value": "131"
                }, {
                    "categoryID": 8,
                    "categoryIDs": null,
                    "childCategories": [],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Modelling",
                    "value": "8"
                }, {
                    "categoryID": 151,
                    "categoryIDs": null,
                    "childCategories": [{
                        "categoryID": 152,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Beauty",
                        "value": "152"
                    }, {
                        "categoryID": 153,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Fashion",
                        "value": "153"
                    }, {
                        "categoryID": 154,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Fitness",
                        "value": "154"
                    }, {
                        "categoryID": 155,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Food",
                        "value": "155"
                    }, {
                        "categoryID": 164,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Gaming & Technology",
                        "value": "164"
                    }, {
                        "categoryID": 156,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Health",
                        "value": "156"
                    }, {
                        "categoryID": 161,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Influencer Scouts",
                        "value": "161"
                    }, {
                        "categoryID": 163,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Live Events",
                        "value": "163"
                    }, {
                        "categoryID": 157,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Men's Products",
                        "value": "157"
                    }, {
                        "categoryID": 162,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Music",
                        "value": "162"
                    }, {
                        "categoryID": 158,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Parenting",
                        "value": "158"
                    }, {
                        "categoryID": 159,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Travel",
                        "value": "159"
                    }, {
                        "categoryID": 160,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Other",
                        "value": "160"
                    }],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Influencer",
                    "value": "151"
                }, {
                    "categoryID": 147,
                    "categoryIDs": null,
                    "childCategories": [{
                        "categoryID": 148,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "TV",
                        "value": "148"
                    }, {
                        "categoryID": 149,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Radio",
                        "value": "149"
                    }, {
                        "categoryID": 150,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Other",
                        "value": "150"
                    }],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Presenter",
                    "value": "147"
                }, {
                    "categoryID": 12,
                    "categoryIDs": null,
                    "childCategories": [{
                        "categoryID": 52,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Singing",
                        "value": "52"
                    }, {
                        "categoryID": 47,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Guitar",
                        "value": "47"
                    }, {
                        "categoryID": 55,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Bass Guitar",
                        "value": "55"
                    }, {
                        "categoryID": 46,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Drums",
                        "value": "46"
                    }, {
                        "categoryID": 48,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Piano/Keyboard",
                        "value": "48"
                    }, {
                        "categoryID": 45,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Composing",
                        "value": "45"
                    }, {
                        "categoryID": 49,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Production",
                        "value": "49"
                    }, {
                        "categoryID": 43,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Bands wanted",
                        "value": "43"
                    }, {
                        "categoryID": 101,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "DJing",
                        "value": "101"
                    }, {
                        "categoryID": 103,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Rapper",
                        "value": "103"
                    }, {
                        "categoryID": 54,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Other",
                        "value": "54"
                    }],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Musician",
                    "value": "12"
                }, {
                    "categoryID": 80,
                    "categoryIDs": null,
                    "childCategories": [],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Photography",
                    "value": "80"
                }, {
                    "categoryID": 1,
                    "categoryIDs": null,
                    "childCategories": [],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "TV & Reality",
                    "value": "1"
                }, {
                    "categoryID": 7,
                    "categoryIDs": null,
                    "childCategories": [{
                        "categoryID": 20,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Dancer",
                        "value": "20"
                    }, {
                        "categoryID": 21,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Teacher & Choreographer",
                        "value": "21"
                    }],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Dancing",
                    "value": "7"
                }, {
                    "categoryID": 58,
                    "categoryIDs": null,
                    "childCategories": [{
                        "categoryID": 146,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Writing or Directing",
                        "value": "146"
                    }, {
                        "categoryID": 112,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Art Department or Costume",
                        "value": "112"
                    }, {
                        "categoryID": 115,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Camera",
                        "value": "115"
                    }, {
                        "categoryID": 113,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Lighting",
                        "value": "113"
                    }, {
                        "categoryID": 117,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Post Production & Editing",
                        "value": "117"
                    }, {
                        "categoryID": 81,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Production Management",
                        "value": "81"
                    }, {
                        "categoryID": 114,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Runner or Assistant",
                        "value": "114"
                    }, {
                        "categoryID": 116,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Sound",
                        "value": "116"
                    }, {
                        "categoryID": 82,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Other",
                        "value": "82"
                    }],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Film & Stage Crew",
                    "value": "58"
                }, {
                    "categoryID": 107,
                    "categoryIDs": null,
                    "childCategories": [{
                        "categoryID": 108,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Hair Stylist",
                        "value": "108"
                    }, {
                        "categoryID": 109,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Makeup Artist",
                        "value": "109"
                    }, {
                        "categoryID": 110,
                        "categoryIDs": null,
                        "childCategories": [],
                        "disabled": false,
                        "group": null,
                        "selected": false,
                        "text": "Fashion Stylist",
                        "value": "110"
                    }],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Hair, Makeup, & Styling",
                    "value": "107"
                }, {
                    "categoryID": 130,
                    "categoryIDs": null,
                    "childCategories": [],
                    "disabled": false,
                    "group": null,
                    "selected": false,
                    "text": "Survival Jobs",
                    "value": "130"
                }],
                "showSubmit": false,
                "isLeftAligned": true,
                "isRadio": false,
                "isAdvertiser": false,
                "selectedCategoryID": null,
                "showExperienceLevelHint": false,
                "shouldRenderInputs": true,
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
            }
            const categoriesRoot = document.getElementById("talentRegisterCategories")
            if (categoriesRoot) {
                ReactDOM.hydrate(
                    React.createElement(Components.ProfileCategoryList, propsConfig),
                    categoriesRoot
                );
            }
        });
    </script>





    <script nonce=Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU>
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

    <script nonce="Qj3Sas9yPw0n3xt4kGuq0bi6HH0eFEwU">
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








    <div id="outdated">
        <h6>Your browser version is outdated</h6>
        <p>Some site features may not work properly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update
                my browser now </a></p>
        <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
    </div>


</body>

</html>
