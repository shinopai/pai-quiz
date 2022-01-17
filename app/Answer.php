<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * relation
     */
    public function quiz(){
        return $this->hasOne('App\Quiz');
    }
}
