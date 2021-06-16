<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    
    public $timestamps = false;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
