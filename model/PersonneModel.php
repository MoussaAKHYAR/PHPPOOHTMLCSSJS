<?php

require_once  'Db.php';
require_once  '../entities/Personne.php';

class PersonneModel extends Db
{
  public function __construct()
  {
    parent::__construct();
  }
  // Ajouter les fonctions du crud
  function addClientPhysique(Personne $personne){

    $sql = "INSERT INTO personne VALUES('$personne->getMatricule()','$personne->getCni()','$personne->getNom()','$personne->getPrenom()','$personne->getSexe()','$personne->getDateNaiss()','$personne->getTelephone()','$personne->getAdrPersonne()','$personne->getEmail()',null,null)";

    // si la connexion passe
    try {
        return $this->db->exec($sql);//on execute la requete
    }catch (PDOException $e) {
      $e->getMessage();
    }
    
  }
}
?>