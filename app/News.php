<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = ['name', 'text', 'img', 'updated_at'];

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
