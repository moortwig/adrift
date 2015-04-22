<?php
/**
 *
 * The template for a standard page
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */
get_header();
get_template_part('nav-bar');
?>
<div class="row">

    <div class="small-12 medium-8 small-centered columns">
        <h1><?php the_title(); ?></h1>

        <div class="row">

            <div class="small-12 medium-7 columns about">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                        <article>
                            <p><?php the_content(); ?></p>
                        </article>
                    <?php endwhile;
                else:
                    echo "<p>But why has the posts gone?</p>";
                endif; ?>
            </div><!-- .small-12 medium-7 columns about -->

            <div class="small-12 medium-5 columns">
                <?php
                // Access the ACF fields for this page
                $page = get_page_by_path('About');
                $loop = new WP_Query($page);
                while ($loop->have_posts()):
                    $loop->the_post();
                    $do_not_duplicate = $post->ID;
                    $image = get_field('about_image');
                    if($image): ?>
                        <img
                            src="<?php echo $image
                                ['sizes']
                                ['medium']; ?>"
                            width="<?php echo $image
                                ['sizes']
                                ['medium-width']; ?>"
                            height="<?php echo $image
                                ['sizes']
                                ['medium-height']; ?>"
                            alt="<?php echo 'About Penguin Adrift Online Comic'; ?>"
                        />
                    <?php endif;
                endwhile;
                wp_reset_postdata();?>
            </div><!-- .small-12 medium-5 columns -->
        </div><!-- .row -->

    </div><!-- .small-12 medium-8 small-centered columns -->
</div><!-- .row -->



<?php

get_footer();
?>
