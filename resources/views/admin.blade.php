<!DOCTYPE html>
<html lang="en">
<head>
<title>admin</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Taxibokko-App - DePaulwin!">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/admin.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->

	<!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">
	
</head>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>Manage Your Business Account</h1>
					<p>Bienvenue su la page de connexion des admins. Veuillez entre vos identifiants ci-dessous pour acceder à votre compte et profiter des fonctionnalités réservées aux admins.</p>
					<img src="images/image_admin.jpg" alt="" />
				</div>
			</div>
			<div class="w3_info">
				<h2>Admin</h2>
				<p>Connectez-vous ici.</p>
				<form action="/admin/traitement" method="POST">
				@csrf	
					<label>Email</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="email" placeholder="Email" name="email" required=""> 
					</div>
					<label>Mot de passe</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="password" placeholder="Mot de passe" name="password" required="">
					</div> 
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" checked=""><i> </i>Se Rappeler De Moi</label>
					</div>						
					<button class="btn btn-danger btn-block" type="submit">Se connecter</button>                
				</form>

				@if(session('message'))
            		<div class="col-md-12 m-0">
                		<div class="card">
							<a href="/welcome" class="alert alert-danger justify-content"> {{ session('message') }} </a>
                		</div>
            		</div>
				@endif

				<p class="account">En vous connectant, vous acceptez nos <a href="#">Termes & Conditions!</a></p>
			</div>
		</div>
		<!-- //main content -->
	</div>
	<!-- footer -->
	<div class="footer">
		<p>&copy; 2023 <a href="/welcome" target="blank">Taxibokko-App</a>. All Rights Reserved | Design by DePaulwin!</p>
	</div>
	<!-- footer -->
</div>
	
</body>
</html>