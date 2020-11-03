<?php 
session_start();
include_once('../traitement/connexion_bdd.php');

if(isset($_POST['formconnect'])) 
{
   $nameconnect = htmlspecialchars($_POST['nameconnect']);
   $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
   if(!empty($nameconnect) AND !empty($mdpconnect)) 
   {
      $requser = $bdd->prepare("SELECT * FROM admin WHERE nom_admin = ? AND mdp_admin = ? ");
      $requser->execute(array($nameconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if ($userexist == 1) 
      {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id_admin'];
         $_SESSION['nom'] = $userinfo['nom_admin'];
         header("Location: backoffice.php?id=".$_SESSION['id']);

      }
         else
         {
            $erreur = "Mauvais mail ou mauvais mot de passe";
         }
   }
   else 
   {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>