<?php
class AnnonceManager extends Model
{
    public function verifyUser($login, $pwd)
    {
        return $this->getOne('compte', $login, $pwd);
    }

    public function getAnnonce()
    {

        return $this->getAll('annonce', 'Annonce');
    }
    public function getAnnonceVoiture()
    {

        return $this->getVoiture('annonce', 'Annonce');
    }
    public function getAnnonceFestivalier()
    {

        return $this->getFestivalier('annonce', 'Annonce');
    }

    public function getNumber()
    {

        return $this->countAll('annonce');
    }
    public function createAnnonce($annonce)
    {
        return $this->createOneAnnonce('annonce', $annonce);
    }
    public function getAnnonceByCritère($critère)
    {
        return $this->getByCritère('annonce', 'Annonce', $critère);
    }
    public function getAnnonceByCritèreV($critère)
    {
        return $this->getByCritèreVehi('annonce', 'Annonce', $critère);
    }
}
