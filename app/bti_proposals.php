<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bti_proposals extends Model
{
    protected $fillable = ['code', 'sum', 'copyes', 'type', 'person', 'personal_data', 'address', 'city', 'house_number', 'house_building', 'apartment', 'office', 'status', 'additionally', 'coefiction', 'created_at', 'updated_at'];


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
