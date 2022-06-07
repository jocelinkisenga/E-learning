<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
       public function index (){

        $chapters = Chapter::all();
        return response()->json(['course'=>$chapters],200);
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
        $chapter = Chapter::find($id);
            return response()->json(['course'=>$chapter],201);
    }
}
