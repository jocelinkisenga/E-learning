<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /*return parent::toArray($request);
*/    
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'title'=>$this->title,
            'description'=>$this->description,
            'image'=>$this->image
            ];
    }

    public function with($request){
        return [
            'verion'=>'1.0',
            'author_url'=>url('https://github.com/jocelinkisenga')
            ];
    }
}
