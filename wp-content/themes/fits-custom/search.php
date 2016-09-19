
<?php get_header(); ?>

<!-- ==============================================
Search Results Page
=============================================== -->
<section id="section-white">
<div class="container">
	<div class="row">
	<div class="col-md-12">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
	<div <?php post_class(); ?>>
		
		<?php
		//Post thumbnails need this in functions.php: `add_theme_support('post-thumbnails');`
		if(has_post_thumbnail()) the_post_thumbnail(array(100,100));
		?>
		
		<h2 id="post-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		
		<div class="post-metadata">
			<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></p>
			<p><?php edit_post_link('Edit','','|'); ?> <?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?></p>
		</div>
		
		<div class="post-content">
			<?php  the_excerpt('Read More &raquo;');  ?>
		</div>
		
		<div class="post-tags">
			<?php the_tags(); ?>
		</div>
		
	</div>
	
<?php endwhile; ?>
	
	<div class="post-navigation">
		<div><?php posts_nav_link('', 'Next Entries &raquo;', ''); ?></div>
		<div><?php posts_nav_link('', '', '&laquo; Previous Entries'); ?></div>
	</div>
	
<?php else: ?>
	<!-- No posts found -->
<?php endif; ?>
</div>
</div>
</div>
</section>

<!-- ==============================================
/ Main Content Area
=============================================== -->

<?php get_footer(); ?>