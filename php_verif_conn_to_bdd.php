<?php

$bdd = new PDO('mysql:host=localhost;dbname=espacemembre', 'root', 'root');// cela revient au meme :) 

if(isset($_POST['formconnexion'])) // si on a cliqué sur le bouton connexion
{
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = md5($_POST['mdpconnect']);

   if(!empty($mailconnect) AND !empty($mdpconnect)) //si on a bien rempli les champs mais de toutes façons avec le required dans le html ça nous oblige de tous les remplir mais mieux vaut 2 fois qu'une! 
   {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND password = ?");
      $requser->execute(array($mailconnect, $mdpconnect));// on vient executer la requette de la ligne précédente.
      $userexist = $requser->rowCount();// on crée une nouvelle variable pour compter le nombre de colonne pour que le mail et le mot de passe corresponde. 

      if($userexist == 1) 
      {
         session_start();
         header("Location: http://localhost:8888/site%20divercity/pagecapteursdivercity.php");//on le redirige vers le profil de la personne ! 
      } 
      else 
      {
         $erreur = "Mauvais mail ou mot de passe  :/ !";
      }
   } 
   else
    {
      $erreur = "Tous les champs doivent être remplis !";
   }
}

require 'formulaire_connexion.php';
?>
