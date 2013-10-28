<?php
/**
 * Template Name: Home Page
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
 
wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '2013-07-10' );

get_header(); ?>

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>


	<div id="main">

		<div id="primary">
			<div id="content" class="fullWidth" role="main">
				
				
				<!-- CALS News Content Box -->
				<div class="row clearfix">
				
					<div class="span-50 box">
							
							<h2>News</h2>
							
							<div class="boxContent">
							<h3>A new program enriches global 
opportunities for CALS undergrads</h3>
							<p class="homeNewsDate">Tuesday, September 3rd 2013</p>
							</div>
							<div class="topShade"></div>
							<div class="bottomShade"></div>
					</div>
					
					<div class="span-50 box">
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
                                               
                                                <h2>Spotlight</h2>
                                             <div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink();?>"><?php  the_title();?></a></h3>
											<p><?php echo $post->post_excerpt;?></p>
                                             </div>
                                             <div class="topShade"></div>
							<div class="bottomShade"></div>
								<!-- .spotlight_slide -->  
                        <?php	 
							
								} 
								//restore original loop
								$post = $tmp_post;
							?>
							
					</div>
					
				</div>
				
				<div class="row clearfix">
				
					<div class="span-33 box">
							<h2>Announcements</h2>
							<?php switch_to_blog(19); 
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
                                               
                                                <h2>Announcements</h2>
                                             <div class="boxContent">
											<h3 class="spotlight_title"><a href="<?php the_permalink();?>"><?php  the_title();?></a></h3>
											<p><?php echo $post->post_excerpt;?></p>
                                             </div>
                                             <div class="topShade"></div>
							<div class="bottomShade"></div>
								<!-- .spotlight_slide -->  
                        <?php	 
							
								} 
								//restore original loop
								$post = $tmp_post;
 restore_current_blog(); ?>
							
							
						
					</div>
					
					<div class="span-33 box">
							
					</div>
					
					<div class="span-33 box">
							
					</div>
					
				</div>
				
			</div><!-- #content -->
			
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>