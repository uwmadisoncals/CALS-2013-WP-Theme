<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="ieFooter">
		<div class="inner">
			<div id="pre-footer">
			<div class="linksContainer">
			<h3>Resources</h3>
        	<ul id="quick_links">
            	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>
       	      </li>
            	<li class="quick_links_list">
                	<?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>
            </li>

            </ul>
            <div class="clearfix"></div>
			</div>

			<div class="linksContainer right">
				<h3>Support</h3>
				<p>You can help support the College of Agricultural and Life Sciences by making a gift via the University of Wisconsin Foundation.</p>
				<a href="http://www.cals.wisc.edu/alumni-friends/make-a-gift/" class="button">Make a Gift</a>
				<p class="address">College of Agricultural and Life Sciences | 1450 Linden Drive | Madison, WI 53706 | 608.262.1251 | <a href="mailto:info@cals.wisc.edu">info@cals.wisc.edu</a></p>
			</div>
			<div class="clearfix"></div>
        </div>

        <div class="copyright">
        	<img src="<?php echo get_template_directory_uri(); ?>/images/footercrest2.png" alt="University of Wisconsin Madison" align="center" />
        	<div>&copy;Copyright <?php echo date("Y"); ?> The Board of Regents of the University of Wisconsin System <a href="http://wisc.edu">University of Wisconsin-Madison</a></div>



        </div>

        <div class="socialRef">
			<a href="https://twitter.com/UWMadisonCALS" title="Follow Us on Twitter" class="twitter">Twitter</a>
			<a href="http://www.flickr.com/photos/uwmadisoncals/" title="View our photostream" class="flickr">Flickr</a>
			<a href="http://www.linkedin.com/groups?gid=5062996" class="linkedin">LinkedIn</a>
			<a href="http://www.youtube.com/user/UWMadisonCALS" title="Our latest videos" class="youtube">Youtube</a>
			<a href="https://www.facebook.com/UWMadisonCALS" title="Like us on Facebook" class="facebook">Facebook</a>
			<a href="https://instagram.com/uwmadisoncals/" title="Follow us on Instagram" class="instagram">Instagram</a>

		</div>
			<div class="clearfix"></div>
        </div>


			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */

					get_sidebar( 'footer' );
			?>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/min/master.min.js"></script>
 
 <script>
	 
	 $(window).load(function() {
	//var remotecount = 0;

															
																//remotecount = remotecount + 1;
																
																//var spinner = $(this).find(".loadingWrapper");
																var remoteelem = $(".calsinthenews").find(".remoteContent");
																//$(this).addClass(remoteelem);
																var remoteurl = $(".calsinthenews").find(".remoteContent").attr("data-remoteurl");
																
																
																var newsremoteurl = $(".calsnews").attr("data-remoteurl");
																var ecalsremoteurl = $(".ecalsnews").attr("data-remoteurl");

																var calsfacesurl = $(".calsfaces").attr("data-remoteurl");
																
																
																
																//Cals NEWS call
																
																
																$.ajax( {
																url: newsremoteurl,
																success: function ( data ) {

																	
																	var post = data.shift(); // The data is an array of posts. Grab the first one.
																	//console.log(post);
																	
																	$(".calsnews .spotlight_title a").text(post.title.rendered);
																	
																		var postdate = new Date(post.date);
																		var strdate = (postdate.getMonth() + 1) + '/' + postdate.getDate() + '/' +  postdate.getFullYear();
																		$(".calsnews .date").text(strdate);
																		$(".calsnews .spotlight_title a").attr("href",post.link);
																		
																		var mediaID = post._links['wp:attachment'][0].href;
																		
																		
																		
																		$.ajax( {
																		url: mediaID,
																		success: function ( mediadata ) {
		
																			//$(spinner).hide();
																			var media = mediadata.shift(); // The data is an array of posts. Grab the first one.
																			
																			$(".calsnews .mediaImg").attr("src",media.guid.rendered);
																			
																			},
																		cache: true
																		} );
																
																},
																cache: true
																} );
																
																
																//Announcements eCALS call
																
																
																$.ajax( {
																url: ecalsremoteurl,
																success: function ( data ) {

																	
																	var post = data.shift(); // The data is an array of posts. Grab the first one.
																	//console.log(post);
																	
																	$(".ecalsnews .spotlight_title a").text(post.title.rendered);
																	
																		var postdate = new Date(post.date);
																		var strdate = (postdate.getMonth() + 1) + '/' + postdate.getDate() + '/' +  postdate.getFullYear();
																		$(".ecalsnews .date").text(strdate);
																		$(".ecalsnews .spotlight_title a").attr("href",post.link);
																		
																		var mediaID = post._links['wp:attachment'][0].href;
																		
																		
																		
																		$.ajax( {
																		url: mediaID,
																		success: function ( mediadata ) {
		
																			//$(spinner).hide();
																			var media = mediadata.shift(); // The data is an array of posts. Grab the first one.
																			
																			$(".ecalsnews .mediaImg").attr("src",media.guid.rendered);
																			
																			},
																		cache: true
																		} );
																
																},
																cache: true
																} );
																
																
																//CALS Faces Call
																
																
																$.ajax( {
																url: calsfacesurl,
																success: function ( data ) {

																	
																	var post = data.shift(); // The data is an array of posts. Grab the first one.
																	//console.log(post);
																	
																	$(".calsfaces .spotlight_title a").text(post.title.rendered);
																	
																		var postdate = new Date(post.date);
																		var strdate = (postdate.getMonth() + 1) + '/' + postdate.getDate() + '/' +  postdate.getFullYear();
																		$(".calsfaces .date").text(strdate);
																		$(".calsfaces .spotlight_title a").attr("href",post.link);
																		
																		var mediaID = post._links['wp:attachment'][0].href;
																		
																		
																		
																		$.ajax( {
																		url: mediaID,
																		success: function ( mediadata ) {
		
																			//$(spinner).hide();
																			var media = mediadata.shift(); // The data is an array of posts. Grab the first one.
																			
																			$(".calsfaces .mediaImg").attr("src",media.guid.rendered);
																			
																			},
																		cache: true
																		} );
																
																},
																cache: true
																} );


															
	 });
	 
 </script>

 
<!-- Hotjar Tracking Code for www.cals.wisc.edu -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:13024,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/snowfeature.js"></script>-->



</body>
</html>
