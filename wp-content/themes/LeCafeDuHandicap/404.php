<?php
get_header();   


// page 404 - page non trouvée - erreur chargement page


?>
    <div class="container p-5 my-20">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 rounded-3 shadow-lg">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="h1 fw-light">Page introuvable
                        </div>
                            <div class="p fw-light">Cette page n'existe pas
                            </div>
                            <img src="http://localhost:8080/wordpress_Le_caf%C3%A9_du_handicap/wp-content/uploads/2022/09/error-g0a8f9dd85_640.jpg" alt="">
                                <div class="p fw-light">Vous pouvez retourner à l'accueil en cliquant sur le bouton ci-dessous
                                </div>
                                    <button class="btn btn-style btn-danger"><a href="<?php echo home_url() ?>" style="outline: none; text-decoration: none; color:white;">Retour à l'accueil</a></button>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>