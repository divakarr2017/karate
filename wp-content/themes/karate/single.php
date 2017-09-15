<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<!-- section one -->
	<section class="container mt90 mb50">
	<div class="row">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

	         <?php if (in_category('7')) {?>

					<h2class="entry-title text-center"><span><?php the_title(); ?></span></h2>
					<div class="col-md-6 col-xs-12  text-center">
						<?php
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
						echo '<img class="img-responsive imgitrainner" height="248" src="' . esc_url( $large_image_url[0] ) . '" >';
						?>
					</div>

					<div class="entry-content col-md-6 col-xs-12  text-justify">
						<?php the_content(); ?>
					</div>

		     <?php }else{?>
					<h2 class="entry-title text-center"><span><?php the_title(); ?></span></h2>
					<div class="col-md-8 col-xs-12 col-md-offset-2 text-center">
						<?php
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
						echo '<img class="img-responsive imgitrainner" height="248" src="' . esc_url( $large_image_url[0] ) . '" >';
						?>
					</div>

					<div class="entry-content col-md-8 col-xs-12 col-md-offset-2 text-justify mt20">
						<?php the_content(); ?>
					</div>

			 <?php }?>





			<?php endwhile; ?>
    </div>
	</section>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>