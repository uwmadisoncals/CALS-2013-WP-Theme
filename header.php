<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 * @package WordPress
 * @subpackage CALSv2
 * @since CALS 2.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
<meta name="viewport" content="width=320.1, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" /> 
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
 <!-- iOS Device Startup Images -->
 
<!-- iPhone -->
<!--<link rel="apple-touch-startup-image"
      media="(device-width: 320px)"
      href="<?php echo get_template_directory_uri(); ?>/images/startup-iphone.png">-->
<!-- iPhone (Retina) -->
<!--<link rel="apple-touch-startup-image"
      media="(device-width: 320px)
         and (-webkit-device-pixel-ratio: 2)"
      href="<?php echo get_template_directory_uri(); ?>/images/startup-iphone4.png">-->
      
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/default_app_logo.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/default_app_logo@2x.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/default_app_logo@2x.png" />


<!-- iPhone SPLASHSCREEN-->
        <link href="apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
        <!-- iPhone (Retina) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPad (portrait) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
        <!-- iPad (landscape) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
        <!-- iPad (Retina, portrait) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <!-- iPad (Retina, landscape) SPLASHSCREEN-->
        <link href="apple-touch-startup-image-1496x2048.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> 
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/main.css" />

<!--[if IE]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie7.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/ie8.css" />
<![endif]-->
 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>

 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.js"></script>
 <!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery_easing.js"></script>-->
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.iosslider.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-css-transform.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-rotate.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/browserdetect.js"></script>
 
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/min/mainactions.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/blurobjs.js"></script>


<script src="<?php echo get_template_directory_uri(); ?>/library/scripts/vallenato.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/styles/vallenato.css" type="text/css" media="screen">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<?php $options = twentyeleven_get_theme_options();
$current_colorscheme = $options['link_color']; 


?>

<body <?php body_class(); ?> id="<?php echo $current_colorscheme; ?>">
<div class="ieWarning" style="display: none;">
	<h1>It appears your Internet Explorer is set to force compatibility mode.  This means your browser acts like its from 2002.</h1>
	<p>Please turn this off so your browser can behave normally and display this webpage.</p>
	<a href="#" class="ieWarningDismiss">Dismiss and don't bother me again.</a>
</div>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
		<div class="headerCentered">
			<hgroup class="heading">
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>

			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( $header_image ) :
					// Compatibility with versions of WordPress prior to 3.4.
					if ( function_exists( 'get_custom_header' ) ) {
						// We need to figure out what the minimum width should be for our featured image.
						// This result would be the suggested width if the theme were to implement flexible widths.
						$header_image_width = get_theme_support( 'custom-header', 'width' );
					} else {
						$header_image_width = HEADER_IMAGE_WIDTH;
					}
					?>
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logoImage">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					/*if ( is_singular() && has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ /*$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
							$image[1] >= $header_image_width ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else :*/
						// Compatibility with versions of WordPress prior to 3.4.
						if ( function_exists( 'get_custom_header' ) ) {
							$header_image_width  = get_custom_header()->width;
							$header_image_height = get_custom_header()->height;
						} else {
							$header_image_width  = HEADER_IMAGE_WIDTH;
							$header_image_height = HEADER_IMAGE_HEIGHT;
						}
						?>
					<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
				<?php /*endif;*/ // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>

			<div class="utilityMenu">
				<?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
			</div>

			
			</hgroup>
			
			
			
			<nav id="access" role="navigation">
				<div class="headeroverlay">
				<a href="#" class="mobileNavTrigger">Navigation</a>
				<a href="#" class="mobileSettingsTrigger">Navigation</a>
				<div class="mobileScrollTop"></div>
				<div class="centerfix relative">
				<a href="#" class="totop" title="Go to the top of the page">Go to the top of the page</a>
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				
				<!-- The markup of the navigation if it is hard coded -->
				<!--<ul class="clearfix">
			  		<li><a href="#">Students</a></li>
			  		<li><a href="#">Alumni</a></li>
			  		<li><a href="#">Faculty &amp; Staff</a></li>
			  		<li><a href="#">Industry &amp; Community</a></li>
			  		<li><a href="#">Research</a></li>
			  		<li><a href="#">Outreach</a></li>
  				</ul>-->
  				
  				
  						<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="globalSearch">
				<?php get_search_form(); ?>
				<?php //cals_uw_directory_search($small=true, $add_class = 'search_results'); ?>
				<div class="filtered" style="display: none;">
					<ul>
					<li class="subheading" style="display: block;">Results <span id="filter-count"></span></li>
					<?php


