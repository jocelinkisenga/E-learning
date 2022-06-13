<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;
use App\Models\User;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['owner_id','title','description','number_chapters'];

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
