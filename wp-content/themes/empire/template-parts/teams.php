<?php $team = new WP_Query([
    'post_type' => 'teams',
    'orderBy' => 'date',
    'order' => 'asc'
]);
if ($team->have_posts()):
?>

<!-- Questions -->
<section id="teams">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-description mb-5">
                    <h2 class="section-description__title">
                        <?= get_field('team_second_title', 119); ?>
                    </h2>
                    <div class="section-description__subtitle">
                        <?= get_field('team_subtitle', 119); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="teams-slider">

                    <?php while ($team->have_posts()) : $team->the_post(); ?>
                    <div class="teams-col">
                        <div class="teams-item"
                             data-image="<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>"
                             data-name="<?php echo the_title($post->id); ?>"
                             data-position="<?php echo get_field('position', $post->ID, 'text_field'); ?>"
                             data-description="<?php echo get_the_content($post->id)?>" >
                            <div class="img" style="background-image:
                                url(<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>)">
                            </div>
                            <div class="name"><?php echo get_the_title($post->id); ?></div>
                        </div>
                    </div>



                    <?php endwhile; ?>

                </div>
                <div class="custom-modal custom-modal--team">
                    <div class="img"></div>
                    <div class="content">
                        <div class="name"></div>
                        <div class="position"></div>
                        <div class="description"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="slider-arrow">
                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-teams">
                        <svg width="25" height="20">
                            <use xlink:href="#prev-arrow-icon"></use>
                        </svg>
                    </div>
                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-teams">
                        <svg width="25" height="20">
                            <use xlink:href="#next-arrow-icon"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
endif;
wp_reset_postdata();