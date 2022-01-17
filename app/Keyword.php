<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    /**
     * define table that this model belongs to
     */
    protected $table = 'keywords';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'initial', 'keyword', 'description'
    ];

    /**
     * relation
     */
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
