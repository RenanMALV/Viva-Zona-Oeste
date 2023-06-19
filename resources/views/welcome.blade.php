@extends('layouts.main')

@section('title', 'Viva Zona Oeste')


@section('content')

<div id="main-home-content" class="home-content home-page container" role="main">
    <div id="pl-12" class="panel-layout">
        <div id="pg-12-0" class="panel-grid panel-has-style">
            <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-12-0" data-stretch-type="full-stretched">
                <div id="pgc-12-0-0" class="panel-grid-cell">
                    <div id="panel-12-0-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="0">

                        <div class="textwidget">
                            <script data-cfasync="false" src="js/email-decode.min.js"></script>
                            <script type="text/javascript" src="js/rbtools.min.js?rev=6.4.11">
                            </script>
                            <script type="text/javascript" src="js/rs6.min.js?rev=6.4.11">
                            </script>
                            <p class="rs-p-wp-fix"></p>
                            <rs-module-wrap id="rev_slider_6_1_wrapper" data-source="gallery" style="background:transparent;padding:0;background-image:url(/storage/{{$primeiro_slide -> image}});background-repeat:no-repeat;background-size:cover;background-position:center center;">
                                <rs-module id="rev_slider_6_1" data-version="6.4.11">
                                    <rs-slides>
                                        @foreach ($slides as $slide)
                                        <rs-slide data-key="rs-{{$slide -> id}}" data-title="Slide" data-thumb="/storage/{{str_replace('\\','/',$slide -> image)}}" data-in="o:0;" data-out="a:false;">
                                            <img src="/img/dummy.webp" title="Home" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="/storage/{{str_replace('\\','/',$slide -> image)}}" data-no-retina>
                                            <rs-layer id="slider-6-slide-{{$slide -> id}}-layer-1" class="thim-slider-sub-heading" data-type="text" data-color="rgba(252, 252, 252, 1)" data-xy="xo:15px;y:m;yo:-146px,-150px,-45px,-20px;" data-text="s:24,24,20,16;l:30;fw:700,700,700,600;" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_0_chars="d:5;y:100%;o:1;rZ:-35deg;" data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:300;sp:1800;sR:300;" data-frame_1_chars="d:5;" data-frame_1_mask="u:t;" data-frame_999="o:0;e:power2.in;st:w;sp:100;sR:6200;" style="z-index:5;font-family:Roboto;">
                                                {{$slide -> litle_words}}
                                            </rs-layer>
                                            <h3 id="slider-6-slide-{{$slide -> id}}-layer-2" class="rs-layer thim-slider-heading" data-type="text" data-color="rgba(255, 255, 255, 1)" data-xy="xo:15px;y:m;yo:-75px,-85px,10px,20px;" data-text="s:100,100,48,48;l:100;fw:700;" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_0_chars="d:5;x:105%;o:1;rX:45deg;rY:0deg;rZ:90deg;" data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:200;sp:2000;sR:200;" data-frame_1_chars="d:5;" data-frame_1_mask="u:t;" data-frame_999="o:0;e:power2.in;st:w;sp:100;sR:6400;" style="z-index:6;font-family:Roboto;">
                                                {{$slide -> big_words}}
                                            </h3>
                                            @if ($slide -> button <> '')
                                                <a id="slider-6-slide-{{$slide -> id}}-layer-3" class="rs-layer thim-slider-button rev-btn" href="{{$slide -> link_button }}" target="_self" data-type="button" data-color="rgba(51, 51, 51, 1)" data-xy="xo:15px;y:m;yo:20px,10px,80px,80px;" data-text="s:13;l:20;fw:700;" data-rsp_o="off" data-rsp_bd="off" data-padding="t:10;r:30;b:10;l:30;" data-frame_0="y:100%;tp:600;" data-frame_0_mask="u:t;y:100%;" data-frame_1="tp:600;e:power2.inOut;st:1300;sp:800;sR:1300;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:power2.in;st:w;sp:100;sR:6900;" data-frame_hover="c:#333;bor:0px,0px,0px,0px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:7;font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                                                    {{$slide -> button }}
                                                </a>   
                                                                                            
                                            @endif
                                            
                                            <rs-layer id="slider-6-slide-{{$slide -> id}}-layer-4" data-type="text" data-color="rgba(191, 185, 184, 1)" data-xy="x:c;y:b;yo:40px,40px,30px,20px;" data-text="s:14;l:14;" data-actions='o:click;a:scrollbelow;offset:0;sp:300;e:none;' data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_1="e:power2.inOut;st:500;sR:500;" data-frame_999="o:0;e:nothing;st:w;sp:100;sR:8200;" style="z-index:8;font-family:Roboto;cursor:pointer;">
                                                <div class="thim-click-to-bottom"><i class="fa fas  fa-chevron-down"></i></div>
                                            </rs-layer>
                                        </rs-slide>
                                        @endforeach

                                        
                                    </rs-slides>
                                </rs-module>
                                <script type="text/javascript">
                                    setREVStartSize({
                                        c: 'rev_slider_6_1',
                                        rl: [1240, 1024, 768, 480],
                                        el: [500, 400, 400, 320],
                                        gw: [1200, 960, 768, 481],
                                        gh: [500, 400, 400, 320],
                                        type: 'standard',
                                        justify: '',
                                        layout: 'fullscreen',
                                        offsetContainer: '',
                                        offset: '',
                                        mh: "0"
                                    });
                                    var revapi6,
                                        tpj;

                                    function revinit_revslider61() {
                                        jQuery(function() {
                                            tpj = jQuery;
                                            revapi6 = tpj("#rev_slider_6_1");
                                            if (revapi6 == undefined || revapi6.revolution ==
                                                undefined) {
                                                revslider_showDoubleJqueryError(
                                                    "rev_slider_6_1");
                                            } else {
                                                revapi6.revolution({
                                                    DPR: "dpr",
                                                    sliderLayout: "fullscreen",
                                                    visibilityLevels: "1240,1024,768,480",
                                                    gridwidth: "1200,960,768,481",
                                                    gridheight: "500,400,400,320",
                                                    lazyType: "single",
                                                    spinner: "spinner2",
                                                    perspective: 600,
                                                    perspectiveType: "local",
                                                    editorheight: "500,400,400,320",
                                                    responsiveLevels: "1240,1024,768,480",
                                                    disableForceFullWidth: true,
                                                    progressBar: {
                                                        disableProgressBar: true
                                                    },
                                                    navigation: {
                                                        mouseScrollNavigation: false,
                                                        wheelCallDelay: 1000,
                                                        onHoverStop: false,
                                                        arrows: {
                                                            enable: true,
                                                            tmp: "<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
                                                            style: "zeus",
                                                            hide_onmobile: true,
                                                            hide_under: 1024,
                                                            hide_onleave: true,
                                                            left: {

                                                            },
                                                            right: {

                                                            }
                                                        }
                                                    },
                                                    fallbacks: {
                                                        panZoomDisableOnMobile: true,
                                                        allowHTML5AutoPlayOnAndroid: true
                                                    },
                                                });
                                            }

                                        });
                                    } // End of RevInitScript
                                    var once_revslider61 = false;
                                    if (document.readyState === "loading") {
                                        document.addEventListener('readystatechange', function() {
                                            if ((document.readyState === "interactive" ||
                                                    document.readyState === "complete") && !
                                                once_revslider61) {
                                                once_revslider61 = true;
                                                revinit_revslider61();
                                            }
                                        });
                                    } else {
                                        once_revslider61 = true;
                                        revinit_revslider61();
                                    }
                                </script>
                                <script>
                                    var htmlDivCss = unescape(
                                        "%23rev_slider_6_1_wrapper%20rs-loader.spinner2%7B%20background-color%3A%20%23FFFFFF%20%21important%3B%20%7D"
                                    );
                                    var htmlDiv = document.getElementById(
                                        'rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv
                                            .childNodes[0]);
                                    }
                                </script>
                                <script>
                                    var htmlDivCss = unescape(
                                        "%23rev_slider_6_1_wrapper%20.zeus.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A1000%3B%0A%20%20border-radius%3A50%25%3B%20%20%20%0A%20%20overflow%3Ahidden%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.1%29%3B%0A%7D%0A%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%27revicons%27%3B%0A%20%20font-size%3A20px%3B%0A%20%20color%3A%23ffffff%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%20%20%20%20%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce825%27%3B%0A%7D%0A%0A%23rev_slider_6_1_wrapper%20.zeus%20.tp-title-wrap%20%7B%0A%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20opacity%3A0%3B%0A%20%20transform%3Ascale%280%29%3B%0A%20%20-webkit-transform%3Ascale%280%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%20%20%20border-radius%3A50%25%3B%0A%20%7D%0A%23rev_slider_6_1_wrapper%20.zeus%20.tp-arr-imgholder%20%7B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20transform%3Atranslatex%28-100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-100%25%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%0A%20%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tp-rightarrow%20.tp-arr-imgholder%20%7B%0A%20%20%20%20transform%3Atranslatex%28100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28100%25%29%3B%0A%20%20%20%20%20%20%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows.rs-touchhover%20.tp-arr-imgholder%20%7B%0A%20%20transform%3Atranslatex%280%29%3B%0A%20%20-webkit-transform%3Atranslatex%280%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows.rs-touchhover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascale%281%29%3B%0A%20%20-webkit-transform%3Ascale%281%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%0A"
                                    );
                                    var htmlDiv = document.getElementById(
                                        'rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv
                                            .childNodes[0]);
                                    }
                                </script>
                                <script>
                                    var htmlDivCss = unescape("%0A%0A%0A");
                                    var htmlDiv = document.getElementById(
                                        'rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv
                                            .childNodes[0]);
                                    }
                                </script>
                            </rs-module-wrap>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pg-12-1" class="panel-grid panel-has-style">
            <div class="thim-best-industry panel-row-style panel-row-style-for-12-1">
                <div id="pgc-12-1-0" class="panel-grid-cell">
                    <div id="panel-12-1-0-0" class="so-panel widget widget_icon-box panel-first-child panel-last-child" data-index="1">
                        <div class="thim-widget-icon-box template-base">
                            <div class="wrapper-box-icon has_custom_image has_read_more text-left overlay " data-text-readmore="#1aa294">
                                <div class="smicon-box iconbox-left">
                                    <div class="boxes-icon" style="width: 135px;"><span class="inner-icon"><span class="icon icon-images"><img src="/img/logo-top-1.png" alt="logo-top-1" title="logo-top-1" width="85" height="85"></span></span></div>
                                    <div class="content-inner" style="width: calc( 100% - 135px - 15px);">
                                        <div class="sc-heading article_heading">
                                            <h3 class="heading__primary">Rede de Trocas</h3>
                                        </div><a class="smicon-read sc-btn" target="_self" href="/rede-trocas/" style="color: #1aa294;">Faça parte<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pgc-12-1-1" class="panel-grid-cell">
                    <div id="panel-12-1-1-0" class="so-panel widget widget_icon-box panel-first-child panel-last-child" data-index="2">
                        <div class="thim-widget-icon-box template-base">
                            <div class="wrapper-box-icon has_custom_image has_read_more text-left overlay " data-text-readmore="#1aa294">
                                <div class="smicon-box iconbox-left">
                                    <div class="boxes-icon" style="width: 132px;"><span class="inner-icon"><span class="icon icon-images"><img src="/img/logo-top-2.png" alt="logo-top-2" title="logo-top-2" width="85" height="85"></span></span></div>
                                    <div class="content-inner" style="width: calc( 100% - 132px - 15px);">
                                        <div class="sc-heading article_heading">
                                            <h3 class="heading__primary">Cursos</h3>
                                        </div><a class="smicon-read sc-btn" target="_self" href="/cursos/" style="color: #1aa294;">Veja todos<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pgc-12-1-2" class="panel-grid-cell">
                    <div id="panel-12-1-2-0" class="so-panel widget widget_icon-box panel-first-child panel-last-child" data-index="3">
                        <div class="thim-widget-icon-box template-base">
                            <div class="wrapper-box-icon has_custom_image has_read_more text-left overlay " data-text-readmore="#1aa294">
                                <div class="smicon-box iconbox-left">
                                    <div class="boxes-icon" style="width: 135px;"><span class="inner-icon"><span class="icon icon-images"><img src="/img/logo-top-3.png" alt="logo-top-3" title="logo-top-3" width="85" height="85"></span></span></div>
                                    <div class="content-inner" style="width: calc( 100% - 135px - 15px);">
                                        <div class="sc-heading article_heading">
                                            <h3 class="heading__primary">Serviços</h3>
                                        </div><a class="smicon-read sc-btn" target="_self" href="/envie-sua-noticia/create" style="color: #1aa294;">Contrate<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pg-12-2" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-12-2">
                <div id="pgc-12-2-0" class="panel-grid-cell">
                    <div id="panel-12-2-0-0" class="so-panel widget widget_heading panel-first-child" data-index="4">
                        <div class="thim-widget-heading template-base">
                            <div class="sc_heading   text-center">
                                <h2 style="text-transform: uppercase;" class="title">{{setting('site.primeira_sessao')}}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pg-12-2" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-12-2">
                <div id="pgc-12-2-0" class="panel-grid-cell">
                    <div id="panel-12-2-0-0" class="so-panel widget widget_heading panel-first-child" data-index="4">
                        <div class="thim-widget-heading template-base">
                            <div class="sc_heading   text-left">
                                <h3 style="text-transform: uppercase;" class="title">Cursos do Viva Zona Oeste
                                </h3><span class="line"></span>
                            </div>
                        </div>
                    </div>
                    <div id="panel-12-2-0-1" class="so-panel widget widget_courses" data-index="5">
                        <div class="thim-widget-courses template-courses">
                            <div class="thim-carousel-wrapper thim-course-carousel thim-course-grid" data-visible="4" data-pagination="" data-navigation="1" data-autoplay="0">
                                
                                @foreach ($cursos as $curso)
                                <div class="course-item">
                                    <div class="course-thumbnail">
                                        <a href="/curso/{{$curso -> slug}}/">
                                            <img src="/storage/{{$curso -> imagem}}" alt="{{ $curso -> name}}" title="course-4" width="400" height="300"> </a>
                                        <a class="course-readmore" href="/curso/{{$curso -> slug}}">Saiba Mais</a>
                                    </div>
                                    <div class="thim-course-content">
                                        <h2 class="course-title"><a href="/curso/{{$curso -> slug}}" rel="bookmark">{{ $curso -> name}}</a></h2>
                                        <div class="course-meta">
                                            
                                            <div class="clearfix"></div>
                                            <div class="course-students">
                                                <label>inscritos</label>
                                                <div class="value"><i class="fa fa-group"></i>
                                                    422 </div>
                                                <span>inscritos</span>
                                            </div>
                                            
                                            <div class="course-price" itemprop="offers" itemscope="">
                                                <div class="value  free-course" itemprop="price">
                                                    @if ($curso -> valor == 0)
                                                        Grátis
                                                    @else
                                                        R$ {{$curso -> valor}}  
                                                    @endif
                                                </div>
                                                <meta itemprop="priceCurrency" content="BRL" />
                                            </div>
                                        </div>
                                        <div class="course-price" itemprop="offers" itemscope="">
                                            <div class="value  free-course" itemprop="price">
                                                @if ($curso -> valor == 0)
                                                    Grátis
                                                @else
                                                    R$ {{$curso -> valor}}  
                                                @endif
                                            </div>
                                            <meta itemprop="priceCurrency" content="BRL" />
                                        </div>
                                        <div class="course-readmore">
                                            <a href="https://eduma.thimpress.com/demo-1/courses/learnpress-101/">Saiba Mais</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </div>
                    </div>
                    <div id="panel-12-2-0-2" class="so-panel widget widget_button panel-last-child" data-index="6">
                        <div class="panel-widget-style panel-widget-style-for-12-2-0-2">
                            <div class="thim-widget-button template-base"><a class="widget-button tiny-rounded medium" href="courses/">Veja Todos</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;" id="pg-12-3" class="panel-grid panel-has-style">
            <div class="thim-bg-overlay siteorigin-panels-stretch panel-row-style panel-row-style-for-12-3" data-stretch-type="full">
                <div id="pgc-12-3-0" class="panel-grid-cell">
                    <div id="panel-12-3-0-0" class="so-panel widget widget_text panel-first-child" data-index="7">
                        <div class="textwidget">
                            <div class="thim-get-100s">
                                <p class="get-100s">Get 100s of online <span class="thim-color">Courses
                                        For Free</span></p>
                                <h2>Register Now</h2>
                            </div>
                        </div>
                    </div>
                    <div id="panel-12-3-0-1" class="so-panel widget widget_countdown-box panel-last-child" data-index="8">
                        <div class="thim-widget-countdown-box template-countdown-box">
                            <div class="text-left color-white" id="coming-soon-counter611a7cf35c708">
                            </div>
                            <script data-cfasync="true" type="text/javascript">
                                (function($) {
                                    'use strict';
                                    $(document).ready(function() {
                                        if (jQuery().mbComingsoon) {
                                            $("#coming-soon-counter611a7cf35c708")
                                                .mbComingsoon({
                                                    expiryDate: new Date(
                                                        '2021/12/25 01:00'),
                                                    localization: {
                                                        days: "days",
                                                        hours: "hours",
                                                        minutes: "minutes",
                                                        seconds: "seconds",
                                                    },
                                                    speed: 100,
                                                });
                                            setTimeout(function() {
                                                jQuery(window).resize();
                                            }, 200);
                                        }
                                    });
                                })(jQuery);
                            </script>
                        </div>
                    </div>
                </div>
                <div id="pgc-12-3-1" class="panel-grid-cell">
                    <div id="panel-12-3-1-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="9">
                        <div class="textwidget">
                            <div class="thim-register-now-form">
                                <h3 class="title"><span>Create your free account now and get immediate
                                        access to 100s of online courses.</span></h3>
                                <div role="form" class="wpcf7" id="wpcf7-f85-p12-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form action="/demo-1/#wpcf7-f85-p12-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="85" />
                                            <input type="hidden" name="_wpcf7_version" value="5.4.1" />
                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f85-p12-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="12" />
                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                        </div>
                                        <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name *" /></span> </p>
                                        <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email *" /></span> </p>
                                        <p><span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone *" /></span></p>
                                        <p><input type="submit" value="Get It Now" class="wpcf7-form-control wpcf7-submit" /></p>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;" id="pg-12-4" class="panel-grid panel-no-style">
            <div id="pgc-12-4-0" class="panel-grid-cell">
                <div id="panel-12-4-0-0" class="so-panel widget widget_heading panel-first-child" data-index="10">
                    <div class="thim-widget-heading template-base">
                        <div class="sc_heading   text-left">
                            <h3 style="text-transform: uppercase;" class="title">Events</h3>
                            <p class="sub-heading">Upcoming Education Events to feed your
                                brain.</p><span class="line"></span>
                        </div>
                    </div>
                </div>
                <div id="panel-12-4-0-1" class="so-panel widget widget_list-event panel-last-child" data-index="11">
                    <div class="thim-widget-list-event template-list-event">
                        <div class="thim-list-event"><a class="view-all" href="https://eduma.thimpress.com/demo-1/events/">View All</a>
                            <div class="item-event post-3063 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                <div class="time-from">
                                    <div class="date">
                                        30 </div>
                                    <div class="month">
                                        September </div>
                                </div>
                                <div class="image"><img src="https://eduma.thimpress.com/demo-1/wp-content/uploads/sites/89/2015/06/course-7-450x233.jpg" alt="course-7" title="course-7" width="450" height="233"></div>
                                <div class="event-wrapper">
                                    <h5 class="title">
                                        <a href="https://eduma.thimpress.com/demo-1/events/summer-school-2019/">
                                            Summer School 2019</a>
                                    </h5>
                                    <div class="meta">
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i>
                                            08:00 - 17:00
                                        </div>
                                        <div class="location">
                                            <i class="fas fa-map-marker"></i>
                                            NewYork, USA
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                            auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-event post-3062 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                <div class="time-from">
                                    <div class="date">
                                        15 </div>
                                    <div class="month">
                                        December </div>
                                </div>
                                <div class="image"><img src="https://eduma.thimpress.com/demo-1/wp-content/uploads/sites/89/2015/06/course-6-450x233.jpg" alt="course-6" title="course-6" width="450" height="233"></div>
                                <div class="event-wrapper">
                                    <h5 class="title">
                                        <a href="https://eduma.thimpress.com/demo-1/events/eduma-autumn-2019/">
                                            Eduma Autumn 2019</a>
                                    </h5>
                                    <div class="meta">
                                        <div class="time">
                                            <i class="fa fa-clock-o"></i>
                                            08:00 - 17:00
                                        </div>
                                        <div class="location">
                                            <i class="fas fa-map-marker"></i>
                                            Venice, Italy
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                            auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pg-12-5" class="panel-grid panel-has-style">
            <div class="thim-bg-overlay siteorigin-panels-stretch panel-row-style panel-row-style-for-12-5" data-stretch-type="full">
                <div id="pgc-12-5-0" class="panel-grid-cell">
                    <div id="panel-12-5-0-0" class="so-panel widget widget_heading panel-first-child" data-index="12">
                        <div class="panel-widget-style panel-widget-style-for-12-5-0-0">
                            <div class="thim-widget-heading template-base">
                                <div class="sc_heading   text-left">
                                    <h3 style="text-transform: uppercase;color:#ffffff;" class="title">
                                        Últimas Notícias</h3>
                                    <p class="sub-heading" style="color:#ffffff;">Acompanhe as últimas notícias do Viva Zona Oeste.</p><span style="background-color:#ffffff" class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_carousel-post panel-last-child" data-index="13">
                        <div class="thim-widget-carousel-post template-carousel-post">

                            <div class="thim-owl-carousel-post thim-carousel-wrapper" data-visible="3" data-pagination="0" data-navigation="1" data-autoplay="0">
                                
                                @foreach ($ultimas as $noticia)
                                <div class="item">
                                    <div class="image">
                                        <a href="/noticia/{{$noticia->slug}}">
                                            <img src="/storage/{{$noticia->image}}" alt="{{$noticia->title}}" width="450" height="300" style="width: 450px; height: 300px; object-fit: scale-down;"> </a>
                                    </div>
                                    <div class="content">
                                        <div class="info">
                                            <div class="date">
                                                
                                                {{$noticia->created_at->formatLocalized('%d de %B de %Y') }} 
                                            </div>
                                        </div>
                                        <h4 class="title">
                                            <a href="/noticia/{{$noticia->slug}}">{{$noticia->title}}</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pg-12-6" class="panel-grid panel-no-style">
            <div id="pgc-12-6-0" class="panel-grid-cell">
                <div id="panel-12-6-0-0" class="so-panel widget widget_heading panel-first-child" data-index="14">
                    <div class="thim-widget-heading template-base">
                        <div class="sc_heading   text-center">
                            <h3 style="text-transform: uppercase;" class="title">Nossos Números</h3>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div id="panel-12-6-0-1" class="so-panel widget widget_testimonials panel-last-child" data-index="15">
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
        </div>
        <div id="pg-12-6" class="panel-grid panel-no-style">
            <div id="pgc-12-6-0" class="panel-grid-cell">
                <div id="panel-12-6-0-0" class="so-panel widget widget_heading panel-first-child" data-index="14">
                    <div class="thim-widget-heading template-base">
                        <div class="sc_heading   text-center">
                            <h3 style="text-transform: uppercase;" class="title">Depoimentos</h3>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div id="panel-12-6-0-1" class="so-panel widget widget_testimonials panel-last-child" data-index="15">
                    <div class="thim-widget-testimonials template-testimonials">
                        <div class="thim-testimonial-slider" data-time="10000" data-visible="5" data-auto="1" data-mousewheel="0">

                            @foreach ($depoimentos as $depoimento)
                                
                            <div class="item">
                                <div class="image"><img src="/storage/{{$depoimento -> foto}}" alt="team-5" title="team-5" width="100" height="100" style="width: 100px; height: 100px;" data-skip-lazy></div>
                                <div class="content">
                                    <h3 class="title">{{$depoimento -> nome}}</h3>
                                    <div class="regency">{{$depoimento -> cargo}}</div>
                                    <div class="description">
                                        <p>{{$depoimento -> depoimento}}</p>
                                    </div>
                                </div>
                            </div>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div id="pg-12-7" class="panel-grid panel-no-style">
            <div id="pgc-12-7-0" class="panel-grid-cell">
                <div id="panel-12-7-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="16">
                    <div class="textwidget">
                        <div class="thim-newlleter-homepage">
                            <p class="description">Subscribe now and receive weekly newsletter with
                                educational materials, new courses, interesting posts, popular books and
                                much more!</p>
                            <script>
                                (function() {
                                    window.mc4wp = window.mc4wp || {
                                        listeners: [],
                                        forms: {
                                            on: function(evt, cb) {
                                                window.mc4wp.listeners.push({
                                                    event: evt,
                                                    callback: cb
                                                });
                                            }
                                        }
                                    }
                                })();
                            </script>
                            <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-3101 mc4wp-form-basic" method="post" data-id="3101" data-name="Default sign-up form">
                                <div class="mc4wp-form-fields"><input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email here" required />
                                    <input type="submit" value="Subscribe" />
                                </div><label style="display: none !important;">Leave this field empty if you're
                                    human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1629125875" /><input type="hidden" name="_mc4wp_form_id" value="3101" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                <div class="mc4wp-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
