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
            'password' => 'required|string|max:255',
            'level' => 'required|numeric|min:1|max:2'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->access_level = $request->level;

        $user->save();

        if ($request->level == 2){
            // Alert the user they gotta verify email
        }

        return redirect('/');
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
    }
}