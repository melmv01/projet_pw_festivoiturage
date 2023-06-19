<?php

session_start();


require_once('views/View.php');

class ControllerAnnonce
{
    //permet d'accerder aux fonctions (ref USERDAO)
    private $_id = 0;
    private $_titre = '';
    private $_festival = '';
    private $_depart = '';
    private $_nbplace = '';
    private $_ville = '';
    private $_description = '';
    private $_type = '';

    private $_annonceManager;
    private $_view;



    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 1)
            throw new Exception('Page introuvable');

        else
            $this->_view = new View('Annonce');
        $this->_view->generate(array());

        $this->users();
    }

    private function users()
    {



        //verifie que les variables sessions sont définie
        if (isset($_SESSION['titre']) && isset($_SESSION['festival'])) { //rajouter auxtre isset

            $this->_titre = ucfirst($_SESSION['titre']);
            $this->_festival = ucfirst(normalizer_normalize($_SESSION['festival']));
            $this->_depart = $_SESSION['depart'];
            $this->_nbplace = $_SESSION['nbplace'];
            $this->_ville = ucfirst(normalizer_normalize($_SESSION['ville']));
            $this->_description = ucfirst($_SESSION['description']);
            $this->_type = $_SESSION['type'];



            $this->_annonceManager = new AnnonceManager;

            $this->_id = $this->_annonceManager->getNumber();

            $infoAnnonce = [
                "id" => $this->_id,
                "titre" => $this->_titre,
                "festival" => $this->_festival,
                "depart" => $this->_depart,
                "nbplace" => $this->_nbplace,
                "ville" => $this->_ville,
                "description" => $this->_description,
                "type" => $this->_type
            ];
            // $user = new User($infoUser);



            $this->_annonceManager->createAnnonce($infoAnnonce);

            unset($_SESSION['titre']);
            unset($_SESSION['festival']);
            unset($_SESSION['depart']);
            unset($_SESSION['nbplace']);
            unset($_SESSION['ville']);
            unset($_SESSION['description']);
            unset($_SESSION['type']);

            echo " <script>
                            window.location.href = 'Validannonce.php';
                        </script>";
        }
    }
}