</div>

</div>

@endsection



@section('css_of_page')
<link rel='stylesheet' id='thim-style-options-css' href='/css/main.css' type='text/css' media='all' />

<style type="text/css" media="all" id="siteorigin-panels-layouts-head">
    /* Layout 12 */
    #pgc-12-0-0,
    #pgc-12-2-0,
    #pgc-12-4-0,
    #pgc-12-5-0,
    #pgc-12-6-0,
    #pgc-12-7-0 {
        width: 100%;
        width: calc(100% - (0 * 30px))
    }

    #pg-12-0,
    #pg-12-1,
    #pg-12-3,
    #pg-12-4,
    #pg-12-5,
    #pl-12 .so-panel {
        margin-bottom: 30px
    }

    #pgc-12-1-0,
    #pgc-12-1-1,
    #pgc-12-1-2 {
        width: 33.3333%;
        width: calc(33.3333% - (0.666666666667 * 4px))
    }

    #pg-12-2,
    #pl-12 .so-panel:last-child {
        margin-bottom: 0px
    }

    #pgc-12-3-0,
    #pgc-12-3-1 {
        width: 50%;
        width: calc(50% - (0.5 * 30px))
    }

    #pg-12-6 {
        margin-bottom: 65px
    }

    #pg-12-0.panel-no-style,
    #pg-12-0.panel-has-style>.panel-row-style,
    #pg-12-2.panel-no-style,
    #pg-12-2.panel-has-style>.panel-row-style,
    #pg-12-3.panel-no-style,
    #pg-12-3.panel-has-style>.panel-row-style,
    #pg-12-5.panel-no-style,
    #pg-12-5.panel-has-style>.panel-row-style {
        -webkit-align-items: flex-start;
        align-items: flex-start
    }

    #pg-12-2>.panel-row-style {
        padding: 0px 0px 100px 0px
    }

    #panel-12-2-0-2>.panel-widget-style {
        text-align: center
    }

    #pg-12-3>.panel-row-style {
        background-image: url(/img/bg_register_now.jpg);
        background-position: center center;
        background-size: cover;
        min-height: 615px
    }

    #pgc-12-3-0 {
        align-self: auto
    }

    #pg-12-5>.panel-row-style {
        background-image: url(/img/bg_lastest_new.jpg);
        background-position: center center;
        background-size: cover;
        padding-bottom: 85px
    }

    #panel-12-5-0-0>.panel-widget-style {
        padding: 30px 0px 0px
    }

    @media (max-width:767px) {

        #pg-12-0.panel-no-style,
        #pg-12-0.panel-has-style>.panel-row-style,
        #pg-12-1.panel-no-style,
        #pg-12-1.panel-has-style>.panel-row-style,
        #pg-12-2.panel-no-style,
        #pg-12-2.panel-has-style>.panel-row-style,
        #pg-12-3.panel-no-style,
        #pg-12-3.panel-has-style>.panel-row-style,
        #pg-12-4.panel-no-style,
        #pg-12-4.panel-has-style>.panel-row-style,
        #pg-12-5.panel-no-style,
        #pg-12-5.panel-has-style>.panel-row-style,
        #pg-12-6.panel-no-style,
        #pg-12-6.panel-has-style>.panel-row-style,
        #pg-12-7.panel-no-style,
        #pg-12-7.panel-has-style>.panel-row-style {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        #pg-12-0>.panel-grid-cell,
        #pg-12-0>.panel-row-style>.panel-grid-cell,
        #pg-12-1>.panel-grid-cell,
        #pg-12-1>.panel-row-style>.panel-grid-cell,
        #pg-12-2>.panel-grid-cell,
        #pg-12-2>.panel-row-style>.panel-grid-cell,
        #pg-12-3>.panel-grid-cell,
        #pg-12-3>.panel-row-style>.panel-grid-cell,
        #pg-12-4>.panel-grid-cell,
        #pg-12-4>.panel-row-style>.panel-grid-cell,
        #pg-12-5>.panel-grid-cell,
        #pg-12-5>.panel-row-style>.panel-grid-cell,
        #pg-12-6>.panel-grid-cell,
        #pg-12-6>.panel-row-style>.panel-grid-cell,
        #pg-12-7>.panel-grid-cell,
        #pg-12-7>.panel-row-style>.panel-grid-cell {
            width: 100%;
            margin-right: 0
        }

        #pg-12-0,
        #pg-12-1,
        #pg-12-2,
        #pg-12-3,
        #pg-12-4,
        #pg-12-5,
        #pg-12-6,
        #pg-12-7 {
            margin-bottom: px
        }

        #pgc-12-1-0,
        #pgc-12-1-1,
        #pgc-12-3-0 {
            margin-bottom: 30px
        }

        #pl-12 .panel-grid-cell {
            padding: 0
        }

        #pl-12 .panel-grid .panel-grid-cell-empty {
            display: none
        }

        #pl-12 .panel-grid .panel-grid-cell-mobile-last {
            margin-bottom: 0px
        }

        #pg-12-2>.panel-row-style {
            padding: 0px 0px 60px 0px
        }
    }
</style>
@endsection

@section('js_of_page')
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
@endsection