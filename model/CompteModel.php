<?php
require_once  'Db.php';
require_once  '../entities/Compte.php';
class CompteModel extends Db{

  function __construct()
  {
    parent::__construct();
  }

  function addCompte(Compte $compte){

    $sql = "INSERT INTO compte   VALUES('{$compte->getNumero()}','{$compte->getMat()}','{$compte->getId()}','{$compte->getRib()}','{$compte->getSolde()}','{$compte->getDateOuverture()}','{$compte->getRaisonSocial()}','{$compte->getSalaire()}','{$compte->getNomEmpl()}','{$compte->getTelEmpl()}','{$compte->getNumeroIdentification()}','{$compte->getAgios()}','{$compte->getFraisOuverture()}','{$compte->getRemuneration()}','{$compte->getDateDebut()}','{$compte->getDateFin()}','{$compte->getTypeCompte()}')";
  
    // si la connexion passe
    try {
        return $this->db->exec($sql);//on execute la requete
    }catch (PDOException $e) {
      $e->getMessage();
    }

  }
  function addCompteSimple(Compte $compte)
  {
    // INSERT INTO `compte`(`numero`, `mat`, `rib`, `dateOuverture`, `fraisOuverture`, `remuneration`,`typeCompte`) VALUES ("147852","14422",12,"2018-02-16",3000,2000,2)

    $sql = "INSERT INTO compte (numero, mat, rib,dateOuverture, fraisOuverture,remuneration,typeCompte) VALUES('{$compte->getNumero()}',
    '{$compte->getMat()}',
    {$compte->getRib()},
    '{$compte->getDateOuverture()}',
    '{$compte->getFraisOuverture()}',
    '{$compte->getRemuneration()}',
    {$compte->getTypeCompte()})";

    // si la connexion passe
    // try {
      return $this->db->exec($sql);//on execute la requete
    // }catch (PDOException $e) {
    //   $e->getMessage();
    // }

  }

  function ajouterCompte()
  {
    $sql = $this->db->prepare("INSERT INTO compte (numero, mat, rib, dateOuverture, fraisOuverture,remuneration,typeCompte) VALUES(:numero,:mat,:rib,:dateOuverture,:fraisOuverture,:remuneration,:typeCompte)");

    $sql->bindParam(':numero',$numero);
    $sql->bindParam(':tel',$tel);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':login',$login);
    $sql->bindParam(':password',$password);
    $sql->bindParam(':adrEntreprise',$adrEntreprise);

    try {
      return $this->db->exec($sql);//on execute la requete
    }catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  

}
?> 