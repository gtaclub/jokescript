<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'category', 'status'
    ];

    public function joke(){
        return $this->belongsToMany('App\Joke', 'category_joke', 'categories_id', 'jokes_id');
    }
}
