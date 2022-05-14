<head>
    <style>
        html.fonts-loaded .nav-primary__item,
        html.fonts-loaded .nav-primary__item span {
            font-family: "Open Sans Condensed", Calibri, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .nav-primary__item--active:active,
        .nav-primary__item--active:active span,
        .nav-primary__item--active:hover,
        .nav-primary__item--active:hover span {
            color: inherit;
        }

        .nav__item:hover {
            border-bottom: none;
        }

        .html.fonts-loaded .nav-primary__item,
        html.fonts-loaded .nav-primary__item span {
            font-family: "Open Sans Condensed", Calibri, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }


        .nav-primary__item--active {
            z-index: 10;
            color: #222;
            background-color: #fff;
            border-radius: 4px 4px 0 0;
        }

        @media only screen and (min-width: 890px) {
            .nav-primary__item {
                width: auto;
            }
        }

        @media only screen and (min-width: 890px) {

            .nav-primary__item,
            .nav-primary__item span {
                margin-top: 0.5rem;
            }
        }

        @media only screen and (min-width: 40.0625em) {

            .nav-primary__item,
            .nav-primary__item span {
                font-size: 1.2rem;
                padding-top: 0.75rem;
                padding-bottom: 1.3rem;
            }
        }

        .nav-primary__item,
        .nav-primary__item span {
            font-weight: 600;
            line-height: 1;
        }

        .nav__item {
            display: block;
            white-space: nowrap;
            text-decoration: none;
            text-align: center;
            outline: 0;
        }

        @media only screen and (min-width: 64.0625em) {

            .column,
            .columns {
                position: relative;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                float: left;
            }
        }

        .nav {
            position: relative;
            background-color: #fff;
        }

        .clearfix {
            clear: both;
        }

        .white-line {
            border-bottom: 4px solid #fff;
        }

        .nav-wrapper {
            background-color: #222;
        }

        @media only screen and (min-width: 40.0625em) {
            .nav .row {
                padding: 0;
            }
        }

        .flex {
            display: flex;
        }

        @media only screen and (min-width: 64.0625em) {
            .nav-login {
                font-size: .9rem;
            }
        }

        @media only screen and (min-width: 414px) {
            .nav-login {
                top: 0.325rem;

            }
        }

        .nav-login {
            position: absolute;
            right: 0.5rem;
            text-align: center;
        }

        .ff:active {
            background-color: white;
            color: #222;
        }
    </style>
</head>
<header class="main-header">

    <div id="fb-root"></div>

    <script nonce="PZ5FkSIxZ7IrpwL0eTOueAx7b+r96M14">
        var snfb;

        (function(snfb) {
            var snfbInit = {
                "auto": [],
                "fbid": null,
                "scope": "public_profile,email,user_birthday",
                "isRegistrationPage": false,
                "appId": 192931954085724,
                "channelUrl": "https%3a%2f%2fwww.starnow.com%2ffbchannel.ashx",
                "version": "v4.0",
                "returnURL": "/"
            };

            for (var key in snfbInit)
                if (snfbInit.hasOwnProperty(key)) {
                    snfb[key] = snfbInit[key];
                }
        })(snfb || (snfb = {}));
    </script>
    <noscript>
        <div class="alert-full">
            <span class="icon icon-warning"></span>
            For a better experience, please enable JavaScript or <a href="http://outdatedbrowser.com/" target="_blank" rel="noopener">upgrade your browser</a>.
        </div>
    </noscript>

    <nav class="nav clearfix">
        <div class="nav-wrapper ">
            <div class="row relative nav-primary-wrapper active">

                <a href="{{route('home')}}" class="nav__item nav-logo small-6 medium-2 columns" tabindex="1" rel="home" title="Home">
                    <img src="/images/logo.png" class="nav-logo__image" alt="Film Star Online" width="120">
                </a>

                <div class="nav-login flex">
                    <a href="{{route('placelisting')}}" class="ff nav-login__btn  button button--rounded fw6 button--charcoal button" rel="nofollow">
                        List a<span class="dn di-l">n audition or</span> Job
                    </a>

                    @if(!auth()->check())
                    <a href="{{route('worker.login')}}" rel="nofollow" class=" nav-login__btn  button button--rounded fw6 button--charcoal nav-login--full">
                        Sign in as Worker
                    </a>
                    <a href="{{route('client.login')}}" rel="nofollow" class=" nav-login__btn  button button--rounded fw6 button--charcoal nav-login--full">
                        Sign in as Client
                    </a>
                    <a href="{{route('signup.as')}}" rel="nofollow" class=" nav-login__btn  button button--rounded fw6  nav-login__item--show-large-phone-up  nav__btn--accented nav-login--full">
                        Join
                    </a>
                    @else
                    <a href="" rel="nofollow" class=" nav-login__btn  button button--rounded fw6 button--charcoal nav-login--full">
                        Profile
                    </a>
                    <form action="{{ route("worker.logout") }}" method="post">
                        @csrf
                        <button type="submit" rel="nofollow" style="cursor:pointer !important;" class=" nav-login__btn  button button--rounded fw6  nav-login__item--show-large-phone-up  nav__btn--accented nav-login--full">
                            Logout
                        </button>
                     </form>
                    @endif
                    



                    <a href="register/member/index.html" rel="nofollow" class=" nav-login__btn  button button--rounded fw6 nav-login__btn--accented nav-login--partial">
                        Join/Sign in
                    </a>
                </div>
                <div class="nav-primary small-12 columns end">
                    <div class="row nav-primary__row">

                        <a href="{{route('jobs')}}" class="nav__item nav-primary__item  small-5 columns" tabindex="2">
                            Auditions&nbsp;&amp;&nbsp;Jobs
                        </a>
                        <a href="{{route('talent-directory')}}" class="nav__item nav-primary__item  small-3 columns" tabindex="3">
                            Talent<span class="nav-primary__optional-text ">&nbsp;Directory</span>
                        </a>
                        <a href="{{route('discover')}}" class="ff nav__item nav-primary__item  small-4 columns end" rel="nofollow" tabindex="4">
                            Discover
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>