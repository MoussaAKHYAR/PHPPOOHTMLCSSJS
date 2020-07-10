<!-- <?php

// require_once $_SERVER['DOCUMENT_ROOT'].'/mesprojets/TD3PHPPOO/model/DB.php';
// require_once $_SERVER['DOCUMENT_ROOT'].'/mesprojets/TD3PHPPOO/entities/Compte.php';

// class CompteModel extends Db
// {

//   public function __construct()
//   {
//     //pour faire appelle a notre constructeur parent qui se trouve dans la classe DB
//     parent::__construct();
//   }

//   //on donne a notre fonction comme parametre un objet
//   function addCompteEpargne(Compte $compte)
//   {
//     $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, frais_ouverture,date_ouverture,type_compte_id,client_id)
//             VALUES('".$compte->getNum_compte()."', '".$compte->getAgence_id()."', '".$compte->getCle_rip()."', '".$compte->getFrais_ouverture()."', '".$compte->getDate_ouverture()."', '".$compte->getType_compte_id()."', '".$compte->getClient_id()."')";

//     if($this->db != null){// si la connexion passe

//         return $this->db->exec($sql);//on execute la requete

//     }else{

//         return null;

//     }
// }

// function addCompteCourant(Compte $compte){//on donne a notre fonction comme prametre un objet
    
//     $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, agio,date_ouverture,type_compte_id,client_id)
//     VALUES('".$compte->getNum_compte()."', '".$compte->getAgence_id()."', '".$compte->getCle_rip()."', '".$compte->getAgio()."', '".$compte->getDate_ouverture()."', '".$compte->getType_compte_id()."', '".$compte->getClient_id()."')";

//     if($this->db != null){// si la connexion passe

//         return $this->db->exec($sql);//on execute la requete

//     }else{

//         return null;

//     }
// }

// function addCompteBloque(Compte $compte){//on donne a notre fonction comme prametre un objet
    
//     $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, frais_ouverture,date_ouverture,type_compte_id,client_id)
//             VALUES('".$compte->getNum_compte()."', '".$compte->getAgence_id()."', '".$compte->getCle_rip()."', '".$compte->getFrais_ouverture()."', '".$compte->getDate_ouverture()."', '".$compte->getType_compte_id()."', '".$compte->getClient_id()."')";

//     if($this->db != null){// si la connexion passe

//         return $this->db->exec($sql);//on execute la requete

//     }else{

//         return null;

//     }
// }



// }
?> -->