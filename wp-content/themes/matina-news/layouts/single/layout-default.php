<?php
/**
 * Template part for displaying single post layout default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Matina News
 */

// define custom post class
$custom_class = 'mt-clearfix ';
$custom_class .= matina_news_get_post_thumbnail_class();

// get posts format
$format = get_post_format();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $custom_class ); ?>>
    <?php
        // article featured image
        get_template_part( 'template-parts/partials/single/media/entry-thumbnail', $format );

        // article categories
        get_template_part( 'template-parts/partials/single/entry', 'category' );

        // article title
        get_template_part( 'template-parts/partials/single/entry', 'title' );

        // article posted on
        matina_news_posted_on();

        // article content
        get_template_part( 'template-parts/partials/single/entry', 'content' );
        
        // article tags
        get_template_part( 'template-parts/partials/single/entry', 'tags' );

        // article author box
        get_template_part( 'template-parts/partials/single/entry', 'author-box' );

        // article navigation
        get_template_part( 'template-parts/partials/single/entry', 'navigation' );

        // article comments
        get_template_part( 'template-parts/partials/single/entry', 'comments' );

        // related posts
        get_template_part( 'template-parts/partials/single/entry', 'related-posts' );
    ?>
</article><!-- #post-<?php the_ID(); ?> -->