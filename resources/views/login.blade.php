<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Connexion</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Taxibokko-App - DePaulwin!" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;600;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style_login.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="css/font-awesome.min_login.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">

</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1>Taxibokko</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="content-wthree">
                        <h2>Connexion</h2>
                        <p>à votre compte</p>
                        <form action="/login/traitement" method="POST">
                        @csrf    
                            <input type="text" class="text" name="email" placeholder="email" required autocomplete="off">
                            <input type="password" class="password" name="password" placeholder="Mot de passe" required autocomplete="off">
                            <button class="btn" type="submit">Se connecter</button>
                        </form>
                        @if(session('message'))
                            <div class="col-md-12 m-0">
                                <div class="card">
					                <a href="/login" class="alert alert-danger justify-content"> {{ session('message') }} </a>
                                </div>
                            </div>
				        @endif	
                        <p>Se connecter en tant que </p>
                        <div class="social-icons w3layouts">
                                <p class="account"> <a href="/loginDriver">chauffeur taxibokko</a> </p>
                        </div>
                        <p class="account">N'êtes vous pas un membre? <a href="/register">Créer un compte</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="account text-white">© 2023 <a href="/welcome">Taxibokko-App</a>. All rights reserved | Design by DePaulwin! - <a
                        href="/login">connectez-vous</a></p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-hotair').fadeOut('slow', function (c) {
                    $('.main-hotair').remove();
                });
            });
        });
    </script>

</body>

</html>