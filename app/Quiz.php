<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * relation
     */
    public function answer(){
        return $this->belongsTo('App\Answer');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
