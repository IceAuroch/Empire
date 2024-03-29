<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap&subset=cyrillic"
          rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicons/favicon-16x16.png">
    <link rel="manifest" href="./images/favicons/site.webmanifest">
    <link rel="mask-icon" href="./images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="msapplication-config" content="./images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149305361-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-149305361-1');
    </script>


    <!-- Facebook Pixel Code -->

    <!-- End Facebook Pixel Code -->
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="phone-icon" viewBox="0 0 485.213 485.212">
        <path fill="#f24141" d="M242.607,0C108.629,0,0.001,108.628,0.001,242.606c0,133.976,108.628,242.606,242.606,242.606
                c133.978,0,242.604-108.631,242.604-242.606C485.212,108.628,376.585,0,242.607,0z M370.719,353.989l-19.425,19.429
                c-3.468,3.463-13.623,5.624-13.949,5.624c-61.452,0.536-120.621-23.602-164.095-67.08c-43.593-43.618-67.759-102.998-67.11-164.657
                c0-0.028,2.224-9.892,5.689-13.324l19.424-19.427c7.108-7.141,20.762-10.368,30.327-7.168l4.086,1.363
                c9.537,3.197,19.55,13.742,22.185,23.457l9.771,35.862c2.635,9.743-0.919,23.604-8.025,30.712l-12.97,12.972
                c12.734,47.142,49.723,84.138,96.873,96.903l12.965-12.975c7.141-7.141,20.997-10.692,30.719-8.061l35.857,9.806
                c9.717,2.67,20.26,12.62,23.456,22.154l1.363,4.145C381.028,333.262,377.826,346.913,370.719,353.989z"/>
    </symbol>

    <symbol id="prev-arrow-icon" viewBox="0 0 32.635 32.635">
        <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5
	        	S32.411,16.817,32.135,16.817z"/>
        <path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354
	        	L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707
	        	C13.293,29.304,13.165,29.353,13.037,29.353z"/>
    </symbol>

    <symbol id="next-arrow-icon" viewBox="0 0 32.635 32.635">
        <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5
	        	S32.411,16.817,32.135,16.817z"/>
        <path d="M19.598,29.353c-0.128,0-0.256-0.049-0.354-0.146c-0.195-0.195-0.195-0.512,0-0.707l12.184-12.184L19.244,4.136
	        	c-0.195-0.195-0.195-0.512,0-0.707s0.512-0.195,0.707,0l12.537,12.533c0.094,0.094,0.146,0.221,0.146,0.354
	        	s-0.053,0.26-0.146,0.354L19.951,29.206C19.854,29.304,19.726,29.353,19.598,29.353z"/>
    </symbol>

    <symbol id="youtube-icon" viewBox="0 0 40 29">
                <image width="40" height="29"
                       xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAdCAYAAADYSS5zAAAB0UlEQVRYR82YPUscURSGn5O9o4UWi+7uiBoIKoJVmkDSCFZGCGhv5xaCEIPGYkUW3DKWSZnC/Ac7/Qf5CwExhRa6RISkCNnRI3dwJ0YI7szcC3O7gfO+52FmOB9XeHB0nCH+mDqwCEwDNUAexjl6VuAC+AYc0BftyymX973/SaxhsIrqHlB2BJDW5gqRhpx3PneFCaCG5gNKI62jl3hhT86jbesdA2o1WEF030uyrKYqdWl3vohWGUTMd2A4q5cn3Q80eiZaDdYR/eQpST5blXeiNXMIzOdz8qY+soCnwJi3FPmMzyxgBzDpffQEld8IM+m1PSsiC2iLZfqjfKQdvadWWgZaIJPpTR5X5AKUdrQRlyn7BcKgzg1NRJ8+nrb3CCeA3XQ6RT8/gzVUbZENe8f4f6RTwATU1lbMWyTuTLnaphfABLRMmT6zCWwBA1neqFfABHSUClHpK8hEWkjvgFoJXvBEm8BSWjgb7w1Qw+AVqi3gdRawrsY5oI6YOa7ZRZjLA+YcUKtmAWEHmHUB5gSQdrRJWHqDiv3HXroEuw+YtRcfg/wCnvsAu/OMe3Hhp5mCz4OFn6iLvpPE41KRt7qkXxZ5L/4LWeCbhQSyYHcztx7WzDjbNGKlAAAAAElFTkSuQmCC"/>
    </symbol>
</svg>


<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-row">
                    <div class="header-row-item justify-content-start">
                        <a href="<?= site_url(); ?>" class="logo">
                            <img src="<?= get_theme_file_uri('images/icon/logo/logo.png'); ?>" alt="Carlone logo">
                        </a>
                    </div>
                    <div class="header-row-item d-none d-lg-flex">
                        <ul class="header-nav-menu d-flex justify-content-between align-items-center w-100">
                            <li><a href="<?= site_url(); ?>#comparison"><?= get_field('comparison_header_title',
                                        80); ?></a></li>
                            <li><a href="<?= site_url(); ?>#advantages"><?= get_the_title(165); ?></a></li>
                            <li><a href="<?= get_permalink(330) ?>"><?= get_the_title(330) ?></a></li>
                        </ul>
                    </div>
                    <div class="header-row-item  d-none d-sm-flex">
                        <ul class="phone-list">
                            <li>
                                <a href="tel: <?= get_theme_mod('phone'); ?>">
                                    <svg width="20" height="20">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <?= get_theme_mod('phone'); ?>
                                </a>
                                <a href="tel: <?= get_theme_mod('phone2'); ?>">
                                    <svg width="20" height="20">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <?= get_theme_mod('phone2'); ?>
                                </a>
                            </li>
                        </ul>
<!--                        <ul class="phone-list">-->
<!--                            <li>-->
<!--                                <a href="tel: --><?//= get_theme_mod('phone'); ?><!--">-->
<!--                                    <svg width="20" height="20">-->
<!--                                        <use xlink:href="#phone-icon"></use>-->
<!--                                    </svg>-->
<!--                                    --><?//= get_theme_mod('phone'); ?>
<!--                                </a>-->
<!--                                <div class="small">по Украине бесплатно</div>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </div>
                    <div class="header-row-item  d-none d-sm-flex">
                        <a href="<?= site_url(); ?>#comparison" class="btn btn-primary ">
                            Подобрать авто
                        </a>
                    </div>
                    <div class="header-row-item justify-content-center">
                        <div class="burger-menu d-flex flex-column justify-content-center align-items-start">
                            <div class="line line--top"></div>
                            <div class="line line--middle d-flex justify-content-between align-items-start">
                                <div class="line line--small"></div>
                                <div class="line line--big"></div>
                            </div>
                            <div class="line line--bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <div class="menu-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-5 pr-sm-0">
                    <ul class="menu-nav">
                        <li><a href="<?= site_url(); ?>#pain"><?= get_the_title(74); ?></a></li>
                        <li><a href="<?= site_url(); ?>#comparison"><?= get_the_title(80); ?></a></li>
                        <li><a href="<?= site_url(); ?>#sale"><?= get_the_title(82); ?></a></li>
                        <li><a href="<?= site_url(); ?>#reviews"><?= get_the_title(136); ?></a></li>
                        <li><a href="<?= site_url(); ?>#saving"><?= get_the_title(84); ?></a></li>
                        <li><a href="<?= site_url(); ?>#stages"><?= get_the_title(130); ?></a></li>
                        <li><a href="<?= site_url(); ?>#teams"><?= get_the_title(119); ?></a></li>
                        <li><a href="<?= site_url(); ?>#contacts"><?= get_the_title(90); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Main -->
<main>