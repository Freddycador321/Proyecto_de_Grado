<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::get();
        return response()->json($categorias); 
    }//CRUD
    public function destroy($id){
        $categoria=Categoria::find($id);
        if($categoria){
            $categoria->delete();
            return response()->json('Categoria Eliminado',200);
        }
        else
            return response()->json('No existe el Categoria',409);
    }
    public function store(Request $request){
        $categoria=Categoria::create($request->all());
        return response()->json(($categoria));
    }
    public function update(Request $request,$id){
        $categoria=Categoria::find($id);
        if($categoria){
            $categoria->update($request->all());
            return response()->json('Categoria Actualizado',200);

        }
        else{
            return response()->json('No existe el Categoria',409);
        }

    }
    public function show($id){
        $categoria=Categoria::find($id);
        return response()->json($categoria);
    }
}
