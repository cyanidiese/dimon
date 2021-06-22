<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="Section__wrapper wrapper">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_singular() ) : ?>
            <?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
        <?php else : ?>
            <?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content();

        ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
</div>