<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;


    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function sendResetResponse(Request $request, $response)
    {
        session()->flash('success', 'Password reset successed, you are in the home page now!');
        return redirect($this->redirectPath());
    }
}
