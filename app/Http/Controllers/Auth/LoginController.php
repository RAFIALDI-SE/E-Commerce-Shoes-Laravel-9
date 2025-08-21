<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Tempat redirect default setelah login.
     *
     * @var string
     */
    protected $redirectTo = '/home'; // ini boleh tetap ada, tapi tidak digunakan jika ada method redirectTo()

    /**
     * Buat redirect berdasarkan role.
     */
    protected function redirectTo()
    {
        if (auth()->user()->is_admin) {
            return '/dashboard'; 
        }

        return '/home'; 
    }

    /**
     * Konstruktor.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
