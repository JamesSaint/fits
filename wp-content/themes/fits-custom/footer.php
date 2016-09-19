<div class="clearfix"></div>

<!-- ==============================================
Footers
=============================================== -->
<footer class="widget-foot">
		<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php dynamic_sidebar( 'address-footer-widget-area' ); ?>
				<?php dynamic_sidebar( 'useful-links-footer-widget-area' ); ?>
				<?php dynamic_sidebar( 'recent-posts-footer-widget-area' ); ?>

				<div class="col-md-3 widget widget-four">
				
				<!-- <h5>Partner Programme</h5>

					<div class="widget-four-slides owl-carousel js-carousel-theme">
					<?php
					$partnerslider = new WP_Query();
					$partnerslider ->query(array(
					'post_type'=> partner_slides,
					'posts_per_page' => -1,
					'order' => ASC
					)); ?>

					<?php while ($partnerslider -> have_posts()) : $partnerslider -> the_post(); ?>

					<div class="item"><a href=""><?php echo get_the_post_thumbnail($page->ID, 'partner_sdivde'); ?></a></li>

					<?php endwhile; ?>
					<?php wp_reset_postdata() ?>
					</div> -->

				</div> <!-- /.widget-four -->

			</div>
		</div>
		</div>
</footer>
<!-- Last Footer -->

<footer class="last-foot">
		<div class="col-md-12">
			<p class="text-muted"><a href="<?php bloginfo('url'); ?>/legal/" target="_blank">&copy; Copyright <?php echo date("Y") ?></a> | <a href="<?php bloginfo('url'); ?>/legal/" target="_blank">Legal</a> | <a href="<?php bloginfo('url'); ?>/legal/" target="_blank">Privacy</a> | <a href="<?php bloginfo('url'); ?>/sitemap_index.xml" target="_blank">Sitemap</a></p>
		</div>	
</footer>
<!-- /footer.last -->

<!-- Scroll Top -->
<a class="scroll-top">
    <i class="fa fa-angle-double-up"></i>
</a>
<!-- End Scroll Top -->

</div> <!-- /.wrapper -->
<!-- ==============================================
/ Site Wrapper 
=============================================== -->

<!-- ==============================================
jQuery and JavaScript Plugins
=============================================== -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/preloader/preloader.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/background-check/background-check.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/fitvids/jquery.fitvids.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/viewport-checker/jquery.viewportchecker.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/images-loaded/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/easing/jquery.easing.compatibility.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/ease-pack/EasePack.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/tween-lite/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/pollyfill/pollyfill.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/fraud-loss-countup/fraud-loss-countup.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/wow/wow.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/images-loaded/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/mediaelement-and-player/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/tipper/jquery.fs.tipper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/retina/retina.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/prettify-css/prettify.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/ie-fixes/ie10-viewport-bug-workaround.min.js"></script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/map/map.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/custom.js"></script> 

<?php wp_footer(); ?>
</body>
</html>