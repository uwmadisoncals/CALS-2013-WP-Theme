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
							
							<?php switch_to_blog(20); ?>
<?php query_posts("posts_per_page=1"); ?>
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
							
							<?php switch_to_blog(19); ?>
<?php query_posts("category_id=8&posts_per_page=1"); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>

  <?php	if ( has_post_thumbnail() ) {
		    				
		    				//the_post_thumbnail();
		    				echo get_the_post_thumbnail($page->ID, 'large');
 
		    				} else {
 
							 //echo '<img src="';
							 echo catch_that_image();
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
							
						
					</div>
					
					<div class="span-33 box">
							<h2>Events</h2>
							
							<?php switch_to_blog(22); ?>
<?php query_posts("posts_per_page=1"); ?>
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
					</div>
					
					<div class="span-33 box">
							<h2>Faces</h2>
							
							<?php switch_to_blog(22); ?>
<?php query_posts("posts_per_page=1"); ?>
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
					</div>
					
				</div>
				
			</div><!-- #content -->
			
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>