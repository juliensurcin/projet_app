<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="programme_disposition.css" />
<form action="pagecapteursdivercity.php" method="POST">
<?php 
$date  = date("d-n-Y");
$heure = date("H:i");
print("Vous vous êtes dernièrement connecté le $date à $heure");
?>
    <p>
	  <label for="Pieces">Choisir la piece :</label><br />
       <select name="Pieces" id="pieces">
           <option value="Cuisine">Cuisine</option>
           <option value="Salon">Salon</option>
           <option value="Salle de bain 1">Salle de bain 1</option>
           <option value="Salle de bain 2">Salle de bain 2</option>
           <option value="Chambre parentale">Chambre parentale</option>
           <option value="Chambre 2">Chambre 2</option>
           <option value="Chambre 3">Chambre 3</option>
           <option value="Hall">Hall</option>
		   <input type="submit" value="Choisir"/>
       </select>
    </form>
   <form action="notification.php" method="POST">
     <input type="image" src="img/noti.png" value="Notifications"/> 
	</form>
   <form action="profil.php" method="POST">
     <input type="image" src="img/profil.png" value="Modifier son profil"/>
	</form> 
	<form action="conso.php" method="POST">
     <input type="image" src="img/conso.png" value="Consommation"/>
	</form>
    <form action="params.php" method="POST">	
     <input type="image" src="img/button.png" value="Paramètres"/>
	</form>
    <form action="page_deco.php" method="POST"> 
	 <input type="image" src="img/deco.png" value="Deconnexion"/>
	</form>
	<form action="page_programme.php" method="POST"> 
	 <input type="image" src="img/programme.png" value="Programmer ses capteurs"/>
	 </form>
        <p class="camera"> Caméra de surveillance:
	    </br> <video src="ccu.mp4" controls width="300" height="150" autoplay loop ></video>
		</p>		
<body>		
<p>		
	  <div class='fen1'><form action="donneescapteurs.php" method="POST">
	    <label for "Température"> Température :</label></br>
	    <input type="number" name="Température" min="18" max="30" step="0.5"> °C </br>
		<label for "Humidité"> Humidité :</label></br>
	    <input type="number" name="Humidité" min="30" max="60" step="1"> % </br>
</p>
<p>
		Lumières: </br>
		<input type="checkbox" name="Lampe1" id="Lampe1" checked /> <label for="Lampe1">Lampe 1</label><br />
		<input type="checkbox" name="Lampe2" id="Lampe2" /> <label for="Lampe2">Lampe 2</label><br />
		<input type="checkbox" name="Lampe3" id="Lampe3" /> <label for="Lampe3">Lampe 3</label><br />
</p>
		<p> Qualité d'air: </br>
		Intérieur : Bonne </br>
		Extérieur: Moyenne </br>
		</p>
		<p> <label for "Fenetre 1"> Fenetre 1: </label></br>
	     Fermée <input type="range" name="Fenetre1" min="0" max="1" step="1" /> Ouverte </br>
		<label for "Fenetre 2"> Fenetre 2: </label></br>
		Fermée <input type="range" name="Fenetre2" min="0" max="1" step="1" /> Ouverte </br> </p>
		<p> <label for "Volet 1"> Volet 1: </label></br> 
		Fermé <input type="range" name="Volet1" min="0" max="1" step="1" /> Ouvert </br>
		<label for "Volet 2"> Volet 2: </label></br>
		Fermé <input type="range" name="Volet2" min="0" max="1" step="1" /> Ouvert </br> </p>
		<p> <label for "porte principale"> Porte principale: </label></br> 
		Fermée <input type="range" name="Porte principale" min="0" max="1" step="1" /> Ouverte </br>
		  </p>
		<input type="submit" value="Enregistrer"/> </div>
	
		  
		  
	  </form>	
</body>		
</html>