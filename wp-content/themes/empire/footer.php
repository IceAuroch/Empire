</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 mb-3 mb-lg-0">
                <a href="#intro" class="logo scroll-link">
                    <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png');?>" alt="Empire logo">
                </a>
            </div>
            <div class="col-sm-5 pr-sm-0">
                <ul class="menu-nav">
                    <li><a href="#pain" class="scroll-link"><?= get_the_title(74); ?></a></li>
                    <li><a href="#comparison" class="scroll-link"><?= get_the_title(80); ?></a></li>
                    <li><a href="#sale" class="scroll-link"><?= get_the_title(82); ?></a></li>
                    <li><a href="#reviews" class="scroll-link"><?= get_the_title(136); ?></a></li>
                    <li><a href="#saving" class="scroll-link"><?= get_the_title(84); ?></a></li>
                    <li><a href="#stages" class="scroll-link"><?= get_the_title(130); ?></a></li>
                    <li><a href="#teams" class="scroll-link"><?= get_the_title(119); ?></a></li>
                    <li><a href="#contacts" class="scroll-link"><?= get_the_title(90); ?></a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-lg-3 p-lg-0 ml-auto mr-0">
                <h3 class="section-title text-white mb-4">
                    Доверьтесь профессионалам
                </h3>

                <?php require('template-parts/modules/form.php'); ?>

            </div>
            <div class="col-12">
                <div class="footer-copyr">
                    <div class="footer-copyr-item mb-3 mb-sm-0">
                        2019 Все права защищены
                    </div>
                    <div class="footer-copyr-item">
                        Дизайн и разработка сайта компании <a href="https://impressionbureau.pro" target="_blank">Impression.Bureau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->

<?php wp_footer(); ?>
</body>

</html>