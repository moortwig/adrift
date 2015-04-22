<?php
/**
 * The template for displaying Archive pages
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header(); ?>

<div class="row">

    <!-- Left column -->
    <div class="small-12 large-2 columns">
        <?php get_template_part('leftcolumn'); ?>
    </div><!-- .small-12 large-2 columns -->

    <!-- Middle column -->
    <div class="small-12 large-7 columns">
        <h1 class="entry-title">Blog Archive</h1>
        <?php
        // Display the post excerpts in the archive:
        if(have_posts()):
            while (have_posts()) {
                the_post(); ?>
                <article>
                    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_date();
                        echo "| ("; comments_number(); echo ")"; ?>
                    </p>
                    <?php the_excerpt(); ?>
                    <hr/>
                </article>
            <?php }
        endif; ?>

        <div>
            <!-- Pagination -->
            <?php posts_nav_link(); ?>
        </div>
    </div><!-- .small-12 large-7 columns -->

    <!-- Right column -->
    <div class="small-12 large-3 columns">
        <div class="right-sidebar">
            <?php get_search_form( true ); ?>
            <?php dynamic_sidebar('post_right_1'); ?>
        </div>
    </div><!-- .small-12 large-3 columns -->

</div><!-- .row -->
<?php

get_footer();

?>