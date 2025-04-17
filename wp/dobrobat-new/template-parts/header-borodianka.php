<header class="header pt-24 pb-16 flex items-center z-[100] sticky top-0 bg-[#FFFCF0]">
    <div class="container flex justify-between items-center">
        <a href="<?php echo get_home_url(); ?>"  >
            <svg class="h-[.5rem] w-[1.86rem] hidden md:block">
                <use href="#db-logo"></use>
            </svg>
            <svg class="h-[.36rem]  w-[.35rem] md:hidden">
                <use href="#db-logo-mob"></use>
            </svg>
        </a>
        <div class="flex lg:items-center">
            <nav class="menu fixed lg:relative z-[10]">
                <ul class="relative bg-black lg:bg-transparent lg:text-black text-white flex flex-col lg:flex-row lg:items-center ">
                    <li class="mb-40 h4 lg:mr-40 lg:mb-0"><a href="#contacts"
                                                             class="scroll-to transition-colors lg:hover:text-main"><?php pll_e('Контакти'); ?></a>
                    </li>
                    <li class="mb-40 h4 lg:mr-40 lg:mb-0"><a href="#goal"
                                                             class="scroll-to transition-colors lg:hover:text-main"><?php pll_e('Мета проєкту'); ?>
                            </a></li>
                    <li class="mb-40 h4 lg:mr-40 lg:mb-0"><a href="#details"
                                                             class="scroll-to transition-colors lg:hover:text-main"><?php pll_e('Особливості'); ?> </a>
                    </li>
                    <li class="mb-40 h4 lg:mr-40 lg:mb-0"><a href="#presentation"
                                                             class="scroll-to transition-colors lg:hover:text-main"><?php pll_e('Презентація'); ?></a>
                    </li>
                </ul>
            </nav>
            <a href="https://secure.wayforpay.com/button/bb434fa85ac60" target="_blank" class="lg:hover:bg-main lg:hover:text-black  btn z-[11] font-semibold transition-colors text-12 lg:text-l p-12 rounded-20 bg-black text-white uppercase ">
                <?php pll_e('Допомогти проєкту'); ?>
            </a>
            <button class="burger z-[11] rounded bg-black flex items-center justify-center lg:hidden">
                <svg class="w-20 h-16">
                    <use xlink:href="#burger"></use>
                </svg>
            </button>

        </div>


    </div>
</header>
