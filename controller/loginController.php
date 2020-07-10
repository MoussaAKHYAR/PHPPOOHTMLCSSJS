<?php
require_once '../entities/Personne.php';
require_once '../model/Db.php';
require_once '../model/PersonneModel.php';

class LoginController{

  public function seConnecter($post)
  {
    extract($post);
    $personneModel = new PersonneModel();

  
    $ok  = $personneModel->login($nomUtilisateur,$password);
    // var_dump($ok);
    // die;
    
    if ($ok != null) {
      // foreach($ok as $k){
      //   var_dump($k);
      //   echo "<br/>";
      // }
      session_start();
      $_SESSION['matricule'] = $ok["matricule"];
      $_SESSION['nom'] = $ok['nom'];
      $_SESSION['prenom'] = $ok['prenom'];
      // echo $ok;
      echo $_SESSION['matricule'] ;
      //header("location:responsable");
    }
    
    //header("location:responsable");

    // var_dump($ok);
    // die();

    // if ($ok == 1) {
    //   # co
    // }
  }
}

if ((isset($_POST['nomUtilisateur']) && isset($_POST['password']))) {
  $controller = new LoginController();

  $controller->seConnecter($_POST);
}

?>