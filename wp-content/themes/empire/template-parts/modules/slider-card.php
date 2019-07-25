<?php
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


$car = [
    'title' => $title,
    'image' => $image,
    'priceInUA' => $prise_ua,
    'priceInUSA' => $prise_usa,
    'settings' => [
        $price_in_auction,
        $auction_tax,
        $bank_tax_in_usa,
        $send_coast,
        $power_of_attorney,
        $unloading_in_port,
        $customs_broker,
        $customs_clearance,
        $services,
        $sum_auto,
        $sertificat_euro,
        $reg_auto
    ],
];
?>

<div class="comparison-card">
    <div class="comparison-card-top">
        <div class="img" style="background-image:
                url(<?php echo get_the_post_thumbnail_url($post->id, 'large'); ?>)"></div>
        <h4 class="title"><?php the_title(); ?></h4>
    </div>
    <div class="comparison-card-bottom">
        <div class="comparison-card-bottom-item comparison-card-bottom-item--UA order-2 order-sm-1">
            <div class="title">Цена в Украине</div>
            <div class="info">
                <div class="info__logo" style="background-image:
                    url(<?php echo get_theme_file_uri('images/content/comparison/comparison-logo-1.png'); ?>">
                </div>
                <div class="info-value">$
                    <span class="price">
                         <?= get_field('price_in_ua', $post->ID, 'text_field'); ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="comparison-card-bottom-item comparison-card-bottom-item--USA order-1 order-sm-2">
            <div class="title">Цена в США</div>
            <div class="info">
                <div class="info__logo" style="background-image:
                    url(<?= get_theme_file_uri('images/content/comparison/comparison-logo-2.png'); ?>">
                </div>
                <div class="info-value">$
                    <span class="price">
                        <?= get_field('price_in_usa', $post->ID, 'text_field'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn comparison-card__btn open-modal-car" data-car='<?= json_encode($car) ?>'>Хочу это
        авто</a>
</div>