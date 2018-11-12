<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvTypes extends Model
{
    //
    protected $fillable=['code','name','userid'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
