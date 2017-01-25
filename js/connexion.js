window.onload = initPage;

function initPage() {
	page= document.getElementById("navbarCo");
	li=document.createElement(li);	li.setAttribute("class","dropdown");	li.setAttribute("style","padding-right:17px;");
	a=document.createElement(a);	a.setAttribute("href","#");	a.setAttribute("class","dropdown-toggle");	a.CreateTextNode("Se connecter ");
	ul = document.createElement(ul);	ul.setAttribute("class","dropdown-menu");	ul.setAttribute("style","padding:17px;")
	form=document.createElement(form);	form.setAttribute("method",'POST');
	label=document.createElement(label);	label.createTextNode("Login");
	input=document.createElement(input);	input.setAttribute("name","pseudo");	input.setAttribute("id","username");	input.setAttribute("placeholder","Username");	input.setAttribute("pattern",'^[a-z,A-Z,0-9,_]{5,15}$');
	input.setAttribute("data-valid-min","6");	input.setAttribute("title","Enter your username");	input.setAttribute("type","text");
	form.appendChild(input);
	input=document.createElement(input);	input.setAttribute("name","mdp");	input.setAttribute("id","password");	input.setAttribute("placeholder","Password");	input.setAttribute("title","Enter your password");	input.setAttribute("type","password");
	form.appendChild(input);
	input=document.createElement(input);	input.setAttribute("type","submit");	input.setAttribute("name","btnLogin");	input.setAttribute("value","connexion");	input.setAttribute("class","btn");
	form.appendChild(input);
	button=document.createElement(button);	button.setAttribute("type","button");	button.setAttribute("id","btnInscription");	button.setAttribute("class","btn");	button.createTextNode("S'inscrire");
	form.appendChild(button);
	
	ul.appendChild(form);
	a.appendChild(ul);
	li.appendChild(a);
	page.appendChild(li);
}


function affichage(){

}