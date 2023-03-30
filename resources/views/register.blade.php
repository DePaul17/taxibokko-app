<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>register</title> 
		<!-- Meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- //Meta tags -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">

</head>

<body>
	<section class="w3l-form-36">
		<div class="form-36-mian section-gap">
			<div class="wrapper">
				<div class="form-inner-cont">
					<h3>Créer un compte</h3>
					<form action="/register/traitement" method="POST" class="signin-form">
					@csrf 	
						<div class="form-input">
							<span class="fa fa-user-o" aria-hidden="true"></span> <input type="text" name="nom" placeholder="Nom" required autocomplete="off"/>
						</div>
						<div class="form-input">
							<span class="fa fa-user-o" aria-hidden="true"></span> <input type="text" name="prenom" placeholder="Prénom" required autocomplete="off" />
						</div>
						<div class="form-input">
							<span class="fa fa-phone" aria-hidden="true"></span> <input type="text" name="telephone" placeholder="Numéro de téléphone" required autocomplete="off" />
						</div>
						<div class="form-input">
							<span class="fa fa-envelope-o" aria-hidden="true"></span> <input type="email" name="email" placeholder="Email" required autocomplete="off" />
						</div>
						<div class="form-input">
							<span class="fa fa-key" aria-hidden="true"></span><input type="password" name="password" placeholder="Mot de passe  --Minimum 8 caractères"
								required autocomplete="off" />
						</div>
						
						<div class="login-remember d-grid">
							<label class="check-remaind">
								<input type="checkbox">
								<span class="checkmark"></span>
								<p class="remember">se souvenir de moi</p>
							</label>
							<button class="btn theme-button">Enregistrer</button>
						</div>
					</form>
					<div class="social-icons">
						<p class="continue"><span>Ou</span></p>
						<div class="social-login">
						<p class="signup"> <a href="/registerDriver">Devenir chauffeur</a> </p>
					</div>

				 	
				@if(session('message'))
					<a href="/register" class="alert alert-success"> {{ session('message') }} </a>
				@endif	

				</div>
					<p class="signup">Vous êtes déjà un membre ? <a href="/login" class="signuplink">Se connecter</a></p>
				</div>

				<!-- copyright -->
				<div class="copy-right">
					<p>© 2023 <a href="/welcome">Taxibokko-App</a>. All rights reserved | Design by DePaulwin!</p>
				</div>
				<!-- //copyright -->
			</div>
		</div>
	</section>
</body>
</html>
