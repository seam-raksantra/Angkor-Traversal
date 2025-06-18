<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['user_id', 'place_id', 'stars'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function place() {
        return $this->belongsTo(Place::class);
    }
}