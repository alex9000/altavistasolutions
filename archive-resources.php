<?php get_header(); ?>
		<div id="primary" class="site-content">
			<div id="content" role="main">
				
				<div class="row">
					<div class="offset1 span4">
							<?php 
							get_template_part('templates/page', 'header'); 
							?>
					</div>
					<div class="span7 intro">
						<p>Alta Vista values candid communication and transparency. To that end, we encourage our team members to document and share best practices and expert knowledge openly. Explore the resources below at your leisure and, if you can't find what you are looking for, please contact us—we welcome the opportunity to begin a conversation.</p>
					</div>
				</div> <!-- end row -->
		
				<div class="row">
					<div class="offset1 span8">
						<?php 
						$accordion_id = "resources-accordion";
						get_template_part('templates/page', 'accordion'); 
						?>
					</div>	<!-- end span8 -->
					
					<div class="span3 sidebar">
						<img src="<?php echo get_template_directory_uri(); ?>/images/a2la_certified.jpg" alt="A2LA certification">					
						<p>Alta Vista has been certified by A2LA as an accredited firm for Non-Destructive Testing (NDT).</p>
						<p>We are the only NDT firm certified by A2LA on the West Coast.</p>					
						<img src="<?php echo get_template_directory_uri(); ?>/images/resources/iso_9001.png" alt="ISO 9001 certification" >
					</div>
				</div> <!-- end row -->
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
