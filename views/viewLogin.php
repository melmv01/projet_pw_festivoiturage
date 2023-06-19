 <?php
  // session_start();
  // session_start();
  // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //   $login = $_POST['login'];
  //   $_SESSION['login'] = $login;
  //   $pwd = $_POST['pwd'];
  //   $_SESSION['pwd'] = $pwd;
  //   setcookie('utilisateur', $login);
  // }
  ?>
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
           <div class="border">
             <h3 class="bg-gray p-4">Se connecter</h3>
             <form action="" method="post">
               <fieldset class="p-4">
                 <input class="form-control mb-3" type="text" id="login" name="login" placeholder="Nom d'utilisateur" required>
                 <input class="form-control mb-3" type="password" id="pwd" name="pwd" placeholder="Mot de passe" required>
                 <!-- <div class="loggedin-forgot">
                <input type="checkbox" id="keep-me-logged-in">
                <label for="keep-me-logged-in" class="pt-3 pb-2">Rester connecté</label>
              </div> -->
                 <button type="submit" class="btn btn-primary font-weight-bold mt-3">Connexion</button>
                 <div>
                   <a class="mt-3 d-inline-block text-primary" href="Register">
                     Créer un compte </a>
                 </div>
                 <!-- <a class="mt-3 d-block text-primary" href="#!">Mot de passe oublié ?</a> -->
                 <!-- <a class="mt-3 d-inline-block text-primary" href="register.html">S'inscrire </a> -->
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
  // session_start();
  // session_start();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $_SESSION['login'] = $login;
    $pwd = $_POST['pwd'];
    $_SESSION['pwd'] = $pwd;
    setcookie('utilisateur', $login);
    setcookie('password', $pwd);
  }
  ?>