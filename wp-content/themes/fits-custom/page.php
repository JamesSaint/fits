<?php get_header(); ?>
<!-- ==============================================
Main Content Area
=============================================== -->
<section class="ptb ptb-sm-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<div <?php post_class(); ?>>
						<h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
							<?php echo get_the_post_thumbnail($page->ID, 'page_image'); ?>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- ==============================================
/ Main Content Area
=============================================== -->
<?php get_footer(); ?>