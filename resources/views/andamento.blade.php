@extends('layouts.main')

@section('title')
    Projetos Realizados - Viva Zona Oeste
@endsection


@section('content')

    <section class="content-area">
        <div class="top_heading_out">
            <div class="top_site_main"
                style="color: #ffffff;background-image:url(\\storage\\{{ addslashes(setting('site.img_projetos')) }});">
                <span class="overlay-top-header" style="background-color:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>Projetos Realizados</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="container sidebar-right site-content">
            <div class="row">
                <main id="main" class="site-main col-sm-12 alignleft">
                    <div id="lp-archive-courses">
                        <div class="thim-course-top switch-layout-container ">
                            <div class="thim-course-switch-layout switch-layout">
                                <a href="#" class="list switchToGrid"><i class="fa fa-th-large"></i></a>
                                <a href="#" class="grid switchToList"><i class="fa fa-list-ul"></i></a>
                            </div>
                            
                            <div class="courses-searching" style="display: none;">
                                <form method="get" action="https://eduma.thimpress.com/demo-1/courses/">
                                    <input type="text" value="" name="s" placeholder="Search our courses"
                                        class="form-control course-search-filter" autocomplete="off" />
                                    <input type="hidden" value="course" name="ref" />
                                    <input type="hidden" name="post_type" value="lp_course">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                    <span class="widget-search-close"></span>
                                </form>
                                <ul class="courses-list-search list-unstyled"></ul>
                            </div>
                        </div>
                        <div id="thim-course-archive" class="thim-course-grid" data-cookie="grid-layout"
                            data-attr="thim-course-grid">



                            @foreach ($projetos as $projeto)
                                <div
                                    class="course-grid-3 lpr_course lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-general pmpro-has-access course">
                                    <div class="course-item">
                                        <div class="course-thumbnail">
                                            <a href="{{$projeto -> link}}">
                                                <img src="/storage/{{ $projeto->image }}" alt="{{ $projeto->title }}"
                                                    title="course-4" width="400" height="300" style="object-fit: scale-down;"> </a>
                                            <a class="course-readmore"
                                                href="{{$projeto -> link}}">Saiba
                                                Mais</a>
                                        </div>
                                        <div class="thim-course-content">
                                            <h2 class="course-title"><a
                                                    href="{{$projeto -> link}}"
                                                    rel="bookmark">{{ $projeto->title }}</a></h2>
                                            
                                            <div class="course-readmore">
                                                <a href="{{$projeto -> link}}">Ver Projeto</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="cssload-loading">
                                <i></i><i></i><i></i><i></i>
                            </div>
                        </div>
                        <div class="pagination loop-pagination">
                            {!! $cursos->links() !!}
                        </div>
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
