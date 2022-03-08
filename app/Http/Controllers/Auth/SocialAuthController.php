<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $data = Socialite::driver($provider)->stateless()->user();

        $user = User::where('email', $data->email)->first();

        if ($user == null) {
            $user = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'password' => Hash::make(Str::random(10)),
            ]);
            event(new Registered($user));
        }

        Auth::login($user);

        return redirect()->route('index');
    }
}
