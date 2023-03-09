<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[

        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        // if (Auth::guard('webguru')->check()) {
        //         if(Auth::guard('webguru')
        //         ->attempt($request->only(['email', 'password'])))
        //     {
        //         return redirect()
        //             ->route('murid.home');
        //     }

        //     return redirect()
        //         ->back()
        //         ->with('error', 'Invalid Credentials');
        // } elseif(Auth::guard('webmurid')->check()) {
        //         if(Auth::guard('webmurid')
        //         ->attempt($request->only(['email', 'password'])))
        //     {
        //         return redirect()
        //             ->route('murid.home');
        //     }

        //     return redirect()
        //         ->back()
        //         ->with('error', 'Invalid Credentials');
        // }

        // if (condition) {
        //     # code...
        // } else {
        //     # code...
        // }
        
        

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/home');
        // }

        // return back()->with('loginError', 'Login failed!');


            if(Auth::guard('webmurid')
            ->attempt($request->only(['email', 'password'])))
        {
            return redirect()
            ->route('murid.home');

        } elseif (Auth::guard('webguru')
                    ->attempt($request->only(['email', 'password'])))
        {
            return redirect()
            ->route('guru.home');
        }

        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');


    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/auth/login');
    }
}
