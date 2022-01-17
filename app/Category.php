<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * relation
     */
    public function quizzes(){
        return $this->hasMany('App\Quiz');
    }

    public function keywords(){
        return $this->hasMany('App\Keyword');
    }
}
