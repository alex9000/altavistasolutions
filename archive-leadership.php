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
						<p><?php $post_type = get_post_type_object( get_post_type($post) );
						// print_r($post_type);
						echo $post_type->description; ?></p>
					</div>
				</div> <!-- end row -->
		
				<div class="row">
					<div class="offset1 span10">
						<img src="<?php bloginfo('template_url'); ?>/images/leadership-group-shot.png" alt="leadership group">
						<h2 class="big-header">Executive Team</h2>
						<?php 
						$heading = "Executive Team";
						$accordion_id = "executive-accordion";
						$metakey_value = "1";
						get_template_part('templates/page', 'accordion'); ?>
						<h2 class="big-header">Management Team</h2>
						<?php
						$accordion_id = "management-accordion";
						$metakey_value = "2";
						get_template_part('templates/page', 'accordion');
						?>
					</div>	<!-- end span10 -->
				</div> <!-- end row -->
				
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
