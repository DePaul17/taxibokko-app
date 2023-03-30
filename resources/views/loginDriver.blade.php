<!DOCTYPE HTML>
<html>

<head>
	<title>driver login</title>
 <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Taxibokko-App - DePaulwin!"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Font-Awesome-CSS -->
		<link href="css/font-awesome.css" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<!-- Required Css -->
		<link href="css/driver_login.css" rel='stylesheet' type='text/css' />
		
	<!--// Required Css -->
	<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
	<!--//fonts-->
	<!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">
</head>

<body>
	<!--background-->
		<!--css interne-->
		<style> h1{color:#e8ce07;} </style>
	<h1>Taxibokko</h1>
	<!-- Main-Content -->
	<div class="main-w3layouts-form">
		<h2>Connexion</h2>
		<!-- main-w3layouts-form -->
		<form action="/loginDriver/traitement" method="POST">
		@csrf	
			<div class="fields-w3-agileits">
				<span class="fa fa-user" aria-hidden="true"></span>
				<input type="text" name="email" required placeholder="Email" autocomplete="off" />
			</div>
			<div class="fields-w3-agileits">
				<span class="fa fa-key" aria-hidden="true"></span>
				<input type="password" name="password" required placeholder="Mot de passe  --Minimum 8 caractères" />
			</div>
			<div class="remember-section-wthree">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span> Se souvenir de moi ?</span> 
						</label>
					</li>
					<li> <a href="#">Mot de passe oublié?</a> </li>
				</ul>
				<div class="clear"> </div>
			</div>
			<input type="submit" value="Se connecter" />
		</form>

		@if(session('message'))
            <div class="col-md-12 m-0">
                <div class="card">
					<a href="/loginDriver" class="alert alert-danger justify-content"> {{ session('message') }} </a>
                </div>
            </div>
		@endif

		<!--// main-w3layouts-form -->
		<!-- Social icons -->
			<!--css interne-->
			<style> a{color:#e8ce07;} </style>
		<div class="footer_grid-w3ls">
			<h5 class="sub-hdg-w3l">N'êtes-vous pas encore un chaufeur ?</h5>
			<a href="/registerDriver">S'inscrire</a>
		</div>
		<!--// Social icons -->
	</div>
	<!--// Main-Content-->
	<!-- copyright -->
	<div class="copyright-w3-agile">
		<p>&copy; 2023 <a href="/welcome">Taxibokko-App</a>. All rights reserved | Design by DePaulwin! </p>
	</div>
	<!--// copyright -->
	<!--//background-->
</body>

</html>