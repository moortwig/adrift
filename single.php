<?php
/**
 *
 * This is the template file for the single Blog posts.
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header();
?>

<div class="row">

    <!-- Left Column -->
	<div class="large-2 columns">
        <?php get_template_part('leftcolumn'); ?>
	</div><!-- .large-2 columns -->

    <!-- Middle Column -->
    <div class="large-7 columns">
        <?php
        // Display the blog post:
        if(have_posts()):
            while (have_posts()) {
                the_post(); ?>
                <article>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_date(); ?><?php echo " | ("; ?><a href="#comments"><?php comments_number();?></a><?php echo ")"; ?></a></p>
                    <p><?php the_content(); ?></p>
                </article>

                <hr />

                <div id="comments" class="comments">
                    <?php
                    // Include comments.php, to display the comments
                    comments_template(); ?>
                </div> <!-- #comments .comments -->
            <?php }
        endif; ?>
    </div><!-- .large-7 columns -->


    <!-- Right column -->
    <div class="large-3 columns">
        <div class="right-sidebar">
            <?php get_search_form(true); ?>
            <?php dynamic_sidebar('post_right_1'); ?>
        </div>
    </div><!-- .large-3 columns -->

</div><!-- .row -->


<?php
get_footer();
?>