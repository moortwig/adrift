<?php
/**
 * The template for displaying the footer
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

wp_footer();
?>

</div><!-- .main -->

<div class="text-center sticky-footer">

    <div class="div-border-top"></div>

    <p>Copyright &copy
        <?php
        // Get copyright ACF data:
        $page = get_page_by_path('About');
        $loop = new WP_Query($page);
        while ($loop->have_posts()):
            $loop->the_post();
            $do_not_duplicate = $post->ID;
            the_field('copyright');
        endwhile;
        wp_reset_postdata();?>
    </p>
</div>

<!-- JAVASCRIPT VENDOR -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/foundation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/foundation.offcanvas.js"></script>

<!-- MAIN.JS -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<script>$(document).foundation();</script>

</body>
</html>