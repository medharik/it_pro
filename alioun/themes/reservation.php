<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<title>Restaurant Khadim</title>

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ** Plugins Needed for the Project ** -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="plugins/icofont/icofont.min.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/all.css">
	<link rel="stylesheet" href="plugins/aos/aos.css">
	<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="plugins/video-popup/modal-video.min.css">
	<link rel="stylesheet" href="plugins/swiper/swiper.min.css">
	<link rel="stylesheet" href="plugins/date-picker/datepicker.min.css">
	<link rel="stylesheet" href="plugins/clock-picker/clockpicker.min.css">
	<link rel="stylesheet" href="plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.css">
	<link rel="stylesheet" href="plugins/devices.min.css">

	<!-- Main Stylesheet -->
	<link href="css/style.css" rel="stylesheet">

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
	<div class="preloader">
		<img src="images/preloader.gif" alt="preloader" class="img-fluid">
	</div>
	<!-- Header Start -->

	<header class="navigation ">
		<nav class="navbar navbar-expand-lg main-nav py-lg-3 position-absolute w-100" id="main-nav">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="" alt="" class="img-fluid">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Acceuil</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="about.html">À propos de</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Catalogue</a></li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reservation</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="reservation.html">Passer Commande</a></li>

							</ul>
						</li>

						</li>

						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Header Close -->
	<section class="section-header bg-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<h1 class="text-capitalize mb-4 font-lg text-white">Livraison Rapide-Vos cordonnéees</h1>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section">

		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto shadow p-2">
					<?php if (isset($_GET['log'])) { ?>
						<div class="alert alert-danger">
							Merci de renseigner vos coordonnees de livraison
						</div>
					<?php } ?>
					<form action="storepfe.php" method="post">

						<div class="form-group"><label for="nom">Nom</label>
							<input required type="text" class="form-control" name="nom" id="nom">
						</div>
						<div class="form-group"><label for="prenom">prenom</label>
							<input type="text" class="form-control" name="prenom" id="prenom">
						</div>
						<div class="form-group">

							<label for="nt">Numéro Téléphone </label>
							<input type="varchar" class="form-control" name="nt" id="nt">
						</div>

						<div class="form-group"><label for="adresse">Adresse </label>
							<input type="varchar" class="form-control" name="adresse" id="adresse">
						</div>



						<div class="">

							<button type="submit" class="btn btn-success btn-lg btn-block">Valider</button>
						</div>
					</form>


				</div>

			</div>

		</div>

	</section>



	<footer class="section footer">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-3 mb-5 mb-lg-0">
					<div class="widget">
						<h4 class="mb-3">à propos</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, nam!</p>

						<ul class="list-inline footer-socials mt-4">
							<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i></a></li>
							<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2 "></i></a>
							</li>
							<li class="list-inline-item"><a href=""><i class=""></i></a>
							</li>
							<li class="list-inline-item"><a href=""><i class=""></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 ml-auto col-md-5 mb-5 mb-lg-0">
					<div class="widget">
						<h4 class="mb-3">Contact Info</h4>

						<ul class="list-unstyled mb-0 footer-contact">
							<li><i class="ti-mobile"></i>+221 33 958 58 58</li>
							<li><i class="ti-email"></i>restokhadim@gmail.com</li>
							<li><i class="ti-map"></i>kaolack, centre ville,10027-0000</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
					<div class="widget">
						<h4 class="mb-3">Horaires d'ouvertures</h4>

						<div class="info mb-4">
							<p class="mb-0">Tout les Jours</p>
							<h5>08:00 AM - 04:00 PM</h5>
						</div>
						<div class="info">
							<p class="mb-0">Tout les Jours</p>
							<h5>08:00 AM - 04:00 PM</h5>
						</div>
					</div>
				</div>
			</div>


	</footer>
	<section class="footer-btm py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
						<p class="mb-0 ">Copyright &copy; 2020 by #codesAFBF


					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jQuery -->
	<script src="plugins/jQuery/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<script src="plugins/aos/aos.js"></script>
	<script src="plugins/shuffle/shuffle.min.js"></script>
	<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="plugins/date-picker/datepicker.min.js"></script>
	<script src="plugins/clock-picker/clockpicker.min.js"></script>
	<script src="plugins/video-popup/jquery-modal-video.min.js"></script>
	<script src="plugins/swiper/swiper.min.js"></script>
	<script src="plugins/instafeed/instafeed.min.js"></script>
	<script src="plugins/bootstrap-touchpin/jquery.bootstrap-touchspin.min.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<script src="plugins/google-map/gmap.js"></script>
	<!-- Main Script -->
	<script src="js/contact.js"></script>
	<script src="js/script.js"></script>

</html>