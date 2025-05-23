<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(){
        $clubs = Club::get();
        return response()->json($clubs); 
    }//CRUD
    public function destroy($id){
        $club=Club::find($id);
        if($club){
            $club->delete();
            return response()->json('Club eliminado',200);
        }
        else
            return response()->json('No existe el Club',409);
    }
    public function store(Request $request){
        $club=Club::create($request->all());
        return response()->json(($club));
    }
    public function update(Request $request,$id){
        $club=Club::find($id);
        if($club){
            $club->update($request->all());
            return response()->json('Club Actualizado',200);

        }
        else{
            return response()->json('No existe el Club',409);
        }

    }
    public function show($id){
        $club=Club::find($id);
        return response()->json($club);
    }
}
