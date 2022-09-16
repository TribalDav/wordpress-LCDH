<?php get_header(); ?>
<?php              

                            // Page d'accueil du site

                            
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="container p-5 my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card border-0 rounded-3 shadow-lg">
                            <div class="card-body p-4">
                                <div class="text-start">
                                    <p>
                                        <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width: 100%; height: auto;">
                                    </p>
                                    <p class=""><?php the_content() ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    <?php endif; ?>
<?php get_footer();