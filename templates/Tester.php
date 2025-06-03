<?php
/**
 * Template Name: Tester
 */

 $title      = get_field( 'section_title' );
 $area       = get_field('section_area');
?>

<?php get_header(); ?>


<div class="place-content-center flex items-center h-full max-w-screen-lg mx-auto">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-red">Page: <?php the_title(); ?></h1>

        <h2 class="text-xl font-bold text-black">Wordpress Theme rapid development using Vite & Tailwindcss</h2>

        <p>Here is the ACF part</p>

        <div class="acf-section text-left my-8">
            <h2 class="text-2xl text-blue-800 uppercase text-center"><?php echo $title; ?></h2>
            <?php echo $area; ?>
        </div>


    </div>
</div>

<?php get_footer(); ?>