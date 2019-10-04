<?php

get_header('secondary');

$title = get_the_title();
$image = get_the_post_thumbnail_url($post->id, 'large');
$prise_ua = get_field('price_in_ua', $post->ID, 'text_field');
$prise_usa = get_field('price_in_usa', $post->ID, 'text_field');

$price_in_auction = get_field('price_in_auction', $post->ID, 'text_field');
$auction_tax = get_field('auction_tax', $post->ID, 'text_field');
$bank_tax_in_usa = get_field('bank_tax_in_usa', $post->ID, 'text_field');
$send_coast = get_field('send_coast', $post->ID, 'text_field');
$power_of_attorney = get_field('power_of_attorney', $post->ID, 'text_field');
$unloading_in_port = get_field('unloading_in_port', $post->ID, 'text_field');
$customs_broker = get_field('customs_broker', $post->ID, 'text_field');
$customs_clearance = get_field('customs_clearance', $post->ID, 'text_field');
$services = get_field('services', $post->ID, 'text_field');

$sum_auto = get_field('sum_auto', $post->ID, 'text_field');
$sertificat_euro = get_field('sertificat_euro', $post->ID, 'text_field');
$reg_auto = get_field('reg_auto', $post->ID, 'text_field');

$car_gallery = get_field('car_gallery_image', $post->ID);
$car_link_video = get_field('car_link_video', $post->ID);
$car_in_stock = get_field('car_in_stock', $post->ID);
?>
    <!-- Comparison -->
    <section id="car-single" class="page page-secondary">
        <div class="container">
            <div class="row row-car-description justify-content-center">
                <div class="col-12">
                    <div class="section-description">
                        <h1 class="section-description__title">
                            <?= $title; ?>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-7">
                    <?php if ($car_gallery && !is_null($car_gallery)) : ?>
                        <div class="car-single-slider">
                            <?php
                            foreach ($car_gallery as $item) :
                                ?>
                                <figure class="car-single-slider-item"
                                        style="background-image: url('<?= $item['url']; ?>');"></figure>
                            <?php endforeach; ?>
                        </div>
                        <div class="car-single-slider-navfor">
                            <?php foreach ($car_gallery as $item) :
                                ?>
                                <div class="car-single-slider-navfor-item">
                                    <figure style="background-image: url('<?= $item['url']; ?>');"></figure>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider-arrow">
                            <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-car-single">
                                <svg width="35" height="30">
                                    <use xlink:href="#prev-arrow-icon"></use>
                                </svg>
                            </div>
                            <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-car-single">
                                <svg width="35" height="30">
                                    <use xlink:href="#next-arrow-icon"></use>
                                </svg>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="car-image" style="background-image: url('<?= $image; ?>');"></div>
                    <?php endif; ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php if (get_the_content()) : ?>
                            <div class="car-information">
                                <?php the_content(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="car-description">
                        <div class="car-description-header d-flex justify-content-between align-items-end">
                            <h4 class="title">
                                <?= $title; ?>
                            </h4>
                            <?php if ($car_in_stock) : ?>
                                <div class="car-in-stock">в наличии</div>
                            <?php endif; ?>
                        </div>
                        <div class="car-description-body">
                            <div class="car-description-body-row d-flex flex-column flex-sm-row justify-content-between align-items-sm-center">
                                <div class="price mb-3 mb-sm-0">
                                    $ <strong><?= $sum_auto; ?></strong>
                                </div>
                                <div class="button-group d-flex flex-column flex-sm-row align-items-start">
                                    <a href="#" class="btn btn-outline-primary mr-3 mb-3 mb-sm-0 test-drive-open">
                                        Тест-драйв
                                    </a>
                                    <a href="#" class="btn btn-primary buy-car-open">
                                        Хочу купить
                                    </a>
                                </div>
                            </div>
                            <div class="car-description-body-row">
                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <td>Стоимость авто на аукционе</td>
                                        <td>$ <strong><?= $price_in_auction; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Аукционный сбор</td>
                                        <td>$ <strong><?= $auction_tax; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Комиссия банка за перевод $ в США</td>
                                        <td>$ <strong><?= $bank_tax_in_usa; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Предварительная стоимость доставки (логистика по США, загрузка в контейнер,
                                            отправка экспортных
                                            документов, отправка контейнера в Одессу)
                                        </td>
                                        <td>$ <strong><?= $send_coast; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Доверенность на экспедитора</td>
                                        <td>$ <strong><?= $power_of_attorney; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Разгрузка в порту</td>
                                        <td>$ <strong><?= $unloading_in_port; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Таможенный брокер</td>
                                        <td>$ <strong><?= $customs_broker; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Растаможка</td>
                                        <td>$ <strong><?= $customs_clearance; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Услуги</td>
                                        <td>$ <strong><?= $services; ?></strong></td>
                                    </tr>
                                    <tr class="total">
                                        <td>Итого растаможенный авто в Украине</td>
                                        <td>$ <strong><?= $sum_auto; ?></td>
                                    </tr>
                                    <tr class="table-car-info">
                                        <td>Получение сертификата ЕВРО 5</td>
                                        <td>$ <strong><?= $sertificat_euro; ?></td>
                                    </tr>
                                    <tr class="table-car-info">
                                        <td>Регистрация авто и пенсионный фонд</td>
                                        <td>$ <strong><?= $reg_auto; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($car_link_video) : ?>
                <div class="row">
                    <div class="col-sm-8 mx-auto">
                        <div class="car-video"
                             data-src="<?= getVideoLinkAttribute($car_link_video); ?>"
                             style="background-image: url('<?= getVideoImageLinkAttribute($car_link_video); ?>')">
                            <svg width="40" height="30">
                                <use xlink:href="#youtube-icon"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <div class="custom-modal custom-modal--buy-car">
        <div class="close-modal close-modal--buy-car">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="car-modal-header">
            <h4 class="title">
                Оставить заявку
            </h4>
        </div>
        <div class="car-modal-body">
            <form method="post" action="<?= get_theme_file_uri('mail-send-buy.php'); ?>">
                <input type="hidden" name="buy_title" value="Заявка покупки машины <?= $title; ?>">
                <input type="hidden" name="buy_car" value="<?= $title; ?>">
                <input type="hidden" name="buy_admin_email" value="<?= get_option('admin_email'); ?>">
                <div class="form-column">
                    <div class="form-group">
                        <label for="user-name--<?= $buy_name = generateRandomString() ?>" class="label-placeholder">Введите
                            Ваше
                            имя</label>
                        <input type="text" name="buy_name" class="form-control" id="user-name--<?= $buy_name ?>"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="user-email--<?= $buy_email = generateRandomString() ?>" class="label-placeholder">Введите
                            Email</label>
                        <input type="email" name="buy_email" class="form-control" id="user-email--<?= $buy_email ?>"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="user-phone--<?= $buy_phone = generateRandomString() ?>" class="label-placeholder">Номер
                            телефона</label>
                        <input type="tel" name="buy_phone" class="form-control" id="user-phone--<?= $buy_phone ?>"
                               required>
                    </div>
                    <div class="form-group form-group--btn">
                        <button type="submit" class="btn btn-primary">Оставить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="custom-modal custom-modal--test-drive">
        <div class="close-modal close-modal--test-drive">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="car-modal-header">
            <h4 class="title">
                Оставить заявку
            </h4>
        </div>
        <div class="car-modal-body">
            <form method="post" action="<?= get_theme_file_uri('mail-send-test.php'); ?>">
                <input type="hidden" name="test_title" value="Заявка тест-драйва машины <?= $title; ?>">
                <input type="hidden" name="test_car" value="<?= $title; ?>">
                <input type="hidden" name="test_admin_email" value="<?= get_option('admin_email'); ?>">
                <div class="form-column">
                    <div class="form-group">
                        <label for="user-name--<?= $test_name = generateRandomString() ?>" class="label-placeholder">Введите
                            Ваше
                            имя</label>
                        <input type="text" name="test_name" class="form-control" id="user-name--<?= $test_name ?>"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="user-phone--<?= $test_phone = generateRandomString() ?>" class="label-placeholder">Номер
                            телефона</label>
                        <input type="tel" name="test_phone" class="form-control" id="user-phone--<?= $test_phone ?>"
                               required>
                    </div>
                    <div class="form-group form-group--btn">
                        <button type="submit" class="btn btn-primary">Оставить заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-mask"></div>


<?php wp_reset_postdata(); ?>

<?php

require('template-parts/contacts.php');
get_footer();