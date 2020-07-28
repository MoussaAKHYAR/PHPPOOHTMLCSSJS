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

  function addClientEntrprise(Entreprise $entreprise)
  {
    $sql = $this->db->prepare("INSERT INTO entreprise (nom,tel,email,login,password,adrEntreprise) VALUES(:nom,:tel,:email,:login,:password,:adrEntreprise)");

    $sql->bindParam(':nom',$nom);
    $sql->bindParam(':tel',$tel);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':login',$login);
    $sql->bindParam(':password',$password);
    $sql->bindParam(':adrEntreprise',$adrEntreprise);

    // $sql->execute(['nom' => $nom , 'tel' => $tel, 'email' => $email ,'login' =>$login , 'password' => $password,'adrEntreprise' =>$adrEntreprise]);
  }
}

?>