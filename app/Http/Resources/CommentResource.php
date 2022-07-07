<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /*return parent::toArray($request);*/

        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'course_id'=>$this->course_id,
            'commentaire'=>$this->commentaire
            ];
    }

    public function with($request){
        return [
               'version'=>'1.0',
               'author_url'=>url('https://github.com/jocelinkisenga')
            ];
    }
}
