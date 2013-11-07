<?php get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">
				
				<div class="row">
					<div class="offset1 span4">
						<?php 
						get_template_part('templates/page', 'header'); 
						?>
					</div>
				</div>
		
				<div class="row">
					<div class="offset1 span10">
						<div class="intro">
						<?php echo types_render_field("intro-paragraph", array("output"=>"html")); ?>
						</div>
						
						<?php get_template_part('templates/content', 'page'); ?>
							<div class="row">
								<div class="span5">
									<?php echo types_render_field("column-one", array("output"=>"html")); ?>
								</div>
									<!-- end span5 -->
								<div class="span5">
									<?php echo types_render_field("column-two", array("output"=>"html")); ?>
								</div>
							</div>
					</div>	
				</div>
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>