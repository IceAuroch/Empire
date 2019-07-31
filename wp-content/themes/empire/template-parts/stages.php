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
        <?php if (have_rows('stage_items', 130)): ?>
            <div class="row">
                <?php while (have_rows('stage_items', 130)): the_row(); ?>
                    <div class="col-sm-6">
                        <div class="stages-column">

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

                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>