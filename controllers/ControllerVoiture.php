<?php
require_once('views/View.php');
class ControllerVoiture
{
    //permet d'accerder aux fonctions (ref USERDAO)
    // private $_login = $_POST['login'];
    // private $_pwd = $_POST['mdp'];
    private $_annonceManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 1)
            throw new Exception('Page introuvable');

        else
            $this->users();
    }

    private function users()
    {
        $this->_annonceManager = new AnnonceManager;
        $users = $this->_annonceManager->getAnnonceVoiture();

        $this->_view = new View('Voiture');
        $this->_view->generate(array('users' => $users));
    }
}
