<?php /* Template Name: Map */ ?>
<?php
get_header();
?>
    <main>
        <div class="mt-auto"></div>

        <section
                class="mt-[calc(var(--header-height)+.28rem)] font-semibold mb-24 lg:mb-50"
        >
            <div class="container">
                <div
                        class="bg-white mb-24 px-12 p-40 sm:px-40 rounded-24 relative marquee-wrapper will-change-transform z-10"
                >
                    <div class="flex text-s font-medium mb-16">
                        <a
                                class="lg:hover:text-yellow transition-colors duration-300 ease-linear last:pointer-events-none"
                                href="index.html"
                        >
                            Головна
                        </a>
                        <span class="px-4">/</span>
                        <a
                                class="lg:hover:text-yellow transition-colors duration-300 ease-linear last:pointer-events-none"
                                href="index.html"
                        >
                            Наші проєкти
                        </a>
                    </div>
                    <div
                            class="border border-black border-solid rounded-30 px-12 py-4 font-medium text-l w-max mb-40"
                    >
                        Ініціативи
                    </div>
                    <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
                        <h1 class="h2 font-bold">
                            Пропозиції покращення життя і відбудови регіонів
                        </h1>
                        <p class="lg:text-l lg:pt-12 font-normal">
                            Пропозиції покращення життя і відбудови регіонів , Програми,
                            стратегії зі сфери екологічної політики повинні обов’язково
                            проходити громадські обговорення. Пропозиції покращення життя
                            і відбудови регіонів , Програми, стратегії зі сфери
                            екологічної політики повинні обов’язково проходити громадські
                            обговорення.
                        </p>
                    </div>
                    <div
                            class="absolute top-0 -z-10 right-0 bottom-0 left-0 overflow-hidden rounded-24"
                    >
                        <div
                                class="marquee text-transparent text-row absolute top-50 sm:top-[.35rem] left-[4rem] lg:left-[5rem] font-semibold text-[.28rem] sm:text-[.4rem] w-full rotate-[5.9deg] opacity-30"
                        >
                            відновлення / відбудова / реконструкція / відновлення /
                        </div>
                    </div>
                </div>
                <div class="grid lg:grid-cols-6">
                    <div class=""></div>
                    <div class="col-start-2 col-end-7">
                        <div class="flex mb-24">
                            <div
                                    class="swiper !ml-0 lg:w-max"
                                    data-swiper="suggestionsSliderNav"
                            >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide max-w-max">
                                        <div
                                                class="border border-solid border-black py-12 px-24 rounded-24 w-[1rem] sm:w-[2.1rem] flex-center bg-transparent lg:hover:bg-black lg:hover:text-white transition-colors duration-300 ease-linear uppercase cursor-pointer"
                                        >
                                            Мапа
                                        </div>
                                    </div>
                                    <div class="swiper-slide max-w-max">
                                        <div
                                                class="border border-solid border-black py-12 px-24 rounded-24 w-[1rem] sm:w-[2.1rem] flex-center bg-transparent lg:hover:bg-black lg:hover:text-white transition-colors duration-300 ease-linear uppercase cursor-pointer"
                                        >
                                            список
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    class="border h-[.48rem] border-solid border-gray rounded-24 justify-between items-center lg:w-[3.2rem] uppercase text-s pl-16 overflow-hidden pr-8 coll-start-1 coll-end-2 mr-16 hidden lg:flex"
                            >
                                <input
                                        class="w-9/12 bg-transparent"
                                        type="text"
                                        placeholder="ПОШУК"
                                />
                                <button>
                                    <svg class="size-24 stroke-gray z-10 fill-none">
                                        <use href="#search-icon"></use>
                                    </svg>
                                </button>
                            </div>
                            <button
                                    class="size-[.48rem] flex-center border border-solid border-gray rounded mr-16 lg:hidden"
                            >
                                <svg class="size-24 stroke-gray z-10 fill-none">
                                    <use href="#search-icon"></use>
                                </svg>
                            </button>
                            <div class="dropdown relative z-50">
                                <div
                                        class="dropdown__btn lg:min-w-[1.9rem] flex lg:justify-between gap-8 border border-solid border-black px-8 sm:px-12 py-8 rounded-30 cursor-pointer justify-between bg-bg relative z-50 h-[.48rem] w-[.48rem] flex-center"
                                >
											<span
                                                    class="dropdown__active hidden lg:block"
                                                    data-active=""
                                                    data-selected=""
                                            ><span>Сортування</span>
											</span>
                                    <span
                                            class="dropdown__icon transition-transform duration-300 hidden lg:block"
                                    >
												<svg class="size-24 fill-none stroke-black">
													<use xlink:href="#cheven-icon"></use>
												</svg>
											</span>
                                    <svg
                                            class="size-24 stroke-black fill-transparent lg:hidden"
                                    >
                                        <use xlink:href="#sorting-icon"></use>
                                    </svg>
                                </div>
                                <div
                                        class="dropdown__content pt-32 pb-16 opacity-0 rounded-b-16 rounded-tl-16 lg:rounded-tl-0 bg-light-gray box-shadow absolute right-0 w-max lg:w-full top-1/2 transition-opacity duration-300 ease-linear z-40 text-black"
                                >
                                    <ul class="dropdown__list">
                                        <li
                                                class="dropdown__item cursor-pointer mb-8 last:mb-0 lg:hover:bg-yellow transition-colors duration-300 py-4 px-16"
                                        >
                                            Від нових
                                        </li>
                                        <li
                                                class="dropdown__item cursor-pointer mb-8 last:mb-0 lg:hover:bg-yellow transition-colors duration-300 py-4 px-16"
                                        >
                                            Від старих
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                                class="swiper !h-auto suggestions-slider"
                                data-swiper="suggestionsSlider"
                        >
                            <div class="swiper-wrapper !h-auto">
                                <div class="swiper-slide !h-auto">
                                    <div
                                            class="w-full lg:h-[4.7rem] bg-yellow rounded-24"
                                    ></div>
                                </div>
                                <div class="swiper-slide !h-auto">
                                    <div class="grid lg:grid-cols-2 gap-x-24 gap-y-16">
                                        <div
                                                class="border border-solid border-black sm:p-24 px-16 pt-16 pb-24 rounded-24 bg-white lg:hover:bg-yellow lg:hover:border-yellow transition-colors duration-300 ease-linear group"
                                        >
                                            <div
                                                    class="border border-solid border-black px-8 py-4 rounded-16 flex gap-6 uppercase items-center w-max bg-white mb-16 text-s font-bold"
                                            >
                                                <div class="size-12 rounded bg-[#FFC700]"></div>
                                                Управління
                                            </div>
                                            <div class="h4">Петров Іван, example@gmail.com</div>
                                            <span class="font-medium block mb-8">м.Чернігів</span>
                                            <p
                                                    class="font-medium sm:line-clamp-2 line-clamp-4 mb-16"
                                            >
                                                Тренінги (в тому числі онлайн), розповсюдження
                                                інформації, тощо з доцільності сортування сміття
                                                серед населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в серед
                                                населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в
                                            </p>
                                            <button
                                                    href="#"
                                                    class="sm:w-[2.4rem] w-full h-[.48rem] border-[2px] border-solid border-black rounded-30 gap-8 p-16 uppercase flex-center bg-transparent group-hover:bg-black group-hover:text-white group-hover:fill-white transition-colors duration-300 ease-linear"
                                            >
                                                детальніше
                                                <svg class="size-16">
                                                    <use href="#btn-arrow-icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div
                                                class="border border-solid border-black sm:p-24 px-16 pt-16 pb-24 rounded-24 bg-white lg:hover:bg-yellow lg:hover:border-yellow transition-colors duration-300 ease-linear group"
                                        >
                                            <div
                                                    class="border border-solid border-black px-8 py-4 rounded-16 flex gap-6 uppercase items-center w-max bg-white mb-16 text-s font-bold"
                                            >
                                                <div class="size-12 rounded bg-[#FFC700]"></div>
                                                Управління
                                            </div>
                                            <div class="h4">Петров Іван, example@gmail.com</div>
                                            <span class="font-medium block mb-8">м.Чернігів</span>
                                            <p
                                                    class="font-medium sm:line-clamp-2 line-clamp-4 mb-16"
                                            >
                                                Тренінги (в тому числі онлайн), розповсюдження
                                                інформації, тощо з доцільності сортування сміття
                                                серед населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в серед
                                                населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в
                                            </p>
                                            <button
                                                    href="#"
                                                    class="sm:w-[2.4rem] w-full h-[.48rem] border-[2px] border-solid border-black rounded-30 gap-8 p-16 uppercase flex-center bg-transparent group-hover:bg-black group-hover:text-white group-hover:fill-white transition-colors duration-300 ease-linear"
                                            >
                                                детальніше
                                                <svg class="size-16">
                                                    <use href="#btn-arrow-icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div
                                                class="border border-solid border-black sm:p-24 px-16 pt-16 pb-24 rounded-24 bg-white lg:hover:bg-yellow lg:hover:border-yellow transition-colors duration-300 ease-linear group"
                                        >
                                            <div
                                                    class="border border-solid border-black px-8 py-4 rounded-16 flex gap-6 uppercase items-center w-max bg-white mb-16 text-s font-bold"
                                            >
                                                <div class="size-12 rounded bg-[#FFC700]"></div>
                                                Управління
                                            </div>
                                            <div class="h4">Петров Іван, example@gmail.com</div>
                                            <span class="font-medium block mb-8">м.Чернігів</span>
                                            <p
                                                    class="font-medium sm:line-clamp-2 line-clamp-4 mb-16"
                                            >
                                                Тренінги (в тому числі онлайн), розповсюдження
                                                інформації, тощо з доцільності сортування сміття
                                                серед населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в серед
                                                населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в
                                            </p>
                                            <button
                                                    href="#"
                                                    class="sm:w-[2.4rem] w-full h-[.48rem] border-[2px] border-solid border-black rounded-30 gap-8 p-16 uppercase flex-center bg-transparent group-hover:bg-black group-hover:text-white group-hover:fill-white transition-colors duration-300 ease-linear"
                                            >
                                                детальніше
                                                <svg class="size-16">
                                                    <use href="#btn-arrow-icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div
                                                class="border border-solid border-black sm:p-24 px-16 pt-16 pb-24 rounded-24 bg-white lg:hover:bg-yellow lg:hover:border-yellow transition-colors duration-300 ease-linear group"
                                        >
                                            <div
                                                    class="border border-solid border-black px-8 py-4 rounded-16 flex gap-6 uppercase items-center w-max bg-white mb-16 text-s font-bold"
                                            >
                                                <div class="size-12 rounded bg-[#FFC700]"></div>
                                                Управління
                                            </div>
                                            <div class="h4">Петров Іван, example@gmail.com</div>
                                            <span class="font-medium block mb-8">м.Чернігів</span>
                                            <p
                                                    class="font-medium sm:line-clamp-2 line-clamp-4 mb-16"
                                            >
                                                Тренінги (в тому числі онлайн), розповсюдження
                                                інформації, тощо з доцільності сортування сміття
                                                серед населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в серед
                                                населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в
                                            </p>
                                            <button
                                                    href="#"
                                                    class="sm:w-[2.4rem] w-full h-[.48rem] border-[2px] border-solid border-black rounded-30 gap-8 p-16 uppercase flex-center bg-transparent group-hover:bg-black group-hover:text-white group-hover:fill-white transition-colors duration-300 ease-linear"
                                            >
                                                детальніше
                                                <svg class="size-16">
                                                    <use href="#btn-arrow-icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div
                                                class="border border-solid border-black sm:p-24 px-16 pt-16 pb-24 rounded-24 bg-white lg:hover:bg-yellow lg:hover:border-yellow transition-colors duration-300 ease-linear group"
                                        >
                                            <div
                                                    class="border border-solid border-black px-8 py-4 rounded-16 flex gap-6 uppercase items-center w-max bg-white mb-16 text-s font-bold"
                                            >
                                                <div class="size-12 rounded bg-[#FFC700]"></div>
                                                Управління
                                            </div>
                                            <div class="h4">Петров Іван, example@gmail.com</div>
                                            <span class="font-medium block mb-8">м.Чернігів</span>
                                            <p
                                                    class="font-medium sm:line-clamp-2 line-clamp-4 mb-16"
                                            >
                                                Тренінги (в тому числі онлайн), розповсюдження
                                                інформації, тощо з доцільності сортування сміття
                                                серед населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в серед
                                                населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в
                                            </p>
                                            <button
                                                    href="#"
                                                    class="sm:w-[2.4rem] w-full h-[.48rem] border-[2px] border-solid border-black rounded-30 gap-8 p-16 uppercase flex-center bg-transparent group-hover:bg-black group-hover:text-white group-hover:fill-white transition-colors duration-300 ease-linear"
                                            >
                                                детальніше
                                                <svg class="size-16">
                                                    <use href="#btn-arrow-icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div
                                                class="border border-solid border-black sm:p-24 px-16 pt-16 pb-24 rounded-24 bg-white lg:hover:bg-yellow lg:hover:border-yellow transition-colors duration-300 ease-linear group"
                                        >
                                            <div
                                                    class="border border-solid border-black px-8 py-4 rounded-16 flex gap-6 uppercase items-center w-max bg-white mb-16 text-s font-bold"
                                            >
                                                <div class="size-12 rounded bg-[#FFC700]"></div>
                                                Управління
                                            </div>
                                            <div class="h4">Петров Іван, example@gmail.com</div>
                                            <span class="font-medium block mb-8">м.Чернігів</span>
                                            <p
                                                    class="font-medium sm:line-clamp-2 line-clamp-4 mb-16"
                                            >
                                                Тренінги (в тому числі онлайн), розповсюдження
                                                інформації, тощо з доцільності сортування сміття
                                                серед населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в серед
                                                населення, в Тренінги (в тому числі онлайн),
                                                розповсюдження інформації, тощо з доцільності
                                                сортування сміття серед населення, в
                                            </p>
                                            <button
                                                    href="#"
                                                    class="sm:w-[2.4rem] w-full h-[.48rem] border-[2px] border-solid border-black rounded-30 gap-8 p-16 uppercase flex-center bg-transparent group-hover:bg-black group-hover:text-white group-hover:fill-white transition-colors duration-300 ease-linear"
                                            >
                                                детальніше
                                                <svg class="size-16">
                                                    <use href="#btn-arrow-icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
?>