<?php get_header(); ?>
<?php
/*
Template Name: Contact Page
*/
?>

<!-- ==============================================
Contact Section
=============================================== -->

<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Contact Our Team</h1>
                <p>Should you have any questions or requests we would be delighted to assist you in any way we can.<br/>Please contact us by any means using the tools below:</p>
            </div>
        </div>
        <div class="spacer-75"></div>
        <div class="row">
            <div class="col-md-5 contact">
                <div class="contact-box-left mb-45">
                    <div class="contact-icon-left"><i class="ion ion-ios-location"></i></div>
                    <h4>UK Headquaters</h4>
					<address class="uk-address">
						<ul class="list-none address">
							<li class="address-one"> Surrey Technology Centre</li>
							<li class="address-one"> 40 Occam Road</li>
							<li class="address-one"> Guildford</li>
							<li class="address-one"> GU2 7YG</li>
							<li class="address-one"> Surrey</li>
							<li class="address-one"> United Kingdom</li>
							<!-- <li><i class="fa fa-phone fa-lg"> </i> <a href="tel:+442081233338"> +44 (0) 208 123 33 38</a></li> -->
							<li><i class="fa fa-globe fa-lg"> </i> <a href="http://www.fits.institute"> www.fits.institute</a></li>
							<li><i class="fa fa-envelope fa-lg"> </i> <a href="mailto:members@fits.institute"> members@fits.institute</a></li>
						</ul>
					</address>
                </div>

                <div class="contact-box-left mb-45">
                    <div class="contact-icon-left"><i class="ion ion-ios-clock"></i></div>
                    <h4>Business Hours</h4>
                    <p>
                        <span>Mon - Fri: 9am to 5pm</span>
                    </p>
                </div>
                <div class="contact-box-left mb-45">

                    <h4>Follow Us</h4>
                    <ul class="list-none social">
                        <li><a href="https://www.twitter.com/fitsinstitute" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/FITSinstitute" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/institute-of-financial-innovation-in-transactions-&-security-fits-" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/+FitsInstitute1/about" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <!-- Contact FORM -->
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<!-- / Contact Section -->

<!-- Map Section -->
<section class="map">
    <div id="map"></div>
</section>
<!-- Map Section -->


<!-- ==============================================
/ Main Content Area
=============================================== -->

<?php get_footer(); ?>