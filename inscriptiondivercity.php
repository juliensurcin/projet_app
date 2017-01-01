


<html>
   <link rel="stylesheet" href="programme_disposition.css">
   <head>
      <title>Formulaire d'inscription</title>
      <meta charset="utf-8">
   </head>
   <body>
<div align="center">
      <fieldset>
         <legend><h2>Inscription à Divercity</h2></legend>
         <br /><br />
         <form method="POST" action="php_data_to_bdd.php">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Entrez un Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="" required/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Entrez un Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="" required/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmez votre mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="" required/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Entrez un Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" required/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmez votre mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" required/>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p></p>
                     <p></br></p> <h5>Retour à <a href="formulaire_connexion.php">la page de connexion</h5></a></p>      

                  </td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" required />
                  </td>
               </tr>
            </table>
         </form>
         <?php
            if(isset($erreur)) 
            {
               echo '<font color="red">'.$erreur."</font>";
            }
         ?>
         <?php
            if(isset($ras))
            { 
               echo '<font color="green">'.$ras."</font>";
            }
         ?>
      </fieldset>
      </div>
   </body>
</html>