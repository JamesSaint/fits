<?php get_header(); ?>

<?php /* Template Name: Blog Page */ ?>

<!-- ==============================================
Blog Post Section
=============================================== -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <!-- Post Item -->
        <div class="row container-grid">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 js-item spacing-grid">
                <div class="blog-post">
                    <div class="post-media">
                        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($page->ID, 'featured'); ?></a>
                    </div>
                    <div class="post-meta"><span>by <a><?php the_author(); ?></a>,</span> <span><?php the_time('F jS, Y'); ?></span><span><?php edit_post_link('Edit','','|'); ?></span></div>
                    <div class="post-header">
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="post-entry">
                        <?php  the_excerpt(40);  ?>
                    </div>
                    <div class="post-tag pull-left"><span><?php the_category(', '); ?>,</span><span><?php the_tags(); ?></span></div>
                    <div class="post-more-link pull-right"><a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                </div>
            </div>
        <!-- End Post Item -->
        <?php endwhile; ?>
        <?php else: ?>
        <!-- No posts found -->
        <?php endif; ?>
        </div>

        <!-- Pagination Nav -->
<!--         <div class="pagination-nav mt-60 mt-xs-30">
            <ul>
                <li><?php posts_nav_link('<i class="fa fa-angle-left"></i>'); ?></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><?php posts_nav_link('<i class="fa fa-angle-right"></i>'); ?></a></li>
            </ul>
        </div> -->
        <!-- End Pagination Nav -->
    </div>
</section>
<!-- ==============================================
/ Blog Post Section
=============================================== -->
<?php get_footer(); ?>