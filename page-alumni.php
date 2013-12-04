<?php
/**
 * Template Name: Alumni Page
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

get_header(); ?>

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>

	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="row clearfix">
						<div class="span-50">
							<?php the_field('feature_container_1'); ?>
						</div>
						<div class="span-50">
							<?php the_field('feature_container_2'); ?>
						</div>
					</div>
					
					<div class="row clearfix">
						<div class="span-50">
							<?php the_field('feature_container_3'); ?>
						</div>
						<div class="span-50">
							<?php the_field('feature_container_4'); ?>
						</div>
					</div>
					
					<?php get_template_part( 'content', 'page' ); ?>

					<?php get_template_part('nav_menu', 'explore');?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>