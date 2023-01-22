<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $image_name = Str::random(24);
        Storage::disk('public')->put('/avatars/'.Str::slug($request->username).'/'.$image_name.'.png', file_get_contents('https://eu.ui-avatars.com/api/?size=240&background=random&name='.Str::slug($request->fullname)));

        $user = User::create([
            'name' => $request->fullname,
            'username'=>$request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'slug'=>Str::slug($request->fullname),
            'avatar'=> 'avatars/'.Str::slug($request->username).'/'.$image_name.'.png',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('profile.show', compact('user'));
    }
}
