<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.

 *
 * @package WordPress
 * @subpackage foundalead
 * @since 1.0
 * @version 1.2
 */

?>
<!-- Footer Start -->

<footer class="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-sm-5">
						<h2 class="footer-title"> Quick Links </h2>
						
					<?php  wp_nav_menu(array('theme_location'=>'primery','menu'=>'quick_links',  'container' => 'ul','menu_class' => 'footer-nav' )); ?>
						<!--ul class="footer-nav">
							<li><a href=""> Home </a></li>
							<li><a href=""> About Us </a></li>
							<li><a href=""> Olu on Leadership </a></li>
							<li><a href=""> Contact Us </a></li>
						</ul-->
						<div class="footer-soci">
							<ul>
								<li><a href="#"><img src="<?php bloginfo('template_url')?>/images/youtube_icon.png" /> </a></li>
								<li><a href="#"><img src="<?php bloginfo('template_url')?>/images/twitter_icon.png" /> </a></li>
								<li><a href="#"><img src="<?php bloginfo('template_url')?>/images/facebook_icon.png" /> </a></li>
								<li><a href="#"><img src="<?php bloginfo('template_url')  ?>/images/pinterest_icon.png" /> </a></li>
								<li><a href="#"><img src="<?php bloginfo('template_url') ?>/images/instagram_icon.png" /> </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-7">
					
					<?php  wp_nav_menu(array('theme_location'=>'primery','menu'=>'quick_links2',  'container' => 'ul','menu_class' => 'footer-nav border-top' )); ?>
					
						<!--ul class="footer-nav border-top">
							<li><a href=""> Corporate Consulting </a></li>
							<li><a href=""> Corporate Consulting  </a></li>
							<li><a href=""> Executive Coaching </a></li>
							<li><a href=""> Team Development </a></li>
							<li><a href=""> Community Leadership</a></li>
							<li><a href=""> Youth Development   </a></li>
							<li><a href=""> Keynote Speaking </a></li>
							<li><a href=""> Political Leadership  </a></li>
							<li><a href=""> Building Ethics  </a></li>
						</ul-->
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-xs-12 soci-footer-outer">
				<div class="row">
					<div class="col-sm-6">
						<div class="footer-weget">
						<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="footer-weget" style="height:300px;overflow:scroll;">
							<a class="twitter-timeline" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="footer-bottom-outer text-center">
				<ul class="bottom-footer-li">
					<li> <a href="www.FoundALead.com"> www.FoundALead.com  </a> </li> | 
					<li> <a href="">  995.9996.99999 </a> </li>  | 
					<li> <a href="">  info@foundalead.com </a></li> <br/>
				Address:  xyzabc, plot no 1234565, GHI city, State, Country, JLK <br/>
				Copyright 2018, FoundALead. All Rights Reserved
			</div>
		</div>
	</div>
	
	
	
</footer>

<!-- jQuery Declaration -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
	 //For Responsive Side Bar Navigation 

	jQuery("#nav-toggle").click(function(event){
		event.stopPropagation();
		jQuery(this).toggleClass("open");
		jQuery("#mobile-menu").toggleClass("open-menu");
		jQuery(".html-overlay").toggleClass("active");
		jQuery("body").toggleClass("overflow-hidden");
	});

	jQuery("#mobile-menu").click(function(event){
		event.stopPropagation();
	});

	jQuery(".html-overlay").click(function(event){
		event.stopPropagation();
		jQuery("#nav-toggle").removeClass("open");
		jQuery("#mobile-menu").removeClass("open-menu");
		jQuery(".html-overlay").removeClass("active");
		jQuery("body").removeClass("overflow-hidden");
	});
</script>

</body>
</html><?php wp_footer(); ?>

</body>
</html>
