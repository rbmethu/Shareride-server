<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model {
    
    protected $fillable = ['origin', 'destination', 'departure', 'capacity', 'booked', 'user_id'];
    
    public function User(){
        return $this->belongsTo('App\User');
    }
    
    public function Booking(){
        return $this->hasMany('App\Booking');
    }
}
