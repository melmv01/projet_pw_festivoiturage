<?php
//permet de récupérer les données de manière privé (sécurité)

class Annonce
{
    private $_id;
    private $_titre;
    private $_festival;
    private $_depart;
    private $_nbplace;
    private $_ville;
    private $_description;
    private $_type;


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

    public function setTitre($titre)
    {
        if (is_string($titre))
            $this->_titre = $titre;
    }

    public function setFestival($festival)
    {
        if (is_string($festival))
            $this->_festival = $festival;
    }

    public function setDepart($depart)
    {
        // if (strtotime($depart) !== false)
        $this->_depart = $depart;
    }

    public function setNbplace($nbplace)
    {
        if (is_int($nbplace))
            $this->_nbplace = $nbplace;
    }
    public function setVille($ville)
    {
        if (is_string($ville))
            $this->_ville = $ville;
    }
    public function setDescription($description)
    {
        if (is_string($description))
            $this->_description = $description;
    }
    public function setType($type)
    {
        if (is_string($type))
            $this->_type = $type;
    }

    //Les GETTERS
    public function id()
    {
        return $this->_id;
    }
    public function titre()
    {
        return $this->_titre;
    }
    public function festival()
    {
        return $this->_festival;
    }
    public function depart()
    {
        return $this->_depart;
    }
    public function nbplace()
    {
        return $this->_nbplace;
    }
    public function ville()
    {
        return $this->_ville;
    }
    public function description()
    {
        return $this->_description;
    }
    public function type()
    {
        return $this->_type;
    }
}
