<?php
/**
 * Template for 404 Error
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */

get_template_part('templates/head');
get_header();
?>

<div class="no-page-found small-text-center pushDown">
    <h2>Penguin Adrift</h2>
    <h3>404</h3>
    <p>The page you've tried to reach doesn't exist!</p>
    <a href="<?php echo home_url(); ?>" class="button">To Front Page</a>
</div>

<?php get_footer(); ?>