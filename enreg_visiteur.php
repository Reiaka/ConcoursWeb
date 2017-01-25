<?php
	

	if(isset($_POST['nom'], $_POST['prenom'], $_POST['ville'], $_POST['mail'], $_POST['bac'], $_POST['tabEvts']))
	{	
		if(!empty($_POST['nom'])&&!empty($_POST['prenom'])&&!empty($_POST['ville'])&&!empty($_POST['mail'])&&!empty($_POST['bac'])&&!empty($_POST['tabEvts']))
		{
			
			$lname = $_POST['nom'];
			$fname = $_POST['prenom'];
			$city = $_POST['ville'];
			$mail = $_POST['mail'];
			$bac = $_POST['bac'];
		
			//printf("Username : %s <br> Password : %s",$uname, $pwd);
			// les parametres sont : $serveur, $login et $mdp
			//require("parametres.php");
			
			$serveur = "localhost";
			$login = "root";
			$mdp = "noob";
			
			//connexion au serveur mysql (ici localhost)
			$connexion=mysqli_connect($serveur,$login,$mdp) 
			or die("Connexion impossible au serveur $serveur pour $login");
			echo "<b>connexion réussie au serveur</b><hr /> ";

			//nom de la base de donnees
			$bd="concours";

			//connexion à la base de donnees
			mysqli_select_db($connexion,$bd)
			or die("Impossible d'accèder à la base de données");
			echo "<b>Connexion réussie à la base de données</b><hr />";
			
			//nom de la tableà consulter
			$tables="inscrits";
			
			//requete sql de type SELECT ... from
			$requete="INSERT INTO $tables VALUES ($fname, $lname, $ville, $mail, $bac)";
			
			//requete passee dans la commande  mysql_query
			$resultat=mysqli_query($connexion,$requete);
			
			
			$destination = $mail;
			
			$object = "Inscription JPO Vélizy";
			
			$header= "From:   \n";
			$header= "MIME-version : 1.0 \n";
			$header="Content-Type : text/html \n";
			$header = "Content-Transfer-Encoding: 8bits  \n";
			
			$message="";
			
			$message.="<html>\n <h1>Bonjour ".$fname." ".$lname.",</h1>\n Ce mail confirme votre inscription pour les évènements suivants:\n";
			
			$tables="event";
			$cpt = 0;
			
			foreach($tabEvts as $titreEvt)
			{
				
				$requete="SELECT * FROM $tables WHERE titre = '$titreEvt'";
				
				$resultat=mysqli_query($connexion,$requete);
				
				if (mysqli_num_rows($resultat) < 1)
				{
					$message.= $resultat["titre"][$cpt]." : de ".$resultat["heureDebut"][$cpt]." jusqu'à ".$resultat["heureFin"][$cpt]." lieu : ".$resultat["lieu"][$cpt]." \n";
				}
				$cpt++;
			}
			
			$message.= " Merci pour votre inscription";
			
			$message.=" \n </html>";
			
			$mail = mail($destination,$object,$message);
			
		}
		
	}
	
?>
