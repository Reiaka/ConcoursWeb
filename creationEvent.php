<?php session_start();?>
<html>
	<head>
	<title>Créer un évènement</title>	
	</head>
	<body>
		<form method="POST" action="enregistrerAnim.php">
	Titre: <input type="text" name="titre"/><br/>
	Heure de Début : <input type="text" name="heuredeb"/><br/>
	Heure de Fin : <input type="text" name="heurefin"/><br/>
	Lieu : <input type="text" name="lieu"/><br/>
	Date Limite : <input type= "" name="date"/><br/>
	Type d'évènement:  <select name="event">
				<option selected> Sélectionner le type d'évènement à créer</option>
				<option> Conférence  </option>
				<option> Atelier  </option>
				<option> Visite  </option>
			</select><br/>
			<input type="submit" name="ok" value="Enregistrer">
		</form>
	</body>
</html>
