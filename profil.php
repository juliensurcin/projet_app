<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="programme_disposition.css" />
    <title> Modifier profil </title>
<body>
  <div align=center>
  <h1> Modifier son profil : </h1>
  <fieldset>
  <h2> Informations personnelles :</h2>
  <fieldset>
					<legend><h3>Votre photo</h3></legend>
					<label for="avatar">Modifier votre image de contact :
					</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko)<br />				
			</fieldset>			
    <p>
    <form action="modifierprofil.php" method="POST">
	<label for="ancmail"> Ancien mail :</label><br />
    <input type="mail" name="ancmail" placeholder="Ancien mail"/> </br>
	<label for="nvmail"> Nouveau mail :</label><br />
    <input type="mail" name="nvmail" placeholder="Nouveau mail"/> </br>
	<label for="ancmdp"> Ancien mot de passe :</label><br />
    <input type="text" name="ancmdp" placeholder="Ancien mot de passe"/> </br>
	<label for="mdp"> Nouveau mot de passe :</label><br />
    <input type="text" name="nvmdp" placeholder="Nouveau mot de passe"/> </br>
	<label for="nombredemaison">Nombre de maison:</label>
								<select name="Type Utilisateur">					
								<option value="choix1">1</option>
							    <option value="choix2">2</option>
							    <option value="choix3">3</option>
							    <option value="choix4">4</option>
							    <option value="choix1">6</option>
							    <option value="choix2">7</option>
							    <option value="choix3">8</option>
							    <option value="choix4">9</option>
							    </select>
   </fieldset>	
     <fieldset>
	     <h2> Informations domicile</h2>	
						<label for="nombredepersonne">Nombre de personne :</label> </br>
						<input type="text" placeholder="Combien êtes vous ?" name="nombredepersonne"></br>
						<label for="nombredepiece">Nombre de pièces :</label></br>
						<input type="text" placeholder="nombre de pieces" name="nombredepiece"></br>
					    <label for="superficie">Superficie :</label></br>
						<input type="text" placeholder="Superficie" id="superficie" name="superficie"></br>
						<label for="typedepicece">Type de pièce:</label></br>
						<input type="text" placeholder="Type de pièce" name="nombredepersonne"></br>
    </fieldset>
    <fieldset>
         <h2>Utilisateur(s)</h2>
					Êtes vous l\'utilisateur principal ? 
						<input type="radio" name="utilisateurprincipal" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
							<input type="radio" name="utilisateurprincipal" value="non" id="non" /> <label for="non">Non</label>
							<br> <br />
							<select name="typeutilisateur">
							    <option value="choix1">Utilisateur principal</option>
							    <option value="choix2">Utilisateur secondaire </option>
							    <option value="choix3">Utilisateur sécurisé</option>
							    <option value="choix4">Autre</option>
							</select>
				</fieldset></br>
				<input type="submit" name="formeinscription" value="Enregistrer les modifications" /></p>
	</form>
</body>
</html>				
	