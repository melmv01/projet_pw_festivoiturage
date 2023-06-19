<?php

session_start();


require_once('views/View.php');

class ControllerResvoiture
{
    //permet d'accerder aux fonctions (ref USERDAO)
    private $_festival = "";
    private $_nbplace = '';
    private $_ville = '';
    private $_depart = '';


    private $_annonceManager;
    private $_view;



    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 1)
            throw new Exception('Page introuvable');

        else
            //     $this->_view = new View('Annonce');
            // $this->_view->generate(array());

            $this->users();
    }

    private function users()
    {



        //verifie que les variables sessions sont définie
        if (isset($_SESSION['v_festival']) && isset($_SESSION['v_nbplace']) && isset($_SESSION['v_ville']) && isset($_SESSION['v_depart'])) {


            // 

            $this->_festival = $_SESSION['v_festival'];
            $this->_nbplace = $_SESSION['v_nbplace'];
            $this->_depart = $_SESSION['v_depart'];
            $this->_ville = $_SESSION['v_ville'];


            $this->_annonceManager = new AnnonceManager;

            $infoAnnonce = [
                "festival" => $this->_festival,
                "nbplace" => $this->_nbplace,
                "depart" => $this->_depart,
                "ville" => $this->_ville
            ];

            $users = $this->_annonceManager->getAnnonceByCritèreV($infoAnnonce);

            $this->_view = new View('Voiture');
            $this->_view->generate(array('users' => $users));
        }
    }
}
