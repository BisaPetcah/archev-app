<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class UserProfileController extends Controller
{
    function show(Request $request)
    {
        return view('profile', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

    function update(Request $request)
    {
        $user = Auth::user();

        $data = [
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email,' . Auth::id(),
            'username' => 'required|unique:users,username,' . Auth::id(),
        ];

        if ($request->password) {
            $data['password'] = ['string', new Password, 'confirmed'];
        }

        $validated = $request->validate($data);

        if ($request->password) {
            $validated['password'] = Hash::make($validated['password']);
        }

        User::find($user->id)->update($validated);

        notify()->success('Berhasil Update Profile');
        return redirect()->route('profile.show');
    }
}
