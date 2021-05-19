<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page_content extends Model
{
    //
    protected $fillable = ['content'];

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
