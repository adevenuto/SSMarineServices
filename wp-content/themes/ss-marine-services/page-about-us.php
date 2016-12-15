<?php
/*
Template Name: about-us Page
*/
get_header(); ?>
  <?php if (have_posts()) {
        while (have_posts()) {
        the_post();
  ?>
<div class="page-about pages">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="page-img">
          <?php the_post_thumbnail("full"); ?>
        </div>
        <div id="about-page-content">
          <?php
          the_content();
            }
          } ?>
        </div>
      </div>
      <div class="col-md-3 sidebar"><?php get_sidebar() ?></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

