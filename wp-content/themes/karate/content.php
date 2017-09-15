<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('mt50 mb20 col-xs-12'); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>

			<div class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

					<?php //the_post_thumbnail(); ?>
					<div class="col-sm-5">
						<div class="entry-thumbnail blog">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

								<?php
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
								echo '<img class="img-responsive" height="248" src="' . esc_url( $large_image_url[0] ) . '" >';
								?>
								<?php //the_post_thumbnail(); ?>
							</a>
						</div>
					</div>
					<div class="col-sm-7">
						<h2><?php the_title(); ?></h2>
						<div class="entry-meta"></div>
						<?php the_excerpt(); ?>

					</div>
				</a>
			</div>
		<?php endif; ?>

		<?php /*if ( is_single() ) : */?><!--
		<h2class="entry-title"><?php /*the_title(); */?></h2>
		<?php /*else : */?>
		<h1 class="entry-title">
			<a href="<?php /*the_permalink(); */?>" rel="bookmark"><?php /*the_title(); */?></a>
		</h1>
		--><?php /*endif; // is_single() */?>

		<!--		<div class="entry-meta">-->
		<!--			--><?php //twentythirteen_entry_meta(); ?>
		<!--			--><?php //edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		<!--		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php else : ?>
		<div class="entry-content">
			<?php
			//the_excerpt();
			/* translators: %s: Name of current post */
			//the_content();

			//wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'teestay' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );

			?>
		</div><!-- .entry-content -->
	<?php endif; ?>


</article><!-- #post -->
