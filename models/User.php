<?php
//permet de récupérer les données de manière privé (sécurité)

class User
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_login;
    private $_pwd;

    //constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /*
    Hydratation
    met à jour les données après des vérifications supplementaires
    */

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method))
                $this->$method($value);
        }
    }

    // Les SETTERS
    public function setId($id)
    {
        $id = (int) $id;

        if ($id > 0)
            $this->_id = $id;
    }

    public function setNom($nom)
    {
        if (is_string($nom))
            $this->_nom = $nom;
    }

    public function setPrenom($prenom)
    {
        if (is_string($prenom))
            $this->_prenom = $prenom;
    }

    public function setLogin($login)
    {
        if (is_string($login))
            $this->_login = $login;
    }

    //quel vérif pour pwd ??
    public function setPwd($pwd)
    {
        $this->_pwd = $pwd;
    }

    //Les GETTERS
    public function id()
    {
        return $this->_id;
    }
    public function nom()
    {
        return $this->_nom;
    }
    public function prenom()
    {
        return $this->_prenom;
    }
    public function login()
    {
        return $this->_login;
    }
    public function pwd()
    {
        return $this->_pwd;
    }
}
