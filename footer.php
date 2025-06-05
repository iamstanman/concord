    </main>

    <footer class="bg-navy-deep">
        <div class="mx-auto max-w-7xl px-6 pt-16 pb-8 sm:pt-24 lg:px-8 lg:pt-32">
            <!-- Logo -->

            <!-- Footer Menu -->
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