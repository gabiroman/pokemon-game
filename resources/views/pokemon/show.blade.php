{{-- {{ dd($pokemons) }} --}}
@extends('app')
@section('title', '{{ $pokemon->name }}')

@section('content')
    <div class="card w-25">
        <div class="card-body">
            <div class="d-flex">
                <img src="https://img.pokemondb.net/sprites/x-y/normal/{{ $pokemon->name }}.png"
                    alt="{{ $pokemon->name }}">
                {{ $pokemon->name }}
                <div class="text-center">
                    <a class="btn btn-warning btn-sm" href="{{ route('pokemon.show', $pokemon->name) }}">Atrapar</a>
                </div>
            </div>

        </div>

    </div>

@endsection
