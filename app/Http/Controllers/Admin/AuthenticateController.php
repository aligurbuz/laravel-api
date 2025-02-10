<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Http\Http;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{

    public function login(Request $request): View
    {
        if($request->method() === 'POST'){
            $httpRequest = Http::post('login', [
                'email' => $request->email,
                'password' => $request->password
            ]);

            if(!$httpRequest['status']){
                redirect()->route('admin.get.login')->with('message', 'Invalid credentials');
            }
            else{
                //
            }
        }

        return view('admin.login');
    }
}
