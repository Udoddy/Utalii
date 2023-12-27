<?php

namespace App\Models;
use App\User;
use App\Models\Dorm;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Favorite extends Eloquent
{
    protected $table = "favorite";
    protected $fillable = ['user_id', 'place_id'];

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function place()
    {
        return $this->belongsTo(Dorm::class);
    }
}
