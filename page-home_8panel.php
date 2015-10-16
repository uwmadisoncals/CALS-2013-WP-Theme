<?php
/**
 * Template Name: Home Page - 8 Panels
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

//wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '2013-07-10' );

get_header(); ?>




	<div id="main">

		<div id="primary">
			<div id="content" class="fullWidth" role="main">


				<!-- CALS News Content Box -->
				<div class="row clearfix">

					<div class="span-50 box dropin">

							<h2>News</h2>

							<?php switch_to_blog(20); ?>
<?php query_posts("posts_per_page=1&category_name=featured-articles"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {
							//echo "<img src='".get_template_directory_uri()."/images/newsplaceholder1.jpeg' alt=' '>";
							 //echo '<img src="';
							 echo catch_that_news_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php the_time('l, F jS, Y') ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
							<a href="http://news.cals.wisc.edu" class="moreButton">More News</a>


						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>

					</div>

					<div class="span-50 box dropin2">
							<h2>Announcements</h2>

							<?php switch_to_blog(19); ?>
<?php query_posts("cat=17&posts_per_page=1"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {

							 //echo '<img src="';
							 echo catch_that_announcements_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php the_time('l, F jS, Y') ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
							<a href="http://ecals.cals.wisc.edu" class="moreButton">More Announcements</a>
						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

				</div>

				<div class="row clearfix">

					<div class="span-33 box dropin3 eventsBox doubleHeight">
							<h2>Events</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/images/aghall1.jpg" alt=" ">
							<div class="boxContent">
	

  <?php uwmadison_events('http://www.today.wisc.edu/events/feed/30', array('limit' => 4)) ?>




                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>

								<a href="http://www.today.wisc.edu/events/feed/30" class="moreButton">More Events</a>

								<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

					<div class="span-33 box dropin4">
							<h2>CALS Faces</h2>

							<?php switch_to_blog(20); ?>
<?php query_posts("posts_per_page=1&cat=17"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {
							//echo "<img src='".get_template_directory_uri()."/images/newsplaceholder1.jpeg' alt=' '>";
							 //echo '<img src="';
							 echo catch_that_news_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php $academic_info = get_post_meta($post->ID, 'academic_info', true);
				if($academic_info!=""){
					echo $academic_info;
				} ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
<a href="http://news.cals.wisc.edu/category/departments/cals-faces/" class="moreButton">More CALS Faces</a>
<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
							

					</div>

					<div class="span-33 box dropin5">
							<h2>CALS in the News</h2>

							<?php switch_to_blog(20); ?>
<?php query_posts("posts_per_page=1&category_name=cals-in-the-media"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {
							//echo "<img src='".get_template_directory_uri()."/images/newsplaceholder1.jpeg' alt=' '>";
							 //echo '<img src="';
							 echo catch_that_news_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php $media_url = get_post_meta($post->ID, 'media_title_url', true);
          if($media_url!=""){
            echo $media_url;
      }?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h3>
											<p><?php $media_venue = get_post_meta($post->ID, 'media_venue', true);
          if($media_venue!=""){
            echo $media_venue;
      }?><br><?php the_time('l, F jS, Y') ?></p>
                                             </div>
                            <div class="topShade"></div>
							<div class="bottomShade"></div>






  <?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
							<a href="http://news.cals.wisc.edu" class="moreButton">More News</a>


						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

				</div>
				
				
				<div class="row clearfix thirdRow">

					<div class="span-33 box invisible">
							
					</div>

					<div class="span-33 box dropin4">
							 <?php
								//hold original loop
								$tmp_post = $post;

								//get spotlight posts
								$posts = get_posts('category_name=spotlight&numberposts=1');
								foreach($posts as $post){
									setup_postdata($post);?>

								<?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');

		    				} else {

							 //echo '<img src="';
							 echo catch_that_image();
							// echo '" alt="" />';

						} ?>

                                                <h2>Department Spotlight</h2>
                                             <div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink();?>"><?php  the_title();?></a></h3>
											
                                             </div>
                                             <div class="topShade"></div>
							<div class="bottomShade"></div>
								<!-- .spotlight_slide -->
                        <?php

								}
								//restore original loop
								$post = $tmp_post;
							?>
						<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>

					</div>

							<?php restore_current_blog(); ?>
<?php 
	$args = array( 'post_type' => 'social-highlight', 'posts_per_page' => 1 );
	query_posts($args); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  				 <?php	if ( has_post_thumbnail() ) { ?>
					<div class="span-33 box dropin5 doubleHeight socialWithImage <?php the_field('social_network'); ?>">
						
				<?php } else { ?>
				
					
					<div class="span-33 box dropin5 doubleHeight noImageSocial <?php the_field('social_network'); ?>">
						
				<?php } ?>

					<?php if(get_field('social_network') == "twitter") { ?>
							<h2><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/></svg> <a href="https://twitter.com/UWMadisonCALS"><?php the_field('social_network'); ?></a></h2>
					<?php } else if(get_field('social_network') == "facebook") { ?>
							<h2><svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z" fill="#3B5998"/><path d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z" fill="#FFFFFF" id="f"/></g><g/><g/><g/><g/><g/><g/></svg> <a href="https://www.facebook.com/UWMadisonCALS"><?php the_field('social_network'); ?></a></h2>
					<?php } else if(get_field('social_network') == "instagram") { ?>
							<h2><svg height="512px" id="Слой_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="instagram_1_"><g><path d="M456,6H56C28.383,6,6,28.383,6,56v400    c0,27.607,22.383,50,50,50h400c27.618,0,50-22.393,50-50V56C506,28.383,483.618,6,456,6z M476,426c0,27.607-22.382,50-50,50H86    c-27.617,0-50-22.393-50-50V206h20V36h20v170h20V36h20v150.273c6.084-7.617,12.803-14.687,20-21.25V36h20v113.125    c29.668-20.401,65.528-32.403,104.268-32.403c67.08,0,125.654,35.83,158.096,89.278H476V426z M476,86c0,16.562-13.437,30-30,30    h-52.5c-16.572,0-30-13.438-30-30V66c0-16.573,13.428-30,30-30H446c16.563,0,30,13.427,30,30V86z M258.998,221.996    c-43.623,0-78.994,35.371-78.994,79.004c0,43.623,35.371,78.994,78.994,78.994s78.995-35.371,78.995-78.994    C337.993,257.367,302.621,221.996,258.998,221.996z M259.008,153.002c-80.635,0-145.996,65.371-145.996,145.996    c0,80.635,65.361,145.996,145.996,145.996c80.625,0,145.987-65.361,145.987-145.996    C404.995,218.373,339.633,153.002,259.008,153.002z M259.008,408.91c-60.693,0-109.902-49.209-109.902-109.902    c0-60.704,49.209-109.913,109.902-109.913c60.703,0,109.903,49.209,109.903,109.913    C368.911,359.701,319.711,408.91,259.008,408.91z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#3B3A39;"/></g></g></svg> <a href="https://instagram.com/uwmadisoncals/"><?php the_field('social_network'); ?></a></h2>
					<?php } else if(get_field('social_network') == "youtube") { ?>
							<h2><svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M31.67,9.179c0,0-0.312-2.353-1.271-3.389c-1.217-1.358-2.58-1.366-3.205-1.443C22.717,4,16.002,4,16.002,4   h-0.015c0,0-6.715,0-11.191,0.347C4.171,4.424,2.809,4.432,1.591,5.79C0.633,6.826,0.32,9.179,0.32,9.179S0,11.94,0,14.701v2.588   c0,2.763,0.32,5.523,0.32,5.523s0.312,2.352,1.271,3.386c1.218,1.358,2.815,1.317,3.527,1.459C7.677,27.919,15.995,28,15.995,28   s6.722-0.012,11.199-0.355c0.625-0.08,1.988-0.088,3.205-1.446c0.958-1.034,1.271-3.386,1.271-3.386s0.32-2.761,0.32-5.523v-2.588   C31.99,11.94,31.67,9.179,31.67,9.179z" fill="#E02F2F"/><polygon fill="#FFFFFF" points="12,10 12,22 22,16  "/></g><g/><g/><g/><g/><g/><g/></svg> <a href="https://www.youtube.com/user/UWMadisonCALS"><?php the_field('social_network'); ?></a></h2>
					<?php } else if(get_field('social_network') == "linkedin") { ?>
							<h2><svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z" fill="#007BB5"/><g><rect fill="#FFFFFF" height="14" width="4" x="7" y="11"/><path d="M20.499,11c-2.791,0-3.271,1.018-3.499,2v-2h-4v14h4v-8c0-1.297,0.703-2,2-2c1.266,0,2,0.688,2,2v8h4v-7    C25,14,24.479,11,20.499,11z" fill="#FFFFFF"/><circle cx="9" cy="8" fill="#FFFFFF" r="2"/></g></g><g/><g/><g/><g/><g/><g/></svg> <a href="https://www.linkedin.com/groups?gid=5062996"><?php the_field('social_network'); ?></a></h2>
					<?php } else { ?>
							<h2><?php the_title(); ?></h2>
					<?php } ?>


  <?php	if ( has_post_thumbnail() ) {

		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large'); ?>
							<div class="topShade"></div>
							<div class="bottomShade"></div>

		    				<?php } else {
							//echo "<img src='".get_template_directory_uri()."/images/newsplaceholder1.jpeg' alt=' '>";
							 //echo '<img src="';
							 //echo catch_that_news_image();
							// echo '" alt="" />';

						} ?>
			<div class="boxContent">
											<h3 class="spotlight_title"><?php the_content(); ?> </h3>
											<p><?php $academic_info = get_post_meta($post->ID, 'academic_info', true);
				if($academic_info!=""){
					echo $academic_info;
				} ?></p>
                                             </div>
                            






  <?php endwhile; ?>
<?php endif; ?>
<?php restore_current_blog(); ?>
<!--<a href="http://news.cals.wisc.edu/category/departments/cals-faces/" class="moreButton">More CALS Faces</a>-->
<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>
					</div>

				</div>
				
				
				<div class="row clearfix fourthRow">

					

					<div class="span-66 box dropin4 givingPromo">
							<h2>Giving</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/images/campaign-ad.jpg" alt=" ">
							
							<a href="http://www.allwaysforward.org/schools-colleges/cals/" rel="bookmark" class="hideTextFullSize" title="Permanent Link to Title">All Ways Forward CALS Fund</a>
							<div class="boxContent">
	

  




                                             </div>
                            <!--<div class="topShade"></div>
							<div class="bottomShade"></div>-->

								

								<div class="windows8">
							<div class="wBall" id="wBall_1">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_2">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_3">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_4">
							<div class="wInnerBall">
							</div>
							</div>
							<div class="wBall" id="wBall_5">
							<div class="wInnerBall">
							</div>
							</div>
						</div>

						<div class="shade"></div>

					</div>

					<div class="span-33 box invisible">
							
					</div>

				</div>
				
				<div class="rowSpacer"></div>

				
				

			</div><!-- #content -->

			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>
