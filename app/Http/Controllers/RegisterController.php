<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    //

    public function show(){
        if(Auth::check()){
            return redirect('/home');
            }
     return view('Modal.modal');
    }
    public function register(RegisterRequest $request){
        $user=User::create($request->validated());
        return redirect('/')->with('success', 'Account created successfully');
    }
}
