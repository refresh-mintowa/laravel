<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = [
    'title',
    'body',
    ];
    //
  public function getPaginateByLimit(int $limit_number=10){
      return $this->orderBy('updated_at','DESC')->paginate($limit_number);
  }
}
