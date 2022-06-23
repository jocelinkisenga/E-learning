<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;
use App\Models\User;
use App\Models\Kitcourse;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['owner_id','title','description','number_chapters','image'];

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kitcourses(){
        return $this->hasMany(Kitcourse::class);
    }
}
