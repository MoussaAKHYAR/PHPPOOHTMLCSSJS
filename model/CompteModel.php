<?php
require_once  'Db.php';
require_once  '../entities/Compte.php';
class CompteModel extends Db{

  function __construct()
  {
    parent::__construct();
  }

  function addCompte(Compte $compte){

    $sql = "INSERT INTO compte VALUES('{$compte->getNumero()}','{$compte->getMat()}','{$compte->getId()}','{$compte->getRib()}','{$compte->getSolde()}','{$compte->getDateOuverture()}','{$compte->getRaisonSocial()}','{$compte->getSalaire()}','{$compte->getNomEmpl()}','{$compte->getTelEmpl()}','{$compte->getNumeroIdentification()}','{$compte->getAgios()}'{$compte->getFraisOuverture()}','{$compte->getRemuneration()}','{$compte->getDateDebut()}','{$compte->getDateFin()}','{$compte->getTypeCompte()}')";
  
    // si la connexion passe
    try {
        return $this->db->exec($sql);//on execute la requete
    }catch (PDOException $e) {
      $e->getMessage();
    }

  }

}
?> 