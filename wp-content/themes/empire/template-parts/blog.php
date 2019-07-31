<?php
$video_link = get_field('link_video', 213);
?>
    <!-- Blog -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-7">
                    <div class="section-description">
                        <h2 class="section-description__title">
                            <?= get_the_title('213') ?>
                        </h2>
                        <div class="section-description__subtitle">
                            <?= get_field('subtitle', 213) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-sm-0">
            <div class="row w-100 m-0 justify-content-center">
                <?php foreach ($video_link as $item) : ?>
                    <div class="col-sm-6">
                        <div class="blog-item"
                             data-src="<?= getVideoLinkAttribute($item['link_video_item']); ?>"
                             style="background-image:url(<?= getVideoImageLinkAttribute($item['link_video_item']); ?>);">
                            <svg width="100" height="50">
                                <use xlink:href="#youtube-icon"></use>
                            </svg>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--        <div class="container d-none d-md-block">-->
        <!--            <div class="slider-arrow">-->
        <!--                <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-comparison">-->
        <!--                    <svg width="35" height="30">-->
        <!--                        <use xlink:href="#prev-arrow-icon"></use>-->
        <!--                    </svg>-->
        <!--                </div>-->
        <!--                <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-comparison">-->
        <!--                    <svg width="35" height="30">-->
        <!--                        <use xlink:href="#next-arrow-icon"></use>-->
        <!--                    </svg>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </section>
<?php wp_reset_postdata();