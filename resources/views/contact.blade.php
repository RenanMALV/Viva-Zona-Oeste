@extends('layouts.main')

@section('title', 'Fale com a gente')


@section('content')

    <section class="content-area">
        <div class="top_heading_out">
            <div class="top_site_main"
                style="color: #ffffff;background-image:url('\\storage\\{{ addslashes(setting('site.img_contato')) }}');">
                <span class="overlay-top-header" style="background-color:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>Contato</h1>
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
                                        <div id="panel-2901-5-0-0"
                                            class="so-panel widget widget_heading panel-first-child panel-last-child"
                                            data-index="9">
                                            <div class="thim-widget-heading template-base">
                                                <div class="sc_heading text-center">
                                                    <div class="container sidebar-right site-content">
                                                        <div class="row">
                                                            <main id="main" class="site-main col-sm-12 alignleft">
                                                                <div class="page-content">
                                                                    <div class="row text-justify">
                                                                        <div class="col-md-8">
                                                                            <h3>Envie sua mensagem para nossa equipe.</h3>
                                                                            @if ($message = Session::get('success'))
                                                                                <div class="alert alert-success alert-dismissible fade show"
                                                                                    role="alert">
                                                                                    <strong>Show</strong>
                                                                                    {{ $message }}
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-dismiss="alert"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                            @endif
                                                                            @if ($message = Session::get('error'))
                                                                                <div class="alert alert-danger alert-dismissible fade show"
                                                                                    role="alert">
                                                                                    <strong>OOOOPPPSSSSS!</strong>
                                                                                    {{ $message }}
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-dismiss="alert"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                            @endif
                                                                            @if (count($errors) > 0)
                                                                                <div class="alert alert-warning alert-dismissible fade show"
                                                                                    role="alert">
                                                                                    <strong>Erro!</strong>
                                                                                    <ul>
                                                                                        @foreach ($errors->all() as $error)
                                                                                            <li>{{ $error }}</li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-dismiss="alert"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                            @endif

                                                                            <form action="" method="post"
                                                                                class="wpcf7-form init"
                                                                                novalidate="novalidate" data-status="init">
                                                                                @csrf
                                                                                <p><span
                                                                                        class="wpcf7-form-control-wrap your-name"><input
                                                                                            type="text" name="nome" value=""
                                                                                            size="40"
                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                            aria-required="true"
                                                                                            aria-invalid="false"
                                                                                            placeholder="Seu nome *" /></span>
                                                                                </p>
                                                                                <p><span
                                                                                        class="wpcf7-form-control-wrap your-email"><input
                                                                                            type="email" name="email"
                                                                                            value="" size="40"
                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                            aria-required="true"
                                                                                            aria-invalid="false"
                                                                                            placeholder="Seu Email *" /></span>
                                                                                </p>
                                                                                <p><span
                                                                                        class="wpcf7-form-control-wrap your-subject"><input
                                                                                            type="text" name="assunto"
                                                                                            value="" size="40"
                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                            aria-required="true"
                                                                                            aria-invalid="false"
                                                                                            placeholder="Assunto: *" /></span>
                                                                                </p>
                                                                                <p><span
                                                                                        class="wpcf7-form-control-wrap your-message"><textarea
                                                                                            name="mensagem" cols="40"
                                                                                            rows="10"
                                                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                            aria-required="true"
                                                                                            aria-invalid="false"
                                                                                            placeholder="Sua mensagem *"></textarea></span>
                                                                                </p>
                                                                                <p><input type="submit" value="Enviar"
                                                                                        class="wpcf7-form-control wpcf7-submit" />
                                                                                </p>
                                                                                <div class="wpcf7-response-output"
                                                                                    aria-hidden="true"></div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <strong>Assessoria de imprensa:</strong><br><br><br>

                                                                            email: <a href="mailto:contato@vivazonaoeste.com.br"> contato@vivazonaoeste.com.br</a><br>
                                                                            Telefone: (21) 97149-9310

                                                                        </div>
                                                                    </div>
                                                                    <div class="row text-justify">
                                                                        <div class="col-md-12">
                                                                            <h3>Quero me voluntariar</h3>
                                                                            <p>&nbsp;</p>
                                                                            <p>Quero fazer parte e doar meu tempo para causas que acredito e que transformem pessoas e comunidade.</p>
                                                                            
                                                                            <p>Conhe&ccedil;a nossas causas e as vagas de voluntariado da nossa organiza&ccedil;&atilde;o que se encontram dispon&iacute;veis no site da atados.</p> 

                                                                            <form method="get" action="https://www.atados.com.br/ong/vivazonaoeste" target="_blank">
                                                                            <input type="submit" value="Acessar Vagas"
                                                                                        class="wpcf7-form-control wpcf7-submit" />
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </main>

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
