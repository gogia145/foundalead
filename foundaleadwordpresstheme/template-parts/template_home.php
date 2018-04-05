<?php
/**
Template Name:Home Page
 */

get_header(); ?>



<style>
	.section-header p
	{
	max-width:1030px;
	}
	.lead-banner-img .item img
	{
        height:392px;	  	
	}
	#menu-item-14
	{
		display:none;
	}
</style>
<!-- Lead Banner Start -->

<section class="lead-banner-wrapper">
	<div class="container">
		<div class="lead-banner-inner">
		
		
		<div id="myCarousel" class="carousel slide lead-banner-img" data-ride="carousel" style="padding:0px;height:392px;overflow:hidden;">
		
		<div class="intro-text-outer" style="    position: absolute; z-index: 9; width: 90%;">
					<h2> MENTORING  <br/>
					<span>the</span> LEADERs <br/>
					<span>of the </span> Future</h2>
					<div class="appointment-btn-outer"><a class="btn appointment-btn" href="<?php bloginfo("siteurl"); ?>/contact-us"> MAKE AN APPOINTMENT</a></div>
				</div>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	
	<?php query_posts("post_type=slider&showposts=-1&order=asc"); 
	$i=1;
	 while(have_posts()): the_post();
	 
	 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	
	if($i==1)
	{
	?>
      <div class="item active">
	  <?php 
	} else { ?>
	<div class="item">
	<?php } ?>
        <img src="<?php  echo $image['0']; ?>" alt="Los Angeles" style="width:100%;">
      </div>
    <?php $i++; endwhile; wp_reset_query(); ?>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


			
				
			
		</div>
	</div>
</section>

<!-- Lead Banner End -->


<!-- Home Content Start -->

<section class="home-content-wrapper">
	<div class="container">
		<div class="section-header">
			<h1> <?php  the_title(); ?></h1>
			 <?php the_content(); ?>
		</div>
		
		<div class="row">
 
                
			
			<?php query_posts("post_type=our_services&showposts=-1&order=asc"); 
	$j=1;
	 while(have_posts()): the_post();
	 
	 $service_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); //print_r($post);?>
	 
	 <div class="col-sm-4 col-xs-12">
				<div class="home-content-inner">
					<div class="home-content-thumnail">
						<div class="thumnail"> <img src="<?php echo $service_image['0']; ?>" /> </div>
						<h3><?php  the_title();?></h3>
					</div>
					<div style="min-height: 250px;"> <?php the_excerpt(); ?></div>
					<div class="read-more text-right">
						<a href="<?php the_permalink(); ?>">Read more...</a>
					</div>
				</div>
			</div>
	
	
    <?php $j++; endwhile; wp_reset_query(); ?>
	
	
			
			
			
	    </div>
	
</section>

<!-- Home Content End -->


<div class="html-overlay"></div>
    <?php get_footer();
