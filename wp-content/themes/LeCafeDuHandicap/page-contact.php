<?php /* Template Name: Contact */ ?>
<?php
get_header();
?>

<div class="container p-5 my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 rounded-3 shadow-lg">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="h1 fw-light">Formulaire de contact
                        </div>
                    </div>

                    <!-- Formulaire de contact -->
                    <form id="contactForm" action="" method="post">
                        <!-- Name Input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Nom" data-sb-validations="required" />
                            <label for="name">Nom</label>
                        </div>
                        <!-- FirstName Input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="firstname" type="text" placeholder="Prénom" data-sb-validations="required" />
                            <label for="firstName">Prénom</label>
                        </div>
                        <!-- Email Input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="emailAddress" type="email" placeholder="Email " data-sb-validations="required,email" />
                            <label for="emailAddress">Email </label>
                        </div>
                        <!-- Message Input -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <!-- Submit button -->
                        <div class="d-grid col-4 mx-auto">
                            <button class="btn btn-style btn-danger " id="submitButton" type="submit">Soumettre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Localisation coordonnées + map -->

    <div class="row justify-content-center my-5">
        <div class="col-lg-10">
            <div class="card border-0 rounded-3 shadow-lg">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="h1 fw-light">Nous trouver
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card border-0 rounded-3 shadow-lg">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="h5 fw-light">9 rue Roland Garros
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="h5 fw-light">Clos Versannas
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="h5 fw-light">87920 Condat-sur-Vienne
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="h5 fw-light">Tel. 0660880541
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card border-0 rounded-3 shadow-lg">
                                <div class="card-body p-4">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31469.118527390165!2d1.23291397739673!3d45.801171431400356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47feccda1aa31dc7%3A0xe16361100601a432!2s9%20Rue%20Roland%20Garros%2C%2087920%20Condat-sur-Vienne!5e0!3m2!1sfr!2sfr!4v1662644052123!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="assoLocMap"></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
get_footer();
?>