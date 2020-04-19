<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

   /* protected $appends = ['post_excerpt'];


    public function getPostExcerptAttribute()
    {
        return strtolower(
            substr($this->body, 0, 100)
        ).'...';
    }*/
}
