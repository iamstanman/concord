    
    <section class="section-cta">
        <div class="shell">
            
            <div class="subscribe-form-embed-cnt">
                <div class="subscribe-form-embed-header">
                    <h2 class="gform_title">Stay Informed</h2>
                </div>
                <div class="subscribe-form-embed">
                    <input type="email" />
                </div>
            </div>
            
        </div><!-- /.shell -->
    </section><!-- /.section-cta -->
    
    </main>

    <footer class="bg-navy-deep border-t-[1px] border-blue-accent ">
        <div class="mx-auto w-full h-52 px-[10rem] flex flex-col lg:flex-row justify-between items-center py-[58px]">
            <!-- Logo -->
             <div class="footer__logo">
                <a href="<?php echo home_url() ?>" >
                    <span class="sr-only">Concord Public Opinion Partners</span>
                    <img class="w-auto h-28" src="<?php bloginfo( 'stylesheet_directory'); ?>/assets/img/footer_logo.svg" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
             </div>

            <!-- Footer Menu -->
             <div class="footer__menu">
                <?php
                    if ( has_nav_menu( 'footer-main-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-main-menu',
                            'menu_class'      => 'flex flex-col lg:flex-row gap-x-20 justify-between uppercase nav-font',
                            'container'       => 'div',
                            'container_class' => '',
                            'depth'           => 0,
                        ) );
                    }
                ?>
             </div>
        </div>
        


        <div class="footer__bar flex items-center justify-center border-t-[1px] border-blue-accent pt-5 pb-4">
            <div class="copyright">
                <p class="text-sm text-white/50"><?php the_field( 'copyright_text', 'option' ); ?></p>
            </div>
        </div>
        
    </footer>


<?php wp_footer() ?>
<?php if ( $footerCode = get_field('site_custom_code_footer', 'options') ) { echo $footerCode; } ?>
</body>
</html>