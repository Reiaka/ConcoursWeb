<?php
	session_start();
?>

<?php
	include("parametres.php");
	$connexion=mysqli_connect($host,$pseudo,$password) or die("Connexion impossible au serveur $host pour $pseudo");
	$requete = mysqli_query("Insert into event values($_POST['titre'],$_POST['heuredeb'],$_POST['heurefin'],$_POST['lieu'],0)");
?>