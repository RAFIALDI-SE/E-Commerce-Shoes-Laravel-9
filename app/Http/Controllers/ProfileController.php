<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile_view(){
        $user = Auth::user();
        return view('profile_view', compact('user'));

    }

    public function edit_profile (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8|confirmed'

        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        return Redirect::back();

    }
}
