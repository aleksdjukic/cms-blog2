<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

        'post_id',
        'is_active',
        'author',
        'photo',
        'email',
        'body'
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }

    public function replies(){
        return $this->belongsTo('App\CommentReply');
    }

}
