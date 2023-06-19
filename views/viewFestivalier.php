<html lang="fr">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>FesstiVoiturage</title>

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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="Acceuil">Accueil</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-result bg-gray">
                        <h2>Résultat(s) de la recherche </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="product-grid-list">
                    <div class="row mt-30">
                        <?php

                        foreach ($users as $user) :
                            echo '<div class="col-lg-4 col-md-6">';
                            echo '<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
											<img class="card-img-top img-fluid" src="images/user.png" alt="Card image cap">
									</div>
									<div class="card-body">';
                            echo '<h4 class="card-title"><a href="single.html">' . $user->titre() . '</a></h4>';
                            echo  '<ul class="list-inline product-meta">';
                            echo '<li class="list-inline-item">';
                            echo '<a href="single.html"> 🎪' . $user->festival() . '</a> </li>';
                            echo '<li class="list-inline-item">';
                            echo '<a> 📅' . $user->depart() . '</a> </li> ';
                            echo '<li class="list-inline-item">';
                            echo '<a> 🚗' . $user->nbplace() . ' place(s) </a> </li> ';
                            echo '<li class="list-inline-item">';
                            echo '<a> 📍' . $user->ville() . '</a> </li> </ul> ';
                            echo '';
                            echo '<p class="card-text">' . $user->description() . '</p>';
                            echo  '</div>
						       </div>
					           </div>
							   </div>';
                        endforeach;

                        ?>
                        <div class="col-lg-4 col-md-6">
                        </div>
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