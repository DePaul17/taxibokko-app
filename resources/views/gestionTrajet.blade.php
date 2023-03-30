@extends("layouts.master")
@section("contenu")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin•trajet</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Favicons -->
	<link href="images/logo.png" rel="icon">
  	<link href="images/logo.png" rel="logo">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <br><br><br><br><br><br><br><br><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp
    <!-- Bouton "Ajouter" -->
    <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter un trajet
    </button>

    <!-- Pop-up avec formulaire -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouveau trajet</h5>
                </div>
                <form action="/trajet/traitement" method="POST"> 
                @csrf    
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="input1" class="form-label">Départ</label>
                            <input type="text" class="form-control" id="input1" placeholder="Ajouter une adresse de départ" required autocomplete="off" name="depart">
                        </div>
                        <div class="mb-3">
                            <label for="input2" class="form-label">Arrivée</label>
                            <input type="text" class="form-control" id="input2" placeholder="Ajouter une adresse d'arrivée" required autocomplete="off" name="arrivee">
                        </div>
                    </div>
                    <input type="text" class="form-control" id="input3" name="client_id" hidden>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button class="btn btn-warning">Valider</button>
                    </div>
                </form>
                @if(session('message'))
                    <a href="/gestionTrajet" class="alert alert-success"> {{ session('message') }} </a>
                @endif
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="able table-md mx-auto">
                    <div class="d-flex justify-content-center">
                        {{ $users->links('pagination::bootstrap-5') }}
                    </div>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Adresse de Départ</th>
                                <th>Adresse d'arrivée</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->depart }}</td>
                                <td>{{ $user->arrivee }}</td>
                                <td>
                                    <a href="#" class="d-inline-block mr-2 btn btn-info"><i class="fa fa-edit"></i></a>
                                </td>    
                                <td> 
                                    <form method="POST" action="{{ route('delete_destination', ['id' => $user]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="d-inline-block btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce trajet ?')"><i class="fa fa-trash"></i></button>
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