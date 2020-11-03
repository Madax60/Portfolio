<?php 
include_once('./traitement/connexion_bdd.php');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM admin WHERE Id_admin = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['nouvnom']) AND !empty($_POST['nouvnom']) AND $_POST['nouvnom'] != $user['Nom_admin']) {
      $nouvnom = htmlspecialchars($_POST['nouvnom']);
      $reqnom = $bdd->prepare("SELECT * FROM admin WHERE Nom_admin = ?");
      $reqnom->execute(array($nouvnom));
      $pseudoexist = $reqnom->rowCount();
      if ($pseudoexist == 0) {
         $insertpseudo = $bdd->prepare("UPDATE admin SET Nom_admin = ? WHERE Id_admin = ?");
         $insertpseudo->execute(array($nouvnom, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      }else{
         $msg = "Ce pseudo existe déjà !";
      }
         
   }
   
   if(isset($_POST['nouvmdp1']) AND !empty($_POST['nouvmdp1']) AND isset($_POST['nouvmdp2']) AND !empty($_POST['nouvmdp2'])) {
      $mdp1 = htmlspecialchars($_POST['nouvmdp1']);
      $mdp2 = htmlspecialchars($_POST['nouvmdp1']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE admin SET Mdp_admin = ? WHERE Id_admin = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }

   if (isset($_POST['nouvmdp1']) AND empty($_POST['nouvmdp2']) OR isset($_POST['nouvmdp2']) AND empty($_POST['nouvmdp1'])) {
      $msg = "Veuillez remplir les deux champs !";
   }
}
?>