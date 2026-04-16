<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/user/dashboard';

    public function username()
    {
        return  'phone';
    }
    protected function guard()
    {
        return Auth::guard('customer');
    }

    // Sign In Form
    function showLoginForm()
    {
        return view('signin');
    }
    // Sign up Form 
    function showRegisterForm()
    {
        return view('signup');
    }
}
