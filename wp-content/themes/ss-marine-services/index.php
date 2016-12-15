<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package S&S_Marine_Services
 */
get_header(); ?>
	<div class="page-blogs pages">
	  <div class="container">
	    <div class="row">
	      <main class="col-sm-9">
    			<?php if ( have_posts() ) : if ( is_home() && ! is_front_page() ) : ?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		 			<?php endif; ?>
					<!-- LOOP -->
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-sm-6 blog-container">
							<div class="blog-content">
								<?php get_template_part( 'template-parts/content', get_post_format() );?>
							</div>
						</div>
					<?php endwhile; ?>
						<?php the_posts_navigation(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
					<div class="pagination-controls">
						<?php wpbeginner_numeric_posts_nav(); ?>
					</div>
	      </main> <!-- main -->
	      <div class="col-sm-3 sidebar"><?php get_sidebar() ?></div>
	    </div>
	  </div>
	</div>
<?php
get_footer();



