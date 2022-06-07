<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
       public function index (){

        $courses = Chapter::all();
        return response()->json(['course'=>$courses],200);
    }

    public function store(){
        Chapter::create([
                'course_id'=>$request->course_id,
                'title'=>$request->title,
                'description'=>$request->description,
                'path_image'=>$request->path_image,
                'path_file'=>$request->path_file
            ]);
        return response()->json('success',201);
    }

    public function show(int $id){
        $course = Chapter::find($id);
            return response()->json(['course'=>$course],201);
    }
}
