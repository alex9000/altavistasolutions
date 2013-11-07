<footer class="footer">
	<div class="row">
		<div class="span6 left-side">
			<a href="/" title="homepage" class="avs-logo-footer"><img src="<?php bloginfo('template_directory'); ?>/images/altavista-logo-footer-opt.png" alt="Alta Vista Logo" /></a>
			<div class="row footer-titles">
				<div class="span2 social">
					<p>Follow us</p>
				</div>
				<div class="span4">
					<p>Newsletter signup</p>
				</div>
			</div> <!-- end row -->
			<div class="row">
				<div class="span2 social">
					<a href="http://tinyurl.com/n7txw5x" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin" /></a>
					<a href="https://twitter.com/Alta_Vista_" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter" /></a>
				</div> <!-- end span2 -->
				<div class="span4 newsletter">
					<?php mailchimpSF_signup_form(); ?>
				</div> <!-- end span4 newsletter -->
			</div> <!-- end row -->
			<div class="row">
				<div class="span6">
					<nav>
						<?php wp_nav_menu( array( 
													'menu' => 'footer-nav', 
													'container' => 'div', 
													'container_class' => 'navbar',
													'menu_class' => 'nav footer-nav nav-pills') 
					); ?>
					</nav>
				</div> <!-- end span6 -->
			</div> <!-- end row -->
		</div> <!-- end span6 left-side-->
		<div id="news" class="span6 right-side">
				<p>Latest News via Twitter</p>
				<a class="twitter-timeline" href="https://twitter.com/Alta_Vista_" data-screen-name="Alta_Vista_" data-border-color="#cccccc" data-link-color="#666666" data-widget-id="367720899601891329" height="200" width="512" data-chrome="noheader nofooter">Tweets by @Alta_Vista_</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div> <!-- end span6 right-side -->
	</div> <!-- end row -->
	
	
	<div class="row smallprint">
		<div class="span6">
			<p><small>&copy; <?php echo date('Y');?> Alta Vista Solutions, Inc. | Site by <strong><a class="wpi-link" href="http://wordspicturesideas.com" target="_blank">Words Pictures Ideas</a></strong></small></p>
		</div>
		<div class="span6 text-right">
			<p><small><a href="/sitemap">Sitemap</a> | <a href="/terms">Terms and Conditions</a></small></p>
		</div>
	</div>

</footer>

	    </div> <!-- /container -->
	</div> <!-- end fullwidthcontainerhome -->
  <!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
	<!-- Piwik -->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
	  _paq.push(["setCookieDomain", "*.altavistasolutions.com"]);
	  _paq.push(["trackPageView"]);
	  _paq.push(["enableLinkTracking"]);

	  (function() {
	    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://wordspicturesideas.com/ana/";
	    _paq.push(["setTrackerUrl", u+"piwik.php"]);
	    _paq.push(["setSiteId", "5"]);
	    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
	    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Piwik Code -->
<?php wp_footer(); ?>		
</body>
</html>
