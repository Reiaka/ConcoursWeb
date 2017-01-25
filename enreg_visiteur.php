<?php
	session_start();
	
	$erreur = Array;
	
	while(list($id,$value)= each($_POST))
	{
		
		if(empty($value))
			$erreur[] = $id." est vide";
		
	}
	
	extract($_POST)->$nomVoilier;//,$numVoile,$classe,$annee,$photo,$architecte,$chantier,$skip1,$skip2,$txtSkip;
	
	$regExVoilier = "~^[a-zA-Z0-9.--]{3,20}^~";
	/*$regExAnnee = "~^[0-9]^~";
	
	*/
?>
