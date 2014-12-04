<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La Nuit de l'Info - Telecom Nancy">
    <meta name="author" content="Guillaume HABEN">

    <title>Nuit de l'Info 2014</title>
	
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
	<section class="hero" id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
					<div class="animatedParent">
						<h1 class="animated fadeInDown">LA NUIT DE L'INFO<br /><font color="#6e2366">TELECOM</font> <font color="#f18b26">NANCY</font></h1>
						<br /><br /><p class="animated fadeInUp">Bienvenue sur le site de présentation des différents projets réalisés par nos deux équipes !</p>
					</div>
			   </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#about" class="learn-more-btn btn-scroll">C'est parti</a>
                </div>
              </div>
            </div>
    </section>
	
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="site-logo">
                            <a href="index.html" class="brand">Nuit de l'info</a>
                        </div>
                    </div>
                          

                    <div class="col-md-8">
	                    <!-- Brand and toggle get grouped for better mobile display -->
	                    <div class="navbar-header">
	                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	                            <i class="fa fa-bars"></i>
	                        </button>
	                    </div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="menu">
						    <ul class="nav navbar-nav navbar-right">
						          <li class="active"><a href="#intro">Accueil</a></li>
						          <li><a href="#about">À propos</a></li>
						          <li><a href="#works">Photos</a></li>				                                                                  
						          
						          <li><a href="#contact">Contact</a></li>
						    </ul>
						</div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

	<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold">À propos de nos équipe</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
        <div class="row">
		
		
            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
					<p>
					Lorem ipsum dolor sit amet, vis tale malis tacimates et, graece doctus omnesque ne est, deserunt pertinacia ne nam. Pro eu simul affert referrentur, natum mutat erroribus te his
					</p>
					<p>
					Ne mundi fabulas corrumpit vim, nulla vivendum conceptam eu nam. Ius ex principes complectitur, ex quo duis suscipit. Ius fastidii reprimique no. Sadipscing appellantur pri ad. Oratio moderatius definitiones cum ex, mea ne brute vivendum percipitur. 
					</p>
					<!--<a href="#service" class="btn btn-skin btn-scroll">Voir les défis relevés</a>-->

              <div class="row">
                <div class="col-md-6 text-center">
                  <a href="team-1.html" class="equipe-btn btn-scroll">Equipe 1</a>
                </div>
                <div class="col-md-6 text-center">
                  <a href="team-A.html" class="equipe-btn btn-scroll">Equipe A</a>
                </div>
              </div>
				</div>
            </div>
		

        </div>		
		</div>

	</section>
	<!-- /Section: about -->	

	<!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Les photos de la nuit</h2>
					<div class="divider-header"></div>
					</div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <?php
                       
                       /*
                       function count_files($dir)
						 {
						 		$num = 0;
						 		$dir_handle = opendir($dir);
						 			while($entry = readdir($dir_handle))
								 		if(is_file($dir.'/'.$entry))
						 				   $num++;
						 		closedir($dir_handle);
						 		return $num;
						 }
						$filecount = count_files("img/works/photos/");
						for ($i=0; $i < $filecount/2; $i++) { 
							?>
							<div class="col-md-3 offset-top">
								<a href=<?php echo '"img/works/photos/' . $i . '.jpg"'?> title="Titre si on veut" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
									<img src="img/works/a.jpg" class="img-responsive" alt="img">
								</a>
							</div>
							<?php
						}
						*/
						foreach(glob('img/works/photos/*.*thumb.jpg') as $filename){
							?>
					     	<div class="col-md-3 offset-top">
								<a href=<?php echo '"' . substr_replace($filename ,"",-9) . '"'?> data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
									<img src=<?php echo '"' . $filename .'"' ?> class="img-responsive" alt="img">
								</a>
							</div>
					     	<?php
					 	}
                        ?>
					</div>
                </div>
            </div>	
		</div>

	</section>
	<!-- /Section: works -->

	    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Une vidéo !</h2>
					<div class="divider-header"></div>
					</div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<blockquote><i>"Bref, j'aurais du faire musicien à la place d'informaticien" - Un informaticien</i></blockquote>
					<iframe width="560" height="315" src="http://www.youtube.com/embed/A-9wnc2vH_c" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</section>
	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Nous contacter</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<form id="contact-form">
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" id="name" placeholder="Nom" required="required" />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg" id="email" placeholder="Adresse mail" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="subject" placeholder="Sujet" required="required" />
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
								</div>						
								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">Envoyer le message</button>
							</div>
						</div>
						</form>
				</div>
			</div>	


		</div>
	</section>
	<!-- /Section: contact -->


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu">
						<li><a href="#">Accueil</a></li>
					</ul>
				</div>
				<div class="col-md-6 text-right">
					<p>&copy; Copyright 2014 - <font color="#f18b26">Telecom Nancy</font></p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>

</body>

</html>
