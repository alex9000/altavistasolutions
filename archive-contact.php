<?php get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">
				
				<div class="row">
					<div class="offset1 span4">
							<?php 
							$title = "Contact";
							get_template_part('templates/page', 'header'); 
							?>
					</div>
					<div class="span7 intro">
						<p>Thank you for your interest in Alta Vista. </p>
						<p>If you would like to receive more information, please email us at <a href="mailto:info@altavistasolutions.com">info@altavistasolutions.com</a>. To speak to a live person, please call (510) 594-0510 or toll-free (877) 960-2582. We look forward to serving you.</p>
						<p>Hours of operation are Monday through Friday, 8 a.m. to 5 p.m. Pacific Standard Time.</p>
					</div>
				</div> <!-- end row -->
				<div class="row">
					<div class="offset1 span11">
							<img src="<?php echo get_template_directory_uri(); ?>/images/contact/map-opt.png" alt="map showing Alta Vista Solutions office locations">
						</div>
				</div>
				<div class="row">
						<div class="offset1 span8">
							<h2 class="big-header">Office Locations</h2>
							</div>
					</div>
		
				<div class="row">
					<div class="offset1 span8">
					
						<?php 
						$accordion_id = "contact-accordion";
						get_template_part('templates/page', 'accordion'); 
						?>
					</div>	<!-- end span8 -->
					
					<aside class="span3 sidebar">
							<img src="<?php echo get_template_directory_uri(); ?>/images/contact/growth.png" alt="293.6% growth">
					</aside>
				</div> <!-- end row -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
