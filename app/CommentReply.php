<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    protected $fillable =
        [
            'comment_id',
            'is_active',
            'author',
            'photo',
            'email',
            'body'
        ];

    public function comment(){
        $this->belongsTo('App\Comment');
    }
}
