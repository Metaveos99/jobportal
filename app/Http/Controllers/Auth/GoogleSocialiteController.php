<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        // redirect user to "login with Google account" page
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleCallback()
    {
        try {
            // get user data from Google
            $user = Socialite::driver('google')->stateless()->user();


            // find user in the database where the social id is the same with the id provided by Google
            $finduser = User::where('email', $user->email)->first();

            if ($finduser)  // if user found then do this
            {
                // Log the user in
                Auth::login($finduser);

                // redirect user to dashboard page
                if (auth()->user()->role == 1) {
                    return redirect()->intended(route('admindashboard'));
                } elseif (auth()->user()->role == 2) {
                    return redirect()->intended(route('dashboard'));
                }
                
                return redirect('/');

            } else {
                // if user not found then this is the first time he/she try to login with Google account
                // create user data with their Google account data
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_image' => $user->avatar,
                    'social_type' => 'google',  // the social login is using google
                    'password' => bcrypt('my-google'),  // fill password by whatever pattern you choose
                ]);

                Auth::login($newUser);

                if (auth()->user()->role == 1) {
                    return redirect()->intended(route('admindashboard'));
                } elseif (auth()->user()->role == 2) {
                    return redirect()->intended(route('dashboard'));
                }

                return redirect('/');
            }
        } catch (\Exception $e) {
            Log::error('Registration failed: ' . $e);

            dd($e);
        }
    }
}
