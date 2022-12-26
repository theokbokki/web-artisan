<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $possible_roles = ['student', 'teacher', 'alumni'];
        foreach ($user->roles as $role) {
            if (in_array($role->role, $possible_roles)) {
                $user->tag = $role->role;
            }
        }
        return view('profile.show', compact('user'));
    }
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'email' => ['email' ,'nullable', 'max:255', Rule::unique(User::class)],
            'username'=>['nullable', 'max:24'],
            'avatar'=>['nullable'],
            'old_password' => ['nullable', 'current-password'],
            'password' => ['nullable', 'confirmed', Password::defaults()],
        ]);

        $user=Auth::user();

        $user_old_pw=Auth::user()->password;

        isset($request->username) ? $user->username = $request->username : '';
        isset($request->email) ? $user->email = $request->email : '';
        if (isset($request->avatar)) {
            $request->avatar = $request->file('avatar')->store('avatars');
            $user->avatar = $request->avatar;
        }
        isset($request->old_password) ?
        isset($request->password) ? $user->password = bcrypt($request->password) : '' : '';

        // dd($user_old_pw, $user->password, $request->old_password);

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
