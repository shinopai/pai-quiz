<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'percentage_correct_answer'
    ];

    /**
     * relation
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
