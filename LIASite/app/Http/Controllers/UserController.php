<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
    }

    public function updateEmail(Request $request)
    {
        return response('Blame Cappe', 501);
        
        $user = User::FindOrFail(Auth::user()['id']);

        // Implement at some point
    }

    public function delete(Request $request)
    {
        return response('Blame Cappe', 501);
    }
}