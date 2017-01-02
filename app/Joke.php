<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $table = 'jokes';
    protected $fillable = [
        'content', 'status'
    ];

    public function category(){
        return $this->belongsToMany('App\Category', 'category_joke', 'jokes_id', 'categories_id');
    }
}
