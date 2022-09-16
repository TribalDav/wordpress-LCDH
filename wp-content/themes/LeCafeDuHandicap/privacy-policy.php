<?php get_header(); ?>


<?php
if (have_posts()) : ?>
    <div class="container p-5 my-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card border-0 rounded-3 shadow-lg">
                        <div class="card-body p-4">
                            <div class="text-center">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-12 my-2">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body">
                        <h2 class="card-title "><?php the_title() ?></h2>
                            <div class="text-start">
                                <p class="card-text"><?php the_content() ?></p>
                                    <a href="<?php the_permalink() ?>" class="card-link"></a>
                            </div>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php endif; ?>



<?php get_footer(); ?>