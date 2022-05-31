@extends('layouts.app')

@section('content')

    <div class="formulaire">
            <h1> CONNEXION </h1>
            <form action="" method="POST">
                @csrf
                <p class="entre1">
                    <label for="login"><img src="{{ asset('img/Groupe 8.png') }}" alt="" width="100px"></label>
                    <input type="text" name="login" id="login" placeholder="Votre login">
                </p>

                <p class="entre2">
                    <input type="password" name="password" id="password" placeholder="Votre mot de passe">
                <label class="centre" for="password"><img src="{{asset('img/Groupe9.png')}}" alt="" width="100px"></label>
                </p>

                <p class="envoi">
                    <button type="submit" name="submit" value="Connexion">Se connecter</button>
                </p>
            </form>
    </div>

@endsection