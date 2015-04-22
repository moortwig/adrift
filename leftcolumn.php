<?php
/**
*
* The template for the sidebar at the left column
*
* @package Moortwig
* @subpackage Adrift
* @since Adrift 1.0
*/
?>

<div class="row">
    <div class="small-12 columns">
        <?php
        // Access fields at page About
        $page = get_page_by_path('About');
        $loop = new WP_Query($page);

        while ($loop->have_posts()):
            $loop->the_post();
            $do_not_duplicate = $post->ID;
            $image = get_field('adrift_logo');
            if($image): ?>
                <!-- Get the ACF logo image -->
                <a href=" <?php echo home_url(); ?> ">
                    <img
                        src="<?php echo $image
                            ['sizes']
                            ['logo']; ?>"
                        width="<?php echo $image
                            ['sizes']
                            ['logo-width']; ?>"
                        height="<?php echo $image
                            ['sizes']
                            ['logo-height']; ?>"
                        alt="<?php echo 'Penguin Adrift Online Comic'; ?>"
                        class="right-img"
                    />
                </a>
            <?php endif;?>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div><!-- .small-12 columns -->

    <div class="small-12 columns">
        <?php
        // Logo text
        $page = get_page_by_path('About');
        $loop = new WP_Query($page);?>
        <h2 class="text-right logo-text">
            <a href=" <?php echo home_url(); ?> ">
                <?php while ($loop->have_posts()):
                    $loop->the_post();
                    $do_not_duplicate = $post->ID;?>
                    <?php the_field('logo_text');?>
                <?php endwhile;
                wp_reset_postdata();?>
            </a>
        </h2>

        <br />
        <div class="sidebar-menu">
            <!-- Navigation menu -->
            <?php wp_nav_menu(array('theme_location' => 'bottom_menu', 'menu_class'=> 'nav-menu')); ?>
        </div><!-- .sidebar-menu -->
    </div><!-- .small-12 columns -->

</div><!-- .row -->
