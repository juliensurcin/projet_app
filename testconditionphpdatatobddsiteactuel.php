<?php
   try
   {
      require("connectionbase.php");
   }
   catch(Exception $e)
   {
         die('erreur:'.$e->getMessage());
   }





if(isset($_POST['submit']))
   //là on s'est connecté à la base de données
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $password = md5($_POST['mdp']);
   $mdp2 = md5($_POST['mdp2']);
   
      if($mail == $mail2)
      {
         $reqmail = $bdd->prepare(" SELECT * FROM espacemembre WHERE mail = ? ");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) 
               {
                  if($password == $mdp2) 
                  {
   //on affecte des valeurs aux variables 
                     $req=$bdd->prepare('INSERT INTO membres(pseudo,mail,password) VALUES (?,?,?)');
                     // on previent notre base de données qu'on va mettre des valeurs dedans                  
                     $req->execute(array($pseudo, $mail, $password));
                     // la on met les valeurs dedans ( array c'est un tableau donc en fait on les met dans un tableau)
                     echo " Votre compte est crée, vous devee désormais vous connecter : </br><input type=\"button\" onclick=\"document.location.href='http://localhost:8888/site%20divercity/php_verif_conn_to_bdd.php';\" value=\"Se Connecter\">";   
                     $req->CloseCursor();
                  }
                  else 
                  {
                     $erreur = "Les mots de passe ne correspondent pas ! ";
                  }
               else
               {
                  $erreur  ="L'adresse mail est déja utilisée";
               }
      else
      {
         $erreur ="les mails ne correspondent pas ";
      }
else
{
   $erreur ="veuillez cliquer sur vous inscrire";
}
   require ("inscriptiondivercity.php");
   //je change le code donc ce message est là pour revenir au debut
   ?>


   <?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['forminscription']) && $_POST['forminscription'] == 'Je m\'inscris') {
   // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
   if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['mail2']) && !empty($_POST['mail2'])) && (isset($_POST['mdp']) && !empty($_POST['mdp'])) && (isset($_POST['mdp2']) && !empty($_POST['mdp2']))) {
   if ($_POST['mail'] != $_POST['mail2']) 
   {
      $erreur = 'Les adresses mail ne correspondent pas ! .';
   }
   // on teste les deux mots de passe
   elseif ($_POST['mdp'] != $_POST['mdp2']) {
      $erreur = 'Les  mots de passe ne correspondent pas ! .';
   }
   else {
      $bdd = new PDO('mysql:host=localhost;dbname=espacemembre', 'root', 'root');// cela revient au meme :) 


      // on recherche si ce login est déjà utilisé par un autre membre
      $sqlverif = 'SELECT * FROM membres WHERE mail="'.($_POST['mail']).'"';
      $req = mysql_query($sqlverif) or die('Erreur SQL !<br />'.$sqlverif.'<br />'.mysql_error());
      $data = mysql_fetch_array($req);

      if ($data[0] == 0) {
      $sql = 'INSERT INTO membres(pseudo,mail,password) VALUES("'.($_POSTT['pseudo']).'", "'.($_POST['mail']).'", "'.(md5($_POST['mdp'])).'")';
      mysql_query($sqlverif) or die('Erreur SQL !'.$sqlverif.'<br />'.mysql_error());

      session_start();
      $_SESSION['pseudo'] = $_POST['pseudo'];
      $_SESSION['mail'] = $_POST['mail'];
      header('Location: pagecapteursdivercity.php');
      echo "coucouca marche";
      exit();
      }
      else {
      $erreur = 'Un membre possède déjà ce login.';
      }
   }
   }
   else {
   $erreur = 'Au moins un des champs est vide.';
   }
}
require('inscriptiondivercity.php')
?>


