<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KitCourse;
use App\Models\Course;

class KitCourseController extends Controller
{
    //
    public function index(){
        $kitcourses = KitCourse::all();
        return response()->json(['kits'=>$kitcourses],200);
    }

    public function store (int $id){

        $course = Course::find(2);

        KitCourse::create([
                'user_id'=>1,
                'course_id'=>$course->id
            ]);
        return response()->json('success');

    }
}
