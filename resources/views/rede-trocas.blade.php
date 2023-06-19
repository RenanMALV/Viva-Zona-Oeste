@extends('layouts.main')

@section('title')
Rede de Trocas - Viva Zona Oeste
@endsection


@section('content')

<section class="content-area">
    <div class="top_heading_out">
        <div class="top_site_main" 
            style="color: #ffffff;background-image:url(\\storage\\{{addslashes(setting('site.img_rede'))}});"
            >
            <span class="overlay-top-header" style="background-color:rgba(0,0,0,0.5);"></span>
            <div class="page-title-wrapper">
                <div class="banner-wrapper container">
                    <h1>Rede de trocas</h1>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container site-content">
        <div class="row">
            <main id="main" class="site-main col-sm-12 full-width">
                <div id="thim-product-archive" class="thim-product-list">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="thim-product-switch-wrap switch-layout-container">
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected='selected'>Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                    <ul class="product-grid row">


                        @foreach ($anuncios as $anuncio)
                        <li class="col-md-3 col-sm-6 col-xs-6 post-140 product type-product status-publish has-post-thumbnail product_cat-accessories pmpro-has-access  instock shipping-taxable purchasable product-type-simple">
                            <div class="content__product">
                                <a href="https://eduma.thimpress.com/demo-1/product/bag-fabric/"
                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <div class="product_thumb">
                                        <img width="300" height="300"
                                            src="{{$anuncio->imagem1}}"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt="" loading="lazy"
                                            srcset="{{$anuncio->imagem1}} 300w, {{$anuncio->imagem1}} 150w, {{$anuncio->imagem1}} 180w, {{$anuncio->imagem1}} 600w, {{$anuncio->imagem1}} 32w"
                                            sizes="(max-width: 300px) 100vw, 300px" />
                                        <div class="quick-view" data-prod="140">
                                            <a href="javascript:;"><i class="fa fa-search fa-fw"></i></a>
                                        </div> 
                                        <a href="https://eduma.thimpress.com/demo-1/product/bag-fabric/" class="link-images-product"></a>
                                    </div>
                                    <div class="product__title">
                                        <a href="#" class="title">{{$anuncio->produto}}</a>
                                        <div class="description">
                                            <p>Pellentesque habitant morbi tristique senectus et netus
                                                et malesuada fames ac turpis egestas. Vestibulum tortor
                                                quam, feugiat vitae, ultricies eget, tempor sit amet,
                                                ante. Donec eu libero sit amet&#8230;</p>
                                        </div>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                    <span class="woocommerce-Price-currencySymbol"></span>
                                                </bdi>
                                            </span>
                                        </span>
                                </a>
                                <a href="?add-to-cart=140" data-quantity="1"
                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                    data-product_id="140" data-product_sku=""
                                    aria-label="Add &ldquo;Bag fabric&rdquo; to your cart"
                                    rel="nofollow">Ver contato
                                </a> 
                            </div>
                        </li>
                        @endforeach

                        
                    </ul>
                    <nav class="pagination loop-pagination pagination-center">
                        {!! $anuncios->links() !!}
                        
                    </nav>
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