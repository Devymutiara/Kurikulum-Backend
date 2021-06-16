<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    

    public function author()
    {
        return $this->hasMany(Author::class);
    }

}
