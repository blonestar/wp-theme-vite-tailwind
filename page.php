<?php get_header() ?>

    <div class="w-full 2xl:container mx-auto mt-0 2xl:mt-5 p-4 border-0 2xl:border transition-all">

        <h1 class="text-3xl font-semibold"><?php the_title() ?></h1>
        <div class="mt-4">
            <?php the_content() ?>
        </div>

    </div>

<?php get_footer() ?>