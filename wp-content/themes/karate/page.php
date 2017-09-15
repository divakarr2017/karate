<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<?php
if(is_page( 8 )){?>
	<div class="about-bg  text-center "><h1 class="mt5 call subHeading" >CALL US: (+91) 9988902648</h1></div>
	<!-- section one -->
	<section class="container  mb50">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="container about">
					<div class="row">
						<?php the_content();?>

					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>

	<!-- section five -->
	<section class="" style="background: url(<?php bloginfo('url'); ?>/wp-content/themes/karate/content/img/karate-kick-up.png) no-repeat 0 50% #e5e5e5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 mb20">
					<h2>OUR  TRAINERS</h2>
				</div>

				<?php
				$args = array(
					'numberposts' =>100,
					'category' => 6,
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'draft, publish, future, pending, private',
					'category__not_in' => array( '4','1','5','7','20' ),
					'suppress_filters' => true
				);

				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					/*  echo "<pre>";print_r($recent);echo "</pre>";*/
					$id=$recent["ID"];
					$title=$recent["post_title"];

					$post_thumbnail_id = get_post_thumbnail_id( $id );
					$blogimg = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
					$imagesrc=$blogimg[0];

					$fb = get_post_meta( $id, 'facebook_link', false );
					$fb_option=$fb[0];

					$twitt = get_post_meta( $id, 'twitter_link', false );
					$twitt_option=$twitt[0];

					$linkdin = get_post_meta( $id, 'linkedin_link', false );
					$linkdin_option=$linkdin[0];

					$mail = get_post_meta( $id, 'mail_link', false );
					$mail_option=$mail[0];


					echo "<div class='col-sm-3 col-xs-6 text-center'>";
					echo '<a class="" href="' . get_permalink($recent["ID"]). '"><img src = "'.$imagesrc.'" class = "img-circle img-responsive img-center"></a>';
					echo "<h3>".$title."</h3>";?>
					<ul class="nav navbar-nav trainer">
						<li><a href="<?php echo $fb_option;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $twitt_option;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $linkdin_option;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $mail_option;?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					</ul>
					<?php
					echo "</div>";
				}
				wp_reset_query();
				?>



			</div>
		</div>
	</section>

<?php  }elseif(is_page( 10 )){?>
	<div class="classes-bg text-center "><h1 class="mt5  subHeading" >CALL US: (+91) 9988902648</h1></div>
	<!-- section one -->
	<section class="container mt20 mb50">
		<div class="row">
			<div class="col-xs-12 mb30">
				<h1>Our
					<span>CLASSES</span>
				</h1>
			</div>

			<?php
			$args = array(
				'numberposts' =>100,
				'category' => 7,
				'order' => 'ASC',
				'post_type' => 'post',
				'post_status' => 'draft, publish, future, pending, private',
				'category__not_in' => array( '4','1','5','6' ,'20'),
				'suppress_filters' => true
			);

			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){

                $id=$recent["ID"];
                $title=$recent["post_title"];

                $post_thumbnail_id = get_post_thumbnail_id( $id );
                $blogimg = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
                $imagesrc=$blogimg[0];

                $clint_name = get_post_meta( $id, 'clint_name', false );
                $clint_name_option=$clint_name[0];

                echo "<div class='col-sm-3 col-xs-6'>";
                echo '<a href="' . get_permalink($id). '" class="thumbnail">';
                echo '<div class="classes">';
                echo '<img src = "'.$imagesrc.'" class = "img-responsive">';
                echo '<div class="overlayslideright"></div>';
                echo '</div>';
                echo "<h4 class='text-primary'>".$title."</h4>";?>
                <p class=""><?php echo $clint_name_option; ?></p></a>
                <?php
                echo "</div>";
            }
			wp_reset_query();
			?>



		</div>
	</section>
	<section class="" style="background: url(<?php bloginfo('url'); ?>/wp-content/themes/karate/content/img/karate-kick-up.png) no-repeat 0 50% #e5e5e5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 mb20">
					<h2>OUR  TRAINERS</h2>
				</div>
				<?php
				$args = array(
					'numberposts' =>100,
					'category' => 6,
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'draft, publish, future, pending, private',
					'category__not_in' => array( '4','1','5','7','20'),
					'suppress_filters' => true
				);

				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					/*  echo "<pre>";print_r($recent);echo "</pre>";*/
					$id=$recent["ID"];
					$title=$recent["post_title"];

					$post_thumbnail_id = get_post_thumbnail_id( $id );
					$blogimg = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
					$imagesrc=$blogimg[0];

					$fb = get_post_meta( $id, 'facebook_link', false );
					$fb_option=$fb[0];

					$twitt = get_post_meta( $id, 'twitter_link', false );
					$twitt_option=$twitt[0];

					$linkdin = get_post_meta( $id, 'linkedin_link', false );
					$linkdin_option=$linkdin[0];

					$mail = get_post_meta( $id, 'mail_link', false );
					$mail_option=$mail[0];


					echo "<div class='col-sm-3 col-xs-6 text-center'>";
					echo '<a class="" href="' . get_permalink($recent["ID"]). '"><img src = "'.$imagesrc.'" class = "img-circle img-responsive m-at"></a>';
					echo "<h3>".$title."</h3>";?>
					<ul class="nav navbar-nav trainer">
						<li><a href="<?php echo $fb_option;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $twitt_option;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $linkdin_option;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $mail_option;?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					</ul>
					<?php
					echo "</div>";
				}
				wp_reset_query();
				?>


			</div>
		</div>
	</section>

