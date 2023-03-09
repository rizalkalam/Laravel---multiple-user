<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MuridAuthController extends Controller
{
    // public function index()
    // {
    //     return view('login.index');
    // }

    // public function authenticate(Request $request)
    // {
    //     if(Auth::guard('webmurid')
    //            ->attempt($request->only(['email', 'password'])))
    //     {
    //         return redirect()
    //             ->route('murid.home');
    //     }

    //     return redirect()
    //         ->back()
    //         ->with('error', 'Invalid Credentials');
    // }

    // public function logout(Request $request)
    // {
    //     Auth::guard('webmurid')
    //     ->logout();

    // return redirect()
    //     ->route('/murid/login');
    // }
}
