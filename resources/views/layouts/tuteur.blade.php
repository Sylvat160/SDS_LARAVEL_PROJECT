@extends('layouts.app')


@section('content')

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

@endsection