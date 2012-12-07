<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<!-- background logo-->
		<div id="wrapper">
		<img src="<?php bloginfo('template_directory'); ?>/images/BG_LOGO.png" alt="Blank Wall" id="Background" width="60%" />
			
		<div id="primary">
			<div id="content" role="main">
				
				
				
				
			<?php if ( have_posts() ) : ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				

								</div><!-- .entry-content -->
							</article><!-- #post-0 -->

						<?php endif; ?>
			
					
			</div><!-- #content -->

		</div><!-- #primary -->
		</div><!-- #wrapper

<?php get_footer(); ?>