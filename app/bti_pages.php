<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bti_pages extends Model
{
    //
    protected $fillable = ['parent', 'name', 'content_page'];

    public static function create($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->save();

        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
