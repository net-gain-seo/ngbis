<?php
    get_header();
?>
<div class="page-mast">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2017/08/BridgeBanner.jpg" alt="">
</div>

<div class="contact-bar">
    Control the Security of Managing Your Business Records <a href="<?php echo home_url(); ?>/contact" class="btn btn-primary">Work With Us</a>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col col-12 col-md-9 post-blog">

            <div class="blog-listing">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>

                    <h2 class="post-title">
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <em><?php the_excerpt(); ?></em>

                    <div style="font-weight: bold;font-style:italic;">Continue reading <a href="<?php the_permalink(); ?>">here...</a></div>

                </article>
            <?php endwhile; // End of the loop. ?>
            </div>

        </div>

        <div class="col col-12 col-md-3">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>

        </div>
    </div>
</div>

<?php
    get_footer();
