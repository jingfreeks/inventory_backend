<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable=['code','name','userid'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}


