<header class="header">
    <div class="container header__wrapper d-flex --just-between">
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <svg class="icon">
                <?php if ($isEn !== 'en') : ?>
                    <use xlink:href="#logo"></use>
                <?php else : ?>
                    <use xlink:href="#logoEn"></use>
                <?php endif; ?>

            </svg>


        </a>
        <div class="header__btns d-flex">
            <a href="<?php if ($isEn !== 'en') : ?>#form<?php else: ?>#donate<?php endif; ?>"
               class="btn btn_outline btn_sm scrolTo" data-help>
                <span class="fz-14"><?php pll_e("Допомогти"); ?></span>
            </a>

            <a href="https://telegram.me/dobrobat_in_ua_bot?start" class="btn btn_black btn_sm" data-telegram
               data-gtag="add_chanel_click">
						<span class="plus">
							<svg class="icon">
								<use xlink:href="#plus"></use>
							</svg>
						</span>

                <span class="fz-14"><?php pll_e("ДОЛУЧИТИСЯ"); ?> </span>
            </a>
        </div>
        <nav>
            <ul class="menu">
                <li class="menu__item  f-600"><a href="#about" class="scrolTo"><?php pll_e("Про проєкт "); ?> <span
                        >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a></li>
                <li class="menu__item  f-600 "><a href="<?php if ($isEn !== 'en') : ?>/news
                    <?php else : ?>/project-news<?php endif; ?>"><?php pll_e("Новини"); ?><span
                        >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a></li>
                <li class="menu__item  f-600"><a href="<?php if ($isEn !== 'en') : ?>/press
						<?php else : ?>/press-about<?php endif; ?>"><?php pll_e("Преса про нас"); ?><span
                        >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a></li>
                <?php if ($isEn !== 'en') : ?>
                    <li class="menu__item  f-600"><a href="/legion/"><?php pll_e("Інтернаціональний легіон"); ?>
                            <span
                            >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a>
                    </li>
                    <li class="menu__item  f-600"><a href="/stories-victims"><?php pll_e("Історії постраждалих"); ?>
                            <span
                            >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a>
                    </li>
                    <li class="menu__item  f-600"><a href="/heroes"><?php pll_e("Герої добробату"); ?><span
                            >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a>
                    </li>
                    <?php if (1 !== 1): ?>
                        <li class="menu__item  f-600"><a
                                    href="/programa-spilnodiya"><?php pll_e("Програма Спільнодія"); ?><span
                                >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a></li>
                    <?php endif; ?>

                <?php endif; ?>
                <li class="menu__item  f-600"><a href="<?php if ($isEn !== 'en') : ?>/objects
						<?php else : ?>/objects-en<?php endif; ?>">
                        <?php pll_e("Зруйновані об'єкти"); ?><span
                        >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a></li>
                <li class="menu__item  f-600"><a href="<?php if ($isEn !== 'en') : ?>/renovation-borodianka/
						<?php else : ?>/project-vidrodzhennya-borodyanki<?php endif; ?>">
                        <?php pll_e('Проєкт "Відродження Бородянки"'); ?><span
                        >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a></li>
                <?php if (1 == 1): ?>
                    <li class="menu__item  f-600"><a
                                href="/tenders"><?php pll_e("Закупівлі"); ?><span
                            >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span></a></li>
                <?php endif; ?>
                <li class="menu__item  f-600"><a href="/contacts"><?php pll_e("Контакти"); ?><span
                        >
                        <svg class="icon arrow"><use
                                    xlink:href="#arrow"></use></svg>
                    </span> </a></li>


            </ul>
            <div class="menu__btns">
                <a href="<?php if ($isEn !== 'en') : ?>#form<?php else: ?>#donate<?php endif; ?>"
                   class="btn btn_outline btn_sm scrolTo" data-help>
                    <span class="fz-14"><?php pll_e("Допомогти"); ?></span>
                </a>

                <a href="https://telegram.me/dobrobat_in_ua_bot?start" class="btn btn_black btn_sm" data-telegram>
						<span class="plus">
							<svg class="icon">
								<use xlink:href="#plus"></use>
							</svg>
						</span>

                    <span class="fz-14"><?php pll_e("ДОЛУЧИТИСЯ"); ?> </span>
                </a>
            </div>

        </nav>
        <div class="header__btns d-flex">
            <ul class="lang-switcher d-flex  pos-r">
                <?php pll_the_languages(); ?>
            </ul>
            <button class="menu-btn active" id="menu-btn">
                <svg class="icon"
                     viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="menu-btn__item"
                          d="M6.25 15.9494C6.25 14.2522 6.25 13.4036 6.59308 12.6577C6.93615 11.9118 7.58046 11.3595 8.86906 10.255L10.1191 9.18358C12.4482 7.18717 13.6128 6.18896 15 6.18896C16.3872 6.18896 17.5518 7.18717 19.8809 9.18358L21.1309 10.255C22.4195 11.3595 23.0638 11.9118 23.4069 12.6577C23.75 13.4036 23.75 14.2522 23.75 15.9494V21.2499C23.75 23.6069 23.75 24.7855 23.0178 25.5177C22.2855 26.2499 21.107 26.2499 18.75 26.2499H11.25C8.89298 26.2499 7.71447 26.2499 6.98223 25.5177C6.25 24.7855 6.25 23.6069 6.25 21.2499V15.9494Z"
                          stroke="#101113" stroke-width="2"/>
                    <path class="menu-btn__item"
                          d="M18.125 26.25V19.75C18.125 19.1977 17.6773 18.75 17.125 18.75H12.875C12.3227 18.75 11.875 19.1977 11.875 19.75V26.25"
                          stroke="#101113" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>


                </svg>
            </button>
        </div>

    </div>


</header>