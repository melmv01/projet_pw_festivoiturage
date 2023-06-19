<?php


abstract class Model
{
    private static $_bdd;

    //instancie la connexion à la BDD
    private static function setBdd()
    {
        self::$_bdd = new PDO(
            'mysql:host=localhost;dbname=pw_tp3;charset=utf8',
            'root',
            ''
        );
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //récupère la connexion à la bdd
    protected function getBdd()
    {
        if (self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }


    //renvoie un array contenant toutes les voitures de la bdd
    protected function getVoiture($table, $obj)
    {
        $var = [];
        $type = 'voiture';
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table . ' WHERE type = :type');
        $req->bindParam(':type', $type);

        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    //renvoie un array contenant tous les festivaliers de la bdd
    protected function getFestivalier($table, $obj)
    {
        $var = [];
        $type = 'festivalier';
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table . ' WHERE type = :type');
        $req->bindParam(':type', $type);

        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    //renvoie un array contenant tous les éléments de la bdd
    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table . ' ORDER BY id desc'); //$ajouté
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getByCritère($table, $obj, $critère)
    {
        $var = [];
        $festival = '';
        $depart = '';
        $ville = '';
        $type = 'festivalier';

        foreach ($critère as $key => $value) {
            if ($key == 'festival')
                $festival = $value;
            if ($key == 'depart')
                $depart = $value;
            if ($key == 'ville')
                $ville = $value;
        }
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table . ' WHERE festival = :festival
         AND depart = :depart AND ville = :ville AND type = :type');

        $req->bindParam(':festival', $festival);
        $req->bindParam(':depart', $depart);
        $req->bindParam(':ville', $ville);
        $req->bindParam(':type', $type);


        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getByCritèreVehi($table, $obj, $critère)
    {
        $var = [];
        $festival = '';
        $depart = '';
        $ville = '';
        $nbplace = 0;
        $type = 'voiture';

        foreach ($critère as $key => $value) {
            if ($key == 'festival')
                $festival = $value;
            if ($key == 'depart')
                $depart = $value;
            if ($key == 'ville')
                $ville = $value;
            if ($key == 'nbplace')
                $nbplace = $value;
        }
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table . ' WHERE festival = :festival
         AND depart = :depart AND ville = :ville AND nbplace = :nbplace AND type = :type');

        $req->bindParam(':festival', $festival);
        $req->bindParam(':depart', $depart);
        $req->bindParam(':ville', $ville);
        $req->bindParam(':nbplace', $nbplace);

        $req->bindParam(':type', $type);


        $req->execute();

        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }



    //renvoie vrai si un utilisateur exite dans la bdd faux sinon
    protected function getOne($table, $login, $pwd)
    {
        $req = $this->getBdd()->prepare('SELECT * FROM ' . $table . ' WHERE login = :valeur1 
                AND pwd = :valeur2');

        $req->bindParam(':valeur1', $login);
        $req->bindParam(':valeur2', $pwd);

        $req->execute();

        $tuple = $req->fetch();
        if ($tuple)
            return true;

        else
            return false;
    }

    //crée un utilisateur
    protected function createOneUser($table, $data)
    {

        $user = new User($data);
        $id = $user->id();
        $nom =  $user->nom();
        $prenom =  $user->prenom();
        $login =  $user->login();
        $pwd =  $user->pwd();

        $req = $this->getBdd()->prepare('INSERT INTO ' . $table . ' VALUES (:id, :nom, :prenom, :login, :pwd)');
        $req->bindParam(':id', $id);
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':login', $login);
        $req->bindParam(':pwd', $pwd);

        $req->execute();
    }
    //crée une annonce 
    protected function createOneAnnonce($table, $data)
    {
        $annonce = new Annonce($data);
        $id = $annonce->id();
        $titre =  $annonce->titre();
        $festival =  $annonce->festival();
        $depart =  $annonce->depart();
        $nbplace =  $annonce->nbplace();
        $ville =  $annonce->ville();;
        $description =  $annonce->description();
        $type =  $annonce->type();

        $req = $this->getBdd()->prepare('INSERT INTO ' . $table . ' VALUES (:id, :titre, :festival, :depart, :nbplace,
        :ville, :description, :type)');
        $req->bindParam(':id', $id);
        $req->bindParam(':titre', $titre);
        $req->bindParam(':festival', $festival);
        $req->bindParam(':depart', $depart);
        $req->bindParam(':nbplace', $nbplace);
        $req->bindParam(':ville', $ville);
        $req->bindParam(':description', $description);
        $req->bindParam(':type', $type);

        $req->execute();
    }


    // compte le nombre du tuple pour attribuer un id encore indéfini
    protected function countAll($table)
    {
        $req = $this->getBdd()->prepare('SELECT MAX(id) AS maximum FROM ' . $table);
        $req->execute();
        $row = $req->fetch();
        $total = $row['maximum'] + 1;
        return $total;
    }
}
