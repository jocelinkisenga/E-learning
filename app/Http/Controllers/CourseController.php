<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Auth;
use App\Http\Resources\CourseResource;
use App\Http\Repositories\CourseRepositorie;

class CourseController extends Controller
{
    public function index (){
        $courses = Course::all();
        return CourseResource::collection($courses);
    }

    public function store(Request $request){
       $course = CourseRepositorie::store_course($request);
        
        return new CourseResource($course);
    }

    public function show(int $id){
        $course = Course::findOrFail($id);
            return new CourseResource($course);
    }
}
