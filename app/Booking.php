<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'room_id',
        'start',
        'end',
        'id',
        'is_paid',
        'is_reservation',
        'notes'
    ];

    public function room() {
        return $this->belongsTo('App\Room');
    }

    public function users() {
        return $this->belongsToMany('App\User', 'bookings_users', 'booking_id', 'user_id')->withTimestamps();
    }
}
