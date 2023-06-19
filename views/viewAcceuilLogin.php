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

    <!-- theme meta -->
    <meta name="theme-name" content="classimax" />

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
                        <a class="navbar-brand" href=>
                            <img src="images/favicon.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="Deconnexion">Deconnexion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white add-button" href="Annonce"><i class="fa fa-plus-circle"></i> Ajouter une annonce</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!--===============================
=            Hero Area            =
================================-->

    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1>FestiVoiturage</h1>
                        <!-- A modifier  -->
                        <p>Découvrez notre plateforme de covoiturage dédiée aux festivaliers,
                            <br> pour des trajets inoubliables et des souvenirs à partager.
                        </p>
                    </div>
                    <!-- Advance Search -->
                    <!-- REDUIRE LES TAILLES POUR QUE CA PASSE SUR UNE LIGNE  -->
                    <div class="advance-search">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 align-content-center">

                                    <!-- FORMULAIRE VOITURE -->
                                    <form action="" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-xl-4 col-lg-3 col-md-6">
                                                <input type="text" class="form-control my-2 my-lg-1" id="v_festival" name="v_festival" placeholder="Festival" required>
                                            </div>
                                            <div class=" form-group col-xl-4 col-lg-3 col-md-6">
                                                <input type="number" class="form-control my-2 my-lg-1" id="v_nbplace" name="v_nbplace" placeholder="Nombre de voyageur" required>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6">
                                                <input type="text" class="form-control my-2 my-lg-1" id="v_ville" name="v_ville" placeholder="Ville" required>
                                            </div>

                                            <div class="form-group col-lg-3 col-md-6">
                                                <!-- l'affichage de la date ? -->
                                                <input type="date" class="form-control my-2 my-lg-1" id="v_depart" name="v_depart" min="2023-04-01" max="2024-01-01" value="" required>
                                            </div>



                                        </div>
                                        <div class="form-group col-xl-3 col-lg-4 col-md-7 align-self-center">

                                            <button type="submit" class="btn btn-main">Voir les voitures</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Advance Search -->
                    <div class="advance-search">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 align-content-center">

                                    <!-- FORMULAIRE FESTIVALIERS -->
                                    <form action="" method="post">
                                        <div class="form-row">
                                            <div class="form-group col-xl-4 col-lg-3 col-md-6">
                                                <input type="text" class="form-control my-2 my-lg-1" id="f_festival" name="f_festival" placeholder="Festival" required>
                                            </div>

                                            <div class="form-group col-lg-3 col-md-6">
                                                <input type="text" class="form-control my-2 my-lg-1" id="f_ville" name="f_ville" placeholder="Ville" required>
                                            </div>

                                            <div class="form-group col-lg-3 col-md-6">
                                                <!-- l'affichage de la date ? -->
                                                <input type="date" class="form-control my-2 my-lg-1" id="inputLocation4" min="2023-04-01" max="2024-01-01" name="f_date" value="" required>
                                            </div>
                                            <div class="form-group col-xl-3 col-lg-4 col-md-7 align-self-center">
                                                <button type="submit" class="btn btn-main">Voir les festivaliers</button>
                                                <!-- <button type="submit" class="btn btn-main" ></button> -->
                                                <!-- href="Resfestivalier" -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>


    <!--===========================================
=            Popular deals section            =
============================================-->

    <section class="popular-deals section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Festivals en tête d'affiche</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- offer 01 -->
                <div class="col-lg-12">
                    <div class="trending-ads-slide">
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="PageRoiArthur.html">
                                            <img class="card-img-top img-fluid" src="images/products/RoiArthur.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="PageRoiArthur.html">Festival du Roi Arthur</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a><i class="fa fa-calendar"></i>Du 25 au 27 Août</a>
                                            </li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="PageVieillesCharrues.html">
                                            <img class="card-img-top img-fluid" src="images/products/VieillesCharrues.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="PageVieillesCharrues.html">Festivals des Vieilles Charrues</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a><i class="fa fa-calendar"></i>Du 13 au 17 Juillet</a>
                                            </li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="PageSolidays.html">
                                            <img class="card-img-top img-fluid" src="images/products/Solidays.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="PageSolidays.html">Festival Solidays</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a><i class="fa fa-calendar"></i>23-25 Juin</a>
                                            </li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="PagePalooza.html">
                                            <img class="card-img-top img-fluid" src="images/products/LollaPalooza.jpg" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="PagePalooza.html">Festival Lolla Palooza</a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a><i class="fa fa-calendar"></i>21-23 Juillet</a>
                                            </li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ==========================================
=            All Category Section            =
===========================================-->


    <section class=" section">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>Pourquoi faire du covoiturage avec notre application ?</h2>
                    </div>
                    <div class="text-container">
                        <h3><img src="images/products/money.png" width="30px"> Vos trajets à petits prix</h3>
                        <p>Où que vous alliez, trouvez le trajet idéal parmi notre large choix de destinations à petits prix pour pouvoir profiter de votre festival.</p>
                        <h3><img src="images/products/trust.png" width="30px"> Voyagez en toute confiance</h3>
                        <p>Nous prenons le temps qu’il faut pour connaître nos membres. Nous vérifions les avis, les profils et les pièces d’identité.
                            Vous savez donc avec qui vous allez voyager pour réserver en toute confiance sur notre plateforme sécurisée.</p>
                        <h3><img src="images/products/clock.png" width="30px"> Recherchez, cliquez, réservez et profitez !</h3>
                        <p>Réserver un trajet devient encore plus simple ! Facile d'utilisation et dotée de technologies avancées, notre appli vous permet de réserver
                            un trajet à proximité en un rien de temps.</p>
                    </div>
                </div>
    </section>



    <!--====================================
=            Call to Action            =
=====================================-->

    <section class="call-to-action overly bg-3 section-sm">
        <!-- Container Start -->
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="col-md-8">
                    <div class="content-holder">
                        <h2>Aller à votre festival favoris tout en gagnant de l'argent</h2>
                        <ul class="list-inline mt-30">
                            <li class="list-inline-item"><a class="btn btn-main" href="Voiture">Voir les voitures</a></li>
                            <li class="list-inline-item"><a class="btn btn-secondary" href="Festivalier">Voir les festivaliers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
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
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $f_festival = $_POST['f_festival'];
    $f_ville = $_POST['f_ville'];
    $f_date = $_POST['f_date'];



    $_SESSION['f_festival'] = $f_festival;
    $_SESSION['f_ville'] = $f_ville;
    $_SESSION['f_date'] = $f_date;
    if ($f_festival != null)

        echo " <script>
                    window.location.href = 'Resfestivalier.php';
                </script>";

    $v_festival = $_POST['v_festival'];
    $v_nbplace = $_POST['v_nbplace'];
    $v_ville = $_POST['v_ville'];
    $v_depart = $_POST['v_depart'];



    $_SESSION['v_festival'] = $v_festival;
    $_SESSION['v_nbplace'] = $v_nbplace;
    $_SESSION['v_ville'] = $v_ville;
    $_SESSION['v_depart'] = $v_depart;

    if ($v_festival != null)

        echo " <script>
								window.location.href = 'Resvoiture.php';
							</script>";
}




?>