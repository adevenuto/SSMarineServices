<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package S&S_Marine_Services
 */

get_header(); ?>
<div class="page-blogs pages">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-9">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
					</div>
	      <div class="col-sm-3 sidebar"><?php get_sidebar() ?></div>
	    </div>
	  </div>
	</div>


<?php
get_footer();
