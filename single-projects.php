<?php 
/**
 * The Template for displaying all post type projects.
 *
 * @package WordPress
 * @subpackage wpbootstrap
 */

get_header(); 

// Get attachments for slideshow
if ( have_posts() ) : while ( have_posts() ) : the_post();    
	$args = array(
	  'post_type' => 'attachment',
	  'numberposts' => -1,
	  'post_status' => null,
	  'post_parent' => $post->ID,
		'orderby' => 'menu_order',
		'order' => 'ASC',
	 );
	 $attachments = get_posts( $args );
endwhile; endif;

// Generate active class for slideshow			
function getActiveClass($pageID) {
	if($pageID == get_the_ID()) print 'active';
}
?>
<div id="primary" class="site-content">
	<div id="content" role="main">
		
		<div class="row top">
			<div class="offset1 span7">
				<div class="row">
					<div class="span4">
						<?php 
						$title = "Projects";
						get_template_part('templates/page', 'header'); 
						?>
					</div>
				</div>
				<div class="intro">
						<p>Alta Vista takes pride in our accomplishments and our projects speak for themselves. Take a look at these five recent initiatives representing the infrastructure sectors we have successfully serviced.  If you have any questions or would like more information, please contact our main line: (510) 594-0510 or toll free: (877) 960-2582 or email us at <a href="mailto:info@altavistasolutions.com">info@altavistasolutions.com</a>.</p>
					</div> <!-- intro -->
			</div>	<!-- end offset1 span7-->
			
				<div class="span4">
					<?php wp_nav_menu( array( 
						'menu' => 'projects-nav', 
						'container' => false, 
						'menu_class' => 'nav nav-list pull-left projects-nav',) 
						); ?>	
					</div> <!-- end span4 -->
			</div> <!-- end top row -->

	<div class="row">
		<div class="span12">
			<div id="myCarousel" class="carousel slide">
				
				<ol class="carousel-indicators">
					<?php 
						if ( $attachments ) {
							for ( $j = 0; $j < count ( $attachments ); $j++ ) { ?>
								<li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class="<?php  echo ($j == 0 ? "active" : ""); ?>"></li>
					<?php } 
							} ?>
			  </ol>
				
 				<!-- Carousel items -->
			  <div class="carousel-inner">
					<?php 
							if ( $attachments ) {
								$i = 0;
								foreach ( $attachments as $attachment ) {
									// print_r($attachment);
									echo '<div class="item ' . ($i == 0 ? "active" : "") . '">' . wp_get_attachment_image( $attachment->ID, 'full' );
									if ( !empty( $attachment->post_title ) || !empty( $attachment->post_excerpt ) ) {
										echo '<div class="carousel-caption" >';
									echo (!empty( $attachment->post_title )) ? '<h4>'. $attachment->post_title .'</h4>' : '';
										echo '<p>' . $attachment->post_excerpt . '</p>';
										echo '</div>';
									}
									echo '</div>';
									$i++;
								}
							}
 ?>
			  </div> <!-- end Carousel items -->
				
  				<!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="ang">&#9001;</span><span class="ang_ie">‹</span></a>
				  <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="ang">&#9002;</span><span class="ang_ie">›</span></a>
			</div> <!-- end myCarousel -->
		</div> <!-- end span12 -->
	</div> <!-- end row -->
		
	<div class="row bottom">
			<div class="span12">
				<div class="row">
					<div class="offset1 span6">
						<h2><?php echo get_the_title(); ?></h2> 
					</div>
			</div><!-- end row -->
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="offset1 span7">
							<div class="entry-content">
										<?php the_content(); ?>
							</div>
								<div class="entry-meta">
									<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
								</div><!-- .entry-meta -->									
					</div> <!-- end offset1 span6 -->
					<div class="span3">
						<blockquote><?php if($post->post_excerpt) { the_excerpt(); } ?></blockquote>
					</div>
				<?php endwhile; // end of the loop. ?>	
			</div> <!-- end row -->
			</div> <!-- end span12 -->
		</div> <!-- end row bottom -->
		
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
