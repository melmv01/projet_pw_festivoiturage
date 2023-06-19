<?php




require_once('views/View.php');

class ControllerWelcome
{
    private $_view;



    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 3)
            throw new Exception('Page introuvable');

        else
            $this->_view = new View('Welcome');
        $this->_view->generate(array());
    }
}
