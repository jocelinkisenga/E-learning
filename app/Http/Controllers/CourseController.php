<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Auth;

class CourseController extends Controller
{
    public function index (){

        $courses = Course::orderBy('id','desc')->get();
        return response()->json(['all courses','course'=>$courses],200);
    }

    public function store(Request $request){
        $fileName = time().'_'.$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('uploads', $fileName, 'public');

        $user_id = Auth::user()->id;
        Course::create([
                'owner_id'=>$user_id,
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$fileName,
            ]);
        return response()->json('course created success',201);
    }

    public function show(int $id){
        $course = Course::find($id);
            return response()->json(['course'=>$course],201);
    }
}
