<!-- Stages -->
<section id="stages">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-lg-8">
                <div class="section-description mb-4">
                    <h2 class="section-description__title">
                        <?= get_field('stage_subtitle', 130); ?>
                    </h2>
                    <div class="section-description__subtitle">
                        <?= get_field('stage_second_subtitle', 130); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-lg-7 mx-auto mx-lg-0">

                <?php if (have_rows('stage_items', 130)): ?>

                    <div class="stages-column">

                        <?php while (have_rows('stage_items', 130)): the_row(); ?>

                            <div class="stages-card">
                                <div class="stages-card-secondary">
                                    <div class="icon">
                                        <svg width="30" height="30">
                                            <use xlink:href="<?= get_sub_field('stage_item_icon'); ?>"></use>
                                        </svg>
                                    </div>
                                    <h4 class="title"><?= get_sub_field('stage_item_title'); ?></h4>
                                </div>
                                <div class="stages-card-description">
                                    <p><?= get_sub_field('stage_item_text'); ?></p>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>
            <div class="col-sm-6 col-lg-5 mx-auto mx-lg-0">

                <?php if (have_rows('stage_items', 130)): ?>

                    <div class="stages-tabs-img d-none d-lg-block">

                        <?php while (have_rows('stage_items', 130)): the_row(); ?>

                            <div class="stages-tabs-img__item" style="background-image:
                                    url(<?= get_sub_field('stage_item_image')['url']; ?>)">
                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>