<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'maticna_stevilka' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = \App\Models\User::where('maticna_stevilka', $request->maticna_stevilka)->first();

        if (!$user) {
            return back()->withErrors(['maticna_stevilka' => 'Uporabnik s to matično številko ne obstaja.']);
        }

        // Optional: update name/email if needed — ali pustiš nespremenjeno
        if (!$user->email) {
            $user->name = $request->name;
            $user->email = $request->email;
        }

        $user->password = Hash::make($request->password);
        $user->email_verified_at = null;
        $user->save();

        // event(new Registered($user));
        Auth::login($user);

        return redirect()->intended('/admin'); // ali kamor želiš
    }
}
