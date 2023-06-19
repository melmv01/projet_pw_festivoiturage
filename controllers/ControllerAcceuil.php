<?php
// session_start();


require_once('views/View.php');

class ControllerAcceuil
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
            $this->_view = new View('Acceuil');
        $this->_view->generate(array());
        $this->users();
    }

    private function users()
    {
        //verifie que les variables sessions sont définie
        if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->_login = $_SESSION['login'];
                $this->_pwd = $_SESSION['pwd'];

                echo $this->_login;
                echo $this->_pwd;
            }
            $this->_userManager = new UserManager;

            if ($this->_userManager->verifyUser($this->_login, $this->_pwd)) {

                $users = $this->_userManager->getUsers();

                $this->_view = new View('Table');
                $this->_view->generate(array('users' => $users));
                // header("Refresh:0");
            } else {

                $this->_view = new View('Acceuil');
                $this->_view->generate(array());
            }


            // session_destroy();
        }
    }
}
