<!-- advantages -->
<section id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-6">
                <div class="advantages-logo d-none d-sm-block">
                    <img src="<?= get_theme_file_uri('images/icon/logo/logo-icon-dark.png'); ?>" alt="">
                </div>
            </div>

            <?php if (have_rows('advantages_items', 165)):
                $count = 0; ?>

                <div class="col-sm-8 col-lg-6">
                    <?php while (have_rows('advantages_items', 165)) : the_row();
                        $count++; ?>
                        <div class="advantages-item">
                            <div class="advantages-item__count"><span><?= $count; ?></span></div>
                            <div class="advantages-item__description">
                                <?= get_sub_field('advantages_item'); ?>
                            </div>
<!--                            <div class="decor-animate"></div>-->
                        </div>
                    <?php endwhile; ?>
                </div>

            <?php endif; ?>

        </div>
    </div>
    <a href="#pain" class="scroll-down scroll-link">
        <div class="scroll-down__icon"></div>
        <div class="scroll-down__text">
            Хорошее авто за адекватные деньги
        </div>
    </a>
</section>


<!-- Car -->
<div id='decor-car' class="decor-car" style="background-image:
    url(<?= get_theme_file_uri('images/content/advantages/11594_st1280_089.png'); ?>">
</div>