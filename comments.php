<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package Moortwig
 * @subpackage Adrift
 * @since Adrift 1.0
 */
?>

<!-- Display list of comments for the post: -->
<ol class="commentlist">
    <?php wp_list_comments(); ?>
</ol><!-- .commentlist -->

<hr />

<!-- Get the form to post a comment: -->
<?php comment_form(); ?>