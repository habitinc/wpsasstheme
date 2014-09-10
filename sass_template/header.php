<?php
/**
 * The header for our theme. Opens #page and #main
 *
 * @package WordPress
 * @subpackage NAME ME
 * @since 1.0
 */
?><!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!--<meta name="viewport" content="width=340, minimum-scale=0.15">-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/Favicon.ico" />
	<!--<link rel="icon" type="image/png" href="images/favicon.png" />-->
		
	<!-- Loads HTML5 script to handle HTML5 in old IE browsers -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
	<!-- Fonts from fonts.com -->
	<!-- <script type="text/javascript" src="http://fast.fonts.net/jsapi/efc4539d-0317-4595-93cd-ddceafba71d4.js"></script> -->
	
	<!-- Set up our global javascript variables-->
	<script type="text/javascript">
		var template_uri = '<?php echo get_template_directory_uri(); ?>';
	</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
	<header class="site-header">
		<div class="navbar">
			<nav class="main-navigation">
				
				<?php 
				$args = array(
					'theme_location' => 'primary', 
					'menu' => '',
					'container' => false,
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'dl-menu',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => ''
				);
				?>
				
				<?php wp_nav_menu( $args ); ?>
				
			</nav><!-- #site-navigation -->
		</div><!-- .navbar -->
	</header><!-- .site-header -->

	<div id="main">
		<div class="banner"></div>