<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function connBdd() 
{
  $bdd = new PDO('mysql:host=localhost;dbname=espacemembre;charset=utf8', 'root', 'root');
}

// Renvoie la liste de tous les billets, triés par identifiant décroissant
// Renvoie les informations sur un billet
function insertionbdd($pseudo, $mail, $password) 
{
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mail = htmlspecialchars($_POST['mail']);
  $mail2 = htmlspecialchars($_POST['mail2']);
  $password = md5($_POST['mdp']);
  $mdp2 = md5($_POST['mdp2']);

  $bdd = connBdd();
  $reqinscr = $bdd->prepare('INSERT INTO membres(pseudo,mail,password) VALUES (?,?,?)');
  $reqinscr->execute(array($pseudo, $mail, $password));
  
 echo " Votre compte est créé, vous devez désormais vous connecter : </br><input type=\"button\" onclick=\"document.location.href='http://localhost:8888/site%20divercity/php_verif_conn_to_bdd.php';\" value=\"Se Connecter\">";
 }
require"testinscrtobdd.php";
 ?>
