<?php

class Db{

  protected $db;// propriete ou attribut d'une class
  //c'est la méthode qui est appelée lorsque l'on instancie un objet
  public function __construct(){
    $this->db = $this->getConnexion();
    // donc ici on met la chaine de connexion dans la variable db
  }

  private function getConnexion(){
    //ici on a declare l'ensembles des parametres qu'on a besoin pour se connecter a notre bd
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banquepeuple";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // cette class PDO nous permet de connecter a la bd comme mysqli_connect
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false );

      } catch(PDOException $ex) {

          die('Error : '.$ex->getMessage());
          //la fonction die() nous permet d'arreter le scripte et renvoie une message d'erreur
      }

      return $conn;// on retoure la chanie de connexion

  }

}
?>
