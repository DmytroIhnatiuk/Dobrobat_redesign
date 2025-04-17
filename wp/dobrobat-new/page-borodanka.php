<?php /* Template Name: Borodanka */ ?>
<?php
get_header();
?>
<main class="borodanka">
  <section class="section section__main t-accent">
    <div class="main-screen">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 fz-24">
            <div class="about__descr">
              <h2 class="about__title fz-36">
                Добробат - це добровольчий будівельний батальон!
              </h2>
              <div class="about__text">Збираємо группу на 8-10 квітня у Бородянку <br> (Київська обл.) на робір завалів.</div>
              <div class="about__text">Хочеш з нами? Тисни на кнопку долучитися, реєструйся, та чекай сповіщення</div>
              <button class="btn" data-telegram>
                <a href="https://telegram.me/dobrobat_in_ua_bot?start" class="link  fz-24">
                  ДОЛУЧИТИСЯ
                </a>
              </button>
            </div>






          </div>
          <div class="col-12 col-md-6">
            <div class="about-wrapper d-flex flex-column">

              <div class="about pos-r">

                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/1.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/2.webp" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/3.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/4.png" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/5.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/6.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/7.jpg" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dobrobat/8.webp" alt="">
                  </div>
                
                </div>

              </div>
              <div class="about__nav  d-flex justify-content-end ">
                <button class="prev_slideAbout"> <svg class="icon arrow">
                    <use xlink:href="#arrow"></use>
                  </svg></button>
                <button class="next_slideAbout"> <svg class="icon arrow next">
                    <use xlink:href="#arrow"></use>
                  </svg></button>


              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


  </section>
  <div class="info-line  d-flex justify-content-center align-items-center">
    <div class="marquee d-flex align-items-center">
      <span>ВИ МОЖЕТЕ ДОПОМОГТИ!</span>
    </div>
  </div>
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
                  <button class="btn btn_white m-a" data-telegram>
                    <a href="https://t.me/dobrobat_in_ua" class="link  fz-24">
                      ПІДПИСАТИСЬ НА КАНАЛ
                    </a>
                  </button>
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