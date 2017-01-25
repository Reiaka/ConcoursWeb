<?php 
	session_start();
	$base= new PDO('mysql:host=localhost;dbname=concours;charset=utf8','root','');
?>
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

					<ul class='nav navbar-nav navbar-right'>
						<li class='dropdown' style='padding-right:17px;'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown'>ADMIN<b class='caret'></b></a>
							<ul class='dropdown-menu' style='padding:17px;'>
								<form method='POST'>
									<input type='submit' name='Gestion_animateur' value='Gestion animateur' class='btn'/>
									<input type='submit' name='deconnection' value='Deconnexion' class='btn'/>
								</form>
							</ul>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /navbar wrapper -->
	<?php 
		
		if(isset($_POST['deconnection'])){
			if(!empty($_POST['deconnection'])){
				header('location:accueil2.php');
			}
		}
		if(isset($_POST['Gestion_animateur'])){
			if(!empty($_POST['Gestion_animateur'])){
				header('location:Gestion_animateur.php');
			}
		}
		
	?>
	
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
		<!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-md-4 text-center">
				<img class="img-circle" src="http://placehold.it/140x140">
				<h2 class="">Mobile-first</h2>
				<p class="">Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
				<p class="">
					<a class="btn btn-default" href="#">View details »</a>
				</p>
			</div>
			<div class="col-md-4 text-center">
				<img class="img-circle" src="http://placehold.it/140x140">
				<h2 class="">One Fluid Grid</h2>
				<p class="">There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
				<p class="">
					<a class="btn btn-default" href="#">View details »</a>
				</p>
			</div>
			<div class="col-md-4 text-center">
				<img class="img-circle" src="http://placehold.it/140x140">
				<h2 class="">LESS is More</h2>
				<p class="">Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
				<p class="">
					<a class="btn btn-default" href="#">View details »</a>
				</p>
			</div>
		</div>
		<!-- /.row -->
		
		
		<!-- START THE FEATURETTES -->
		
		<hr class="featurette-divider">
		
		<div class="featurette">
			<h3 class="featurette-heading">Responsive Design. <span class="text-muted">It'll blow your mind.</span></h3>
			<img class="featurette-image img-circle pull-right" src="http://placehold.it/140x140">
			<p class="lead">In simple terms, a responsive web design figures out what resolution of device it's being served on. Flexible grids then size correctly to fit the screen.</p>
		</div>
		
		<hr class="featurette-divider">
		
		<div class="featurette">
			<img class="featurette-image img-circle pull-left" src="http://placehold.it/512">
			<h2 class="featurette-heading">Smaller Footprint. <span class="text-muted">Lightweight.</span></h2>
			<p class="lead">The new Bootstrap 3 promises to be a smaller build. The separate Bootstrap base and responsive.css files have now been merged into one. There is no more fixed grid, only fluid.</p>
		</div>
		
		<hr class="featurette-divider">
		
		<div class="featurette">
			<img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
			<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Flatness.</span></h2>
			<p class="lead">A big design trend for 2013 is "flat" design. Gone are the days of excessive gradients and shadows. Designers are producing cleaner flat designs, and Bootstrap 3 takes advantage of this minimalist trend.</p>
		</div>

		<hr class="featurette-divider">

		<!-- /END THE FEATURETTES -->
		
		<!-- FOOTER -->
		<footer>
			<p class="pull-right">
				<a href="#" class="">Back to top</a>
			</p>
			<p class="">This Bootstrap layout is compliments of Bootply. 
				<a href="http://www.bootply.com/62603" class="">Edit on Bootply.com</a>
			</p>
		</footer>
	</div>
	<!-- /.container -->

</body>
</html>