<?php
session_start();


require_once('views/View.php');

class ControllerDeconnexion
{
    //permet d'accerder aux fonctions (ref USERDAO)
    private $_login = '';
    private $_pwd = '';
    private $_userManager;
    private $_view;



    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 1)
            throw new Exception('Page introuvable');

        else
            session_destroy();
        $this->_view = new View('Acceuil');
        $this->_view->generate(array());
    }
}
