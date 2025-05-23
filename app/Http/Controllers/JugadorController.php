<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index(){
        $jugadors = Jugador::get();
        return response()->json($jugadors); 
    }//CRUD
    public function destroy($id){
        $jugador=Jugador::find($id);
        if($jugador){
            $jugador->delete();
            return response()->json('Jugador Eliminado',200);
        }
        else
            return response()->json('No existe el Jugador',409);
    }
    public function store(Request $request){
        $jugador=Jugador::create($request->all());
        return response()->json(($jugador));
    }
    public function update(Request $request,$id){
        $jugador=Jugador::find($id);
        if($jugador){
            $jugador->update($request->all());
            return response()->json('Jugador Actualizado',200);

        }
        else{
            return response()->json('No existe el Jugador',409);
        }

    }
    public function show($id){
        $jugador=Jugador::find($id);
        return response()->json($jugador);
    }
}
