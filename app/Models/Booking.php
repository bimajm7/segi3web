<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'plat_no', 'motor_brand', 'motor_type', 'service_type', 
        'booking_date', 'booking_time', 'notes', 'status', 'phone'
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false; 

}
