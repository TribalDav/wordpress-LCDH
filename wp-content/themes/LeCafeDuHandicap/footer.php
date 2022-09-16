<?php wp_footer(); ?>



<!-- Footer -->

<footer class="site-footer pt-1 bg-dark bg-gradiant text-white">
  <nav class="navbar sticky-bottom navbar-expand-lg bg-dark navbar-dark">
    <div class="row px-5 gx-1">
      <!-- <div class="col-6 col-md-2 mb-3"> -->
        <h5>Retrouvez notre présence sur les réseaux sociaux</h5>
          <ul class="nav flex-row px-5 gx-2">
            <li class="nav-item px-2 "><a href="https://www.facebook.com/cafeduhandicap"><i class="fa-brands fa-square-facebook fa-3x" style="color: #932115"></i></a></li>
            <li class="nav-item px-2"><a href="https://twitter.com/"><i class="fa-brands fa-square-twitter fa-3x" style="color: #932115"></i></a></li>
            <li class="nav-item px-2"><a href="https://www.instagram.com/lecafeduhandicap/"><i class="fa-brands fa-square-instagram fa-3x" style="color: #932115"></i></a></li>
            <li class="nav-item px-2"><a href="https://www.linkedin.com/in/association-le-caf%C3%A9-du-handicap-b13b59153/"><i class="fa-brands fa-linkedin fa-3x" style="color: #932115"></i></a></li>
          </ul>
      <!--</div>-->
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- menu footer contenant les liens vers les pages mentions et politiques -->

    <div class="collapse navbar-collapse mediaNav" id="navbarSupportedContent">
      <?php wp_nav_menu([
        'menu' => "menu_footer",
        'container' => false,
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
      ]); ?>

    </div>
</nav>
 </footer>
</body>
</html>