<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
    }


    public function index()
    {
        
    }

    public function notifications()
    {
        $guards = ['admin', 'doctor', 'chamber'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $guard = $guard == 'admin' ? 'backoffice' : $guard;
                return redirect()->route($guard.'.notification'); // Adjust this redirect as needed
            }
        }

        return redirect()->route('index'); // Default redirect if no guard is authenticated
    }

    public function profile()
    {
        $guards = ['admin', 'doctor', 'chamber'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $guard = $guard == 'admin' ? 'backoffice' : $guard;
                return redirect()->route($guard.'.profile'); // Adjust this redirect as needed
            }
        }

        return redirect()->route('index'); // Default redirect if no guard is authenticated
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        $guards = ['admin', 'doctor', 'web', 'chamber'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('index'); // Adjust this redirect as needed
            }
        }

        return redirect()->route('login'); // Default redirect if no guard is authenticated
    }
}
