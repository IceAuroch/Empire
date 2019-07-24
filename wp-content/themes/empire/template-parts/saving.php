<!-- Saving -->
<section id="saving">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">

                <?php if(have_rows('saving_items', 84)): ?>

                <div class="saving-slider">

                    <?php while(have_rows('saving_items', 84)): the_row(); ?>

                    <div class="saving-slider-item">
                        <div class="img-container">
                            <div class="img" style="background-image:
                                    url(<?= get_sub_field('saving_image')['url'] ; ?>)">
                            </div>
                        </div>
                        <div class="content">
                            <div class="section-description">
                                <h2 class="section-description__title"><?= get_sub_field('saving_title'); ?></h2>
                                <div class="section-description__subtitle"><?= get_sub_field('saving_subtitle'); ?></div>
                            </div>
                            <?php if(have_rows('saving_subitems', 84)): ?>
                            <ul class="custom-list custom-list--light">
                                <?php while(have_rows('saving_subitems', 84)): the_row(); ?>

                                <li>
                                    <?= get_sub_field('saving_sunitem'); ?>
                                </li>

                                <?php endwhile; ?>

                            </ul>

                            <?php endif; ?>

                        </div>
                    </div>

                    <?php endwhile; ?>

                </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="slider-arrow">
        <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-saving">
            <svg width="25" height="20">
                <use xlink:href="#prev-arrow-icon"></use>
            </svg>
        </div>
        <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-saving">
            <svg width="25" height="20">
                <use xlink:href="#next-arrow-icon"></use>
            </svg>
        </div>
    </div>
</section>