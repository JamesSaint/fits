
<?php get_header(); ?>
<?php
/*
Template Name: HomePage
*/
?>

<!-- ==============================================
Main Content Area
=============================================== -->

<section id="home-section-one">
	<div class="jumbotron">
		<div class="overlay">
			<canvas id="pollyfill-canvas"></canvas>	
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="home-callout">
						<h1>Help us <strong class="fits-gold">Stop Payment Fraud</strong> Paying for <strong class="fits-gold">Crime</strong></h1>
						<p>“As a non-profit, we provide all our members the amazing <a href="http://www.fits.institute/technology/fathom-fraud-management-software/">Fathom</a> software at no cost. <a href="http://www.fits.institute/technology/fathom-fraud-management-software/">Fathom</a> is a real-time, <a href="#">fraXses</a> big data, AI fraud detection application created for our acquirers, issuers, merchants and PSPs.”</p>
						<p>We are currently seeking new members to help guide the future of cashless payments into the next generation.</p> <br/>
						<p><a class="btn btn-primary btn-lg" href="#section-home-white" role="button">Find Out How?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="section-home-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="help-us">
							<div class="col-md-6 col-md-offset-3">
								<h2 class="call-to-action-heading">Payment Card Fraud<br/>so far in <?php echo date("Y") ?></h2>
									<div class="fraud-counter">
										<span id="fraud-dollar"><sup class="counter-sup">*</sup><span id="dollar-figure"></span>
										<p class="small-print"><sup>*</sup>Forecast worldwide reported write-offs due to payment card fraud. Some of which are used for funding al-Qaeda and other terrorists according to United States Secret Service. The true cost of fraud based on FITS research is at least 8 times this figure.</p>
									</div> <!-- /.fraud-counter -->
							</div> <!-- /.col-md-6 col-md-offset-3 -->
						
						</div>
					</div>
				</div>
			</div>

</section> <!-- /.section-white -->

<section id="section-home-grey">
	<div class="container">
			<div class="row">
				<div class="col-md-12">
				<article class="full-width-article">
					
				<?php the_content(); ?>

				</article>

				<p style="text-align:center;"><a class="btn btn-primary btn-lg" href="<?php bloginfo('url'); ?>/?page_id=91" role="button">Click Here to Register Your Interest</a></p>

				</div>
			</div>
	</div>
	
</section> <!-- /.section-grey -->

<section id="subscribe-home">
	<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h2 style="text-align:center;">Sign Up to our Insights Newsletter</h2>
					<?php if( function_exists( 'mc4wp_form' ) ) {mc4wp_form();} ?>
				</div>
			</div>
		</div>	
</section>

<!-- ==============================================
/ Main Content Area
=============================================== -->

<?php get_footer(); ?>