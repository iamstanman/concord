<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if ( $headerCode = get_field('site_custom_code_header', 'options') ) { echo $headerCode; } ?>
    <?php wp_head() ?>
</head>
<body <?php body_class('flex flex-col h-screen bg-navy-deep') ?>
<?php $header_logo = get_field( 'header_logo', 'option' ); ?>
<?php $size = 'full'; ?>  
>
<?php wp_body_open(); ?>

    <!-- <header class="flex-0 bg-slate-100 px-4 border shadow-md">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center min-h-[40px]">
            <div class="">
                <a href="<?php echo home_url() ?>">Logo</a>
            </div>
            <div>
                <?php echo wp_nav_menu() ?>
            </div>
        </div>
    </header> -->

    <header class="bg-navy-deep">
        <nav class="mx-auto w-full flex items-center justify-between h-[100px] border-b-[1px] border-blue-accent" aria-label="Global">
            <a href="<?php echo home_url() ?>" class="pl-[20px] lg:pl-[50px]">
                <span class="sr-only">Concord Public Opinion Partners</span>
                <img class="w-auto h-14" src="<?php bloginfo( 'stylesheet_directory'); ?>/assets/img/header_logo.svg" alt="<?php bloginfo( 'name' ); ?>" />
            </a>
            <!-- mobile menu -->
            <div class="flex lg:hidden border-l-[1px] border-blue-accent h-full">
            <button type="button" class="inline-flex items-center justify-center rounded-md p-2.5 text-white w-full">
                <span class="sr-only">Open main menu</span>
                <svg class="w-16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            </div>
            <!-- figure out if I need to make two menus for the header so that contact can be dynamic as well.  -->
            <div class="hidden lg:flex lg:gap-x-12 text-white">
                <?php
                    if ( has_nav_menu( 'header-main-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location'  => 'header-main-menu',
                            'menu_class'      => 'hidden lg:flex lg:items-center uppercase lg:gap-x-12 nav-font',
                            'container'       => '',
                            'container_class' => '',
                            'depth'           => 0,
                        ) );
                    }
                ?>
                
                <!-- Contact Button in Header -->
                <div class="header_actions">
                    <?php $header_button_link = get_field( 'header_button_link', 'option' ); ?>
                    <?php if ( $header_button_link ) : ?>
                        <a class="text-blue-accent hover:text-navy-deep hover:bg-blue-accent transition-colors duration-200 font-medium block py-[39px] pl-[50px] pr-[56px] uppercase border-l-[1px] border-blue-accent" href="<?php echo esc_url( $header_button_link['url'] ); ?>" target="<?php echo esc_attr( $header_button_link['target'] ); ?>"><?php echo esc_html( $header_button_link['title'] ); ?></a>
                    <?php endif; ?>
                </div>
                
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        
    </header>


    <main class="flex-grow w-full flex-shrink-0">

