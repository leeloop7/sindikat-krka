<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegistrationController extends Controller
{
    /**
     * Step 1: Show form to enter matična številka
     */
    public function showForm()
    {
        return view('auth.registration-check');
    }

    /**
     * Step 2: Search user by matična številka and show registration form
     */
    public function checkMaticna(Request $request)
    {
        $request->validate([
            'maticna_stevilka' => 'required|string'
        ]);

        $user = User::where('maticna_stevilka', $request->maticna_stevilka)->first();

        if (!$user) {
            return redirect()->back()->withErrors([
                'maticna_stevilka' => 'Uporabnik s to številko ni bil najden.'
            ]);
        }

        return view('auth.registration-complete', compact('user'));
    }

    /**
     * Step 3: Store final registration data
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->user_id,
            'phone' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($request->user_id);

        $emailChanged = $user->email !== $request->email;

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        if ($emailChanged || !$user->hasVerifiedEmail()) {
            $user->email_verified_at = null;
        }

        $user->save();

        // Send verification email if needed
        if (is_null($user->email_verified_at)) {
            event(new Registered($user));
        }

        Auth::login($user);

        // Redirect based on verification status
        if (is_null($user->email_verified_at)) {
            return redirect()->route('verification.notice')
                ->with('success', 'Na vaš e-mail smo poslali povezavo za potrditev.');
        }

        return redirect()->route('filament.admin.pages.dashboard')
            ->with('success', 'Registracija uspešna!');
    }
}
