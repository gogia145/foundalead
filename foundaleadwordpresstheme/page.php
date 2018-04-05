<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
