<?php

namespace App\Models;

use Eloquent;

class Dorm extends Eloquent
{
    // protected $table = 'places';

    protected $fillable = [
        'name',
        'description',
        'location',
        'image',
        'category_id',
        'rating',
        'activities',
        'nearby_places',
        'opening_hours',
        'entrance_fee',
        'website',
        'phone_number',
        'email',
        'facebook',
        'twitter',
        'instagram'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
