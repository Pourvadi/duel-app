<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = ['post_id','title', 'description'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
