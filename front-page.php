<?php get_header(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . "/js/modernizr.min.js" ?>"></script>
		<section class ="leading-blurb">
			<div class="row">
				<div class="ensure offset1 span4">
					<p>We ensure the successful advancement of infrastructure projects worldwide.</p>
				</div>
			</div>
			<div class="row">
				<div class="do-right span5"><h1>We Do Right</h1><p class="see-how"><a href="#frontMovie" role="button" data-toggle="modal" onClick="_gaq.push(['_trackEvent', 'Videos', 'Click', 'We Do Right']);">Watch our video</a></p></div>
				<div class=" span2 front-movie">
					<a href="#frontMovie" role="button" data-toggle="modal" onClick="_gaq.push(['_trackEvent', 'Videos', 'Click', 'We Do Right']);"><img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" class="throbber" alt="play video button"/></a>
				</div>
				<!-- Modal box contents for movie-->
				<div id="frontMovie" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				 <div class="modal-header">
				   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				   <h3 id="myModalLabel">&nbsp;</h3>
				 </div>
				<div class="modal-body">
					<iframe id="player" width="1110" height="624" src="//www.youtube.com/embed/r1UlcLvGN5k?rel=0&amp;modestbranding=1" frameborder="0" allowfullscreen></iframe>
				</div>
				 <!-- <div class="modal-footer">
							   <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
							 </div> -->
				</div>
			</div> 
		</section>

		<section class="about-us" >
			<div id="group-shot"></div>
			<div class="row">
				<div id="about-left" class="span4 offset3"><h1>About Us</h1></div>
			</div>
			<div class="row">
				<div id="about-right" class="front-page-blurb offset3 span7">
				<p><?php echo get_post_meta(7, 'about-us', true); ?> <a href="<?php echo str_replace( get_bloginfo( 'url' ) . '/' , '', get_permalink( 4 ) );?>" class="learn-more">Learn More</a></p>
				</div>
			</div>
		</section>

		<section class="leadership">
			<img id="pat-mazen" src="<?php echo get_stylesheet_directory_uri() . "/images/pat-mazen-opt.png" ?>" alt="Pat Lowry and Mazen Wahbeh">
			<div class="row">
				<div id="leadership-right" class="span4 offset2" >
					<h1>Leadership</h1>
				</div>
			</div>
			<div class="row">
				<div id="leadership-left" class="front-page-blurb offset1 span8">
					<p><?php echo get_post_meta(7, 'leadership', true); ?> <br><a href="/leadership" class="learn-more">Learn More</a></p>
				</div>
				<div class="span"></div>
			</div>
		</section>

		<section class="services">
			<img id="beams" src="<?php echo get_stylesheet_directory_uri() . "/images/services.png" ?>" alt="service background" >
			<div class="row">
				<div id="services-left" class="offset5 span4">
					<h1>Services</h1>
				</div>
				<!-- TODO: add lefthand side image. NOTE: Paul's comp shows the image extending past the 6th column's content area and into the gutter... -->
				<div id="services-right" class="front-page-blurb offset6 span6">
						<p><?php echo get_post_meta(7, 'services', true); ?> <a href="<?php echo str_replace( get_bloginfo( 'url' ) . '/' , '', get_permalink( 104 ) );?>" class="learn-more">Learn More</a></p> 
				</div>
			</div> <!-- end row -->
		</section>
	 
	 <div class="row">
	 		<div id="project-graphic" class="span7 offset4"></div>
	 	</div>
		<section class="projects">
			<div class="row">
				<div id="projects-right" class="span4 offset3">
					<h1>Projects</h1>
				</div>
				<div id="projects-left" class="front-page-blurb span6 offset5">
					<p>From transit systems, highways, and tunnels—to the largest self-anchored suspension bridge of its kind—Alta Vista gets it done right. <a href="<?php echo str_replace( get_bloginfo( 'url' ) . '/' , '', get_permalink( 95 ) );?>" class="learn-more">Learn More</a></p>
				</div>
			</div>
		</section>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . "/js/TweenMax.min.js" ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . "/js/jquery.superscrollorama.js" ?>"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . "/js/scroll.js" ?>"></script>

<?php get_footer(); ?>
