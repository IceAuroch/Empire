<!-- Sale -->
<section id="sale">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-5 mx-auto mx-lg-0 p-lg-0">
                <div class="sale-item">
                    <div class="section-description mb-4">
                        <div class="section-description__subtitle">
                            <?= get_field('sale_subtitle', 82); ?>
                        </div>
                        <h2 class="section-description___title text-primary">
                            <?= get_the_title(82); ?>
                        </h2>
                    </div>
                    <?php include('modules/form.php'); ?>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="sale-img d-none d-lg-block">
                    <img src="<?= get_theme_file_uri('images/content/sale/sale-item-1.png'); ?>  " alt="">
                </div>
            </div>
        </div>
    </div>
</section>