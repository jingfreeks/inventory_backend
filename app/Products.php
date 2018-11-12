<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable=['code','name','userid','product','cagetory'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
