<?php
/**
 * Template Name: Tester
 */

 $title      = get_field( 'section_title' );
 $area       = get_field('section_area');
?>

<?php get_header(); ?>


<div class="place-content-center flex items-center h-full max-w-screen-lg mx-auto text-white">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-red">Page: <?php the_title(); ?></h1>


    </div>
</div>

<?php get_footer(); ?>