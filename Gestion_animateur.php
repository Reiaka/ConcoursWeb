<DOCTYPE html>
<html lang="fr">
<head>
	<title>Formulaire</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/css.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

	<div class="navbar-wrapper">
		<div class="container target">
			<div class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-header">
					<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="navbar-brand" href="#">IUT de Vélizy</a>
				</div>
				
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#" class="">Accueil</a></li>
						<li><a href="http://www.iut-velizy.uvsq.fr/" target="ext" class="" contenteditable="false">À propos</a></li>
					</ul>

					<div id='navbarCo'>
						<ul class='nav navbar-nav navbar-right'>
							<li class='dropdown' style='padding-right:17px;'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Se connecter <b class='caret'></b></a>
								<ul class='dropdown-menu' style='padding:17px;'>
									<form method='POST'>
										<label class=''>Login</label>
										<input name='pseudo' id='username' placeholder='Username' pattern='^[a-z,A-Z,0-9,_]{5,15}$' data-valid-min='6' title='Enter your username' required='' type='text' class=''>
										<input name='mdp' id='password' placeholder='Password' title='Enter your password' required='' type='password' class=''>
										<input type='submit' name='btnLogin' value='Connexion' class='btn'/>
										<button type='button' id='btnInscription' class='btn'>S'inscrire</button>
									</form>
								</ul>
							</li>
						</ul>
					</div>
					<?php
						if (!isset($_SESSION['user']))
						{
							echo "";
						}
						else
						{
							echo "<ul class='nav navbar-nav navbar-right'>
									<li class='dropdown' style='padding-right:17px;'>
										<a href='#' class='dropdown-toggle' data-toggle='dropdown'>".$_SESSION['user']."<b class='caret'></b></a>
										<ul class='dropdown-menu' style='padding:17px;'>
											<form method='POST'>
												<input type='submit' name='deconnection' value='Deconnexion' class='btn'/>
											</form>
										</ul>
									</li>
								</ul>";
						}
						
						//VERIFICATION
						if (isset($_POST['pseudo']) && isset($_POST['mdp']))
						{
							if (!empty($_POST['pseudo']) && !empty($_POST['mdp']))
							{
								$username=(strip_tags($_POST['pseudo']));
								$mdp=(strip_tags($_POST['mdp']));
								if (($username=="admin") && ($mdp=="admin"))
								{
									session_start();
									$_SESSION["user"]=$username;
								}
							}
						}
						if (!empty($_POST['deconnection']))
						{
							session_destroy();
						}
					?>
					
				</div>
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /navbar wrapper -->
	
	
	<!-- Carousel==================================================-->
	<div id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="http://www.iut-velizy.uvsq.fr/medias/photo/newbandeau_1329133459625.png" style="width:100%" class="img-responsive">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="">Bootstrap 3 Carousel Layout</h1>

						<p class=""></p>
						<p class="">
							<a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="http://lorempixel.com/2000/600/abstract/1" class="img-responsive">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="">Changes to the Grid</h1>
						<p class="">Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
						<p class="">
							<a class="btn btn-large btn-primary" href="#">Learn more</a>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="http://placehold.it/1500X500" class="img-responsive">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="">Percentage-based sizing</h1>
						<p class="">With "mobile-first" there is now only one percentage-based grid.</p>
						<p class="">
							<a class="btn btn-large btn-primary" href="#">Browse gallery</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a> 
	</div>
	<!-- /.carousel -->
	
	
	<!-- Marketing messaging and featurettes==================================================-->
	<!-- Wrap the rest of the page in another container to center all the content. -->
	<div class="container marketing">
		<form method="post" action ="">
			Email:
			<input type="text" name="Mail"/><br/>
			Login:
			<input type="text" name="login"/><br/>
			Mot de passe :
			<input type="password" name="MDP"/><br/>
			<input type="submit" value="Ajouter" name="ok" />
			<input type="submit" value="Supprimer" name="ok" />
		</form>
		
	</div>
	<!-- /.container -->

</body>
</html>