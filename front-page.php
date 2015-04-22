<?php
/**
 *
 * Template name: Front Page
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_header();
get_template_part('nav-bar');
?>


    <div class="pushDown front-comic-wrapper">
        <!-- Display the latest comic, by including its template file: -->
        <?php  get_template_part('comic'); ?>
    </div><!-- .pushDown front-comic-wrapper -->



    <?php get_footer(); ?>