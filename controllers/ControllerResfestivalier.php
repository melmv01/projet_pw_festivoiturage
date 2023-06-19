<?php

session_start();


require_once('views/View.php');

class ControllerResfestivalier
{
    //permet d'accerder aux fonctions (ref USERDAO)
    private $_festival = "";
    private $_ville = '';
    private $_date = '';


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
        if (isset($_SESSION['f_festival']) && isset($_SESSION['f_ville']) && isset($_SESSION['f_date'])) {


            // 

            $this->_festival = $_SESSION['f_festival'];
            $this->_date = $_SESSION['f_date'];
            $this->_ville = $_SESSION['f_ville'];


            $this->_annonceManager = new AnnonceManager;

            $infoAnnonce = [
                "festival" => $this->_festival,
                "depart" => $this->_date,
                "ville" => $this->_ville
            ];

            $users = $this->_annonceManager->getAnnonceByCritère($infoAnnonce);
            $this->_view = new View('Festivalier');
            $this->_view->generate(array('users' => $users));
        }
    }
}
