<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Http\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use JsonException;

class AuthenticateController extends Controller
{

    /**
     * @throws JsonException
     * @throws ConnectionException
     */
    public function login(Request $request)
    {
        if($request->method() === 'POST'){
            $httpRequest = Http::post('login', [
                'email' => $request->email,
                'password' => $request->password
            ]);

            if(!$httpRequest['status']){
                return redirect()->route('admin.get.login')->with('message', 'Invalid credentials');
            }

            return redirect()->route('admin.dashboard.index');
        }

        return view('admin.login');
    }
}
