<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class bti_news extends Model
{
    //
    protected $fillable = ['id', 'name', 'text', 'img'];

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

    public function uploadImage($image)
        {
            if($image === null) { return; }

            $this->removeImage();
            $filename = str_random(10) . '.' . $image->extension();
            $image->storeAs('uploads', $filename);
            $this->img = $filename;
            $this->save();
        }
        public function removeImage() {
                if($this->img != null) {
                    Storage::delete('uploads/' . $this->img);
                }
            }
}
