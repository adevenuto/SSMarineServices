<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package S&S_Marine_Services
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else : ?>
			<?php if (has_post_thumbnail()) { ?>
				<div class="post-image">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail() ?>
					</a>
					<div class="post-tags">
						<?php the_tags('',',',''); ?>
					</div>
				</div>
			<?php } ?>
			<h4><a href="<?php the_permalink() ?>"><?php the_title_limit(50, '...'); ?></a></h4>
		<?php endif; ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<div class="post-comments-badge">
					<a href=""><?php comments_number(0, 1, '%'); ?></a>
				</div>
  			<strong><?php the_author();?></strong>
				</i><time><?php the_date(); ?></time>
				<?php edit_post_link('Edit', '<div><i class="fa fa-pencil"></i> ', '</div>'); ?>
			</div><!-- post-details -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="post-excerpt">
		<?php echo excerpt(30) ?><a href="<?php the_permalink() ?>">Continue Reading</a>
	</div>
</article><!-- #post-## -->
