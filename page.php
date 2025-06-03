<?php get_header() ?>

    <article class="max-w-screen-lg mx-auto ">

        <h1 class="text-3xl font-semibold"><?php the_title() ?></h1>
        <h2>This is the h2 of the page</h2>
        <div class="mt-4">
            <?php the_content() ?>
        </div>

    </article>

<?php get_footer() ?>