<section class="mb-24 lg:mb-50">
    <div class="container">
        <div
                class="bg-white rounded-24 box__shadow px-12 sm:px-40 p-24 sm:pb-[.74rem]"
        >
            <div
                    class="border border-black border-solid rounded-30 px-12 py-4 font-medium text-l w-max mb-16"
            >
                Партнери
            </div>

            <h2 class="font-bold mb-48 mb-[.9rem] ">
                Партнери проєкту
            </h2>
            <?php
            $partners = get_field('partners', 1009);

            $even_partners = [];
            $odd_partners = [];

            if (is_array($partners)) {
                foreach ($partners as $index => $partner) {
                    if ($index % 2 === 0) {
                        $even_partners[] = $partner;
                    } else {
                        $odd_partners[] = $partner;
                    }
                }
            } ?>

            <div
                    class="swiper mb-24 sm:mb-40 h-100 sm:h-[1.5rem]"
                    data-swiper="partnersSlider"
            >
                <div class="swiper-wrapper">
                    <?php foreach ($even_partners as $partner) {
                        $img = '';
                        if ($partner['photo']) {
                            $img = wp_get_attachment_image($partner['photo'], 'dobrobat_partners', false, array('width' => 'dobrobat_partners', 'height' => 'dobrobat_partners', 'class' => 'object-contain', 'alt' => $partner["link"]));
                        } elseif ($partner['photo-link']) {
                            $img = '<img src="' . $partner["photo-link"] . '" alt="' . $partner["link"] . '" class="object-contain">';
                        } else {
                            $img = '<svg class="icon">
    <use xlink:href="#' . $partner["svg"] . '"></use>
    </svg>';
                        }
                        ?>
                        <div class="swiper-slide bg-light-gray  !p-16 rounded-16">
                            <a
                                    class="size-full image flex-center lg:grayscale lg:hover:grayscale-0 transition-[filter] duration-300 "
                                    href="<?= $partner["link"] ?>"
                            >
                                <?= $img; ?>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>

            <div
                    dir="rtl"
                    class="swiper mb-24 sm:mb-40 h-100 sm:h-[1.5rem]"
                    data-swiper="partnersSlider"
            >
                <div class="swiper-wrapper">
                    <?php foreach ($odd_partners as $partner) {
                        $img = '';
                        if ($partner['photo']) {
                            $img = wp_get_attachment_image($partner['photo'], 'dobrobat_partners', false, array('width' => 'dobrobat_partners', 'height' => 'dobrobat_partners', 'class' => 'object-contain', 'alt' => $partner["link"]));
                        } elseif ($partner['photo-link']) {
                            $img = '<img src="' . $partner["photo-link"] . '" alt="' . $partner["link"] . '" class="object-contain">';
                        } else {
                            $img = '<svg class="icon">
    <use xlink:href="#' . $partner["svg"] . '"></use>
    </svg>';
                        }

                        ?>
                        <div class="swiper-slide bg-light-gray  !p-16 rounded-16">
                            <a
                                    class="size-full image flex-center lg:grayscale lg:hover:grayscale-0 transition-[filter] duration-300 "
                                    href="<?= $partner["link"] ?>"
                            >
                                <?= $img; ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
