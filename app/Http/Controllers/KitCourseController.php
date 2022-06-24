<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KitCourse;
use App\Models\Course;
use Auth;

class KitCourseController extends Controller
{
    
    public function index(){
        $kitcourses = KitCourse::all();
        return response()->json(['kits'=>$kitcourses],200);
    }

    public function store (int $id){

        $course = Course::find($id);
        $user_id = Auth::user()->id;

        KitCourse::create([
                'user_id'=>$user_id,
                'course_id'=>$course->id
            ]);
        return response()->json('data saved successfully');

    }
}
