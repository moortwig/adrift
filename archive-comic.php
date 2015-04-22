<?php
/**
 * Template name: Adrift Comic Archive
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header();
?>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">

        <div class="row">
            <!-- Left column -->
            <!-- MENU FOR SMALL DEVICES -->
            <div class="visible-for-small-only">
                <a class="left-off-canvas-toggle menu-icon" href="#"><span>Menu</span></a>
                <div class="left-off-canvas-menu">
                    <?php get_template_part('leftcolumn'); ?>
                </div>
            </div><!-- .visible-for-small-only -->
            <!-- END MENU FOR SMALL DEVICES -->


            <!-- MENU FOR MEDIUM AND LARGE DEVICES -->
            <div class="visible-for-medium-up">
                <div class="small-12 medium-3 large-2 columns">
                    <?php get_template_part('leftcolumn'); ?>
                </div><!-- .columns -->
            </div><!-- .visible-for-medium-up -->
            <!-- END MENU FOR MEDIUM AND LARGE DEVICES -->


            <!-- Main column -->
            <div class="small-12 medium-9 large-10 columns comic-archive">
                <h1>Comic archive</h1>

                <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-3">
                    <?php
                    $loop = new WP_Query(array('post_type' => 'comic', 'order' => 'ASC'));
                    // Get ACF image:
                    while ($loop->have_posts()):
                        $loop->the_post();
                        $image = get_field('comic-img');
                        if($image):?>
                            <li>
                                <a href="<?php echo get_permalink(); ?>">
                                    <img
                                        src="<?php echo $image
                                            ['sizes']
                                            ['comicThumb']; ?>"
                                        width="<?php echo $image
                                            ['sizes']
                                            ['comicThumb-width']; ?>"
                                        height="<?php echo $image
                                            ['sizes']
                                            ['comicThumb-height']; ?>"
                                        alt="<?php echo the_title(); ?>"
                                        class="center-img"
                                    />
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul><!-- .small-block-grid-2 medium-block-grid-2 large-block-grid-3 -->
                <a class="exit-off-canvas"></a>

            </div><!-- .small-12 medium-9 large-10 columns comic-archive -->

        </div><!-- .row -->
    </div><!-- .inner-wrap -->



    <?php
    get_footer();
    ?>
</div><!-- .off-canvas-wrap -->