$args = array( 'posts_per_page' => 100 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endforeach; 
wp_reset_postdata(); 

$pages = get_pages(); 
  foreach ( $pages as $page ) {
  	echo '<li>';
  	echo '<a href="' . get_page_link( $page->ID ) . '">';
	echo $page->post_title;
	echo '</a>';
	echo '</li>';
	
  } 
  
  
  //cals_uw_directory_search($small=true, $add_class = 'search_results');
  
  ?>

						<!-- Hard code any additional search terms here -->
						<!--<li><a href="#">Search Item 1</a></li>-->
						
					</ul>
					
					<div class="directory"></div>
				</div>
				</div>
			<?php
				else :
			?>
				<?php get_search_form(); ?>
			<?php endif; ?>
				</div>
				
				
				</div>
			</nav><!-- #access -->
			
			
<div class="headingbg clearfix"></div>
		</div>
	</header><!-- #branding -->

<div id="mobile-menu">
	<div id="mobile-menu-inner">
	<div class="mobile-search"><input type="search" placeholder="Search" /></div>
	<!--<a href="/" class="mobileHome">Home</a>-->
	<div id="mobile-menu-container"></div>
	</div>
</div>
<div id="mobile-filter">
	<div id="mobile-filter-inner">
	</div>
</div>

<div class="headerPhotoBg">
<div class="headertransition"></div>
<div class="contrastmask1"></div>

<div class="collegeFeature">
<ul class="slides">


					<?php //get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>
					
					<?php $args = array( 'post_type' => 'headerslides', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					$loopcount = 0;
					while ( $loop->have_posts() ) : $loop->the_post(); 
					$loopcount = $loopcount + 1;
					$slideclass = "slideImage".$loopcount;
					$slideblurclass = "slideBlur".$loopcount;
					?>
					
					
    			
    				<li class="flipin">
    					<div class="slideImage <?php echo $slideclass ?>" style="background: url('<?php 
				    					
					    				if ( has_post_thumbnail() ) {
						    				
						    				//the_post_thumbnail();
						    				//echo get_the_post_thumbnail($page->ID, 'large');
						    				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large' );
$url = $thumb['0']; echo $url;
				 
						    				} else {
				 
											 //echo '<img src="';
											 //echo catch_that_image();
											// echo '" alt="" />';
				
										}
					    				
				    				?>') no-repeat; background-size: 100% auto;">
				    				
				    				<div class="headerBgContainer"><div class="headerbgBlur"><div class="headerbgBlurImage"></div></div></div>					
				    				<div class="slideBlurImage"></div>
				    				
				    				
				    				<div class="slideBlur <?php echo $slideblurclass ?>"></div>
				    				<div class="contrastmask2"></div>
    					</div>
    					
    					
				    			
				    		
    			
    			
  	
  		
  			<div class="featureCaption">
  				<div class="centered">
  				<h2><?php the_title(); ?></h2>
  				
	  				<div class="featuresubtitle">
	  				<?php the_content_rss(); ?>
	  				</div>
  				</div>
  			</div>
  			
  		</li>
  					
  	
					<?php endwhile; ?>
				
					

				
				
				</ul>
  	
  	<a href="#" class="next">Next</a>
  	<a href="#" class="previous">Previous</a>
  	
  	<div class="timer">
  		<a href="#">Pause Slide Rotation</a>
	  	<div class="timerLeft">
	  	<div class="timer1"></div>
	  	</div>
	  	<div class="timerRight">
	  	<div class="timer2"></div>
	  	</div>
	  	
  	</div>
  </div>
  <div class='fluidHeight' style="display: none;">
			
			<div class = 'sliderContainer'>
			
				<div class = 'iosSlider'>
				
					<div class = 'slider'>
					
						
						
						
					
					</div>
				
				</div>
				
				
				
				<div class = 'scrollbarContainer'></div>
				
			</div>
			
		
		</div>
		<div class="headershade"></div>
		<!-- end of feature slider -->
		
</div>
	