<?php
/**
 * The template for displaying archive pages.
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
	      			<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
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

