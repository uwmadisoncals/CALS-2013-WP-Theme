<?php
/**
 * The template used for displaying page content in page.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>
<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	 <?php	if ( has_post_thumbnail() ) { ?>
		 					<div class="featuredImage">
		    					<?php echo get_the_post_thumbnail($page->ID, 'large'); ?>
		 					</div>
						<?php } ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php the_content(); ?>
		<div class="pagefeatureboxes">
		<div class="row clearfix">
						<div class="span-50 box">
							<?php the_field('feature_container_1'); ?>
						</div>
						<div class="span-50 box">
							<?php the_field('feature_container_2'); ?>
						</div>
					</div>
					
					<div class="row clearfix">
						<div class="span-50 box">
							<?php the_field('feature_container_3'); ?>
						</div>
						<div class="span-50 box">
							<?php the_field('feature_container_4'); ?>
						</div>
					</div>
		</div>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
