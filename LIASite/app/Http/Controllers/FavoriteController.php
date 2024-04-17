<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Panel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function get(Request $request)
    {
        $favorites = Favorite::where('user_id', Auth::user()['id'])->get()->toArray();

        $panels = [];

        foreach ($favorites as $favorite)
            $panels[] = Panel::where('id', $favorite['panel_id'])->first()->toArray();

        $users = [];

        foreach ($panels as $panel)
            $users[] = User::where('id', $panel['user_id'])->first();

        return view('favorites')->with('panels', $panels)->with('users', $users);
    }

    public function add(Request $request)   // To be accessed via JS
    {
        $data = json_decode(file_get_contents('php://input'), true);

        if (Favorite::where('user_id', Auth::user()['id'])->where('panel_id', $data['id'])->first()) return;

        $fav = new Favorite;
        $fav->user_id = Auth::user()['id'];
        $fav->panel_id = $data['id'];
        $fav->save();
    }

    public function remove(Request $request)
    {
        if (!Favorite::where('user_id', Auth::user()['id'])->where('panel_id', $request->id)->first())
            return redirect('/favorites');

        $fav = Favorite::where('user_id', Auth::user()['id'])
            ->where('panel_id', $request->id)->first();
        $fav->delete();

        return redirect('/favorites');
    }
}
