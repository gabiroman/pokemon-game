<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon', [
            'offset' => 0,
            'limit' => 151
        ]);
        $pokemons = $response->object();
        return view('home', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePokemonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePokemonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show($pokemon)
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/'.$pokemon);
        $pokemon = $response->object();
        return view('pokemon.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePokemonRequest  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePokemonRequest $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
