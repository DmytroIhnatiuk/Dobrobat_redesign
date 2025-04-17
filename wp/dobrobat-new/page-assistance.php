<?php /* Template Name: Взаємодопомога */ ?>
<?php
get_header();
?>


<main class="assistance__page">
  <section class="section section__assistance  assistance">
    <div class="container pos-r">


      <div class="assistance__header d-flex pos-r">
        <div class="assistance__descr pos-r">
          <h1 class="fz-34 f-500">
            «Добробат» спільно з компанією Hilti Україна реалізовує ініціативу підтримки бригад та компаній, які
            займаються відбудовою зруйнованих будівель

          </h1>
          <div class="assistance__logos d-flex">
            <a href="<?php echo get_home_url(); ?>">
              <svg class="icon">
                <use xlink:href="#logo"></use>
              </svg>
            </a>
            <a href="https://www.hilti.ua/">
              <div class="image">
                <img src="https://www.hilti.ua/static/ui/contents/R2023-44/assets/images/hilti-logo.svg" alt="Hilti">
              </div>

            </a>
          </div>
        </div>
        <div class="assistance__descr">
          <div class="assistance__photos d-flex">
            <div class="image bdr-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/assistance-1.jpg" alt=""></div>
            <div class="image bdr-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/assistance-2.jpg" alt=""></div>
          </div>
          <div class="descr">
            Hilti Чехія передала до України 5 палет інструменту та
            витратних матеріалів на волонтерських засадах. Частина інструментів була розподілена на відновлювальні
            проєкти «Добробату» до осередків наших батальйонів. Інша частина може бути розподілена між команіями та
            бригадами, які займаються відбудовою, реконструкцією, розбором завалів чи відновленням вже зараз

          </div>
        </div>
      </div>
      <div class="assistance__footer  pos-r">
        <div class="wrapper d-flex">
          <div class="assistance__bg">

          </div>
          <div class="assistance__form pos-r bdr-12">
            <div class="fz-24">
              Для оформлення запиту на отримання такого інструменту, будь ласка, заповніть форму
            </div>
            <a target="blank" href="https://forms.gle/gJbD2tHtw2SXWARd7" class="btn btn_gray">

              <span class="fz-18">
                Заповнити форму
              </span>
              <span class="doc">
                <svg class="icon">
                  <use xlink:href="#doc-assistance"></use>
                </svg>
              </span>

            </a>

          </div>
        </div>


      </div>


    </div>
  </section>

  <?php
  get_footer();
  ?>