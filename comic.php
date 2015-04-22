<?php
/**
 * Template part belonging to front-page.php
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */


// Display the latest comic strip on front-page.php
$wp_query = new WP_Query(array('post_type' => 'comic', 'order' => 'ASC'));
$wp_query->query('showposts=1&post_type=comic');

while ($wp_query->have_posts()):
    $wp_query->the_post(); ?>
    <?php $image = get_field('comic-img');
    if($image):?>
        <!-- Get the ACF image -->
        <div class="start-image-container">
            <a href="<?php echo get_permalink(); ?>">
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
                />
            </a>
        </div>
        <div class="row">
            <div class="small-12 large-4 small-centered large-uncentered small-text-center large-text-right columns">
                <span>
                    Posted on: <?php the_date(); ?>
                </span>
            </div><!-- .small-12 large-4 small-centered large-uncentered small-text-center large-text-right columns -->

            <div class="small-12 large-4 small-centered large-uncentered small-text-center columns">
                <span>
                Chapter: <?php $term = get_field('chapter');
                if( $term ):
                    // Display chapter information:
                    echo $term->name . " - " . $term->description;
                endif; ?>
                </span>
            </div><!-- .small-12 large-4 small-centered large-uncentered small-text-center columns -->

            <div class="small-12 large-4 small-centered large-uncentered small-text-center large-text-left columns">
                <span>
                    Dedicated to: <?php the_field('comic_dedication');?>
                </span>
            </div><!-- .small-12 large-4 small-centered large-uncentered small-text-center large-text-left columns -->
        </div><!-- .row -->
    <?php endif;
endwhile; ?>


