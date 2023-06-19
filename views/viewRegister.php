<!DOCTYPE html>

<html lang="fr">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>FestiVoiturage</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

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
        </div>
      </div>
    </div>
  </header>

  <section class="login py-5 border-top-1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8 align-item-center">
          <div class="border border">
            <h3 class="bg-gray p-4">S'inscrire maintenant</h3>
            <form action="" method="post">
              <fieldset class="p-4">
                <input class="form-control mb-3" id="nom" name="nom" type="text" placeholder="Nom*" required>
                <input class="form-control mb-3" id="prenom" name="prenom" type="text" placeholder="Prénom*" required>
                <input class="form-control mb-3" id="login" name="login" type="text" placeholder="Login*" required>
                <input class="form-control mb-3" id="pwd" name="pwd" type="password" placeholder="Mot de passe*" required>
                <!-- <input class="form-control mb-3" type="password" placeholder="Confirmer le mot de passe*" required> -->
                <div class="loggedin-forgot d-inline-flex my-3">
                  <input type="checkbox" id="registering" class="mt-1">
                  <label for="registering" class="px-2">En vous inscrivant, vous acceptez les <a class="text-primary font-weight-bold" href="terms-condition.html">Termes & Conditions</a></label>
                </div>
                <button type="submit" class="btn btn-primary font-weight-bold mt-3">S'inscrire</button>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
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

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $login = $_POST['login'];
  $pwd = $_POST['pwd'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];

  $_SESSION['login'] = $login;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['nom'] = $nom;
  $_SESSION['prenom'] = $prenom;
}
?>