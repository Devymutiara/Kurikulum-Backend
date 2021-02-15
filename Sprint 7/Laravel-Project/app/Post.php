<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    // public function scopeLatestFirst(){
    //     return $this->latest()->first();
    // }
    protected $fillable = ['title', 'slug', 'body'];
}
