<?php
/*
Template Name: Search Results
*/
?>

<?php get_header(); ?>

		<div id="main">

		<div id="primary">
		
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
	                   
							<script>
  (function() {
    var cx = '016039371683713681917:j9sabhtvlyc';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>	
                            
                        
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<?php endwhile; ?>
</div><!-- #content -->
			<?php get_sidebar(); ?>
			
			<div class="clear"></div>
			
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>