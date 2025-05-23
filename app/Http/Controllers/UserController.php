<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return response()->json($users); 
    }//CRUD
    public function destroy($id){
        $user=User::find($id);
        if($user){
            $user->delete();
            return response()->json('Usuario Eliminado',200);
        }
        else
            return response()->json('No existe el usuario',409);
    }
    public function store(Request $request){
        $user=User::create($request->all());
        return response()->json(($user));
    }
    public function update(Request $request,$id){
        $user=User::find($id);
        if($user){
            $user->update($request->all());
            return response()->json('Usuario Actualizado',200);

        }
        else{
            return response()->json('No existe el usuario',409);
        }

    }
    public function show($id){
        $user=User::find($id);
        return response()->json($user);
    }
}


