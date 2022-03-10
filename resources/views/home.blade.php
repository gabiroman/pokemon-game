{{-- {{ dd($pokemons) }} --}}
@extends('app')
@section('title', 'Home')

@section('content')
    <div class="row justify-content-center">
        @foreach ($pokemons->results as $pokemon)
            <div class="card col-sm-2 m-2">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        <img class="w-50" src="https://img.pokemondb.net/sprites/x-y/normal/{{ $pokemon->name }}.png"
                            alt="{{ $pokemon->name }}">
                        <p>{{ $pokemon->name }}</p>
                        <div class="text-center">
                            <a class="btn btn-success btn-sm" href="{{ route('pokemon.show', $pokemon->name) }}">Ver</a>
                            <a class="btn btn-warning btn-sm"
                                href="{{ route('pokemon.show', $pokemon->name) }}">Atrapar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
