<?php get_header(); ?>
<!-- ==============================================
Main Content Area
=============================================== -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <!-- Post Bar -->
            <div class="col-lg-9 col-md-9 blog-post-hr">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="blog-post mb-30 <?php post_class(); ?>">
                    <div class="post-meta"><span>by <?php the_author(); ?>,</span> <span><?php the_time('F jS, Y'); ?></span></div>

                    <div class="post-header">
                        <h2 id="post-<?php the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>

                    <div class="post-media">
                        <?php echo get_the_post_thumbnail($page->ID, 'blog_post'); ?>
                    </div>

                    <div class="post-entry">
                        <?php the_content(); ?>
                    </div>

                    <div class="post-tag pull-left"><span><?php the_tags(); ?></span></div>
                </div>

                <hr />
<!-- 
                <div class="post-author">
                    <div class="post-author-img pull-left">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                    </div>
                    <div class="post-author-details pull-left">
                        <h6><?php the_author(); ?></h6>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <hr /> -->
            <?php endwhile; ?>
            </div> <!-- End Post Bar -->

            <?php else: ?>
            <!-- No posts found -->
            <?php endif; ?>

            <?php get_sidebar('sidebar'); ?>
            
        </div>
    </div>
</section>
<!-- End Blog Post Section -->
<!-- ==============================================
/ Main Content Area
=============================================== -->
<?php get_footer(); ?>