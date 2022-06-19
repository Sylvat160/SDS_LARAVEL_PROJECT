@extends('layouts.app')

@section('content')

    <form action="" method="POST" id="formE">
    @csrf
    <div>
        <label for="nomE"><i class="fa-solid fa-user"></i></label>
        <input type="text" name="nomE" value=" {{ $etudiant->nomE }} " disabled >
    </div>

    <div>
        <label for="prenomE"><i class="fa-solid fa-user"></i></label>
        <input type="text" name="prenomE" value="{{ $etudiant->prenomE }}" disabled>
    </div>

    <div>
        <label for="dateE"><i class="fa-regular fa-calendar"></i></label>
        <input type="text" value="{{ $etudiant->date_naissance }}" name="dateE" >
    </div>

    <div>
        <label for="emailE"><i class="fa-regular fa-envelope"></i></label>
        <input type="mail" name="mailE" value="{{ $etudiant->mailE }}" placeholder="E-mail">
    </div>

    <div>
        <label for="numeroE"><i class="fa-solid fa-phone"></i></label>
        <input type="text" value="{{ $etudiant->numeroE }}" name="numeroE" placeholder="numero">
    </div>

    <div class="tuteur">
        @if($tuteurs->count() > 0)        
            @foreach($tuteurs as $tuteur)
                    <select disabled name="" id="">
                        <option value="{{ $tuteur->id }}">{{ $tuteur->nomT }} {{ $tuteur->prenomT }}</option>
                    </select>
            @endforeach
        @else
            <p>Aucun tuteur enregistre</p>
        @endif
    </div>

    <button type='submit' name="modifier" value="modifier"> modifier </button>

    </form>

@endsection