<?php
/**
 * The Template for displaying all single strip items
 * Custom post type =D
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header();
get_template_part('nav-bar');
?>

<?php
if(have_posts()):
    while(have_posts()):
        the_post();
        // Display the comic image:
        $image = get_field('comic-img');
        if($image): ?>
            <img
                src="<?php echo $image
                    ['sizes']
                    ['comic']; ?>"
                width="<?php echo $image
                    ['sizes']
                    ['comic-width']; ?>"
                height="<?php echo $image
                    ['sizes']
                    ['comic-height']; ?>"
                alt="<?php echo the_title(); ?>"
                class="center-img"
                />

            <div class="pagination-centered">
                <?php echo previous_post_link('%link', 'Previous'); ?> ||
                <?php echo next_post_link('%link', 'Next'); ?>
            </div><!-- .pagination-centered -->

            <div class="comic-info">
                <p class="text-center">Posted on: <?php the_date(); ?><br />
                    Chapter: <?php $term = get_field('chapter');
                        if( $term ):
                            // Display chapter information:
                            echo $term->name . " - " . $term->description;
                        endif; ?><br />
                    Dedicated to: <?php the_field('comic_dedication');?>
                </p>
            </div><!-- .comic-info -->
        <?php endif;
    endwhile;
endif; ?>

<?php
get_footer();
?>

