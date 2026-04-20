<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Socialite;

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


    function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    function googleCallback(){
        $user = Socialite::driver('google')->stateless()->user();

        $customer = Customer::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'phone' => rand(11111111111,99999999999),
            'email' => $user->email,
            'password' => Hash::make("HMS_" . rand(1111, 9999)),
        ]);
        
        Auth::guard('customer')->login($customer);

        return redirect(route('customer.dashboard'));

    }
}
