<?php

namespace App\Http\Repositories;
use Auth;
use App\Models\Course;

class CourseRepositorie{

	public static function store_course($request){
			$fileName = time().'_'.$request->file('image')->getClientOriginalName();
        	$path=$request->file('image')->storeAs('images',$fileName,'public_uploads');
     		$user_id = Auth::user()->id;
		        Course::create([
		                'owner_id'=>$user_id,
		                'title'=>$request->title,
		                'description'=>$request->description,
		                'image'=>$fileName,
		            ]);
	}
}