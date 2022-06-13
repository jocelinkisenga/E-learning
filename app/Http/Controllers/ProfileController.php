<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Auth;

class ProfileController extends Controller
{
    public function user_courses(){
       $user_id = User::first();
       $course = Course::where('owner_id',1);
       return response()->json($course);
    }
}
