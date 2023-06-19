<?php
// session_start();


require_once('views/View.php');

class ControllerRegister
{
    //permet d'accerder aux fonctions (ref USERDAO)
    private $_login = '';
    private $_pwd = '';
    private $_nom = '';
    private $_prenom = '';
    private $_id = 0;
    private $user;
    private $_userManager;
    private $_view;



    public function __construct($url)
    {
        if (isset($url) && count((array)$url) > 3)
            throw new Exception('Page introuvable');

        else
            $this->_view = new View('Register');
        $this->_view->generate(array());
        $this->users();
    }

    private function users()
    {

        if (isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            $this->_userManager = new UserManager;


            $this->_login = $_SESSION['login'];
            $this->_pwd = $_SESSION['pwd'];
            $this->_nom = $_SESSION['nom'];
            $this->_prenom = $_SESSION['prenom'];
            $this->_id = $this->_userManager->getNumber();

            $infoUser = [
                "id" => $this->_id,
                "nom" => $this->_nom,
                "prenom" => $this->_prenom,
                "login" => $this->_login,
                "pwd" => $this->_pwd
            ];

            $this->_userManager->createUser($infoUser);

            echo " <script>
                    window.location.href = 'Welcome.php';
                </script>";
        }
    }
}
