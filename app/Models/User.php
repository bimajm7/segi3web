<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['firstname', 'lastname', 'email', 'password', 'role'];

    protected $hidden = ['password'];

    // Relasi satu ke banyak (user bisa memiliki banyak bookings)
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public $timestamps = false;
}
