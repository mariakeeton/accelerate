<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php
					$services = get_field("services");
					$image_1 = get_field("image_1");
					$image_2 = get_field("image_2");
					$image_3 = get_field("image_3");
					$size = "full";
				?>
                <div class="case-study">
					<div>
						<h2 class="case-study-title"><?php the_title() ?></h2>
						<p class="small-text case-study-tags"><?php echo $services; ?></p>
						<p><?php the_excerpt(); ?><p>
						<strong><a href="<?php the_permalink(); ?>">View Project <em><i class="fa fa-angle-right" aria-hidden="true"></i></em></a></strong>
					</div>
					<div>
						<div class="case-study-images">
							<?php if($image_1) { ?>
								<?php echo wp_get_attachment_image($image_1, $size); ?>
							<?php } ?>
						</div>

					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
