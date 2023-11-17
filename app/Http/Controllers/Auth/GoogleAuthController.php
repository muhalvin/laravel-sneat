<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function index()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $current_user = User::withTrashed()->where('gauth', $user->id)->first();

            if ($current_user) {
                if ($current_user->trashed()) {
                    $current_user->restore();
                }

                Auth::login($current_user);

                return redirect()->route('member.home')->with('success', 'Anda berhasil login!');
            } else {

                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name'      => $user->name,
                    'gauth'     => $user->id,
                    'password'  => Hash::make(Str::random(25, 'alpha-numeric'))
                ]);

                $newUser->where('email', $user->email)->update(['email_verified_at' => now()]);
                $newUser->assignRole('Member');

                Auth::login($newUser);

                return redirect()->route('member.home')->with('success', 'Anda berhasil login!');
            }
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', $e->getMessage());
        }
    }
}
