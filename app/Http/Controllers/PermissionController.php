<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use Auth;

class PermissionController extends Controller
{
    public function  notAllowed(){
        $NonPermis = Permission::where('permis', false);
    }

    public function store(Request $request, int $id){
       // $userId = Auth::user()->id;
        $permission = Permission::create(['user_id'=>$id]);
        return response()->json(['permission created successfull'],201);
    }

    public function  edit(Request $request, int $id){
        $permission = Permission::where('user_id', $id)->update('permis',1);

        return response()->json(['updated successfully'], 201);
    }
}
