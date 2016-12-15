<?php
/*
Template Name: contact-us Page
*/
get_header(); ?>
  <?php if (have_posts()) {
        while (have_posts()) {
        the_post();
  ?>
  <div class="container pages">
    <div class="row">
      <div class="col-md-8">
        <?php
      the_content();

        }
      } ?>
      </div>
      <div class="col-md-4"><?php get_sidebar() ?></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>