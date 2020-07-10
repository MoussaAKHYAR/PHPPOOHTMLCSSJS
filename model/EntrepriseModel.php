<?php

require_once  'Db.php';
require_once  '../entities/Entreprise.php';

class EntrepriseModel extends Db{

  public function __construct()
  {
    parent:: __construct();
  }

  // function addClientEntreprise(Entreprise $entreprise){
  //   $sql = "INSERT INTO entreprise VALUES(NULL,'$entreprise->nomE','$telephone','$email','$login','$password','$adrEntreprise')";
  
  //   $conn = getConnexion();
  
  //   $conn->exec($sql);
  
  //   return $conn->lastInsertId();
  // }
}

?>