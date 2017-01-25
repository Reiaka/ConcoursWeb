<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Incription Visiteur</title>
		<script src="scripts/enreg_incription.js" type="text/javascript" > </script>
		<script src="scripts/utils.js" type="text/javascript" > </script>
	</head>
	<body>
		<form action = "enreg_visiteur.php" method="POST" name="formInsc">
			Nom: <br/> <input type="text" name="nom" value="nom" /><br/>
			Prénom: <br/> <input type="text" name="prenom" value="prenom" /><br/>
			Ville: <br/> <input type="text" name="ville" value="ville" /><br/>
			mail: <br/><input type="mail" name="mail" value="mail" /><br/>	
			Bac préparé: <br/><select name = "bac">
					<option selected>-- Sélectionnez une filiére --</option>
					<option> S </option>
					<option> STI </option>
					<option> ES </option>
					<option> STMG </option>
					<option> Autre </option>

			<select /><br/>
			
			<input id="boutonEnregistrer" type="submit" value="Enregistrer" />
		</form>

	</body>
</html>