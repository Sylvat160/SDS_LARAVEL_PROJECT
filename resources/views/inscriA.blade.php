@extends('layouts.app')

@section('content')

<div class="formulaireIn">
        <h1> INSCRIPTION </h1>
        <form action="" method="POST">
            @csrf
            <div class="troisp">
                <p class="entre1">
                    <label for="nomA"><img src="{{ asset('img/Groupe 8.png')}}" alt="" width="100px"></label>
                    <input type="text" name="nomA" id="nomA" placeholder="Nom" require>
                </p>

                <p class="entre2">
                    <input type="text" name="prenomA" id="prenomA" placeholder="Prenom (s)" require>
                    <label class="centre" for="prenomA"><img src="{{ asset('img/Groupe9.png') }}" alt="" width="100px"></label>
                </p>

                <p class="entre1">
                    <label for="emailA"><img src="{{ asset('img/Groupe 8.png')}}" alt="" width="100px"></label>
                    <input type="mail" name="emailA" id="emailA" placeholder="Email" require>
                </p>
            </div>
            <div class="deuxd">
                

                <p class="entre2">
                    <input type="password" name="passwordA" id="passwordA" placeholder="Entrez un mot de passe" require>
                    <label class="centre" for="passwordA"><img src="{{ asset('img/Groupe9.png') }}" alt="" width="100px"></label>
                </p>

                <p class="entre1">
                    <label for="cpassA"><img src="{{ asset('img/Groupe 8.png')}}" alt="" width="100px"></label>
                    <input type="password" name="cpassA" id="cpassA" placeholder="Confirmez votre mot de passe" require>
                </p>
            </div>

          
                <button type="submit" name="submit" value="Connexion">S'inscrire</button>
            
        </form>
    </div>

@endsection