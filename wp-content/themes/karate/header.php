<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/css/animate.css" rel="stylesheet" type="text/css" />
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106470315-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106470315-1');
</script>

	<?php wp_head(); ?>
</head>

<body>  <?php if ( is_front_page()  ) {?>

<!-- Gallery -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php       $args = array(
			'category' => 1,
			'order' => 'DESC',
			'post_type' => 'post',
			'post_status' => 'publish',
			'category__not_in' => array( '4','5','6','7','8','9','20'),
			'showposts' => 100,
		);
		$recent_posts = wp_get_recent_posts( $args );?>
	<?php
	$c = 0;
	$class = '';
	query_posts($args);
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		$c++;
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'Large' );
		$url = $thumb['0'];
		if ( $c == 1 ) $class .= ' active';
		else $class = '';

		?>

		<div class="item <?php echo $class; ?>">
			<img src="<?php echo $url; ?>" alt="Banner">
			<div class="carousel-caption">
				
				<?php $abs = get_post_meta( $post->ID, 'slider_text', false );?>
				
			</div>
		</div>
		<?php
	endwhile;endif;
	wp_reset_query();
	?>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<?php } ?>

<!-- Header -->
<?php if ( is_front_page()  ) {?>
	<!-- Header -->
	<header class="header-home">
		<div class="container fix-header">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						$image=$image[0];
						?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo $image; ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /> </a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php // Default homepage
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav pull-right', 'menu_id' => 'primary-menu' ) );
						
						?>

						<!--<ul class="nav navbar-nav navbar-right">
							<li><a href="https://www.facebook.com/umafitness"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com/KarateSatish"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCYNEOQVEgkIJjuJUriz_qhQ"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
						</ul>-->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<?php }else{?>
	<!-- Header -->
	<header class="m0 navbar-fixed-top ">
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button><?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					$image=$image[0];
					?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo $image; ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /> </a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php // Default homepage
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav pull-right', 'menu_id' => 'primary-menu' ) );
                     ?>

					
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>
		<?php }?>




