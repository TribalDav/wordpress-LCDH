<?php /* Template Name: Article solo */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
    <div class="container p-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                        <div class="text-start">
                            <h1> <?php the_title() ?></h1>
                            <h6><?php the_category() ?></h6>
                                <p> 
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width: 20%; height: auto;">
                                </p>
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;
endif; ?>

<?php get_footer(); ?>