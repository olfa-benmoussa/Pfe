<?php

namespace App\Http\Controllers\Auth;

use App\Partenaire;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PartenaireRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:partenaire');
    }

    public function showRegistrationForm()
    {
        return view('auth.partenaire-register');
    }

    public function register(Request $request)
    {
        // Validate form data
        $this->validate($request,
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:partenaires'],
                'password' => ['required', 'string', 'min:8']
            ]
        );

        // Create admin user
        try {
            $partenaire = Partenaire::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Log the admin in
            Auth::guard('partenaire')->loginUsingId($admin->id);
            return redirect()->route('partenaire.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->only('name', 'email'));
        }
    }
}
