<?php /* Template Name: Home page TEST*/ ?>
<?php
get_header();
?>
<main>
  <section class="section section__main ">
    <div class="main-screen t-accent d-flex">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6">

            <h1 class="fz-36 t-upper">Добробат - це добровольчий будівельний батальйон.
            </h1>

            <div class="main-screen__text fz-24">
              Якщо ти маєш досвід у будівництві або не маєш, але хочеш долучитися до відбудови нашої країни,
              приєднуйся до рядів Добробату, зроби внесок у відродження України
            </div>
            <div class="main-screen__btns d-flex">

              <a href="https://telegram.me/dobrobat_in_ua_bot?start" class="btn link" data-telegram>ВСТУПИТИ</a>


              <a href="#form" class="link btn btn_outline scrolTo">НАДАТИ МАТЕРІАЛИ</a>

            </div>

          </div>
          <div class="col-12 col-lg-6">
            <div class="video">
              <iframe src="https://player.vimeo.com/video/710012411?h=81938e745f" frameborder="0" allow="fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Звернення Ростислава Смірнова про проєкт - Добробат"></iframe>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="info-line  d-flex justify-content-center align-items-center">
      <div class="marquee d-flex align-items-center">
        <span>ВИ МОЖЕТЕ ДОПОМОГТИ!</span>
      </div>
    </div>
  </section>
  <section id="about" class="section section__about t-accent">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="about-wrapper d-flex flex-column">

            <div class="about pos-r">

              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider1.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider2.png" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider3.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider4.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider5.jpeg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider6.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider7.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider8.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/photo/slider9.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="about__nav  d-flex ">
              <button class="prev_slideAbout"> <svg class="icon arrow">
                  <use xlink:href="#arrow"></use>
                </svg></button>
              <button class="next_slideAbout"> <svg class="icon arrow next">
                  <use xlink:href="#arrow"></use>
                </svg></button>


            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 fz-18">
          <div class="about__descr">
            <h2 class="about__title fz-24">
              Україна потребує твоєї допомоги у відновленні своїх міст!
            </h2>
            <div class="about__text"> Поступово ми очищаємо наші міста від загарбників, і вже зараз ми маємо
              починати відновлюватись, щоб стати ще краще і сильніше. Саме твоя допомога зараз найпотрібніша! </div>
            <div class="about__text"> Цей ресурс створено для відбудовників нової та кращої країни! Обирай свій
              батальйон, напрямок допомоги, та долучайся до спільноти Добробату.</div>
            <div class="about__text"> Також ви можете підтримати проект фінансуванням, усі надані кошти будуть
              використані на потреби по відновленню будівель, комунікацій, інфраструктур, які постраждали внаслідок
              військової агресії росії. </div>
          </div>






        </div>
      </div>
    </div>

  </section>
  <section class="section section__ads" id="help">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-12 col-md-7">
          <div class="descr">
            <h2 class="f-bold fz-36 t-upper">
              Стрічка взаємодопомоги
            </h2>
            <div class="text fz-24">
              Щоб прискорити роботу відбудови, ми створили живу стрічку взаємодопомоги.
              Де ті хто постраждав, можуть вказати інформацію про пошкодження, та що саме треба полагодити. А ті хто може швидко допомогти, самоорганізуватись, зв’язатись з користувачем, якому потрібна допомога, та прибути на відновлювальні роботи.

            </div>
            <div class="d-flex nav">
              <a href="#form" class="link btn  scrolTo" data-from>РОЗМІСТИТИ ОГОЛОШЕННЯ</a>
              <a href="https://www.dobrobat.in.ua/advertisement/" class="link btn btn_outline">ПОДИВИТИСЬ ОГОЛОШЕННЯ</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5">
          <div class="img d-flex">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/list-2.png" alt="" class="m-a">
          </div>
        </div>

      </div>

    </div>

  </section>
  <section class="section section__info">

    <h2 class="t-upper t-accent f-bold t-center fz-36 info__title">Як це працює</h2>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="info__img d-flex">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/building.svg" alt="">
          </div>


        </div>
        <div class="col-12 col-lg-6">
          <ul class="info d-flex">
            <li class="info__item fz-24">
              <div class="info__number fz-48">1.</div>
              <div class="info__text">Ви заповнюєте форму і обираєте напрямок у якому можете допомогти у відбудові
                та ремонті будівель.
              </div>

            </li>
            <li class="info__item fz-24">
              <div class="info__number fz-48">2.</div>
              <div class="info__text">Ми формуємо базу для місцевих бальонів, домовляємося і організовуємо усі
                процеси.</div>

            </li>

            <li class="info__item fz-24">
              <div class="info__number fz-48">3.</div>
              <div class="info__text">Зв’язуємося з Вами та узгоджуємо подальші дії.</div>
            </li>
            <li class="info__item fz-24">
              <div class="info__number fz-48">4.</div>
              <div class="info__text">Запускаємо усі роботи. </div>
            </li>
            <li class="info__item fz-24">

              <div class="info__number fz-48">5.</div>
              <div class="info__text">Насолоджуємося нашою спільною співпрацею та результатом.</div>
            </li>
          </ul>

        </div>

      </div>
    </div>
  </section>
  <section class="section section__action">
    <div class="container">
      <div class="action">


        <div class="row">
          <div class="col-12 col-md-4 col-lg-5">
            <div class="action__descr t-center bg-grey t-white">
              <h2 class="fz-36">Відбудуємо Україну разом!</h2>
              <div class="action__text fz-24">
                Вступайте до рядів Добробату або допомагайте по своїм можливостям, тут кожен матиме, що робити!
              </div>
            </div>


          </div>
          <div class="col-12 col-md-8 col-lg-7">
            <div class="action__descr ">
              <h2 class="fz-36 t-center">Добровільне формування створено по запрошенню Київської обласної військової
                адміністрації для допомоги підрозділам ДСНС.</h2>
              <div class="action__text fz-24">
                Ми організуємо транспорт та проінформуємо про все необхідне. Підписуйтесь на наш канал, щоб бути у
                курсі всіх ініціатив та новин «Добробат».
              </div>

              <a href="https://t.me/dobrobat_in_ua" class="btn btn_white link m-a fz-24" data-telegram>
                ПІДПИСАТИСЬ НА КАНАЛ
              </a>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section__donate">

    <div class="container ">
      <div class="donate bg-yellow">
        <div class="row">

          <div class="col-12">

            <h2 class="f-bold fz-36 t-center">
              Ви можете пожертвувати кошти на допомогу, для цього просто натисніть на кнопку
            </h2>
            <button class="btn btn_white fz-24" data-donate>ПОЖЕРТВУВАТИ
              КОШТИ
            </button>

          </div>

        </div>
      </div>
    </div>

  </section>
  <section class="section section__form" id="form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="form-section">
            <ul class="form-section__nav d-flex">
              <button class="btn btn_outline is-active" data-target="#materials">
                НАДАТИ МАТЕРІАЛИ
              </button>
              <button class="btn btn_outline" data-target="#help-form">
                ЗАПРОСИТИ ДОПОМОГУ
              </button>

            </ul>
            <div class="form-section__content">
              <h2 class="fz-24 t-center">
                ЗАПОВНІТЬ, БУДЬ ЛАСКА, ФОРМУ
              </h2>
              <div data-content class="is-active form-section__item" id="materials">
                <?php echo do_shortcode('[contact-form-7 id="14" title="Надати Матеріали"]'); ?>
              </div>
              <div data-content class="form-section__item" id="help-form">
                <?php echo do_shortcode('[contact-form-7 id="488" title="Допомога_copy"]'); ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="section section__form" id="form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="form-section">

            <div class="form-section__content">
              <h2 class="fz-24 t-center">
                ЗАПОВНІТЬ, БУДЬ ЛАСКА, ФОРМУ
              </h2>


              <div class="form-section__item">

                <?php echo do_shortcode('[contact-form-7 id="14" title="Надати Матеріали"]'); ?>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->



  <?php
  get_footer();
  ?>