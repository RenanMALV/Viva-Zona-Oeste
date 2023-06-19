@extends('layouts.main')

@section('title')
    {{$curso -> name}} - Viva Zona Oeste
@endsection


@section('content')

    <section class="content-area">
        <div class="top_heading_out">
            <div class="top_site_main"
                style="color: #ffffff;background-image:url(\\storage\\{{ $curso -> imagem }});">
                <span class="overlay-top-header" style="background-color:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>{{$curso -> name}}</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="container sidebar-right site-content">
            <div class="row">
                <main id="main" class="site-main col-sm-12 alignleft">
                    <div id="lp-single-course" class="lp-single-course learn-press-4">
                        <div id="learn-press-course" class="course-summary learn-press">
                            <div class="course-info">
                                
                                <div class="course-meta">
                                    <h1 class="entry-title" itemprop="name">{{$curso -> name}}</h1>
                                </div>
                                <div class="course-payment">
                                    <div class="course-price">
                                        <div class="value  free-course">
                                            @if ($curso->valor == 0)
                                                            Gratuito
                                                        @else
                                                            R$ {{ $curso->valor }}
                                                        @endif
                                        </div>
                                    </div>
                                    <div class="lp-course-buttons">
                                        <form name="enroll-course" class="enroll-course" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="enroll-course" value="5428" />
                                            <button class="lp-button button button-enroll-course">
                                                Inscrever-se </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="course-summary">
                                    <div>
                                        <div class="course-thumbnail">
                                            <div class="media-intro">
                                                <div class="responsive-iframe">
                                                    <iframe width="900"
                                                        height="500"
                                                        src="{{$curso -> preview}}"
                                                        frameborder="0" allow="autoplay; encrypted-media"
                                                        allowfullscreen></iframe></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-content course-summary-content">
                                        <div class="thim-course-menu-landing">
                                            <div class="container">
                                                <ul class="thim-course-landing-tab">
                                                    <li role="presentation" class="course-nav-tab-overview">
                                                        <a href="#tab-overview">Visão Geral</a>
                                                    </li>
                                                    <li role="presentation"
                                                        class="course-nav-tab-curriculum">
                                                        <a href="#tab-curriculum">Atividades</a>
                                                    </li>
                                                    <li role="presentation"
                                                        class="course-nav-tab-mural">
                                                        <a href="#tab-mural">Mural</a>
                                                    </li>

                                                </ul>
                                                <div class="thim-course-landing-button">
                                                    <div class="course-price">
                                                        <div class="value  free-course">
                                                            @if ($curso->valor == 0)
                                                            Gratuito
                                                        @else
                                                            R$ {{ $curso->valor }}
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="lp-course-buttons">
                                                        <form name="enroll-course" class="enroll-course"
                                                            method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="enroll-course"
                                                                value="5428" />
                                                            <button
                                                                class="lp-button button button-enroll-course">
                                                                Inscrever-se </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lp-entry-content lp-content-area">
                                            <div class="entry-content-left">
                                                <div id="learn-press-course-tabs" class="course-tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li role="presentation"
                                                            class="course-nav-tab-overview active">
                                                            <a href="#tab-overview" data-toggle="tab">
                                                                <i class="fa fa-bookmark"></i>
                                                                <span>Visão Geral</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation"
                                                            class="course-nav-tab-curriculum">
                                                            <a href="#tab-curriculum" data-toggle="tab">
                                                                <i class="fa fa-cube"></i>
                                                                <span>Atividades</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation"
                                                            class="course-nav-tab-mural">
                                                            <a href="#tab-mural" data-toggle="tab">
                                                                <i class="fas fa-chalkboard"></i>
                                                                <span>Mural</span>
                                                            </a>
                                                        </li>
                                                        
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane course-tab-panel-overview course-tab-panel active"
                                                            id="tab-overview">
                                                            <div class="course-description"
                                                                id="learn-press-course-description">
                                                                <div class="thim-course-content" style="width: 100%;">
                                                                    {!! $curso ->  resume !!}
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane course-tab-panel-curriculum course-tab-panel"
                                                            id="tab-curriculum">
                                                            <div class="course-curriculum"
                                                                id="learn-press-course-curriculum">
                                                                <div class="curriculum-scrollable">
                                                                    <ul class="curriculum-sections">
                                                                        @foreach ($categorias as $categoria)

                                                                            <li class="section">
                                                                                <h4 class="section-header">
                                                                                    <div class="section-left">
                                                                                        <span class="section-toggle collapse"></span>
                                                                                            {{$categoria -> Category}}
                                                                                        <span class="meta">
                                                                                            <span class="step"></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </h4>
                                                                                <ul class="section-content">    
                                                                                    
                                                                                    @foreach ($curriculos as $curriculo)
                                                                                        @if ($curriculo -> Category == $categoria -> Category)
                                                                                        <li class="course-item course-item-lp_lesson item-preview has-status">
                                                                                            <div class="meta-left">
                                                                                                <span
                                                                                                    class="course-format-icon"><i
                                                                                                        class="fa fa-file-o"></i></span>
                                                                                                <div class="index">
                                                                                                    <span
                                                                                                        class="label"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <a class="lesson-title course-item-title button-load-item" href="/curso/aula/{{$curriculo -> slug}}">
                                                                                                <span
                                                                                                    class="item-name"> {{$curriculo -> title}} </span>
                                                                                            </a>
                                                                                            <div
                                                                                                class="course-item-meta">
                                                                                                <span class="meta duration">{{$curriculo -> duration}}</span>
                                                                                                <a title="Previews" class="lesson-preview button-load-item" href="/curso/aula/{{$curriculo -> slug}}">
                                                                                                    <i class="fa fa-eye" data-preview="Preview"></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </li>
                                                                                        @endif
                                                                                    
                                                                                    @endforeach
                                                                                </ul>
                                                                            </li>
                                                                            
                                                                            
                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="tab-pane course-tab-panel-mural course-tab-panel"
                                                            id="tab-mural">
                                                            <div class="course-description"
                                                                id="learn-press-course-description">
                                                                <div class="thim-course-content" style="width: 100%;">
                                                                    {!! $curso ->  mural !!}
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php /*
                                    <div class="social_share">
                                        <ul class="thim-social-share">
                                            <li class="heading">Compartilhar:</li>
                                            <li>
                                                <div class="facebook-social"><a target="_blank"
                                                        class="facebook"
                                                        href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fcourses%2Flearnpress-101%2F"
                                                        title="Facebook"><i class="fa fa-facebook"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="googleplus-social"><a target="_blank"
                                                        class="googleplus"
                                                        href="https://plus.google.com/share?url=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fcourses%2Flearnpress-101%2F&amp;title=LMS%20Interactive%20Content"
                                                        title="Google Plus"
                                                        onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;'><i
                                                            class="fa fa-google"></i></a></div>
                                            </li>
                                            <li>
                                                <div class="twitter-social"><a target="_blank"
                                                        class="twitter"
                                                        href="https://twitter.com/share?url=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fcourses%2Flearnpress-101%2F&amp;text=LMS%20Interactive%20Content"
                                                        title="Twitter"><i class="fa fa-twitter"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pinterest-social"><a target="_blank"
                                                        class="pinterest"
                                                        href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fcourses%2Flearnpress-101%2F&amp;description=A%20WordPress%20LMS%20Plugin%20to%20create%20WordPress%20Learning%20Management%20System.%20Turn%20your%20WP%20to%20LMS%20WordPress%20with%20Courses%2C%20Lessons%2C%20Quizzes%20%26amp%3B%20more.%20&amp;media=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fwp-content%2Fuploads%2Fsites%2F89%2F2015%2F11%2Fcourse-4.jpg"
                                                        onclick="window.open(this.href); return false;"
                                                        title="Pinterest"><i
                                                            class="fa fa-pinterest-p"></i></a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    */ ?>

                                </div>
                            </div>
                            
                        </div>
                        <script data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script type="text/javascript">
                            function moOpenIdLogin(app_name, is_custom_app) {
                                var base_url = 'https://eduma.thimpress.com/demo-1';
                                var request_uri = '/demo-1/courses/learnpress-101/';
                                var http = 'https://';
                                var http_host = 'eduma.thimpress.com';
                                if (is_custom_app == 'false') {
                                    if (request_uri.indexOf('wp-login.php') != -1) {
                                        var redirect_url = base_url + '/?option=getmosociallogin&app_name=';

                                    } else {
                                        var redirect_url = http + http_host + request_uri;
                                        if (redirect_url.indexOf('?') != -1) {
                                            redirect_url = redirect_url +
                                                '&option=getmosociallogin&app_name=';
                                        } else {
                                            redirect_url = redirect_url +
                                                '?option=getmosociallogin&app_name=';
                                        }
                                    }
                                } else {
                                    var current_url = window.location.href;
                                    var cname = 'redirect_current_url';
                                    var d = new Date();
                                    d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));
                                    var expires = 'expires=' + d.toUTCString();
                                    document.cookie = cname + '=' + current_url + ';' + expires +
                                    ';path=/'; //path = root path(/)
                                    if (request_uri.indexOf('wp-login.php') != -1) {
                                        var redirect_url = base_url + '/?option=oauthredirect&app_name=';
                                    } else {
                                        var redirect_url = http + http_host + request_uri;
                                        if (redirect_url.indexOf('?') != -1)
                                            redirect_url = redirect_url + '&option=oauthredirect&app_name=';
                                        else
                                            redirect_url = redirect_url + '?option=oauthredirect&app_name=';
                                    }
                                }
                                var redirect_to = jQuery('#loginform input[name="redirect_to"]').val();
                                redirect_url = redirect_url + app_name + '&redirect_to=' +
                                    encodeURIComponent(redirect_to);
                                window.location.href = redirect_url;
                            }
                        </script>
                        <script type="text/javascript">
                            function moOpenIdLogin(app_name, is_custom_app) {
                                var base_url = 'https://eduma.thimpress.com/demo-1';
                                var request_uri = '/demo-1/courses/learnpress-101/';
                                var http = 'https://';
                                var http_host = 'eduma.thimpress.com';
                                if (is_custom_app == 'false') {
                                    if (request_uri.indexOf('wp-login.php') != -1) {
                                        var redirect_url = base_url + '/?option=getmosociallogin&app_name=';

                                    } else {
                                        var redirect_url = http + http_host + request_uri;
                                        if (redirect_url.indexOf('?') != -1) {
                                            redirect_url = redirect_url +
                                                '&option=getmosociallogin&app_name=';
                                        } else {
                                            redirect_url = redirect_url +
                                                '?option=getmosociallogin&app_name=';
                                        }
                                    }
                                } else {
                                    var current_url = window.location.href;
                                    var cname = 'redirect_current_url';
                                    var d = new Date();
                                    d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));
                                    var expires = 'expires=' + d.toUTCString();
                                    document.cookie = cname + '=' + current_url + ';' + expires +
                                    ';path=/'; //path = root path(/)
                                    if (request_uri.indexOf('wp-login.php') != -1) {
                                        var redirect_url = base_url + '/?option=oauthredirect&app_name=';
                                    } else {
                                        var redirect_url = http + http_host + request_uri;
                                        if (redirect_url.indexOf('?') != -1)
                                            redirect_url = redirect_url + '&option=oauthredirect&app_name=';
                                        else
                                            redirect_url = redirect_url + '?option=oauthredirect&app_name=';
                                    }
                                }
                                var redirect_to = jQuery('#loginform input[name="redirect_to"]').val();
                                redirect_url = redirect_url + app_name + '&redirect_to=' +
                                    encodeURIComponent(redirect_to);
                                window.location.href = redirect_url;
                            }
                        </script>
                    </div>
                </main>
            </div>
        </div>
    </section>

