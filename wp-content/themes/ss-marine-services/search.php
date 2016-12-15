<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package S&S_Marine_Services
 */

get_header(); ?>
	<div class="container pages">
		<div class="row">
			<div class="col-sm-9 search-results">
				<h1 class="page-title"><?php printf( esc_html__( 'Results for: %s', 'ss-marine-services' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>
			</div>
			<div class="col-sm-3 sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php
get_footer();
