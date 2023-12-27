<?php

namespace App\Http\Controllers\SupportTeam;

use App\Http\Controllers\Controller;
use App\Models\Dorm;
use Illuminate\Http\Request;

class ShowPlaces extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.support_team.dorms.show', [
            'dorms' => Dorm::latest()->paginate(),
        ]);
    }
}
