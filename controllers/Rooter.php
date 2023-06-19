<?php
require_once('views/View.php');
class Rooter
{
    private $_ctrl;
    private $_view;

    //gestion selon action de l'utilisateur
    public function routeReq()
    {
        try {
            /*
            fonction permettant de charger auto les classes
            ici du dossier 'models'
            */
            spl_autoload_register(function ($class) {
                require_once('models/' . $class . '.php');
            });
            $url = '';

            //controlleur inclus selon action utilisateur
            if (isset($_GET['url'])) {
                $url = explode('/', filter_var(
                    $_GET['url'],
                    FILTER_SANITIZE_URL
                ));

                $filename = ucfirst(strtolower($url[0]));
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $controller = str_replace("." . $extension, "", $filename);
                $controllerClass = "Controller" . $controller;

                $controllerFile = "controllers/" . $controllerClass . ".php";

                if (file_exists($controllerFile)) {
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                }

                // créer une double page??
                // throw new Exception('Page Introuvable ref rooter');
            } else {
                require_once('controllers/ControllerAcceuil.php');
                $this->_ctrl = new ControllerAcceuil($url);
            }
            //gestion des erreurs
        } catch (Exception $e) {
            $errorMsg = $e->getMessage();
            $this->_view = new View('Error404');
            $this->_view->generate(array('errorMsg' => $errorMsg));
        }
    }
}
