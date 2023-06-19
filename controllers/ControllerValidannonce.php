<?php

session_start();


require_once('views/View.php');

class ControllerValidannonce
{


    //permet d'accerder aux fonctions (ref USERDAO)

    private $_view;



    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 3)
            throw new Exception('Page introuvable');

        else
            $this->_view = new View('Validannonce');
        $this->_view->generate(array());

        // $this->users();
    }
}
