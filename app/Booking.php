<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {
    
    protected $fillable = ['user_id', 'ride_id', 'capacity', 'status'];
    
    public function User(){
        return $this->belongsTo('App\User');
    }
    
    public function Ride(){
        return $this->belongsTo('App\Ride');
    }
    
    public function bookable() {
        return $this->morphTo();
    }
}
