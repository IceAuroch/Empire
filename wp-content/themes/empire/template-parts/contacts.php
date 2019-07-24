<!-- Contacts -->
<section id="contacts">
    <div id="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-lg-4">
                <div class="contacts-item">
                    <div class="section-description mb-4">
                        <div class="section-description__subtitle">
                            <?= get_field('contact_subtitle', 90); ?>
                        </div>
                        <h2 class="section-description__title text-primary">
                            <?= get_field('contact_second_subtitle', 90); ?>
                        </h2>
                    </div>
                    <ul class="contacts-list">

                        <li class="contacts-list-item contacts-list-item--place">
                            <a href="<?= get_theme_mod('address_link'); ?>"><?= get_theme_mod('address'); ?></a>
                        </li>
                        <li class="contacts-list-item contacts-list-item--place">
                            <a href="<?= get_theme_mod('address_link2'); ?>"><?= get_theme_mod('address2'); ?></a>
                        </li>

                        <li class="contacts-list-item contacts-list-item--email">
                            <a href="mailto:<?= get_theme_mod('email'); ?>">
                                <?= get_theme_mod('email'); ?>
                            </a>
                        </li>
                        <li class="contacts-list-item contacts-list-item--phone">
                            <a href="tel: <?= get_theme_mod('phone'); ?>">
                                <?= get_theme_mod('phone'); ?>
                            </a>
                            <div class="small text-white">звонки по Украине бесплатно</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
