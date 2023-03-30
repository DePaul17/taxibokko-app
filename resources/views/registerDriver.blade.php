<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>driver register</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=" Taxibokko-App - DePaulwin!" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/driver.css" type="text/css" media="all" />
	<link rel="stylesheet" href="bootstrap.css">
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">

	<!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">
</head>

<body>
	<div class="main-w3ls">
		<div class="left-content">
			<div class="w3ls-content">
				<!-- logo -->
				<h1>
					<a href="/welcome"><span class=""></span>Taxibokko</a>
				</h1>
			</div>
			<!-- copyright -->
			<div class="copyright">
				<p>&copy; 2023 DePaulwin!-App. All rights reserved | Design by DePaulwin!
				</p>
			</div>
			<!-- //copyright -->
		</div>
		<div class="right-form-agile">
			<!-- content -->
			<div class="sub-main-w3">
				<h3>Créer un compte</h3>
				<form action="/registerDriver/traitement" method="POST">
				@csrf	
					<div class="form-style-agile">
						<label>Nom</label>
						<div class="pom-agile">
							<span class="fa fa-user"></span>
							<input placeholder="Nom" name="nom" type="text" required autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Prénom</label>
						<div class="pom-agile">
							<span class="fa fa-envelope-open"></span>
							<input placeholder="Prénom" name="prenom" type="text" required autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Marque de voiture</label>
						<div class="pom-agile">
							<span class="fa fa-car"></span>
							<input placeholder="Marque de votre voiture" name="marque" type="text" id="" required autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Plaque d'immatriculation</label>
						<div class="pom-agile">
							<span class="fa fa-list-alt"></span>
							<input placeholder="Plaque d'immatriculation" name="plaque" type="text" id="" required autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Email</label>
						<div class="pom-agile">
							<span class="fa fa-envelope"></span>
							<input placeholder="Email" name="email" type="email" id="email" required autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Password</label>
						<div class="pom-agile">
							<span class="fa fa-key"></span>
							<input placeholder="Mot de passe  --Minimum 8 caractères" name="password" type="password" id="password" required autocomplete="off">
						</div>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="brand1" value="" required>
						<label for="brand1">
							<span></span>J'accepte les Termes & Conditions</label>
					</div>
					<input type="submit" value="Soumettre">
				</form>

				@if(session('message'))
					<a href="/registerDriver" class="alert alert-success"> {{ session('message') }} </a>
				@endif	

				<!-- social icons -->
					<!--css interne-->
					<style> a{color:#e8ce07;} </style>
				<div class="w3ls-social">
					<h3>Etes-vous déjà un chauffeur ?</h3>
					<a href="/loginDriver">Se connecter</a>
				</div>
				<!-- //social icons -->
			</div>
		</div>
	</div>
	<!-- //content -->

</body>

</html>