<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use Auth;

class PermissionController extends Controller
{
    protected int $userId;

    public function  index(){
        $NonPermis = Permission::wherePermis('null');
        return response()->json(['notAllowed'=>$NonPermis, 'list of all not notAllowed'],200);
    }

    public function store(Request $request){
        $this->userId = Auth::user()->id;
        $permission = Permission::create(['user_id'=>$this->userId]);
        return response()->json(['permission created successfull'],201);
    }

    public function  edit(Request $request, int $id){
        
        $permission = Permission::whereUser_id($id)->update(['permis'=>1]);

        return response()->json(['updated successfully'], 201);
    }

    public function allowed(){
        $allowed = Permission::all();
        return response()->json(['allowed'=>$allowed, 'this users are allowed']);
    }
}
