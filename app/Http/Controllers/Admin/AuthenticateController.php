<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libs\Http\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

            Session::put('adminAuth', $httpRequest['resource'][0]['data'][0]['auth']['token']);
            Session::put('adminUser', $httpRequest['resource'][0]['data'][0]['user']);

            return redirect()->route('admin.dashboard.index');
        }

        return view('admin.login');
    }
}
