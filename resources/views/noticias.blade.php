@extends('layouts.main')

@section('title')
{{$categoria}} - Viva Zona Oeste
@endsection


@section('content')

<section class="content-area">
    <div class="top_heading_out">
        <div class="top_site_main" 
            @if ($categoria == 'Colunas')
            style="color: #ffffff;background-image:url(\\storage\\{{addslashes(setting('site.img_colunas'))}});"
            @else
            style="color: #ffffff;background-image:url(\\storage\\{{addslashes(setting('site.img_noticias'))}});"
            @endif
            >
            <span class="overlay-top-header" style="background-color:rgba(0,0,0,0.5);"></span>
            <div class="page-title-wrapper">
                <div class="banner-wrapper container">
                    <h1>{{$categoria}}</h1>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container sidebar-right site-content">
        <div class="row">
            <main id="main" class="site-main col-sm-9 alignleft">
                <div id="blog-archive" class="blog-content">
                    <div class="row">


                        @foreach ($noticias as $noticia)
                        <article id="post-3696" class="col-sm-12 post-3696 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-wordpress pmpro-has-access">
                            <div class="content-inner">
                                <div class='post-formats-wrapper'><a class="post-image" href="/noticia/{{$noticia->slug}}"><img width="870" height="445" src="/storage/{{$noticia->image}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" sizes="(max-width: 870px) 100vw, 870px" /></a></div>
                                <div class="entry-content">
                                    <header class="entry-header">
                                        <div class="date-meta" style="height: 90px;">
                                        <center>{{date('d', strtotime($noticia->created_at))}}<i>{{$noticia->created_at->formatLocalized('%B')}}</center></i> </div>
                                        <div class="entry-contain">
                                            <h2 class="entry-title"><a href="/noticia/{{$noticia->slug}}" rel="bookmark">{{$noticia->title}}</a></h2>
                                            <p>&nbsp;</p>
                                        </div>
                                    </header>

                                    <div class="entry-summary text-justify">
                                        <p>{{$noticia->excerpt}}</p>
                                    </div>
                                    <div class="readmore">
                                        <a href="/noticia/{{$noticia->slug}}">Leia mais</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        

                    </div>
                </div>
                <div class="pagination loop-pagination">
                {!! $noticias->links() !!}
                </div>
                

            </main>
            <div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary" style="display: none;">
                <aside id="categories-2" class="widget widget_categories">
                    <h4 class="widget-title">Categories</h4>
                    <ul>
                        <li class="cat-item cat-item-9"><a href="https://eduma.thimpress.com/demo-1/category/blog/">Blog</a>
                        </li>
                        <li class="cat-item cat-item-11"><a href="https://eduma.thimpress.com/demo-1/category/business/">Business</a>
                        </li>
                        <li class="cat-item cat-item-8"><a href="https://eduma.thimpress.com/demo-1/category/design-branding/">Design
                                / Branding</a>
                        </li>
                        <li class="cat-item cat-item-1"><a href="https://eduma.thimpress.com/demo-1/category/uncategorized/">Uncategorized</a>
                        </li>
                    </ul>
                </aside>
            </div>
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