<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;




class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

//     public function store(Request $request)
//     {
//         // validate
//         $validatedAttributes = $request->validate([
//             'name' => ['required'],
 
//             'email'=> ['required', 'email', 'unique:users,email'],
//             'password'=> ['required', Password::min(6), 'confirmed']
//         ]);
        
//         $factionAttributes = $request->validate([
//             'faction'=> ['required'],
//         ]);
//         // create the user
//         $user = User::create($validatedAttributes);

//         $user->faction()->create([
//             'name' => $factionAttributes['faction'],
//         ]);

//         // log in
//         Auth::login($user);

//         // redirect somewhere 
//         return redirect('/jobs');
//     }
// }

public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name'=> ['required'],
            'last_name' => ['required'],
            'email'=> ['required', 'email', 'unique:users,email'],
            'password'=> ['required', 'confirmed', Password::min(6)],
        ]);

        $factionAttributes = $request->validate([
            'faction'=> ['required'],
        ]);

        $user = User::create($userAttributes);

        $user->faction()->create([
            'name' => $factionAttributes['faction'],
            'user_id' => $user->id,
        ]);

        Auth::login($user);

        return redirect('/');
    }

}
