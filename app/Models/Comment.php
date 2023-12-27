<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Comment extends Eloquent
{
    protected $fillable = ['name', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
