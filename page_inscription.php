<html>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styledivercity.css" />
	<body>
		<header><a href="page_de_inscription_rapide.php"><img src="logo.png" class="logodivercity" alt="divercity" width="80"></a>
		</header>
		<div align=center> 
			<?php


			
				echo '<h1>Modifications des donnés personnelles</h1>';

				echo '<form method="post" action="database.php" enctype="multipart/form-data">
			<fieldset>
				<legend><h2>Informations Personnelles</h2></legend>


				<fieldset>


					<legend><h3>Identifiant</h3></legend>
 
					<table>


						<tr>
							<td>
								<label for="nom">Votre Nom :</label>
							</td>
							<td>
								<input type="text" placeholder="Votre Nom" name="nom">
							</td>
						</tr>


						<tr>
							<td>
								<label for="prenom">Votre Prénom :</label>
							</td>
							<td>
								<input type="text" placeholder="Votre Prénom " name="prenom">
							</td>
						</tr>
					
						<tr>
							<td>
								<label for="mail">Votre Adresse Mail:</label>
							</td>
							<td>
								<input type="text" placeholder="Votre Adresse Mail" name="mail">
							</td>
						</tr>


						<tr>
							<td>
								<label for="motdepasse">Votre Mot de Passe:</label>
							</td>
							<td>
								<input type="text" placeholder="Votre Mot de Passe" name="motdepasse">
							</td>
						</tr>


						<tr>
							<td>
								<label for="confirmermotdepasse">Confirmez votre mot de passe:</label>
							</td>
							<td>
								<input type="text" placeholder="Confirmer votre mdp" name="confirmermotdepasse">
							</td>
						</tr>


						<tr>
							<td>
								<label for="datedenaissance">Votre date de naissance:</label>
							</td>
							<td>
								<input type="text" placeholder="Votre date de naissance" name="datedenaissance">
							</td>
						</tr>
						
						<tr>
							<td>
								<label for="nombredemaison">Nombre de maison:</label>
							</td>


							<td>
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
							</td>
						</tr>




					
					</table>
					
					
				</fieldset><br> <br />


				<fieldset>
						<table>
							<tr>
								<td>
									<label for="nombredepersonne">Nombre de personne :</label>
								</td>
								<td>
								<input type="text" placeholder="Combien êtes vous" name="nombredepersonne">
								</td>
							</tr>


							<tr>
								<td>
									<label for="nombredepiece">Nombre de pièces :</label>
								</td>
								<td>
								<input type="text" placeholder="nombre de pieces" name="nombredepiece">
								</td>
							</tr>


							<tr>
								<td>
									<label for="superficie">Superficie :</label>
								</td>
								<td>
								<input type="text" placeholder="superficie" id="superficie" name="superficie">
								</td>
							</tr>




							<tr>
								<td>
									<label for="typedepicece">Type de pièce:</label>
								</td>
								<td>
								<input type="text" placeholder="Type de pièce" name="nombredepersonne">
								</td>
							</tr>




						</table>


					<legend><h3>Informations Domicile(s)</h3></legend>
					


					
					




				</fieldset><br> <br />


				<fieldset>


					<legend><h3>Utilisateur(s)</h3></legend>


					Êtes vous l\'utilisateur principal ? 
						<input type="radio" name="utilisateurprincipal" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
							<input type="radio" name="utilisateurprincipal" value="non" id="non" /> <label for="non">Non</label>


							<br> <br />
					
							<select name="typeutilisateur">


							    <option value="choix1">Utilisateur principal</option>
							    <option value="choix2">Utilisateur secondaire </option>
							    <option value="choix3">Utilisateur sécurisé</option>
							    <option value="choix4">etc</option>
							</select>




				</fieldset><br> <br />




				<fieldset>


					<legend><h3>Profil sur Divercity</h3></legend>
					<label for="avatar">Choisissez votre image de contact :
					</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko<br />				
			</fieldset><br> <br />				
				<p><input type="submit" name="formeinscription" value="Inscription" /></p>
					</form>
				</div>
				</body>
				</html>';
			?>
		</div>
	</body>
</html>
