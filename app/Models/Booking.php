<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'user_id',
        'place_id',
        'status',
        'booking_date',
        'guests_count',
        'total_price',
    ];


    // Define the relationships
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
    

    public function place()
    {
        return $this->belongsTo(\App\Models\Place::class);
    }
    

    public function package()
    {
        return $this->belongsTo(Place::class, 'place_id'); // or TourPackage if that's my model
    }
}