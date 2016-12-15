<?php
/*
Template Name: service-request-page
*/
get_header(); ?>
  <?php if (have_posts()) {
        while (have_posts()) {
        the_post();
  ?>
  <div class="container pages">
    <div class="row">
      <div class="col-md-8">
        <div class="form">
        <?php
      the_content();

        }
      } ?>
        </div>
      </div>
      <div class="col-md-4 sidebar"><?php get_sidebar() ?></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>