<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="home-content-wrapper">
	<div class="container">
		<div class="section-header">
			<h1> <?php echo strip_tags($post->post_title); ?></h1>
			
			<a href="<?php bloginfo("siteurl"); ?>">Home</a> >> <a ><?php echo strip_tags($post->post_title); ?></a>
			<br/><br/>
			<div class="page_content">
			<?php
			while ( have_posts() ) : the_post();

				 the_content();

			endwhile; // End of the loop.
			?>
            </div>
		</div>
			
		
	</div><!-- #primary -->
</section><!-- .wrap -->


<?php get_footer();
