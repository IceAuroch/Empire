<!-- Pain -->
<section id="pain">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-6 mx-auto mx-xl-0">
                <div class="pain-item">
                    <div class="section-description">
                        <h2 class="section-description__title">
                            <?= get_the_title(74); ?>
                        </h2>
                        <div class="section-description__subtitle">
                            <?= get_field('pain_subtitle', 74); ?>
                        </div>
                    </div>
                    <?php
                    if(have_rows('pain_items', 74)): ?>
                        <ul class="custom-list custom-list--dark">
                            <?php while ( have_rows('pain_items', 74) ) : the_row(); ?>
                            <li>
                               <?= get_sub_field('pain_item'); ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="pain-description">
                    <h3 class="pain-description__title">
                        <?= get_field('paid_down_title', 74); ?>
                    </h3>
                    <div class="pain-description__subtitle">
                        <?= get_field('pain_down_subtitle', 74)?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pain-beforeAfter d-none d-xl-block">
        <div class="beforeAfter">
            <img src="<?php echo get_theme_file_uri('images/content/pain/after.jpg'); ?>" alt="">
            <img src="<?php echo get_theme_file_uri('images/content/pain/before.jpg'); ?>" alt="">
        </div>
    </div>
</section>


