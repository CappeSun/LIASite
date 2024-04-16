<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

        if ($request->level == 2){
            // Tell the user they gotta verify email
            return 'Lv. 2!';
        }

        return redirect('/');
    }

    public function showAllUsers()
    {
        $users = User::all();
        return view('matcha', ['users' => $users]);
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