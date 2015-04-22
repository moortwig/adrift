<?php
/**
 *
 * Template name: Search page
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header();
?>

<div class="row">

    <!-- Left column -->
    <div class="large-2 columns">
        <?php get_template_part('leftcolumn'); ?>
    </div><!-- .large-2 columns -->

    <div class="large-7 columns">
        <div class="columns-color">
            <span class="search-results-headline"><h1 class=" label">Search Results: &quot;<?php echo get_search_query(); ?>&quot;</h1></span>

            <?php if (have_posts()) :  // results found ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- Display the post excerpts, matching the search word -->
                    <article>
                        <h2><?php the_title();  ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <p> <a href="<?php the_permalink(); ?>">View</a> </p>
                    </article>
                    <hr />
                <?php endwhile; ?>
            <?php else :  // no results?>
                <article>
                    <h1>No Results Found.</h1>
                </article>
            <?php endif; ?>

            <div>
                <!-- Pagination -->
                <?php posts_nav_link(); ?>
            </div>
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