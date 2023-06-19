@extends('layouts.main')

@section('title', 'Nossos Números - Viva Zona Oeste')


@section('content')

    <section class="content-area">
        <div class="top_heading_out">
            <div class="top_site_main"
                style="color: #ffffff;background-image:url(\\storage\\{{addslashes(setting('site.img_numeros'))}});">
                <span class="overlay-top-header" style="background-color:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>Nossos Números</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="container site-content">
            <div class="row">
                <main id="main" class="site-main col-sm-12 full-width">
                    <article id="post-2901" class="post-2901 page type-page status-publish hentry pmpro-has-access">
                        <div class="entry-content">
                            <div id="pl-2901" class="panel-layout">
                                <div id="pg-2901-0" class="panel-grid panel-no-style">
                                    <div id="pgc-2901-0-0" class="panel-grid-cell">
                                        <div id="panel-2901-0-0-0"
                                            class="so-panel widget widget_heading panel-first-child panel-last-child"
                                            data-index="0">
                                            <div class="panel-widget-style panel-widget-style-for-2901-0-0-0">
                                                <div class="thim-widget-heading template-base">
                                                    <div class="sc_heading   text-center">
                                                        <h3 style="text-transform: uppercase;" class="title">Nossos Números</h3>
                                                        <span class="line"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pg-2901-1" class="panel-grid panel-no-style">
                                    <div id="pgc-2901-1-0" class="panel-grid-cell">
                                        <div id="panel-2901-1-0-0"
                                            class="so-panel widget widget_counters-box panel-first-child panel-last-child"
                                            data-index="1">
                                            <div class="thim-widget-counters-box template-base">
                                                <div class="counter-box  about-us" style="">
                                                    <div class="content-box-percentage">
                                                        <div class="wrap-percentage">
                                                            <div class="display-percentage"
                                                                data-percentage="{{setting('nossos-numeros.numero_1')}}">{{setting('nossos-numeros.numero_1')}}</div>
                                                            <div class="text_number"></div>
                                                        </div>
                                                        <div class="counter-content-container">
                                                            <div class="counter-box-content" style="">
                                                                {{setting('nossos-numeros.numero_1_legenda')}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pgc-2901-1-1" class="panel-grid-cell">
                                        <div id="panel-2901-1-1-0"
                                            class="so-panel widget widget_counters-box panel-first-child panel-last-child"
                                            data-index="2">
                                            <div class="thim-widget-counters-box template-base">
                                                <div class="counter-box  about-us" style="">
                                                    <div class="content-box-percentage">
                                                        <div class="wrap-percentage">
                                                            <div class="display-percentage"
                                                                data-percentage="{{setting('nossos-numeros.numero_2')}}">{{setting('nossos-numeros.numero_2')}}</div>
                                                            <div class="text_number"></div>
                                                        </div>
                                                        <div class="counter-content-container">
                                                            <div class="counter-box-content" style="">
                                                                {{setting('nossos-numeros.numero_2_legenda')}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pgc-2901-1-2" class="panel-grid-cell">
                                        <div id="panel-2901-1-2-0"
                                            class="so-panel widget widget_counters-box panel-first-child panel-last-child"
                                            data-index="3">
                                            <div class="thim-widget-counters-box template-base">
                                                <div class="counter-box  about-us" style="">
                                                    <div class="content-box-percentage">
                                                        <div class="wrap-percentage">
                                                            <div class="display-percentage"
                                                                data-percentage="{{setting('nossos-numeros.numero_3')}}">{{setting('nossos-numeros.numero_3')}}</div>
                                                            <div class="text_number"></div>
                                                        </div>
                                                        <div class="counter-content-container">
                                                            <div class="counter-box-content" style="">
                                                                {{setting('nossos-numeros.numero_3_legenda')}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pgc-2901-1-3" class="panel-grid-cell">
                                        <div id="panel-2901-1-3-0"
                                            class="so-panel widget widget_counters-box panel-first-child panel-last-child"
                                            data-index="4">
                                            <div
                                                class="thim-no-border panel-widget-style panel-widget-style-for-2901-1-3-0">
                                                <div class="thim-widget-counters-box template-base">
                                                    <div class="counter-box  about-us" style="">
                                                        <div class="content-box-percentage">
                                                            <div class="wrap-percentage">
                                                                <div class="display-percentage"
                                                                    data-percentage="{{setting('nossos-numeros.numero_4')}}">{{setting('nossos-numeros.numero_4')}}</div>
                                                                <div class="text_number"></div>
                                                            </div>
                                                            <div class="counter-content-container">
                                                                <div class="counter-box-content" style="">
                                                                    {{setting('nossos-numeros.numero_4_legenda')}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pg-2901-2" class="">
                                    {!! setting('nossos-numeros.texto_numeros') !!}
                                </div>
                                
                                
                            </div>
                        </div>
                    </article>
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
    <style>
        .photo-gallery {
            color: #313437;
            background-color: #fff;
        }

        .photo-gallery p {
            color: #7d8285;
        }

        .photo-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }

        @media (max-width:767px) {
            .photo-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }

        .photo-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px;
        }

        .photo-gallery .intro p {
            margin-bottom: 0;
        }

        .photo-gallery .photos {
            padding-bottom: 20px;
        }

        .photo-gallery .item {
            padding-bottom: 30px;
        }

    </style>
@endsection
