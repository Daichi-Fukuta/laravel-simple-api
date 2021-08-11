<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
