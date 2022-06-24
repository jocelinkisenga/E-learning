<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Auth;

class ProfileController extends Controller
{
    public function index(){
       $user_id = Auth::user()->id;
       $course = Course::whereOwner_id($user_id);
       return response()->json($course);
    }
}
