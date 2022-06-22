<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Auth;

class CourseController extends Controller
{
    public function index (){

        $courses = Course::all();
        return response()->json(['course'=>$courses],200);
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;
        Course::create([
                'owner_id'=>$user_id,
                'title'=>$request->title,
                'description'=>$request->description,
                'path_image'=>$request->path_image,
                'path_file'=>$request->path_file
            ]);
        return response()->json('course created success',201);
    }

    public function show(int $id){
        $course = Course::find($id);
            return response()->json(['course'=>$course],201);
    }
}
