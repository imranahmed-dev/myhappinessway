<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Post;
class Comment extends Model
{
	Protected $table = "comments";
   public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }
}
