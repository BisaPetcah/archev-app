<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthGoogleController extends Controller
{
    public function auth(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'password' => Hash::make('123'),
            'email' => $callback->getEmail(),
            'is_auth_google' => true,
            'avatar_google' => $callback->getAvatar(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
        ];

        $user = User::firstOrCreate(['email' => $data['email']], $data);
        // $user->avatar_google = $data['avatar_google'];
        $user->save();

        Auth::login($user, true);
        return redirect()->route('dashboard');
    }
}
