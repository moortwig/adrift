<?php
/**
 *
 * The template for the sidebar near the footer
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

?>
<div class="row">

    <!-- Logo -->
    <div class="small-6 medium-3 large-2 columns">
        <?php
        $page = get_page_by_path('About');
        $loop = new WP_Query($page);

        while ($loop->have_posts()):
            $loop->the_post();
            $do_not_duplicate = $post->ID;
            $image = get_field('adrift_logo');
            if($image):
                // Get the image URL, alt
                ?>
                <a href=" <?php echo home_url(); ?> ">
                    <img src="<?php echo $image
                    ['sizes']       // ['comicThumb']
                    ['logo']; ?>"
                         width="<?php echo $image
                         ['sizes']
                         ['logo-width']; ?>"
                         height="<?php echo $image
                         ['sizes']
                         ['logo-height']; ?>"
                         alt="<?php echo 'Penguin Adrift Online Comic'; ?>"
                         class="center-img"
                        />
                </a>
            <?php endif;
        endwhile;?>
    </div><!-- .small-6 medium-2 large-2 columns -->

    <!-- Logo text -->
    <div class="small-6 medium-9 large-3 columns">
        <?php
        $page = get_page_by_path('About');
        $loop = new WP_Query($page);?>
        <h2 class="text-left small-text-right large-text-left">
            <a href=" <?php echo home_url(); ?> ">
                <?php while ($loop->have_posts()):
                    $loop->the_post();
                    $do_not_duplicate = $post->ID;?>
                    <?php the_field('logo_text');?>

                <?php endwhile;
                wp_reset_postdata();?>
            </a>
        </h2>
    </div><!-- .small-6 medium-9 large-3 columns -->

    <!-- Navigation -->
    <div class="small-6 medium-9 large-6 columns right-align inline">
        <?php wp_nav_menu(array('theme_location' => 'bottom_menu', 'menu_class'=> 'nav-menu right' )); ?>
    </div><!-- .small-6 medium-9 large-6 columns right-align inline -->

</div><!-- .row -->
