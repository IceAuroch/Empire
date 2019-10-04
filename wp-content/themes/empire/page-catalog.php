<?php
/*
Template Name: Старница каталог
Template Post Type: page
*/
get_header('secondary');
$comparison = new WP_Query([
    'post_type' => 'cars',
    'posts_per_page' => -1
]);
?>
    <!-- Comparison -->
    <section id="comparison-page" class="page page-secondary">
        <div class="page-banner" style="background-image: url('<?= get_the_post_thumbnail_url() ?>');"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-7">
                    <div class="section-description">
                        <h2 class="section-description__title">
                            <?= get_the_title() ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-sm-0">
            <div class="comparison-slider d-md-none">
                <?php if ($comparison->have_posts()):
                    while ($comparison->have_posts()): $comparison->the_post();
                        $car_in_stock = get_field('car_in_stock', $post->ID); ?>
                        <?php if ($car_in_stock) : ?>
                            <div class="comparison-slider-item">
                                <?php include('template-parts/modules/slider-card.php'); ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
            </div>

            <div class="comparison-slider d-none d-md-block">
                <?php
                if ($comparison->have_posts()):
                    $chunks = [];
                    $chunkID = 0;
                    $iteration = 0;

                    while ($comparison->have_posts()): $comparison->the_post();
                        $chunks[$chunkID][$iteration] = $post;
                        $car_in_stock = get_field('car_in_stock', $post->ID);
                        if ($car_in_stock) :
                        $iteration++;
                        if ($iteration === 4) {
                            $iteration = 0;
                            $chunkID++;
                        }
                    endif; endwhile;
                    foreach ($chunks as $chunk) :
                        ?>
                        <div class="comparison-slider-item">
                            <div class="row w-100 m-0 justify-content-center">
                                <?php foreach ($chunk as $post) :
                                    $car_in_stock = get_field('car_in_stock', $post->ID);
                                    if ($car_in_stock) :?>
                                        <div class="col-md-6 px-0 px-sm-3">
                                            <?php include('template-parts/modules/slider-card.php'); ?>
                                        </div>
                                    <?php endif; endforeach; ?>
                            </div>
                        </div>
                    <?php
                    endforeach;
                endif; ?>
            </div>
        </div>
        </div>
        <div class="container d-none d-md-block">
            <div class="slider-arrow">
                <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-comparison">
                    <svg width="35" height="30">
                        <use xlink:href="#prev-arrow-icon"></use>
                    </svg>
                </div>
                <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-comparison">
                    <svg width="35" height="30">
                        <use xlink:href="#next-arrow-icon"></use>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Modal -->
    <div class="custom-modal custom-modal--comparison">
        <div class="close-modal close-modal--comparison">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="custom-modal-header">
            <h3 class="title">
                Оставьте заявку
            </h3>
        </div>
        <div class="custom-modal-body">
            <form action="<?= get_theme_file_uri('mail-send.php'); ?>" method="post">
                <input type="hidden" name="car" value="">
                <input type="hidden" name="title" value="Выбор авто">
                <input type="hidden" name="admin_email" value="<?= get_option('admin_email'); ?>">
                <div class="form-column">
                    <div class="form-group">
                        <label for="user-name--comparison" class="label-placeholder">Введите ваше имя</label>
                        <input type="text" name="name" class="form-control" id="user-name--comparison" required>
                    </div>
                    <div class="form-group">
                        <label for="user-phone--comparison" class="label-placeholder">Номер телефона</label>
                        <input type="tel" name="phone" class="form-control" id="user-phone--comparison" required>
                    </div>
                    <div class="form-group form-group--btn">
                        <button type="submit" class="btn btn-primary">Оставить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require('template-parts/modules/car-modal.php'); ?>
    <div class="modal-mask"></div>


<?php wp_reset_postdata(); ?>

<?php

require('template-parts/contacts.php');
get_footer();