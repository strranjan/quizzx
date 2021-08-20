<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
        if (Auth::check())
        {
            // return self::getDashboard();
        } else
        {
            return view('auth.login');
        }
    }

    // private static function getDashboard()
    // {
    //     if (Auth::check())
    //     {
    //          if (Auth::user()->is_admin == 1)
    //          {
    //             return view('dashboard');
    //          } 
    //          //else if (Auth::user()->is_student == 1)
    //         // {
    //         //     return view('dashboard.student');
    //         // } else if (Auth::user()->is_principal == 1)
    //         // {
    //         //     return view('dashboard.principal');
    //         // } else if (Auth::user()->is_parent == 1)
    //         // {
    //         //     return view('dashboard.parent');
    //         // } else if (Auth::user()->is_staff == 1)
    //         // {
    //         //     return view('dashboard.staff');
    //         // } else if (Auth::user()->is_enrollment == 1)
    //         // {
    //         //     return view('dashboard.enrollment');
    //         // }
    //     // }
    //     Auth::logout();
    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match for access  our admin dashboard.',
    //     ]);
    // }
    // }
}
