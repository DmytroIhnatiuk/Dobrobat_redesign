<header class="header py-16 flex items-center z-[100] sticky top-0 bg-white">
    <div class="container flex justify-between items-center">

        <div class="flex gap-x-[.1rem] md:gap-x-[.4rem] items-center">
            <div

                    class="h-[.5rem] md:h-[.68rem] w-[.6rem] md:w-[1.3rem] image "

            >
                <img src="<?= get_img_link('/irex/usa_fllag') ?>.webp" alt='' class="object-contain"/>

            </div>
            <div

                    class="w-[.4rem] md:h-[.85rem] h-[.4rem] md:w-[.85rem] image "

            >
                <img src="<?= get_img_link('/irex/logo_department') ?>.webp" alt=''
                     class="object-contain"/>


            </div>
            <a
                    href="https://irex.org/"
                    class="h-[.5rem] w-[.8rem] md:w-[1.32rem] image "
                    target="_blank"
            >
                <img src="<?= get_img_link('/irex/logo_irex') ?>.webp" alt='IREX' class="object-contain"/>



            </a>
            <a
                    href="https://www.irex.org/project/ukraine-rapid-response-fund/"
                    class="h-[.5rem]  w-[.8rem] md:w-[1.32rem] image "
                    target="_blank"
            >
                <img src="<?= get_img_link('/irex/logo_urrf') ?>.webp" alt='IREX' class="object-contain"/>



            </a>

            <a
                    href="<?php echo get_home_url(); ?>"

            >

                <svg class="h-[.5rem] w-[1.86rem] hidden md:block">
                    <use href="#db-logo"></use>
                </svg>
                <svg class="h-[.36rem]  w-[.35rem] md:hidden">
                    <use href="#db-logo-mob"></use>
                </svg>
            </a>
        </div>


    </div>
</header>

