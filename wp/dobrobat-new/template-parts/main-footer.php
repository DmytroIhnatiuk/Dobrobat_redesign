<footer class="footer-wrapper py-20">
    <div class="container">
        <div class="footer  d-flex">


            <div class="footer__info">
                <div class="footer__social">
                    <a data-gtag="facebook_click" href="https://www.facebook.com/dobrobat.in.ua"
                       class="fz-14 t-upper f-600">facebook</a>
                    <a data-gtag="instagram_click" href="https://www.instagram.com/dobrobat.in.ua/"
                       class="fz-14 t-upper f-600">instagram</a>
                    <a data-gtag="telegram_click" href="https://t.me/dobrobat_in_ua" class="fz-14 t-upper f-600">telegram</a>
                </div>
                <div class="footer__documents">
                    <?php $isEn = get_locale(); ?>
                    <a href="<?php if ($isEn !== 'en') : ?>https://www.dobrobat.in.ua/privacy-policy<?php else : ?>https://www.dobrobat.in.ua/en/privacy-policy-en<?php endif; ?>"
                       class="fz-14 t-secondary">
                        <?php pll_e('Політика конфіденційності,'); ?>
                    </a>
                    <a href="<?php if ($isEn !== 'en') : ?>https://www.dobrobat.in.ua/disclaimer/<?php else : ?>https://www.dobrobat.in.ua/en/disclaimer-en/<?php endif; ?>"
                       class="fz-14 t-secondary">
                        <?php pll_e('Відмова від відповідальності'); ?>
                    </a>
                </div>
            </div>
            <div class="footer__partners bdr-12">
                <h3 class="fz-14 f-600">
                    <?php pll_e('Партнери'); ?>
                </h3>
                <div class="d-flex partners">
                    <a href="https://dsns.gov.ua/" target="_blank" class="partners__item image">
                        <img class=''
                             src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dsns-logo.png" alt="">

                    </a>

                    <a href="https://prykhystok.gov.ua/" target="_blank" class="partners__item partners__item-bg image">
                        <img class=''
                             src="https://www.dobrobat.in.ua/wp-content/themes/dobrobat-1/assets/img/logo2.png"
                             alt="">

                    </a>

                </div>
            </div>
        </div>
    </div>
</footer>