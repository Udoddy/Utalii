<?php
namespace App\Http\Controllers\SupportTeam;

use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller
{
    public function addToFavorites(Request $request)
{
    $user = Auth::user();
    $placeId = $request->input('place_id');

    // Check if the place is already added to favorites
    if ($user->favorites()->where('place_id', $placeId)->exists()) {
        return response()->json(['success' => false]);
    }

    // Create a new favorite
    $favorite = new Favorite();
    $favorite->user_id = $user->id;
    $favorite->place_id = $placeId;
    $favorite->save();

    return response()->json(['success' => true]);
}


//     public function favorites(Request $request)
// {
//     $userFavorites = Auth::user()->favorites()->with('place')->get();

//     return view('pages.support_team.timetables.favorites', compact('userFavorites', 'favorites'));
// }

public function favorites(Request $request)
{
    $userFavorites = Auth::user()->favorites()->with('place')->get();

    return view('pages.support_team.timetables.favorites', ['userFavorites' => $userFavorites]);
}


}
