<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->
	<link rel="stylesheet" href="css/bootstrap.css">


    <!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">
</head>
<body>
    <div class="">
        <!-- <h1>Edit</h1> -->
        <!-- container -->
        <div class="w3l-form-36">
            <!-- main content -->
            <div class="form-36-mian section-gapr">
                <div class="wrapper">
                    <div class="form-inner-cont">
                        <h3>
                            Mettre à jour les informations du client
                        </h3>
                        <form action="{{ route('user.update', ['id'=>$user->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="input-group">
                                <span><i class="fas fa-user" aria-hidden="true"></i></span>
                                <input type="text" required="" class="form-control" name="nom" value="{{ $user->nom }}">
                            </div>
                            <div class="input-group">
                                <span><i class="fas fa-user" aria-hidden="true"></i></span>
                                <input type="text" required="" class="form-control" name="prenom" value="{{ $user->prenom }}">
                            </div>
                            <div class="input-group">
                                <span><i class="fas fa-phone" aria-hidden="true"></i></span>
                                <input type="text" required="" class="form-control" name="telephone" value="{{ $user->telephone }}">
                            </div>
                            <div class="input-group">
                                <span><i class="fas fa-user" aria-hidden="true"></i></span>
                                <input type="email" required="" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="input-group">
                                <span><i class="fas fa-key" aria-hidden="true"></i></span>
                                <input type="text" placeholder="Password" required="" class="form-control" name="password" value="{{ $user->password }}">
                            </div>
                            <div class="footer">
                                <button class="btn btn-warning btn-block" type="submit">Mettre à jour</button>
                                <a href="/gestionClient" class="btn btn-secondary">annuler</a>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
            <!-- //main content -->
        </div>
    </div>

</body>

</html>