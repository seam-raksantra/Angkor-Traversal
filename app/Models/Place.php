<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    // protected $primaryKey = 'place_id';

    protected $fillable = [
        'province_id',
        'name',
        'price',
        'duration',
        'location',
        'image',
        'details',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    
    public function averageRating()
    {
        return $this->ratings()->avg('stars');
    }    
}
