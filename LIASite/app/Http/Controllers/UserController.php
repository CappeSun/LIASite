<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Panel;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
            'level' => 'required|numeric|min:1|max:2'
        ]);

        $user = new User;

        $user->name = htmlspecialchars($request->name);
        $user->email = htmlspecialchars($request->email);
        $user->password = htmlspecialchars($request->password);
        $user->access_level = htmlspecialchars($request->level);

        $user->save();

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        Auth::attempt($credentials);

        if ($request->level == 2){  // If user tries to create a company account
            if (Panel::where('user_id', Auth::user()['id'])->first())
                return response('You may only create one panel', 401);
    
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'contact' => 'required|string|max:255',
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
            $panel->positions = htmlspecialchars(rtrim($request->positions, '|'));
            $panel->tasks = htmlspecialchars($request->desc);
            $panel->size = htmlspecialchars($request->size);
    
            $panel->save();

            $panel = new Panel;

            return view('verify');
        }

        return redirect('/');
    }

    public function showAllUsers()
    {
        $company = Panel::all();
        return view('matcha', ['company' => $company]);
    }

    public function profile()
    {
        $user = auth()->user();

        return view('profile', compact('user'));
    }

    public function updateEmail(Request $request)
    {
        return response('Blame Cappe', 501);    // Temporary until done

        $user = User::FindOrFail(Auth::user()['id']);

        // Implement at some point
    }

    public function delete(Request $request)
    {
        return response('Blame Cappe', 501);    // Temporary until done

        $user = Panel::where('user_id', Auth::user()['id'])->first();

        $user->delete();

        return redirect('/');
    }
}

// Jag kan fixa de sidor som saknas, backend är ganska klar. Utan styling