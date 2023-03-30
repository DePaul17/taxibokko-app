@extends("layouts.master")
@section("contenu")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin•chauffeur</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">
</head>
<body>
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="able table-md mx-auto">
                    <table class="table table-dark table-hover">
                        <div class="d-flex justify-content-center">
                            {{ $users->links('pagination::bootstrap-5') }}
                        </div>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Marque de voiture</th>
                                <th>Plaque d'immatriculaton</th>
                                <th>Email</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nom }}</td>
                                <td>{{ $user->prenom }}</td>
                                <td>{{ $user->marque }}</td>
                                <td>{{ $user->plaque }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="#" class="d-inline-block mr-2 btn btn-info"><i class="fa fa-edit"></i></a>
                                </td>    
                                <td> 
                                    <form method="POST" action="{{ route('delete_driver', ['id' => $user]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="d-inline-block btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce chauffeur ?')"><i class="fa fa-trash"></i></button>
                                    </form> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection