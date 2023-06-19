<!DOCTYPE html>

<html lang="fr">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>FestiVoge</title>

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light navigation">
            <a class="navbar-brand" href="Acceuil">
              <img src="images/favicon.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item">
                  <a class="nav-link login-button" href="Login">Se connecter</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="advt-post bg-gray py-5">
    <div class="container">
      <form action="" method="post">
        <!-- Post Your ad start -->
        <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
          <div class="row">
            <div class="col-lg-12">
              <h3>Poster une annonce</h3>
            </div>
            <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Titre de l'annonce :</h6>
              <input type="text" class="form-control bg-white" id="titre" name="titre" placeholder="Ajouter un titre*" required>

              <h6 class="font-weight-bold pt-4 pb-1">Nom du festival :</h6>
              <input type="text" class="form-control bg-white" id="festival" name="festival" placeholder="Ajouter un nom*" required>

              <h6 class="font-weight-bold pt-4 pb-1">Date de départ :</h6>
              <input type="date" id="depart" name="depart" min="2023-04-01" max="2024-01-01">

              <h6 class="font-weight-bold pt-4 pb-1">Nombre de place :</h6>
              <input type="number" id="nbplace" name="nbplace" min="1" step="1">

              <h6 class="font-weight-bold pt-4 pb-1">Ville de départ :</h6>
              <input type="select" class="form-control bg-white" id="ville" name="ville" placeholder="Ajouter une ville*" required>

              <h6 class="font-weight-bold pt-4 pb-1">Description :</h6>
              <textarea name="description" id="description" class="form-control bg-white" rows="7" placeholder="Ecrivez des détails sur votre annonce"></textarea>
            </div>

            <fieldset>
              <legend>Choisis le type de l'annonce:</legend>

              <div>
                <input type="radio" id="type" name="type" value="voiture" checked>
                <label for="type">Voiture</label>
              </div>

              <div>
                <input type="radio" id="type" name="type" value="festivalier">
                <label for="type">Festivalier(s)</label>
              </div>


            </fieldset>
          </div>
        </fieldset>
        <!-- ad-feature start -->

        <!-- submit button -->
        <div class="checkbox d-inline-flex">
          <input type="checkbox" id="terms-&-condition" class="mt-1">
          <label for="terms-&-condition" class="ml-2">En cliquant, vous devez accepter nos
            <span> <a class="text-success" href="terms-condition.html">Règles de Termes & Conditions.</a></span>
          </label>
        </div>
        <button type="submit" class="btn btn-primary d-block mt-2">Poster l'annonce</button>
      </form>
    </div>
  </section>
  <!--============================
=            Footer            =
=============================-->

  <!-- Footer Bottom -->
  <footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright &copy; <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
              </script>. Designed & Developed by <a class="text-white">Vincent Kervarrec & Bénie Nshimirimana</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="scroll-top-to">
      <i class="fa fa-angle-up"></i>
    </div>
  </footer>

  <!-- 
Essential Scripts
=====================================-->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/popper.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/bootstrap/bootstrap-slider.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="plugins/google-map/map.js" defer></script>

  <script src="js/script.js"></script>

</body>

</html>

<!-- 
Essential Scripts
=====================================-->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/bootstrap/bootstrap-slider.js"></script>
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>

</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $titre = $_POST['titre'];
  $festival = $_POST['festival'];
  $depart =  $_POST['depart'];
  $nbplace = intval($_POST['nbplace']);
  $ville = $_POST['ville'];
  $description = $_POST['description'];
  $type = $_POST['type'];




  $_SESSION['titre'] = $titre;
  $_SESSION['festival'] = $festival;
  $_SESSION['depart'] = $depart;
  $_SESSION['nbplace'] = $nbplace;
  $_SESSION['ville'] = $ville;
  $_SESSION['description'] = $description;
  $_SESSION['type'] = $type;

  // $_SESSION['auteur'] =  $_SESSION['login'];
}
?>