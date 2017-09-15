<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<!-- footer -->
<?php if(is_page( 12 )){?>
		<footer class="footer-space">
	<?php }else{?>
	<footer>
	<?php }?>

	<div class="divider-vertical hidden-xs"></div>
	<div class="container">
		<div class="row">

			<?php echo do_shortcode('[contact-form-7 id="79" title="Contact information"]'); ?>

			<div class="col-md-1 hidden-sm hidden-xs text-center">
				<div class="divider-horizontal"></div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 text-center">
				<h2>Call Us: (+91) 9988902648</h2>
				<h4>Information</h4>
				<ul class="nav navbar-nav nav-footer">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="<?php echo get_page_link(8); ?>">About Us</a></li>
					<li><a href="<?php echo get_page_link(10); ?>">Classes</a></li>
                                        <li><a href="<?php echo get_page_link(121); ?>">Blogs</a></li>
					<li><a href="<?php echo get_page_link(12); ?>">Contact Us</a></li>
				</ul>
				<?php
				//wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav nav-footer', 'menu_id' => 'Header Menu' ) );
				?>

			</div>
			<div class="col-md-1 hidden-sm hidden-xs text-center">
				<div class="divider-horizontal"></div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class=" text-center">
					<img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/img/footer-logo.png" />
				</div>
				<?php echo do_shortcode('[contact-form-7 id="81" title="Subscribe"]'); ?>
<?php echo do_shortcode('[widget id="facebooklikebox-3"]'); ?>
			</div>
		</div>
	</div>
	<div class="divider-vertical" style=" position: static;"></div>
	<div class="text-center copyright">KARATE © 2017. All Rights Reserved</div>
<div class="container">
<div class="row">
<div class="col-xs-12 "><?php get_sidebar(); ?></div>
</div>
</div>
</footer>

<!-- JS -->
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/js/jquery-2.2.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script><script>new WOW().init();</script>
<script type="text/javascript" >
	$(document).ready(function() {
		//carousel options
		$('#quote-carousel').carousel({
			pause: true, interval: 10000,
		});
		jQuery.scrollSpeed(100, 800);
	});
	// 8. sticky header
	function stickyHeader () {
		if ($('.fix-header').length) {
			var strickyScrollPos = 600;
			if($(window).scrollTop() > strickyScrollPos) {
				$('header').removeClass('fadeIn animated');
				$('header').addClass('navbar-fixed-top fadeInDown animated');
			}
			else if($(this).scrollTop() <= strickyScrollPos) {
				$('header').removeClass('navbar-fixed-top fadeInDown animated');
				$('header').addClass('slideIn animated');
			}
		};
	}
	// instance of fuction while Window Scroll event
	jQuery(window).on('scroll', function () {
		(function ($) {
			stickyHeader();
		})(jQuery);
	});
	var wow = new WOW(
		{
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true,       // act on asynchronously loaded content (default is true)
			callback:     function(box) {
				// the callback is fired every time an animation is started
				// the argument that is passed in is the DOM node being animated
			},
			scrollContainer: null // optional scroll container selector, otherwise use window
		}
	);
	wow.init();
</script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/js/jQuery.scrollSpeed.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/js/parallax.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/js/wow.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/karate/content/js/bootstrap.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
