<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index (){
        return response()->json('hello world');
    }

    public function store(){

    }

    public function show(int $id){
        
    }
}
