@extends('layouts.main')

@section('title', $page->title)


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
                    <h1>{{$category['name']}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container no-padding-top site-content">
        <div class="row">
            <main id="main" class="site-main col-sm-12 full-width">
                <article id="post-2901" class="post-2901 page type-page status-publish hentry pmpro-has-access">
                    <div class="entry-content">
                        <div id="pl-2901" class="panel-layout">
                            <div id="pg-2901-5" class="panel-grid panel-no-style">
                                <div id="pgc-2901-5-0" class="panel-grid-cell">
                                    <div id="panel-2901-5-0-0" class="so-panel widget widget_heading panel-first-child panel-last-child" data-index="9">
                                        <div class="thim-widget-heading template-base">
                                            <div class="sc_heading text-center">
                                                <div class="container sidebar-right site-content">
                                                    <div class="row">
                                                        <main id="main" class="site-main col-sm-9 alignleft">
                                                            <div class="page-content">
                                                                <article id="post-3696" class="post-3696 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-wordpress pmpro-has-access">
                                                                    <div class="page-content-inner">
                                                                        <header class="entry-header">
                                                                            <h1 class="entry-title">{{$page->title}}</h1>
                                                                            <ul class="entry-meta">
                                                                                <li class="author">
                                                                                    <span>Enviado por</span>{{$owner_post['social_name']}}
                                                                                </li>
                                                                                <li class="entry-category">
                                                                                    <span>Categoria</span> {{$category['name']}}
                                                                                </li>
                                                                                <li class="entry-date">
                                                                                    <span>Data</span>
                                                                                    <span class="value"> {{date('d/m/Y',strtotime($page->created_at))}}</span>
                                                                                </li>
                                                                            </ul>
                                                                        </header>
                                                                        <div class="entry-content text-justify">
                                                                            {!!$page->body!!}
                                                                        </div>
                                                                        <!--
                                                                        <div class="entry-tag-share">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <p class="post-tag"><span>Tag:</span><a href="https://eduma.thimpress.com/demo-1/tag/wordpress/" rel="tag">WordPress</a></p>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <ul class="thim-social-share">
                                                                                        <li class="heading">Share:</li>
                                                                                        <li>
                                                                                            <div class="facebook-social"><a target="_blank" class="facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fwhy-you-should-read-every-day%2F" title="Facebook"><i class="fa fa-facebook"></i></a></div>
                                                                                        </li>
                                                                                        <li>
                                                                                            <div class="googleplus-social"><a target="_blank" class="googleplus" href="https://plus.google.com/share?url=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fwhy-you-should-read-every-day%2F&amp;title=Why%20You%20Should%20Read%20Every%20Day" title="Google Plus" onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;'><i class="fa fa-google"></i></a></div>
                                                                                        </li>
                                                                                        <li>
                                                                                            <div class="twitter-social"><a target="_blank" class="twitter" href="https://twitter.com/share?url=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fwhy-you-should-read-every-day%2F&amp;text=Why%20You%20Should%20Read%20Every%20Day" title="Twitter"><i class="fa fa-twitter"></i></a></div>
                                                                                        </li>
                                                                                        <li>
                                                                                            <div class="pinterest-social"><a target="_blank" class="pinterest" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fwhy-you-should-read-every-day%2F&amp;description=Lorem%20Ipsum%20is%20simply%20dummy%20text%20of%20the%20printing%20and%20typesetting%20industry.%20Lorem%20Ipsum%20has%20been%20the%20industry%26%238217%3Bs%20standard%20dummy%20text%20ever%20since%20the%201500s%2C%20when%20an%20unknown%20printer%20took%20a%20galley%20of%20type%20and%20scrambled%20it%20to%20make%20a%20%26hellip%3B%20&amp;media=https%3A%2F%2Feduma.thimpress.com%2Fdemo-1%2Fwp-content%2Fuploads%2Fsites%2F89%2F2016%2F01%2Fblog-7.jpg" onclick="window.open(this.href); return false;" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="thim-about-author">
                                                                            <div class="author-wrapper">
                                                                                <div class="author-avatar">
                                                                                    <a href="https://eduma.thimpress.com/demo-1/author/minhluu/">
                                                                                        <img alt="Anthony" src="https://eduma.thimpress.com/demo-1/wp-content/uploads/learn-press-profile/12/athony1-thumb.jpg" class="avatar avatar-110 photo" height="110" width="110" /> </a>
                                                                                </div>
                                                                                <div class="author-bio text-justify">
                                                                                    <div class="author-top">
                                                                                        <a class="name" href="https://eduma.thimpress.com/demo-1/author/minhluu/">
                                                                                            Anthony </a>
                                                                                        <p class="job">Author</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="author-description text-justify">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                                                        standard dummy text ever since the 1500s, when an unknown
                                                                                        printer took a galley of type and scrambled it to make a
                                                                                        type specimen book. It has survived not only five centuries,
                                                                                        but also the leap into electronic typesetting, remaining
                                                                                        essentially unchanged. It was popularised in the 1960s.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="entry-navigation-post">
                                                                            <div class="prev-post">
                                                                                <p class="heading">Previous post</p>
                                                                                <h5 class="title">
                                                                                    <a href="https://eduma.thimpress.com/demo-1/relaxing-after-work/">Relaxing
                                                                                        after work</a>
                                                                                </h5>
                                                                                <div class="date">
                                                                                    20/01/2016 </div>
                                                                            </div>
                                                                        </div>
                                                                        -->
                                                                        <section class="related-archive">
                                                                            <h3 class="single-title">Últimas Notícias</h3>
                                                                            <div class="archived-posts">
                                                                                <div class="thim-carousel-wrapper" data-visible="3" data-itemtablet="2" data-itemmobile="1" data-pagination="1">


                                                                                    @foreach ($ultimas as $noticia)
                                                                                    <div class="post type-post status-publish format-standard tag-thimpress">
                                                                                        <div class="category-posts clear">
                                                                                            <img src="/storage/{{$noticia->image}}" alt="blog-9" title="blog-9" width="300" height="200" style="width: 300px; height: 200px; object-fit: scale-down;">
                                                                                            <div class="rel-post-text">
                                                                                                <h5>
                                                                                                    <a href="/noticia/{{$noticia->slug}}" title="{{$noticia->title}}">{{$noticia->title}}</a>
                                                                                                </h5>
                                                                                                <div class="date">
                                                                                                {{$noticia->created_at->formatLocalized('%d de %B %Y')}} </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach


                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </article>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@endsection