@endsection


@section('css_of_page')
    <link rel='stylesheet' id='thim-style-options-css' href='/css/viva.1612509927.css' type='text/css' media='all' />

    <style type="text/css" media="all" id="siteorigin-panels-layouts-head">
        /* Layout 2901 */
        #pgc-2901-0-0,
        #pgc-2901-2-0,
        #pgc-2901-4-0,
        #pgc-2901-5-0,
        #pgc-2901-6-0 {
            width: 100%;
            width: calc(100% - (0 * 30px))
        }

        #pg-2901-0,
        #pg-2901-1,
        #pg-2901-2,
        #pg-2901-4,
        #pg-2901-5,
        #pl-2901 .so-panel {
            margin-bottom: 30px
        }

        #pgc-2901-1-0,
        #pgc-2901-1-1,
        #pgc-2901-1-2,
        #pgc-2901-1-3 {
            width: 25%;
            width: calc(25% - (0.75 * 30px))
        }

        #pgc-2901-3-0,
        #pgc-2901-3-2 {
            width: 96%;
            width: calc(96% - (0.52 * 30px))
        }

        #pgc-2901-3-1 {
            width: 4%;
            width: calc(4% - (0.96 * 30px))
        }

        #pg-2901-3 {
            margin-bottom: 93px
        }

        #pl-2901 .so-panel:last-child {
            margin-bottom: 0px
        }

        #panel-2901-0-0-0>.panel-widget-style {
            padding: 30px 0px 0px
        }

        #pg-2901-4>.panel-row-style {
            background-image: url(https://eduma.thimpress.com/demo-1/wp-content/uploads/sites/89/2015/11/bg-parallax-about-us.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            min-height: 460px
        }

        @media (max-width:767px) {

            #pg-2901-0.panel-no-style,
            #pg-2901-0.panel-has-style>.panel-row-style,
            #pg-2901-1.panel-no-style,
            #pg-2901-1.panel-has-style>.panel-row-style,
            #pg-2901-2.panel-no-style,
            #pg-2901-2.panel-has-style>.panel-row-style,
            #pg-2901-3.panel-no-style,
            #pg-2901-3.panel-has-style>.panel-row-style,
            #pg-2901-4.panel-no-style,
            #pg-2901-4.panel-has-style>.panel-row-style,
            #pg-2901-5.panel-no-style,
            #pg-2901-5.panel-has-style>.panel-row-style,
            #pg-2901-6.panel-no-style,
            #pg-2901-6.panel-has-style>.panel-row-style {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }

            #pg-2901-0>.panel-grid-cell,
            #pg-2901-0>.panel-row-style>.panel-grid-cell,
            #pg-2901-1>.panel-grid-cell,
            #pg-2901-1>.panel-row-style>.panel-grid-cell,
            #pg-2901-2>.panel-grid-cell,
            #pg-2901-2>.panel-row-style>.panel-grid-cell,
            #pg-2901-3>.panel-grid-cell,
            #pg-2901-3>.panel-row-style>.panel-grid-cell,
            #pg-2901-4>.panel-grid-cell,
            #pg-2901-4>.panel-row-style>.panel-grid-cell,
            #pg-2901-5>.panel-grid-cell,
            #pg-2901-5>.panel-row-style>.panel-grid-cell,
            #pg-2901-6>.panel-grid-cell,
            #pg-2901-6>.panel-row-style>.panel-grid-cell {
                width: 100%;
                margin-right: 0
            }

            #pg-2901-0,
            #pg-2901-1,
            #pg-2901-2,
            #pg-2901-3,
            #pg-2901-4,
            #pg-2901-5,
            #pg-2901-6 {
                margin-bottom: px
            }

            #pgc-2901-1-0,
            #pgc-2901-1-1,
            #pgc-2901-1-2,
            #pgc-2901-3-0,
            #pgc-2901-3-1 {
                margin-bottom: 30px
            }

            #pl-2901 .panel-grid-cell {
                padding: 0
            }

            #pl-2901 .panel-grid .panel-grid-cell-empty {
                display: none
            }

            #pl-2901 .panel-grid .panel-grid-cell-mobile-last {
                margin-bottom: 0px
            }
        }

    </style>
@endsection
