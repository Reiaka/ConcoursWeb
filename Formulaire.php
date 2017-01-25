<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<title>Incription Visiteur</title>
		<script src="scripts/enreg_incription.js" type="text/javascript" > </script>
		<script src="scripts/utils.js" type="text/javascript" > </script>
	</head>
	<body>
		<form method="POST" name="formInsc">
			Nom: <br/> <input type="text" name="nom" value="Nom" /><br/>
			Prénom: <br/> <input type="text" name="prenom" value="Prenom" /><br/>
			Ville: <br/> <input type="text" name="ville" value="Ville" /><br/>
			mail: <br/><input type="mail" name="mail" value="Mail" /><br/>	
			Bac préparé: <br/><select name = "bac">
					<option selected>-- Sélectionnez une filière --</option>
					<option> S </option>
					<option> STI </option>
					<option> ES </option>
					<option> STMG </option>
					<option> Autre </option>

			<select /><br/>
			
			<input id="boutonEnregistrer" type="button" value="Enregistrer" />
		</form>
		<div id="msg">
		</div>
	</body>
</html>