<?php
/**
 * The template for displaying Category pages
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header(); ?>
<div class="row">

    <!-- Left column -->
    <div class="large-2 columns">
        <?php get_template_part('leftcolumn'); ?>
    </div><!-- .large-2 columns -->

    <!-- Middle column -->
    <div class="large-7 columns">
        <h1 class="entry-title">Blog Categories</h1>
        <?php
        // Display blog post excerpts:
        if(have_posts()):
            while (have_posts()) {
                the_post(); ?>
                <article>
                    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p>
                        <?php the_date(); ?>
                        <?php echo "| ("; comments_number(); echo ")"; ?>
                    </p>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <hr />
                </article>
            <?php
            }
        endif;
        ?>
        <div>
            <!-- Pagination -->
            <?php posts_nav_link(); ?>
        </div>
    </div><!-- .large-7 columns -->

    <!-- Right column -->
    <div class="large-3 columns">
        <div class="right-sidebar">
            <?php get_search_form(true); ?>
            <?php dynamic_sidebar('post_right_1'); ?>
        </div><!-- .right-sidebar -->
    </div><!-- .large-3 columns -->

</div><!-- .row -->


<?php

get_footer();

?>