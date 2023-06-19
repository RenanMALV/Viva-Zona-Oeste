@extends('layouts.aulas')

@section('title')
    Cursos - Viva Zona Oeste
@endsection


@section('content')

    <div id="lp-single-course" class="lp-single-course learn-press-4">
        <div id="popup-course" class="course-summary">
            <div id="popup-header">
                <div class="popup-header__inner">
                    <div class="thim-course-item-popup-right" id="aumenta">
                        <a href="#" class="back_course" onclick="aumenta();"><i
                        class="fas fa-expand"></i></a>
                    </div>
                    <div class="thim-course-item-popup-right" id="diminui" style="display: none;">
                        <a href="#" class="back_course" onclick="diminui();"><i
                        class="fas fa-compress"></i></a>
                    </div>
                    <div class="thim-course-item-popup-right">
                        
                        <h3 style="color: #fff; margin-right: 20px; margin-left: 20px;">{{$curso -> name}}</h3>
                        <a href="/" class="back_course"><i
                                class="fa fa-close"></i></a>
                    </div>
                </div>
            </div>
            <div id="popup-sidebar">
                <form method="post" class="search-course">
                    <div style="display: none;">
                    <input type="text" name="s" autocomplete="off" placeholder="Search courses content">
                    <button name="submit"></button>
                    <button type="button" class="clear"></button>
                    </div>
                    <img src="/storage/{{ setting('site.logo') }}" alt="">
                </form>
                <div class="course-curriculum" id="learn-press-course-curriculum">
                    <div class="curriculum-scrollable">
                        
                        <ul class="curriculum-sections">
                            @foreach ($categorias as $categoria)
                            <li class="section">
                                <h4 class="section-header">
                                    <div class="section-left">
                                        <span class="section-toggle collapse"></span>
                                        {{$categoria -> Category}} 
                                    </div>
                                </h4>
                                <ul class="section-content">
                                    @foreach ($curriculos as $curriculo)
                                        @if ($curriculo -> Category == $categoria -> Category)
                                            <li class="course-item course-item-lp_lesson item-preview has-status">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        @if ($aula->id == $curriculo->id)
                                                            <i class="fa fa-play" data-preview="Preview"></i>&nbsp;&nbsp;&nbsp;
                                                            <a href="">{{$curriculo -> title}}</a>        
                                                        @else
                                                            <i class="fa fa-video-camera" data-preview="Preview"></i>&nbsp;&nbsp;&nbsp;
                                                            <a href="/curso/aula/{{$curriculo -> slug}}">{{$curriculo -> title}}</a>   
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2">
                                                        @if ($aula->id == $curriculo->id)
                                                                 
                                                        @else
                                                            <a title="Previews" class="lesson-preview button-load-item" href="/curso/aula/{{$curriculo -> slug}}">
                                                            <i class="fa fa-eye" data-preview="Preview"></i>
                                                            </a>
                                                        @endif
                                                        
                                                    </div>
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
            <div id="popup-content">
                <div id="learn-press-content-item">
                    <div class="content-item-scrollable">
                        <div class="content-item-wrap">
                            <div class="learn-press-video-intro">
                                <div class="video-content">
                                    <div class="responsive-iframe"><iframe width="900" height="500"
                                            src="{{$aula -> link}}" frameborder="0"
                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="content-item-summary">
                                <div class="content-item-description lesson-description">
                                    {!! $aula->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="popup-footer">
                
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="text-copyright">Feitos com códigos e carinho por <a
                            href="https://hpware.com.br" target="_blank">Hpware</a> - <a class="color_primary"
                            href="http://vivazonaoeste.com.br" target="_blank"> Todos os direitos
                            reservados para Viva Zona Oeste.</a> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('css_of_page')
    <link rel='stylesheet' id='thim-style-options-css' href='/css/viva.1612509927.css' type='text/css' media='all' />
    <link rel='stylesheet' id='lp-font-awesome-5-css'
        href='https://eduma.thimpress.com/demo-1/wp-content/plugins/learnpress/assets/src/css/vendor/font-awesome-5.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lp-bundle-css'
        href='/css/bundle.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='learnpress-css'
        href='/css/learnpress.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='gradebook-css'
        href='/css/gradebook.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='certificates-css-css'
        href='/css/certificates.min.css'
        type='text/css' media='all' />
    <style id='wp-block-library-theme-inline-css' type='text/css'>
        #start-resizable-editor-section {
            display: none
        }

        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            font-family: Menlo, Consolas, monaco, monospace;
            color: #1e1e1e;
            padding: .8em 1em;
            border: 1px solid #ddd;
            border-radius: 4px
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-group.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
            opacity: .4
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

        #end-resizable-editor-section {
            display: none
        }

    </style>
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
