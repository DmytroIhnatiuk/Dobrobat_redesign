<?php /* Template Name: Оголошення */ ?>
<?php
get_header();
?>
<main class="advertisement-page">
  <section class="section section__ads ">
    <div class="ads t-acent d-flex">
      <div class="container">
        <h1 class="fz-36 t-upper t-center" id="data-ads">оголошення
        </h1>
        <div class="row ads__nav">
          <div class="col-12">
            <div class="border dropdown pos-r region-filter" data-region='dropdown'>
              <div class="dropdown__menu border pos-a">
                <ul class="dropdown-wrapper">
                  <div class="row"></div>
                </ul>
              </div>
              <button class="dropdown__btn  pos-a  d-flex align-items-center justify-content-center">
                <svg class="icon">
                  <use xlink:href="#arrow"></use>
                </svg>
              </button>
              <div class="dropdown__selected pos-a " data-region='region'>
                Оберіть область
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="fz-18 f-bold">
              Види ремонтних робіт:

            </div>
            <span class="subtitle">Можна обрати декілька</span>
            <div class="types">
              <div class="row">

              </div>


            </div>
          </div>
          <div class="col-12">
            <div class="fz-18 f-bold">
              Хто потрібен:
            </div>
            <span class="subtitle">Можна обрати декілька</span>
            <div class="profession">
              <div class="row">

              </div>


            </div>
          </div>
          <div class="col-12">
            <div class="fz-18 f-bold">
              Необхідні матеріали:

            </div>
            <div class="materials">
              <div class="row">

              </div>


            </div>
          </div>
          <div class="col-12">
            <div class="fz-18 f-bold">
              Статус

            </div>
            <div class="status">
              <div class="row">

              </div>


            </div>
          </div>
          <div class="col-12">
            <div class="fz-18 f-bold">
              Фільтри:
            </div>
            <div class="ads__search d-flex w-100">
              <div class="row w-100">
                <div class="col-12 col-md-3">
                  <div class="subtitle">
                    Область
                  </div>
                  <div class="search d-flex search-selected"></div>
                </div>
                <div class="col-12 col-md-3">
                  <div class="subtitle">
                    Види ремонтних робіт
                  </div>
                  <div class="search d-flex search-types"></div>
                </div>
                <div class="col-12 col-md-3">
                  <div class="subtitle">
                    Хто потрібен:
                  </div>
                  <div class="search d-flex search-profession"></div>
                </div>
                <div class="col-12 col-md-3">
                  <div class="subtitle">
                    Необхідні матеріали:
                  </div>
                  <div class="search d-flex search-materials"></div>
                </div>
                <div class="col-12 col-md-3">
                  <div class="subtitle">
                    Статус:
                  </div>
                  <div class="search d-flex search-status"></div>
                </div>
              </div>


            </div>
          </div>
          <div class="col-12">
            <div class="d-flex   ads__filter">
              <div class="d-flex ads__btns align-items-center">
                <button class="btn d-flex justify-content-center align-items-center" data-filter>
                  <svg viewBox="0 0 16 16" width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" fill="currentColor" c>
                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
                  </svg>
                  Фільтрувати
                </button>
                <button class="btn btn_white d-flex justify-content-center align-items-center" data-clean>
                  Очистити фільтр
                </button>
              </div>
            </div>


          </div>
        </div>
        <div class="row">
          <div class="col-12">


            <button class="btn ads__show-nav">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330">
                <path d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
              </svg>
              <span>Фільтр</span>

            </button>



          </div>
        </div>
        <div class="row" data-ads>
        </div>
        <div class="paginator d-flex "></div>
      </div>


    </div>



  </section>









  <?php
  get_footer();
  ?>