<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data = [
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email,' . Auth::id(),
            'username' => 'required|unique:users,username,' . Auth::id(),
        ];

        if ($request->password) {
            $data['password'] = 'password';
        }

        $validated = $request->validate($data);

        User::where('id', Auth::id())->update($validated);

        notify()->success('Berhasil Update Profile');
        return redirect()->back();
    }
}
