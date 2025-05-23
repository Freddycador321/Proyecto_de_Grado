<?php

namespace App\Http\Controllers;

use App\Models\equipo_jugador;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storeequipo_jugadorRequest;
use App\Http\Requests\Updateequipo_jugadorRequest;

class EquipoJugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeequipo_jugadorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(equipo_jugador $equipo_jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(equipo_jugador $equipo_jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateequipo_jugadorRequest $request, equipo_jugador $equipo_jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(equipo_jugador $equipo_jugador)
    {
        //
    }
}
