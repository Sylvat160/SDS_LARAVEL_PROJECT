@extends('layouts.app')

@section('content')

    <div id="recherche">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="149" height="148" viewBox="0 0 149 148">
            <g id="Ellipse_1" data-name="Ellipse 1" fill="#476468" stroke="#707070" stroke-width="1">
                <ellipse cx="74.5" cy="74" rx="74.5" ry="74" stroke="none" />
                <ellipse cx="74.5" cy="74" rx="74" ry="73.5" fill="none" />
            </g>
         </svg>


    </div>

    <table class="table table-borderless" id="myTable">
        <thead>
            <tr>
                <th scope="col">n°</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">E-mail</th>
                <th scope="col">Numero</th>
                <th scope="col">Action</th>

            </tr>

        </thead>
        <tbody>

           @if($etudiants->count() > 0)
                @foreach($etudiants as $etudiant)

                <tr>
                    <th scope="row">{{$etudiant->id}}</th>
                    <td>{{$etudiant->nomE}}</td>
                    <td>{{$etudiant->prenomE}}</td>
                    <td>{{$etudiant->date_naissance}}</td>
                    <td>{{$etudiant->mailE}}</td>
                    <td>{{$etudiant->numeroE}}</td>
                    <td class="action">
                        <a href="" class="btn llink1 btn"><i class='fas fa-eye'></i></a>
                        <a href="" class="btn llink2 btn"><i class='fas fa-edit'></i></a> 
                        <a href="" class="btn llink3 btn"><i class='fas fa-trash'></i></a>
        
                    </td>

                @endforeach
            @else
                <p>Aucun etudiants enregistre</p>
            @endif




        </tbody>
    </table>


@endsection