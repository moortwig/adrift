<?php
/**
 *
 * This is the template file for the Blog posts.
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header(); ?>

	<div id="top" class="row">

        <!-- Left column -->
        <div class="large-2 columns">
            <?php get_template_part('leftcolumn'); ?>
        </div><!-- .large-2 columns -->


        <!-- Middle column -->
        <div class="large-7 columns blog">
            <!-- Display the blog posts -->
            <?php
            if(have_posts()):
                while (have_posts()) {
                    the_post(); ?>
                    <article>
                        <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p> <!-- Display the date and number of comments: -->
                            <?php the_date(); ?>
                            <?php echo "| ("; comments_number(); echo ")"; ?>
                        </p>
                        <p> <!-- Display the post content -->
                            <?php the_content(); ?>
                        </p>
                        <hr/>
                        <!-- Scroll back to the top -->
                        <a href="#top">Back to top</a>
                    </article>
                <?php }
            endif;
            ?>

                <div>
                    <!-- Pagination -->
                    <?php posts_nav_link(); ?>
                </div>

        </div><!-- .large-7 columns blog -->

        <!-- Right column -->
        <div class="right-sidebar">
            <div class="large-3 columns">
                <?php
                    get_search_form( true );
                    dynamic_sidebar('post_right_1');
                ?>
            </div><!-- .large-3 columns -->
        </div><!-- .right-sidebar -->

	</div><!-- #top .row -->

<?php get_footer(); ?>