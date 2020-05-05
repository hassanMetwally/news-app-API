<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  protected $fillable = [
      'content' , 'date_written',
      'user_id' , 'post_id'
  ];

  public function author(){
    return $this->belongsTo(user::class,'user_id','id');
  }

  public function post(){
    return $this->belongsTo(post::class);
  }
}
