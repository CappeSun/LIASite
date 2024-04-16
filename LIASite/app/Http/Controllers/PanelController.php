<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panel;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function getList(Request $request){
        $panels = Panel::where('public', false)->get()->toArray();   // Byt till true vid ordentlig release
        return view('panels')->with('panels', $panels);
    }

    public function get(Request $request, $panel){
        // Get panel id from panel name
        return view('panel')->with('panel', Panel::where('name', $panel));
    }

    public function create(Request $request)
    {
        if (Auth::user()['access_level'] < 1)
            return response('Only company accounts may create a panel', 401);
        if (Panel::where('user_id', Auth::user()['id'])->first())
            return response('You may only create one panel', 401);
    
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'contact' => 'required|email|max:255',
            'location' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'positions' => 'required|string|max:500',
            'tasks' => 'required|string|max:2000',
            'size' => 'required|string|max:255',
        ]);

        $panel = new Panel;

        $panel->user_id = Auth::user()['id'];
        $panel->name = htmlspecialchars($request->name);
        $panel->contact = htmlspecialchars($request->email);
        $panel->location = htmlspecialchars($request->location);
        $panel->area = htmlspecialchars($request->area);
        $panel->positions = htmlspecialchars($request->positions);
        $panel->tasks = htmlspecialchars($request->desc);
        $panel->size = htmlspecialchars($request->size);

        $panel->save();

        return redirect('/panels');
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
            'email' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'positions' => 'nullable|string|max:500',
            'desc' => 'nullable|string|max:2000',
            'size' => 'nullable|numeric|min:0|max:3',
        ]);

        if ($request->name) $panel->name = htmlspecialchars($request->name);
        if ($request->email) $panel->email = htmlspecialchars($request->email);
        if ($request->location) $panel->location = htmlspecialchars($request->location);
        if ($request->area) $panel->area = htmlspecialchars($request->area);
        if ($request->positions) $panel->positions = htmlspecialchars($request->positions);
        if ($request->desc) $panel->desc = htmlspecialchars($request->desc);
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

    public function public(Request $request)
    {
        if (!Auth::user()['email_verified_at'])
            return view('verify');

        $panel = Panel::where('user_id', Auth::user()['id']);
        $panel->public = true;
        $panel->save();
    }

    public function private(Request $request)
    {
        if (!Auth::user()['email_verified_at'])
            return view('verify');

        $panel = Panel::where('user_id', Auth::user()['id']);
        $panel->public = false;
        $panel->save();
    }

    public function matcha(Request $request){
        $panels = Panel::where('public', false)->get()->toArray();  // Byt till true vid ordentlig release
        return view('matcha')->with('panels', $panels);
    }
}