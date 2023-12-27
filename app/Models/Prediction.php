<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//use App\Models\Prediction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Prediction extends Model
{
    public static function loadModel($filePath)
    {
        return Storage::get($filePath);
    }
}
