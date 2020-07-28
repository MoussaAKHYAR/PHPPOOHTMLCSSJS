<?php
require_once "../entities/Compte.php";
require_once "../entities/Entreprise.php";
require_once "../entities/Personne.php";
require_once "../entities/TypeCompte.php";
require_once "../model/PersonneModel.php";
require_once "../model/CompteModel.php";
require_once "../model/Db.php";

extract($_POST);

if ($choix_client == 'nouveau') {
  if ($choix_type_client == 'physique') {
    if ($choix_compte == 'simple') {
      $client = new Personne();//ici on cree un objet 
      $clientdb = new PersonneModel();// l'objet $clientdb c pour acceder au methode qui se trouve class 

      $client->setMatricule(codeAleatoire(8));
      $client->setCin($cni);
      $client->setNom($nom);
      $client->setPrenom($prenom);
      $client->setSexe($sexe);
      $client->setDateNaiss($dateNaiss);
      $client->setTelephone($telephone);
      $client->setAdrPersonne($adrPersonne);
      $client->setEmail($email);

     // $ok = $clientdb->addClientPhysique($client);
     $ok = 1;
      if ($ok == 1) {
        $compte = new Compte();
        $comptedb = new CompteModel();

        $compte->setNumero(codeAleatoire(8));
        $compte->setMat($client->getMatricule());
        $compte->setId(0);
        $compte->setRib(2);
        $compte->setSolde(0);
        $dateOuverture = date("Y-m-d");
        $compte->setDateOuverture($dateOuverture);
        $compte->setRaisonSocial(null);
        $compte->setSalaire(0);
        $compte->setNomEmpl(null);
        $compte->setTelEmpl(null);
        $compte->setNumeroIdentification(null);
        $compte->setAgios(0);
        $compte->setFraisOuverture(2500);
        $compte->setRemuneration(1000);
        $compte->setDateDebut(null);
        $compte->setDateFin(null);
        $compte->setTypeCompte(2);

        $ok2 = $comptedb->addCompte($compte);
        echo $compte->getNomEmpl();

         var_dump($ok2);

      }
   
     // var_dump($ok);

      //$adrPersonne = 1;
      //header("location:responsable?ok=$ok2");

    }elseif($choix_compte == 'courant'){
      //$adrPersonne = 1;
      
      header("location:responsable?ok=$ok2");
    }else{
      //$adrPersonne = 2;
      
      header("location:responsable?ok=$ok2");
    }

  }else{
    if ($choix_compte == 'simple') {
      //$adrEntreprise = 1;
      
      header("location:responsable?ok=$ok2");

    }else{
      //$adrEntreprise = 1;
      
      header("location:responsable?ok=$ok2");
    }
  }

}

// $entreprise = new Entreprise();
// $entreprise->setNom($nom);
// $entreprise->setTel($telephone);
// $entrepriseModel = new EntrepriseModel();

// $entrepriseModel->addClientEntrprise($entreprise);

function codeAleatoire($car)
{
  $string = "";
  $chaine = "2643789ABDCEFGHJKMNPRTUVW";
  srand((double)microtime()*1000000);
  for($i=0; $i<$car; $i++)
  {
      $string .= $chaine[rand()%strlen($chaine)];
  }
  return $string;
}

?>