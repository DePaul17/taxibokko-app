<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>management</title>
        <link rel="stylesheet" href="css/bootstrap5/css/bootstrap.css">
        <link href="css/management.css" rel='stylesheet' type='text/css' />

        <!-- Favicons -->
        <link href="images/logo.png" rel="icon">
        <link href="images/logo.png" rel="logo">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- social icons -->
                        <!--css interne-->
                        <style> h2{color:#e8ce07;} </style>
            <a class="navbar-brand" href="welcome"> <h2>Taxibokko</h2> </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <!-- <a class="nav-link active btn btn-warning" aria-current="page" href="#">Gestion</a>
                <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Gestion</button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        ...
                    </div>
                </div> -->
                <a class="btn btn-warning" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    Gestion
                </a>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">TaxiBokko-App</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            Bienvenue sur votres espace administrateur. Merci de vous deconnecter avant de quitter votre espace administrateur.
                        </div>
                        <br>
                        <div class="dropdown mt-3">
                            <div class="md col-7">
                                <a class="btn btn-warning" href="/gestionClient">Gestion des clients</a> <br><br>
                                <a class="btn btn-warning row-2" href="/gestionChauffeur">Gestion des chauffeurs</a> <br><br>
                                <a class="btn btn-warning row-2" href="/gestionTrajet">Gestion des trajets</a> <br><br>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="link-bottom btn btn-danger">Déconnexion</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </li>
                &nbsp&nbsp&nbsp&nbsp&nbsp
            </ul>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <form class="d-flex">
                <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
            </div>
        </div>
        </nav>

        <!-- copyright -->
        <div class="copyright-w3-agile fixed-bottom">
            <p>&copy; 2023 <a href="/welcome">Taxibokko-App</a>. All rights reserved | Design by DePaulwin! </p>
        </div>

        @yield("contenu")

</body>
</html>

<script src="css/bootstrap5/js/bootstrap.js"></script>