<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function show()
    {
        if(Auth::check()){
        return redirect('/dasboarduser');
        }
        return view('Modal.modal');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (Auth::validate($credentials)) {
            return redirect()->to('/login')->withErrors('auth.failed');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user); 
    }
    public function authenticated(Request $request, $user){
    return redirect('/home');
    }
}
