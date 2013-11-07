<?php 
/*
Template Name: Services
*/
get_header(); 

function getActiveClass($pageID) {
	if($pageID == get_the_ID()) print 'active';
}
?>
<div id="primary" class="site-content">
	<div id="content" role="main">
		
		<div class="row top">
			<div class="offset1 span4">		
				<?php get_template_part('templates/page', 'header'); 	?>
				<div class="intro">
					<p>Alta Vista has the solutions to service our clients’ needs on projects worldwide, including infrastructure transit systems, highways, tunnels, bridges and high-speed rail systems.</p>
					<p>In all sectors, our disciplines include Engineering, Program Management, Quality Management, Surveying, Inspection and Testing, and Structural and Instrumentation Monitoring.</p>
					<p>Explore each sector for the unique services and customer experience we are equipped to offer our clients.</p>
				</div> <!-- intro -->
			</div>	<!-- end offset1 span4-->

			<div class="span7">
			<!-- IE 8 Navigation -->
			<!--[if lt IE 9]>
			<div class="row">
			<div class="offset3 span4">
				<?php
					$defaults = array(
						'theme_location'  => '',
						'menu'            => 'services-nav',
						'container'       => 'false',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="nav nav-list">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
				wp_nav_menu( $defaults );
				?>
				</div>
				</div>
			<![endif]-->
			
			<!-- Modern Browser Navigation -->
			<!--[if gt IE 8]><!-->
			<?php
					$defaults = array(
						'theme_location'  => '',
						'menu'            => 'services-nav',
						'container'       => 'false',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '<span>',
						'after'           => '</span>',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="circle-nav unstyled">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu( $defaults );
				?>
			<!--<![endif]-->			
		</div> <!-- span6  -->
	</div> <!-- row top -->
		
	<div class="row bottom">
			<div class="span12">
				
				<div class="row">
					<div class="offset1 span6">
						<h2><?php echo get_the_title(); ?></h2> 
					</div>
				</div>	<!-- end row -->
			
				<div class="row">
					<div class="offset1 span3">
						<?php echo (types_render_field("services", array("raw"=>"true"))); ?>
					</div> <!-- end offset1 span2 -->
					<div class="offset1 span6">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
							<div class="entry-meta">
								<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
							</div><!-- .entry-meta -->	
							<?php endwhile; // end of the loop. ?>									
					</div> <!-- end offset1 span6 -->
				</div> <!-- end row -->
			</div> <!-- end span12 -->
		</div> <!-- end row bottom -->
		
		
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>