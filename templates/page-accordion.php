<?php 
/**
 * Page Accordion Template Part
 */
global $metakey_value, $accordion_id; ?>
<div class="accordion" id="<?php echo $accordion_id; ?>">
	<?php
			switch ( $accordion_id ) {
				case 'executive-accordion':
					$orderby = 'menu_order';
					break;
				case 'contact-accordion':
					$orderby = 'menu_order';
					break;
				default:
					$orderby = 'title';
			}
			$args = array( 
								'post_type' => get_post_type( $post ), 
								'orderby' => $orderby, 
								'order' => 'ASC', 
								'posts_per_page' => '-1');
			if (isset( $metakey_value )) {
				$args['meta_query'] = array (array(
					'key' => 'wpcf-leadership-team',
					'value' => $metakey_value,
				));
			}
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
				?>
			<div class="accordion-group">
				<div class="accordion-heading">
					<?php 
					// Set the subtitle
					if (has_excerpt( $post->ID ) && $accordion_id == 'careers-accordion'){			
						$subtitle = get_the_excerpt();
					} 
					elseif ( $accordion_id == 'executive-accordion' || $accordion_id == 'management-accordion' )	{
						$subtitle = types_render_field("job-title", array("raw"=>"true"));
					}
					elseif ($accordion_id == 'resources-accordion')	{
						$subtitle = types_render_field("author", array("raw"=>"true"));
					} else {
						$subtitle = "";
					}
					the_title('<h3 class="accordion-toggle" title="' . $post->post_title . '" data-toggle="collapse" data-target="#' . $post->ID . '" data-parent="#' . $accordion_id . '" >', 	(!empty($subtitle)? ' <span>' . $subtitle . '</span>' : "") . '<i class="icon-chevron-down"></i></h3>' );	
						?>
				</div> <!-- end accordion-heading-->
				
				<div id="<?php print $post->ID ?>" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="entry-content row">
							<? if  ( $accordion_id == 'executive-accordion' || $accordion_id == 'management-accordion' )	{?>
								<div class="span2">
									<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}?>	</div>
									<div class="span8 bio">
										<?php the_content(); ?>
									</div>
						<?php } else {?>
							<div class="span8">
								<?php the_content(); 
									// Print 'Request Document' link
									if ( $accordion_id == 'resources-accordion' ) {
										echo '<p class="email text-right"><a href="mailto:publications@altavistasolutions.com?subject=' . $post->post_name . '">Request Document</a></p>';
									}
									elseif ( $accordion_id == 'careers-accordion' ) {
										echo '<p class="email">Interested candidates should submit a resume and cover letter to: <a href="mailto:recruiting@altavistasolutions.com?subject=' . $post->post_name . '">recruiting@altavistasolutions.com</a>.</p>';
									}
							?>
							</div>	<!-- end span8	 -->	
							<?php } ?>								
						</div> <!-- end entry-content -->
					</div> <!-- end accordion-inner-->
				</div><!-- end accordion-body-->
			</div><!-- end accordion-group-->
		<?php endwhile; ?>
</div> <!-- end accordion -->
