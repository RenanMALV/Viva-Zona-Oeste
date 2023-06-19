<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />

    <script>
        function resizeIframe(obj) {
          obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
        }
      </script>




    <link rel='stylesheet' id='course-review-css' href='/css/course-review.css' type='text/css' media='all' />
    <link rel='stylesheet' id='lp-course-wishlist-style-css' href='/css/wishlist.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mo-wp-bootstrap-social-css' href='/css/bootstrap-social.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootstrap_style_ass-css' href='/css/bootstrap-tour-standalone.css?version=5.1.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='/css/dist/block-library/style.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='wp-block-library-theme-css' href='/css/dist/block-library/theme.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bp-member-block-css'
        href='https://eduma.thimpress.com/demo-1/wp-content/plugins/buddypress/bp-members/css/blocks/member.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bp-members-block-css'
        href='https://eduma.thimpress.com/demo-1/wp-content/plugins/buddypress/bp-members/css/blocks/members.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='/css/dist/contact-form-7/styles.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='tp-chameleon-css' href='/css/tp-chameleon.css' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }

    </style>
    <link rel='stylesheet' id='pmpro_frontend-css' href='/css/paid-memberships-pro/frontend.css' type='text/css'
        media='screen' />
    <link rel='stylesheet' id='pmpro_print-css' href='/css/paid-memberships-pro/print.css' type='text/css'
        media='print' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='/css/rs6.css' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}

    </style>
    <link rel='stylesheet' id='siteorigin-panels-front-css' href='/css/siteorigin-panels/front-flex.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mc4wp-form-basic-css' href='/css/mailchimp-for-wp/form-basic.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='h5p-plugin-styles-css' href='/css/h5p.css' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='/css/dashicons.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='/css/all.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-v4-shims-css' href='/css/v4-shims.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ionicons-css' href='/css/ionicons.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-pe-icon-7-css' href='/css/font-pe-icon-7.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css' href='/css/flaticon.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thim-linearicons-font-css' href='/css/linearicons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='line-awesome-css' href='/css/line-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thim-style-css' href='/css/style.css?' type='text/css' media='all' />
    <style id='thim-style-inline-css' type='text/css'>
        :root {
            --thim-body-primary-color: #2EC5B6;
            --thim-body-secondary-color: #4caf50;
            --thim-button-text-color: #333;
            --thim-button-hover-color: #1aa294;
            --thim-footer-font-title-font-size: 14px;
            --thim-footer-font-title-line-height: 40px;
            --thim-footer-font-title-text-transform: uppercase;
            --thim-footer-font-title-font-weight: 700;
            --thim-footer-font-size: 14px;
            --thim-main-menu-font-weight: 600;
        }

    </style>




    <!-- CSS específico da pagina-->
    @yield('css_of_page')
    <!-- FIM do CSS específico da pagina-->


    <script type='text/javascript' src='/js/jquery/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='/js/wishlist.js' id='lp-course-wishlist-script-js'></script>
    <script type='text/javascript' src='/js/rbtools.min.js' id='tp-tools-js'></script>
    <script type='text/javascript' src='/js/rs6.min.js' id='revmin-js'></script>
    


    <link rel="icon" href="/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="/img/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/img/favicon.png" />
    <meta name="msapplication-TileImage" content="/img/favicon.png" />
    <script type="text/javascript">
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {				 
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document
                    .createElement("style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style id="kirki-inline-styles">
        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/roboto/KFOmCnqEu92Fr1Mu72xMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/roboto/KFOmCnqEu92Fr1Mu5mxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/roboto/KFOmCnqEu92Fr1Mu7mxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/roboto/KFOmCnqEu92Fr1Mu4WxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/roboto/KFOmCnqEu92Fr1Mu7WxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/roboto/KFOmCnqEu92Fr1Mu7GxMKTU1Kvnz.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(/fonts/roboto/KFOmCnqEu92Fr1Mu4mxMKTU1Kg.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/roboto-slab/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4OmYmRlV9Su1fahTVo.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/roboto-slab/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4Oma2RlV9Su1fahTVo.woff) format('woff');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/roboto-slab/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4OmY2RlV9Su1fahTVo.woff) format('woff');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/roboto-slab/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4OmbGRlV9Su1fahTVo.woff) format('woff');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/roboto-slab/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4OmYGRlV9Su1fahTVo.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/roboto-slab/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4OmYWRlV9Su1fahTVo.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(/fonts/roboto-slab/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4Omb2RlV9Su1fah.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

    </style>
    
</head>

<body
    class="home page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-12 wp-embed-responsive theme-eduma woocommerce-no-js pmpro-body-has-access siteorigin-panels siteorigin-panels-before-js siteorigin-panels-home group-blog thim-body-preload bg-boxed-image thim-popup-feature learnpress-v4"
    id="thim-body">

    <div id="preload">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>

    <!-- Menu Mobile -->

    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-inner">
            <div class="icon-wrapper">
                <div class="menu-mobile-effect navbar-toggle close-icon" data-effect="mobile-effect">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
            </div>
            <nav class="mobile-menu-container mobile-effect">
                <ul class="nav navbar-nav">

                    @foreach ($menus as $menu)
                        <li
                            class="menu-item menu-item-type-custom menu-item-object-custom 
                                tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default
                                @if ($menu->icon_class == 'children')
                                menu-item-has-children
                                @endif
                                ">
                            @if ($menu->icon_class == 'children')
                                <span class="tc-menu-inner">{{ $menu->title }}</span>
                                <ul class="sub-menu">
                                    @foreach ($submenus as $submenu)
                                        @if ($submenu->parent_id == $menu->id)
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page 
                                        tc-menu-item tc-menu-depth-1 tc-menu-align-left
                                        @if ($submenu->icon_class == 'children')
                                        menu-item-has-children 
                                        @endif
                                        ">

                                                @if ($submenu->icon_class == 'children')
                                                    <span class="tc-menu-inner">{{ $submenu->title }}</span>
                                                    <ul class="sub-menu">
                                                        @foreach ($submenus as $submenu2)
                                                            @if ($submenu2->parent_id == $submenu->id)

                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page 
                                            tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                                                    <a target="{{ $submenu2->target }}"
                                                                        href="{{ $submenu2->url }}"
                                                                        class="tc-menu-inner tc-megamenu-title">{{ $submenu2->title }}</a>
                                                                </li>

                                                            @endif
                                                        @endforeach

                                                    </ul>

                                                @else
                                                    <a target="{{ $submenu->target }}" href="{{ $submenu->url }}"
                                                        class="tc-menu-inner tc-megamenu-title">{{ $submenu->title }}</a>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @else
                                <a target="{{ $menu->target }}" href="{{ $menu->url }}"
                                    class="tc-menu-inner tc-megamenu-title">
                                    {{ $menu->title }}
                                </a>
                            @endif

                        </li>
                    @endforeach


                    <li class="menu-right header_v1">
                        <ul>
                            <li id="courses-searching-3" class="widget widget_courses-searching">
                                <div class="thim-widget-courses-searching template-courses-searching">
                                    <div class="thim-course-search-overlay">
                                        <div class="search-toggle"><i class="fa fa-search"></i></div>
                                        <div class="courses-searching layout-overlay">
                                            <div class="search-popup-bg"></div>
                                            <form method="get" action="#">
                                                <input type="text" value="" name="s" placeholder="Search courses..."
                                                    class="thim-s form-control courses-search-input"
                                                    autocomplete="off" />
                                                <input type="hidden" value="course" name="ref" />
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                                <span class="widget-search-close"></span>
                                            </form>
                                            <ul class="courses-list-search list-unstyled"></ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- FIM do Menu Mobile -->

    <!-- Menu PC -->
    <div id="wrapper-container" class="wrapper-container">
        <div class="content-pusher">
            <header id="masthead" class="site-header affix-top bg-custom-sticky sticky-header header_overlay header_v1">
                <div id="toolbar" class="toolbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="toolbar-container">
                                    <aside id="text-2" class="widget widget_text">
                                        <div class="textwidget">
                                            <div class="thim-have-any-question">
                                                Ficou com alguma Dúvida?
                                                <div class="mobile"><i class="fa fa-whatsapp"></i><a
                                                        target="_blank"
                                                        href="https://api.whatsapp.com/send?phone={{ str_replace(' ', '', str_replace(')', '', str_replace('(', '', str_replace('-', '', setting('site.whatsapp'))))) }}"
                                                        class="value">{{ setting('site.whatsapp') }}</a>
                                                </div>
                                                <div class="mobile"><i class="fa fa-telegram"></i><a
                                                        target="_blank"
                                                        href="https://web.telegram.org/#/{{ setting('site.telegram') }}"
                                                        class="value">{{ setting('site.telegram') }}</a>
                                                </div>
                                                <div class="email"><i class="fa fa-envelope"></i><a
                                                        href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                                                </div>

                                            </div>
                                        </div>
                                    </aside>
                                    <aside id="login-popup-3" class="widget widget_login-popup">
                                        <div class="thim-widget-login-popup thim-widget-login-popup-base template-base">
                                            <div class="thim-link-login thim-login-popup">
                                                <ul class="navbar-nav ml-auto">
                                                    <!-- Authentication Links -->
                                                    @guest
                                                        @if (Route::has('register'))
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    href="{{ route('register') }}">{{ __('Inscreva-se') }}</a>
                                                            </li>
                                                        @endif
                                                        @if (Route::has('login'))
                                                            <li class="nav-item">
                                                                <a class="nav-link"
                                                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                                                            </li>
                                                        @endif
                                                    @else
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="/dashboard/"
                                                                role="button" aria-haspopup="true"
                                                                aria-expanded="false" v-pre>
                                                                {{ Auth::user()->social_name }}
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">

                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>

                                                        </li>
                                                    @endguest
                                                </ul>

                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="thim-nav-wrapper container">
                    <div class="row">
                        <div class="navigation col-sm-12">
                            <div class="tm-table">
                                <div class="width-logo table-cell sm-logo">
                                    <a href="/" title="Viva Zona Oeste" rel="home" class="thim-logo"><img
                                            width="100" style="width: 100px;"
                                            src="/storage/{{ setting('site.logo') }}" alt="Viva Zona Oeste"
                                            data-sticky="/storage/{{ setting('site.logo') }}"></a>
                                </div>
                                <nav class="width-navigation table-cell table-right">
                                    <ul class="nav navbar-nav menu-main-menu">

                                        @foreach ($menus as $menu)

                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom 
                                            tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default
                                            @if ($menu->icon_class == 'children')
                                            menu-item-has-children
                                            @endif
                                            ">
                                                @if ($menu->icon_class == 'children')
                                                    <span class="tc-menu-inner">{{ $menu->title }}</span>
                                                    <ul class="sub-menu">
                                                        @foreach ($submenus as $submenu)
                                                            @if ($submenu->parent_id == $menu->id)
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page 
                                                                tc-menu-item tc-menu-depth-1 tc-menu-align-left
                                                                @if ($submenu->icon_class == 'children')
                                                                menu-item-has-children 
                                                                @endif
                                                                ">

                                                                    @if ($submenu->icon_class == 'children')
                                                                        <span
                                                                            class="tc-menu-inner">{{ $submenu->title }}</span>
                                                                        <ul class="sub-menu">
                                                                            @foreach ($submenus as $submenu2)
                                                                                @if ($submenu2->parent_id == $submenu->id)

                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page 
                                                                                    tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                                                                        <a target="{{ $submenu2->target }}"
                                                                                            href="{{ $submenu2->url }}"
                                                                                            class="tc-menu-inner tc-megamenu-title">{{ $submenu2->title }}</a>
                                                                                    </li>

                                                                                @endif
                                                                            @endforeach

                                                                        </ul>

                                                                    @else
                                                                        <a target="{{ $submenu->target }}"
                                                                            href="{{ $submenu->url }}"
                                                                            class="tc-menu-inner tc-megamenu-title">{{ $submenu->title }}</a>
                                                                    @endif
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <a target="{{ $menu->target }}" href="{{ $menu->url }}"
                                                        class="tc-menu-inner tc-megamenu-title">
                                                        {{ $menu->title }}
                                                    </a>
                                                @endif

                                            </li>

                                        @endforeach

                                        <li class="menu-right">
                                            <ul>
                                                <li id="courses-searching-3" class="widget widget_courses-searching">
                                                    <div
                                                        class="thim-widget-courses-searching template-courses-searching">
                                                        <div class="thim-course-search-overlay">
                                                            <div class="search-toggle"><i class="fa fa-search"></i>
                                                            </div>
                                                            <div class="courses-searching layout-overlay">
                                                                <div class="search-popup-bg"></div>
                                                                <form method="get" action="#">
                                                                    <input type="text" value="" name="s"
                                                                        placeholder="Pesquisar no site..."
                                                                        class="thim-s form-control courses-search-input"
                                                                        autocomplete="off" />
                                                                    <input type="hidden" value="course" name="ref" />
                                                                    <button type="submit"><i
                                                                            class="fa fa-search"></i></button>
                                                                    <span class="widget-search-close"></span>
                                                                </form>
                                                                <ul class="courses-list-search list-unstyled"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
            <div id="main-content">


                @yield('content')


                <footer id="colophon" class="site-footer">
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <aside id="siteorigin-panels-builder-9"
                                    class="widget widget_siteorigin-panels-builder footer_widget">
                                    <div id="pl-w57e9cc2c86af4" class="panel-layout">
                                        <div id="pg-w57e9cc2c86af4-0" class="panel-grid panel-no-style">
                                            <div id="pgc-w57e9cc2c86af4-0-0" class="panel-grid-cell">
                                                <div id="panel-w57e9cc2c86af4-0-0-0"
                                                    class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child"
                                                    data-index="0">
                                                    <div class="textwidget">
                                                        <div class="thim-footer-location">
                                                            <p><img class="alignnone size-full wp-image-10"
                                                                    src="/storage/{{ setting('site.logo') }}"
                                                                    alt="Logo Viva Zona Oeste" width="145"
                                                                    height="40" /></p>
                                                            <p class="info"><i class="fa fa-whatsapp"></i>
                                                                <a target="_blank"
                                                                    href="https://api.whatsapp.com/send?phone={{ str_replace(' ', '', str_replace(')', '', str_replace('(', '', str_replace('-', '', setting('site.whatsapp'))))) }}">
                                                                    {{ setting('site.whatsapp') }}
                                                                </a>
                                                            </p>
                                                            <p class="info"><i class="fa fa-telegram"></i>
                                                                <a target="_blank"
                                                                    href="https://web.telegram.org/#/{{ setting('site.telegram') }}">
                                                                    {{ setting('site.telegram') }}
                                                                </a>
                                                            </p>
                                                            <p class="info"><i class="fa fa-envelope"></i>
                                                                <a
                                                                    href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="panel-w57e9cc2c86af4-0-0-1"
                                                    class="so-panel widget widget_social panel-last-child"
                                                    data-index="1">
                                                    <div class="thim-widget-social template-base">
                                                        <div class="thim-social">
                                                            <ul class="social_link">
                                                                <li><a class="facebook hasTooltip"
                                                                        href="{{ setting('site.facebook') }}"
                                                                        target="_blank"><i
                                                                            class="fa fa-facebook"></i></a></li>
                                                                <li><a class="instagram hasTooltip"
                                                                        href="{{ setting('site.instagram') }}"
                                                                        target="_blank"><i
                                                                            class="fa fa-instagram"></i></a></li>
                                                                <li><a class="youtube hasTooltip"
                                                                        href="{{ setting('site.youtube') }}"
                                                                        target="_blank"><i
                                                                            class="fa fa-youtube"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @foreach ($menus as $menu)

                                                <div class="panel-grid-cell">
                                                    <div
                                                        class="so-panel widget widget_nav_menu panel-first-child panel-last-child">
                                                        <h3 class="widget-title">
                                                            <a target="{{ $menu->target }}"
                                                                href="{{ $menu->url }}" class="tc-menu-inner">
                                                                {{ $menu->title }}
                                                            </a>
                                                        </h3>
                                                        @if ($menu->icon_class == 'children')
                                                            <div class="menu-company-container">
                                                                <ul id="menu-company" class="menu">
                                                                    @foreach ($submenus as $submenu)
                                                                        @if ($submenu->parent_id == $menu->id)

                                                                            <li
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page tc-menu-item tc-menu-depth-0 tc-menu-layout-default">
                                                                                <a target="{{ $menu->target }}"
                                                                                    href="{{ $submenu->url }}"
                                                                                    class="tc-menu-inner"
                                                                                    style="font-size: 11px;">{{ $submenu->title }}</a>
                                                                            </li>

                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            @endforeach


                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-area">
                        <div class="container">
                            <div class="copyright-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="text-copyright">Feitos com códigos e carinho por <a
                                                href="https://hpware.com.br">Hpware</a> - <a class="color_primary"
                                                href="http://vivazonaoeste.com.br" target="_blank"> Todos os direitos
                                                reservados para Viva Zona Oeste.</a> 
                                        </p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <aside id="nav_menu-14" class="widget widget_nav_menu">
                                            <div class="menu-privacy-container">
                                                <ul id="menu-privacy" class="menu">
                                                    <li id="menu-item-1765"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1765 tc-menu-item tc-menu-depth-0 tc-menu-layout-default">
                                                        <a href="{{setting('site.politica')}}"
                                                            class="tc-menu-inner">Política de Privacidade</a>
                                                    </li>
                                                    <li id="menu-item-1766"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1766 tc-menu-item tc-menu-depth-0 tc-menu-layout-default">
                                                        <a href="{{setting('site.termos')}}" class="tc-menu-inner">Termos
                                                            e condições de uso</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <a href="https://api.whatsapp.com/send?phone=21971499310" target="_blank" id="back-to-top" class="active" style="background-color: #47c756; border-radius: 10px;">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
    </div>


    <!-- FIM do Menu PC -->



    <div class="gallery-slider-content"></div>


    <script>
        (function() {
            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields) {
                for (var j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField);
                }
            }
        })();
    </script>
    <script data-cfasync="false" type="text/javascript">
        window.onload = function() {
            var thim_preload = document.getElementById('preload')
            if (thim_preload) {
                setTimeout(function() {
                    var body = document.getElementById('thim-body'),
                        len = body.childNodes.length,
                        class_name = body.className.replace(/(?:^|\s)thim-body-preload(?!\S)/, '').replace(
                            /(?:^|\s)thim-body-load-overlay(?!\S)/, '')

                    body.className = class_name
                    if (typeof thim_preload !== 'undefined' && thim_preload !== null) {
                        for (var i = 0; i < len; i++) {
                            if (body.childNodes[i].id !== 'undefined' && body.childNodes[i].id ==
                                'preload') {
                                body.removeChild(body.childNodes[i])
                                break
                            }
                        }
                    }
                }, 500)
            } else {

            }
        }
    </script>
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                var $ = jQuery
                var $carousel = $('.thim-owl-carousel-post').each(function() {
                    $(this).find('.image').css('min-height', 0)
                    $(window).trigger('resize')
                })
            }, 500)
        })
    </script>
    <link rel="stylesheet" property="stylesheet" id="rs-icon-set-fa-icon-css"
        href="/fonts/font-awesome/css/font-awesome.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:700%2C600%2C400" rel="stylesheet" property="stylesheet"
        media="all" type="text/css">
    <style type="text/css" media="all" id="siteorigin-panels-layouts-footer">
        /* Layout tc-megamenu-7682 */
        #pgc-tc-megamenu-7682-0-0,
        #pgc-tc-megamenu-7682-0-1 {
            width: 31%;
            width: calc(31% - (0.69 * 30px))
        }

        #pgc-tc-megamenu-7682-0-2 {
            width: 38%;
            width: calc(38% - (0.62 * 30px))
        }

        #pl-tc-megamenu-7682 .so-panel {
            margin-bottom: 30px
        }

        #pl-tc-megamenu-7682 .so-panel:last-child {
            margin-bottom: 0px
        }

        @media (max-width:767px) {

            #pg-tc-megamenu-7682-0.panel-no-style,
            #pg-tc-megamenu-7682-0.panel-has-style>.panel-row-style {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }

            #pg-tc-megamenu-7682-0>.panel-grid-cell,
            #pg-tc-megamenu-7682-0>.panel-row-style>.panel-grid-cell {
                width: 100%;
                margin-right: 0
            }

            #pgc-tc-megamenu-7682-0-0,
            #pgc-tc-megamenu-7682-0-1 {
                margin-bottom: 30px
            }

            #pg-tc-megamenu-7682-0 {
                margin-bottom: px
            }

            #pl-tc-megamenu-7682 .panel-grid-cell {
                padding: 0
            }

            #pl-tc-megamenu-7682 .panel-grid .panel-grid-cell-empty {
                display: none
            }

            #pl-tc-megamenu-7682 .panel-grid .panel-grid-cell-mobile-last {
                margin-bottom: 0px
            }
        }

        /* Layout w57e9cc2c86af4 */
        #pgc-w57e9cc2c86af4-0-0 {
            width: 33.3%;
            width: calc(33.3% - (0.667 * 30px))
        }

        #pgc-w57e9cc2c86af4-0-1,
        #pgc-w57e9cc2c86af4-0-2,
        #pgc-w57e9cc2c86af4-0-3,
        #pgc-w57e9cc2c86af4-0-4 {
            width: 16.675%;
            width: calc(16.675% - (0.83325 * 30px))
        }

        #pl-w57e9cc2c86af4 .so-panel {
            margin-bottom: 30px
        }

        #pl-w57e9cc2c86af4 .so-panel:last-child {
            margin-bottom: 0px
        }

        @media (max-width:767px) {

            #pg-w57e9cc2c86af4-0.panel-no-style,
            #pg-w57e9cc2c86af4-0.panel-has-style>.panel-row-style {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }

            #pg-w57e9cc2c86af4-0>.panel-grid-cell,
            #pg-w57e9cc2c86af4-0>.panel-row-style>.panel-grid-cell {
                width: 100%;
                margin-right: 0
            }

            #pgc-w57e9cc2c86af4-0-0,
            #pgc-w57e9cc2c86af4-0-1,
            #pgc-w57e9cc2c86af4-0-2,
            #pgc-w57e9cc2c86af4-0-3 {
                margin-bottom: 30px
            }

            #pg-w57e9cc2c86af4-0 {
                margin-bottom: px
            }

            #pl-w57e9cc2c86af4 .panel-grid-cell {
                padding: 0
            }

            #pl-w57e9cc2c86af4 .panel-grid .panel-grid-cell-empty {
                display: none
            }

            #pl-w57e9cc2c86af4 .panel-grid .panel-grid-cell-mobile-last {
                margin-bottom: 0px
            }
        }

        /* Layout w57babc3f18d14 */
        #pgc-w57babc3f18d14-0-0 {
            width: 100%;
            width: calc(100% - (0 * 30px))
        }

        #pg-w57babc3f18d14-0,
        #pl-w57babc3f18d14 .so-panel:last-child {
            margin-bottom: 0px
        }

        #pl-w57babc3f18d14 .so-panel {
            margin-bottom: 30px
        }

        #pg-w57babc3f18d14-0>.panel-row-style {
            background-position: center center;
            background-size: cover;
            min-height: 450px
        }

        @media (max-width:767px) {

            #pg-w57babc3f18d14-0.panel-no-style,
            #pg-w57babc3f18d14-0.panel-has-style>.panel-row-style {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }

            #pg-w57babc3f18d14-0>.panel-grid-cell,
            #pg-w57babc3f18d14-0>.panel-row-style>.panel-grid-cell {
                width: 100%;
                margin-right: 0
            }

            #pg-w57babc3f18d14-0 {
                margin-bottom: px
            }

            #pl-w57babc3f18d14 .panel-grid-cell {
                padding: 0
            }

            #pl-w57babc3f18d14 .panel-grid .panel-grid-cell-empty {
                display: none
            }

            #pl-w57babc3f18d14 .panel-grid .panel-grid-cell-mobile-last {
                margin-bottom: 0px
            }
        }

    </style>

    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err +=
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err +=
                    "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                var slider = document.getElementById(sliderID);
                slider.innerHTML = err;
                slider.style.display = "block";
            }
        }
    </script>
    <script type='text/javascript' src='/js/wp-polyfill.min.js' id='wp-polyfill-js'>
    </script>
    <script type='text/javascript' id='wp-polyfill-js-after'>
        ('fetch' in window) || document.write(
            '<script src="/js/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' +
            'ipt>');
        (document.contains) || document.write(
            '<script src="/js/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' +
            'ipt>');
        (window.DOMRect) || document.write(
            '<script src="/js/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' +
            'ipt>');
        (window.URL && window.URL.prototype && window.URLSearchParams) || document.write(
            '<script src="/js/wp-polyfill-url.min.js?ver=3.6.4"></scr' +
            'ipt>');
        (window.FormData && window.FormData.prototype.keys) || document.write(
            '<script src="/js/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' +
            'ipt>');
        (Element.prototype.matches && Element.prototype.closest) || document.write(
            '<script src="/js/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' +
            'ipt>');
        ('objectFit' in document.documentElement.style) || document.write(
            '<script src="/js/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' +
            'ipt>');
    </script>

    <script type='text/javascript' src='/js/jquery/ui/core.min.js' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='/js/underscore.min.js' id='underscore-js'></script>
    <script type='text/javascript' id='wp-util-js-extra'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/demo-1\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='/js/wp-util.min.js' id='wp-util-js'></script>
    <script type='text/javascript' src='/js/backbone.min.js' id='backbone-js'></script>

    <script type='text/javascript' src='/js/main.min.js' id='thim-main-js'></script>
    <script type='text/javascript' id='thim-custom-script-js-extra'>
        /* <![CDATA[ */
        var thim_js_translate = {
            "login": "Username",
            "password": "Password",
            "close": "Close"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='/js/custom-script-v2.js?v' id='thim-custom-script-js'></script>
    <script type='text/javascript' src='/js/thim-scripts.min.js' id='thim-scripts-js'></script>
    <script type='text/javascript' src='/js/mb-commingsoon.min.js' id='mb-commingsoon-js'></script>
    <script type='text/javascript' src='/js/thim-content-slider.js' id='thim-content-slider-js'></script>
    <script type='text/javascript' src='/js/jquery/jquery.waypoints.min.js' id='waypoints-js'></script>
    <script type='text/javascript' src='/js/jquery/jquery.countTo.min.js' id='thim-CountTo-js'></script>
    <script type='text/javascript' id='siteorigin-panels-front-styles-js-extra'>
        /* <![CDATA[ */
        var panelsStyles = {
            "fullContainer": "body"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='/js/styling.min.js' id='siteorigin-panels-front-styles-js'></script>

    <script type="text/javascript">
        document.body.className = document.body.className.replace("siteorigin-panels-before-js", "");
    </script>

    <script src="https://cdn.tiny.cloud/1/fd4mzcwpuw34rmsl3iz6ume8ro4laeqc550bjceq23pafs0z/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            menubar: false
        });
    </script>



</body>

</html>
