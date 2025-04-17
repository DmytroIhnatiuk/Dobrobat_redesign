<header class="header pt-14 pb-16 flex items-center z-[100] sticky top-0 bg-white">
    <div class="container flex justify-between items-center">
        <a href="<?php echo get_home_url(); ?>">

            <svg class="h-[.5rem] w-[1.86rem] hidden md:block">
                <use href="#db-logo"></use>
            </svg>
            <svg class="h-[.36rem]  w-[.35rem] md:hidden">
                <use href="#db-logo-mob"></use>
            </svg>
        </a>
        <div class="flex lg:items-center">
            <nav class="menu fixed lg:relative z-[10]">
                <ul class="relative text-s uppercase bg-black lg:bg-transparent lg:text-black text-white flex flex-col lg:flex-row lg:items-center ">
                    <li class="mb-40  lg:mr-40 lg:mb-0"><a href="#about"
                                                           class="scroll-to transition-colors lg:hover:text-main"><?php pll_e('ПРО НАС'); ?> </a>
                    </li>
                    <li class="mb-40  lg:mr-40 lg:mb-0"><a href="#goal"
                                                           class="scroll-to transition-colors lg:hover:text-main"><?php pll_e('НАША ЦІЛЬ'); ?>
                        </a></li>
                    <li class="mb-40  lg:mr-40 lg:mb-0"><a href="#partners"
                                                           class="scroll-to transition-colors lg:hover:text-main"><?php pll_e('НАШІ ПАРТНЕРИ'); ?> </a>
                    </li>

                </ul>
            </nav>
            <a href="https://secure.wayforpay.com/button/b82b603e0a982" target="_blank"
               class="lg:hover:border-main mr-12 lg:mr-0 lg:hover:bg-main text-black border border-black border-solid  z-[11] font-semibold transition-colors text-s  py-12 px-24 rounded-10   uppercase ">
                <?php pll_e('ЗРОБИТИ ДОНАТ'); ?>
            </a>
            <button class="burger z-[11] rounded bg-black flex items-center justify-center lg:hidden">
                <svg class="w-20 h-16">
                    <use xlink:href="#burger"></use>
                </svg>
            </button>

        </div>


    </div>
</header>