<?php  }elseif(is_page( 626 )){?>
<div class="classes-bg text-center "><h1 class="mt5  subHeading" >CALL US: (+91) 9988902648</h1></div>
	<!-- section one -->
	<section class="container mt20 mb50">
		<div class="row">
			<div class="col-xs-12 mb30">
				<h1>Our
					<span>Testmonials</span>
				</h1>
			</div>

			<?php
			$args = array(
				'numberposts' =>100,
				'category' => 20,
				'order' => 'ASC',
				'post_type' => 'post',
				'post_status' => 'draft, publish, future, pending, private',
				'category__not_in' => array( '4','1','5','6' ,'7'),
				'suppress_filters' => true
			);

			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){

                $id=$recent["ID"];
                $title=$recent["post_title"];
$content=$recent["post_content"];

                $post_thumbnail_id = get_post_thumbnail_id( $id );
                $blogimg = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
                $imagesrc=$blogimg[0];

                $clint_name = get_post_meta( $id, 'clint_name', false );
                $clint_name_option=$clint_name[0];

                echo "<div class='col-sm-3 col-xs-6'>";
                echo '<a href="' . get_permalink($id). '" class="thumbnail">';
                echo '<div class="classes">';
                echo '<img src = "'.$imagesrc.'" class = "img-responsive">';
                echo '<div class="overlayslideright"></div>';
                echo '</div>';
                echo "<h4 class='text-primary'>".$title."</h4>";
                 echo "<p>".$content."</p>";
?>
                    
                <p class=""><?php echo $clint_name_option; ?></p></a>
                <?php
                echo "</div>";
            }
			wp_reset_query();
			?>



		</div>
	</section>
	<section class="" style="background: url(<?php bloginfo('url'); ?>/wp-content/themes/karate/content/img/karate-kick-up.png) no-repeat 0 50% #e5e5e5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 mb20">
					<h2>OUR  TRAINERS</h2>
				</div>
				<?php
				$args = array(
					'numberposts' =>100,
					'category' => 6,
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'draft, publish, future, pending, private',
					'category__not_in' => array( '4','1','5','7','20'),
					'suppress_filters' => true
				);

				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					/*  echo "<pre>";print_r($recent);echo "</pre>";*/
					$id=$recent["ID"];
					$title=$recent["post_title"];

					$post_thumbnail_id = get_post_thumbnail_id( $id );
					$blogimg = wp_get_attachment_image_src( $attachment_id = $post_thumbnail_id , $size = 'Full' );
					$imagesrc=$blogimg[0];

					$fb = get_post_meta( $id, 'facebook_link', false );
					$fb_option=$fb[0];

					$twitt = get_post_meta( $id, 'twitter_link', false );
					$twitt_option=$twitt[0];

					$linkdin = get_post_meta( $id, 'linkedin_link', false );
					$linkdin_option=$linkdin[0];

					$mail = get_post_meta( $id, 'mail_link', false );
					$mail_option=$mail[0];


					echo "<div class='col-sm-3 col-xs-6 text-center'>";
					echo '<a class="" href="' . get_permalink($recent["ID"]). '"><img src = "'.$imagesrc.'" class = "img-circle img-responsive m-at"></a>';
					echo "<h3>".$title."</h3>";?>
					<ul class="nav navbar-nav trainer">
						<li><a href="<?php echo $fb_option;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $twitt_option;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $linkdin_option;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $mail_option;?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					</ul>
					<?php
					echo "</div>";
				}
				wp_reset_query();
				?>


			</div>
		</div>
	</section>
<?php  }elseif(is_page( 12 )){?>

	<div class="contact-bg text-center "><h1 class="mt5 subHeading" >CALL US: (+91) 9988902648</h1></div>
	<!-- section one -->
		<section class="container mb50">
			<div class="row">
				<?php echo do_shortcode('[contact-form-7 id="80" title="contact-us"]');?>
			</div>
		</section>
		<div class="embed-responsive embed-responsive-16by9">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27441.172438841346!2d76.7558464!3d30.7142801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec360e1b518d%3A0xcc1e6513a69d2b07!2sUniversal+Martial+Arts+Chandigarh!5e0!3m2!1sen!2sin!4v1503389370103" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div>
<?php  }else{?>
	<div class="about-bg text-center "><h1 class="mt5 subHeading" >CALL US: (+91) 9988902648</h1></div>
	<!-- section one -->
	<section class="container mb50">
	<div class="row">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-xs-12">
				<h2 class="entry-title"><?php the_title(); ?></h2>
				</div>
				<?php the_content(); ?>
				
			<?php endwhile; ?>
	</div>
	</section>

<?php }?>






<?php get_footer(); ?>