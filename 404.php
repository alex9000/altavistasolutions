<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			<div class="row">
				<div class="offset1 span5">
					<header class="entry-header">
						<h1 class="entry-title">404 Page Not Found</h1>
					</header>
				</div>
			</div>
			
			<div class="row">
				<div class="offset1 span10">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps visiting the <a href="/sitemap">site map</a> might help.', 'wpbootstrap' ); ?></p>
				</div>	
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>