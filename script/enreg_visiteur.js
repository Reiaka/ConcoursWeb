window.onload = initPage;

function initPage() 
{
	
   document.getElementById("boutonEnreg").onclick = envoiDonnees;
   
}

function envoiDonnees ()	
{
	
	xhr = createRequest();
    if(xhr == null)
    {
	   alert("Echec, nul, mauvais");
	   return;
    }
	
	xhr.open('POST',"enreg.php",true);
	alert("FONDUE");
    xhr.onreadystatechange = callback_Enreg;
	alert("RACLETTE");
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	
	form = document.getElementById("saisieVoilier");
	
    xhr.send("nomVoilier="+form.nomVoilier.value);
	
}//envoiDonnees ()

function callback_Enreg(){
	
	alert("BANANE");
	if(xhr.readyState == 4 && xhr.status == 200)
	{
		alert("TARTIFLETTE");
	}
	
	
}
