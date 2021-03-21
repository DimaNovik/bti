<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bti_inventories extends Model
{
    protected $fillable = ['code', 'district', 'type_object', 'address', 'house_number', 'house_building', 'apartment', 'office_number', 'total_area', 'main_area', 'land_area', 'floor', 'status', 'created_at', 'updated_at'];

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
