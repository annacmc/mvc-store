<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

            protected $fillable = [
               'name',
               'cover_image',
               'category',
               'count',
               'price',
               'description',
            ];

            public function getImageAttribute()
            {
               return $this->cover_image;
            }
}
