<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        "title", "content", "date_written",
        "featuerd_image", "vote_up",
        "vote_down", "user_id", "category_id"
    ];

    public function Author()
    {
        return $this->belongsTo(user::class,'user_id','id');
    }

    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
