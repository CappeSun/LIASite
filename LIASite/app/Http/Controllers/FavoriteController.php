<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function get(Request $request)
    {
        $panels = Favorite::where('user_id', Auth::user()['id'])->get()->toArray();

        return view('favorites')->with('panels', $panels);
    }

    public function add(Request $request)   // To be accessed via JS
    {
        $data = json_decode(file_get_contents('php://input'), true);

        $fav = new Favorite;
        $fav->user_id = Auth::user()['id'];
        $fav->panel_id = $data['id'];
        $fav->save();
    }

    public function remove(Request $request)
    {
        $fav = Favorite::where('user_id', Auth::user()['id'])
            ->where('panel_id', $request->panel_id)->first();
        $fav->delete();
    }
}
