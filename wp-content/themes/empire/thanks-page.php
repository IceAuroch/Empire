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
                    <?= get_the_title(); ?>
                </h1>
                <h2 class="thanks-page-item__title text-primary">
                    <?= get_the_title(); ?>
                </h2>
                <div class="thanks-page-item__subtitle text-white">
                    <?= get_field('thanks_text', 72); ?>
                </div>

                <div class="text-center">
                    <img src="<?= get_the_post_thumbnail_url($post->id, 'large'); ?>" alt="">
                </div>

                <a href="<?= site_url(); ?>" class="btn btn-primary">
                    На главную
                </a>

            </div>

        </div>
    </section>

<?php

get_footer('secondary');