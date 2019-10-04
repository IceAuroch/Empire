<?php
/*
Template Name: template page thanks secondary
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

                <a href="<?= site_url(); ?>" class="btn btn-primary">
                    На главную
                </a>

            </div>

        </div>
    </section>

<?php

get_footer('secondary');