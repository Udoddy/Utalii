<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function show($id = null)
{
    if ($id) {
        $place = Place::findOrFail($id);
        return view('places.show', compact('place'));
    }
}

}
