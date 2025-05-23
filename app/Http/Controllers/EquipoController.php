<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index(){
        $equipos = Equipo::get();
        return response()->json($equipos); 
    }//CRUD
    public function destroy($id){
        $equipo=Equipo::find($id);
        if($equipo){
            $equipo->delete();
            return response()->json('Equipo Eliminado',200);
        }
        else
            return response()->json('No existe el Equipo',409);
    }
    public function store(Request $request){
        $equipo=Equipo::create($request->all());
        return response()->json(($equipo));
    }
    public function update(Request $request,$id){
        $equipo=Equipo::find($id);
        if($equipo){
            $equipo->update($request->all());
            return response()->json('Equipo Actualizado',200);

        }
        else{
            return response()->json('No existe el Equipo',409);
        }

    }
    public function show($id){
        $equipo=Equipo::find($id);
        return response()->json($equipo);
    }
}
