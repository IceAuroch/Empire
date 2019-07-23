<?php
/*
Template Name: template page thanks
Template Post Type: page
*/

get_header('secondary');
?>

<section id="thanks-page">
    <div class="container h-100 d-flex justify-content-center align-items-center">

        <div class="thanks-page-item text-center">
            <h1 class="thanks-page-item__decor-title text-white">
                Спасибо!
            </h1>
            <h2 class="thanks-page-item__title text-primary">
                Спасибо!
            </h2>
            <div class="thanks-page-item__subtitle text-white">
                Наш менеджер с Вами свяжется.
            </div>

            <div class="text-center">
                <img src="<?php echo get_theme_file_uri('images/content/thanks/thanks-item-1.png'); ?>" alt="">
            </div>

            <a href="<?= site_url(); ?>" class="btn btn-primary">
                На главную
            </a>

            <script src="//widget.manychat.com/221910975224285.js" async></script>
            <div class="mcwidget-embed mt-3" data-widget-id="4020088"></div>

        </div>

    </div>
</section>

<?php

get_footer('secondary');