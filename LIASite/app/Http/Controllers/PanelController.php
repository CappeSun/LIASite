<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panel;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function get(Request $request, $panel){
        // Get panel id from panel name
        return view('panel')->with('panel', Panel::where('name', $panel));
    }

    public function create(Request $request)
    {
        if (Auth::user()['access_level'] < 1)
            return response('Only company accounts may create a panel', 401);
        if (!Auth::user()['email_verified_at'])
            return response('Email not yet verified, contact <email> and I\'ll get you set up', 401);
        if (Panel::where('user_id', Auth::user()['id'])->first())
            return response('You may only create one panel', 401);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'positions' => 'required|string|max:500',
            'desc' => 'required|string|max:2000',
            'size' => 'required|numeric|min:0|max:3',
        ]);

        switch ($request->size){
            case '0':
                $request->size = '1-4';
                break;
            case '1':
                $request->size = '5-11';
                break;
            case '2':
                $request->size = '11-19';
                break;
            case '3':
                $request->size = '20+';
                break;
            default:
                return response('Team size was out of bounds... Weird', 500);
                break;
        }

        $panel = new Panel;

        $panel->user_id = Auth::user()['id'];
        $panel->name = $request->name;
        $panel->email = $request->email;
        $panel->location = $request->location;
        $panel->area = $request->area;
        $panel->positions = $request->positions;
        $panel->desc = $request->desc;
        $panel->size = $request->size;

        $panel->save();

        return redirect('/account');
    }

    public function update(Request $request)
    {
        // return response('Blame Cappe', 501);    // Temporary until done

        if (Auth::user()['access_level'] < 1)
            return response('Only company accounts may create a panel', 401);

        $panel = Panel::where('user_id', Auth::user()['id'])->first();

        if (!$panel)
            return response('You do not have a panel yet', 401);

        $this->validate($request, [
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'location' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'positions' => 'nullable|string|max:500',
            'desc' => 'nullable|string|max:2000',
            'size' => 'nullable|numeric|min:0|max:3',
        ]);

        if ($request->name) $panel->name = $request->name;
        if ($request->email) $panel->email = $request->email;
        if ($request->location) $panel->location = $request->location;
        if ($request->area) $panel->area = $request->area;
        if ($request->positions) $panel->positions = $request->positions;
        if ($request->desc) $panel->desc = $request->desc;
        if ($request->size) $panel->size = $request->size;

        $panel->update();

        return back();
    }

    public function delete(Request $request)
    {
        // return response('Blame Cappe', 501);    // Temporary until done

        if (Auth::user()['access_level'] < 1)
            return response('Only company accounts may create a panel', 401);

        $panel = Panel::where('user_id', Auth::user()['id'])->first();

        $panel->delete();

        return back();
    }
}