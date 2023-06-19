<?php

session_start();


require_once('views/View.php');

class ControllerLogin
{
    //permet d'accerder aux fonctions (ref USERDAO)
    private $_login = '';
    private $_pwd = '';
    private $_userManager;
    private $_view;



    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 3)
            throw new Exception('Page introuvable');

        else
            $this->_view = new View('Login');
        $this->_view->generate(array());

        $this->users();
    }

    private function users()
    {




        //verifie que les variables sessions sont définie
        if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
            // var_dump($_COOKIE);
            // var_dump($_SESSION['login']);
            // var_dump($_SESSION['pwd']);




            $this->_login = $_SESSION['login'];
            $this->_pwd = $_SESSION['pwd'];

            $this->_userManager = new UserManager;
            if ($this->_userManager->verifyUser($this->_login, $this->_pwd)) {

                echo " <script>
                    window.location.href = 'Welcome';
                </script>";
            }


            session_destroy();
        }
    }
}
