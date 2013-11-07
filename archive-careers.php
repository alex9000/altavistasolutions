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
				
					</div>
				</div> <!-- end row -->
				
				<div class="row">
					<div class="offset1 span7 intro">
						<p>Alta Vista is committed to hiring the most qualified and talented engineering and inspection staff in the industry. We seek to partner with individuals who are personable and client-centered. The best ideas come from a diversity of perspectives. Because we employ individuals globally—including China, India, Europe and all over the US—our resources are numerous and multilayered. Alta Vista employees work on some of the most challenging, high-profile projects in the world. Because we are a small, agile firm, Alta Vista’s employees wear many hats, and collaborate with personnel at a variety of levels.</p>
						<p>Once we have hired a new employee, we focus on their professional and personal development. We are only as strong as our team and each individual is important to our success.</p>
						</div> <!-- offset1 span7 intro -->
						<div class="offset1 span3">
							<img src="<?php echo get_template_directory_uri(); ?>/images/careers/19th-fastest-opt.png" alt="19th fastest-growing Bay Area company">
						</div>
					</div> <!-- end row -->
					
				<div class="row">
					<div class="offset1 span7">
						<h2 class="big-header">Job Opportunities</h2>
					</div>
				</div> <!-- end row -->
					
				<div class="row">
					<div class="offset1 span8">
						<?php 
						$accordion_id = "careers-accordion";
						get_template_part('templates/page', 'accordion'); 
						?>
					</div>	<!-- end span8 -->
				
				<aside class="span3 sidebar">
					<h3>Benefits</h3>
					
					<p>Alta Vista Solutions provides a wide range of benefit programs to eligible employees, including:</p>	
					<ul>
						<li>401(k) Savings Plan</li>
						<li>Health Insurance</li>
						<li>Paid Holidays				</li>
						<li>Paid Time Off (PTO)</li>
						<li>Relocation Assistance	</li>
						<li>Tool and Equipment Assistance</li>
					</ul>
				</aside>
			</div> <!-- end row -->
				
				<div class="row">
					<div class="offset1 span8 employee">
							<h2 class="big-header">Employee Development</h2>
							<p>We are committed to providing training and career development to ensure that each individual achieves his or her full potential.</p>
							<p>Our training and development policy supports academic and professional development for all employees. We will help each individual improve his or her own performance, which will contribute to that of the business as a whole.</p>
							<p>Alta Vista encourages its engineers to become certified and trained in various disciplines according to the type of work being performed. Engineers are supported and encouraged to obtain CWI, ACI and PCI certifications.</p>
							<hr>
							<p class="eoe"><small>Alta Vista is an Equal Opportunity Employer committed to establishing a diverse and equitable workforce. We provide equal employment opportunities to all qualified employees and applicants for employment without regard to race, religion, sex, age, marital status, national origin, sexual orientation, citizenship status, disability or any other legally protected status. We prohibit discrimination in recruitment, hiring, compensation, benefits, training, termination, promotions, or any other condition of employment or career development.</small></p>
					</div> <!-- end offset1 span8 employee -->

				</div> <!-- end row -->
					
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
