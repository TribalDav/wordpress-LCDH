<?php /* Template Name: Actualités */ ?>
<?php get_header(); ?>
<?php                          

                                            // mise en place Loop page actualités

                                            
    if (have_posts()) : ?>
        <div class="container p-5 my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card border-0 rounded-3 shadow-lg">
                            <div class="card-body p-4">
                                <div class="text-start">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-sm-12 my-2">
                    <div class="card border-0 rounded-3 shadow-lg">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top', 'alt' => '', 'style' => 'width: 40%; height: auto;')); ?>
                        <div class="card-body">
                            <h2 class="card-title"><?php the_title() ?></h2>
                                <span class="card-subtitle text-muted  "><?php the_category() ?></span>
                                    <p class="card-text"><?php the_excerpt() ?></p>
                                        <a href="<?php the_permalink() ?>" class="card-link">Lire la suite</a>
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
    <?php else : ?>
        <h2>Pas d'articles</h2>
    <?php endif; ?>
    <?php get_footer(); ?>