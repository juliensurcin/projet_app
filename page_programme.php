<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="programme_disposition.css"/>
        <title>Programme</title>
    </head>

    <header>
    <span class="span1">
    <form action="notification.php" method="POST">
     <input type="image" src="img/noti.png" value="Notifications"/> 
	</form></span>
	<span class="span2">
   <form action="profil.php" method="POST">
     <input type="image" src="img/profil.png" value="Modifier son profil"/>
	</form> </span>
	<span class="span3">
	<form action="conso.php" method="POST">
     <input type="image" src="img/conso.png" value="Consommation"/>
	</form></span>
    <span class="span4">
    <form action="params.php" method="POST">	
     <input type="image" src="img/button.png" value="Paramètres"/>
	</form></span>
    <span class="span5">
    <form action="page_deco.php" method="POST"> 
	 <input type="image" src="img/deco.png" value="Deconnexion"/>
	</form></span>
	<span class="span6">
	<form action="pagecapteursdivercity.php" method="POST">
	 <input type="image" src="img/capteur.png" value="*programme"/>
	</form></span>
    </header>

    <body>
    <br />
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

            
        <div align= center>
            <h3>Différents liens de navigation</h3>
            <ul>
                <li><a href="page1.html">Contrôle capteur</a></li>
                <li><a href="page2.html">Consommation du domicile</a></li>
                <li><a href="page3.html">Profil</a></li>
            </ul>
        </div>
        <?php 
         $date= date("d-m-Y");
         $heure= date("H:i");
         echo $date;
         ?>

         
    
    
    <!-- Le corps -->
    
    <div align=center>
    	<fieldset>
    	<form method="post" action="cibleclement.php" enctype="multipart/form-data">
    		<legend>
    			<h3>Mes Modes</h3>
    		</legend>
        <br />
        	
        		

        		<table>
        			<tr>
        				<td>
        					<label for="maison">Choisissez la maison: </label>
        				</td>

        				<td>
        					<select name="choix_maison">
        					<option value="Maison_principale">Maison principale</option>
							<option value="Maison secondaire">Maison secondaire</option>
							<option value="maison vac1">Maison de vacances 1</option>
							<option value="maison vac2">Maison de vacances 2</option>
							<option value="maison vac3">Maison de vacances 3</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							<label for="debut_periode">Début du programme: </label>
						</td>


						<td>
							
						
							<select name="cdj">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							</select>

							&nbsp

							<select name="cdm">
							<option value="janvier">janvier</option>
							<option value="fevrier">fevrier</option>
							<option value="mars">mars</option>
							<option value="avril">avril</option>
							<option value="mai">mai</option>
							<option value="juin">juin</option>
							<option value="juillet">juillet</option>
							<option value="août">août</option>
							<option value="septembre">septembre</option>
							<option value="octobre">octobre</option>
							<option value="novembre">novembre</option>
							<option value="decembre">decembre</option>
							</select>


						

						</td>
					</tr>
					<tr>
						<td>
							<label for="fin_periode">Fin programme:</label>
						</td>

						<td>
							<select name="cfj">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							</select>

							&nbsp

							<select name="cfm">
							<option value="janvier">janvier</option>
							<option value="fevrier">fevrier</option>
							<option value="mars">mars</option>
							<option value="avril">avril</option>
							<option value="mai">mai</option>
							<option value="juin">juin</option>
							<option value="juillet">juillet</option>
							<option value="août">août</option>
							<option value="septembre">septembre</option>
							<option value="octobre">octobre</option>
							<option value="novembre">novembre</option>
							<option value="decembre">decembre</option>
							</select>
						</td>


					<tr>
						<td>
							<label for="temperature_désirée">Température:</label>
						</td>

						<td>
						<input type="int" placeholder="température en degrés" name="temperature" required>
						</td>
					</tr>

					<tr>
						<td align="center">
							<input type="submit" name="valider_le_mode" value="Je valide ce mode">
						</td>
					</tr>


			</table>
		</form>
			
		</fieldset>
		<fieldset>
			<form method="post" action="cibleclement.php" enctype="multipart/form-data">
			<legend><h3>Programmer vos actionneurs</h3></legend>
				<table>
					<tr>
						<td>
							<label for="heure">Heure: </label>
						</td>
						<td>
							<select name="choix_heure">
							<option value="choix1">1</option>
							<option value="choix2">2</option>
							<option value="choix3">3</option>
							<option value="choix4">4</option>
							<option value="choix5">5</option>
							<option value="choix6">6</option>
							<option value="choix7">7</option>
							<option value="choix8">8</option>
							<option value="choix9">9</option>
							<option value="choix10">10</option>
							<option value="choix11">11</option>
							<option value="choix12">12</option>
							<option value="choix13">13</option>
							<option value="choix14">14</option>
							<option value="choix15">15</option>
							<option value="choix16">16</option>
							<option value="choix17">17</option>
							<option value="choix18">18</option>
							<option value="choix19">19</option>
							<option value="choix20">20</option>
							<option value="choix21">21</option>
							<option value="choix22">22</option>
							<option value="choix23">23</option>
							</select>
						</td>

						<td>
							<select name="choix_minute">
							<option value="choix1">0</option>
							<option value="choix2">5</option>
							<option value="choix3">10</option>	
							<option value="choix4">15</option>
							<option value="choix5">20</option>
							<option value="choix6">25</option>
							<option value="choix7">30</option>
							<option value="choix8">35</option>
							<option value="choix9">40</option>
							<option value="choix10">45</option>
							<option value="choix11">50</option>
							<option value="choix12">55</option>
							</select>
						</td>


					<tr>
						<td>
							<label for="etage">Niveau: </label>
						</td>
						<td>
							<select name="choix_niveau">
							<option value="choix1">sous-sol</option>
							<option value="choix2">rez-de-chaussée</option>
							<option value="choix3">étage 1</option>
							<option value="choix4">étage 2</option>
							<option value="choix5">grenier</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							<label for="piece">Pièce:</label>
						</td>

						<td>
							<select name="choix_pièce">
							<option value="choix1">salle de bain</option>
							<option value="choix2">toilette</option>
							<option value="choix3">cuisine</option>
							<option value="choix4">chambre 1</option>
							<option value="choix5">chambre 2</option>
							<option value="choix2">chambre3</option>
							<option value="choix3">salon</option>
							<option value="choix4">jardin</option>
							<option value="choix5">terrasse</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="température_prog">Température:</label>
						</td>
						<td>
							<input type="int" placeholder="température en degrés" name="temperature" required>

						</td>
					</tr>
					<tr>
						<td align="center">

							<input type="submit" name="valider_le_programme" value="Je valide ce programme" required>
						</td>
					</tr>

				</table>
		</form>
		</fieldset>





							    

        
    </div>
    
    <!-- Le pied de page -->
    <div align=center>
    <footer>
        <ul>
                <li><a href="page4.html">FAQ</a></li>
                <li><a href="page5.html">Aide</a></li>
                <li><a href="page6.html">Nous contacter</a></li>
        </ul>
    </footer> 
    </div>   


    
    
    </body>
</html>