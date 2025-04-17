<?php /* Template Name: Text page */ ?>
<?php
get_header();
?>
<main class="text-page">
  <section class="section section__text-page py-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="t-center"> <?php echo the_title(); ?></h1>
          <div>
            <?php echo the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>





  <?php
  get_footer();
  ?>