<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','title','description','path_image','path_file'];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
