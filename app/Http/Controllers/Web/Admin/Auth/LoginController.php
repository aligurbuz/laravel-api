<?php

namespace App\Http\Controllers\Web\Admin\Auth;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /**
     * The method that displays the login page.
     *
     * @return View|RedirectResponse
     */
    public function index(): View|RedirectResponse
    {
        return $this->auth(function(){
            return view('auth.login',[]);
        });
    }

    /**
     * The method that works when the button is clicked in the login page.
     *
     * @param callable $callback
     * @return View|RedirectResponse
     */
    private function auth(callable $callback) : View|RedirectResponse
    {
        if(isPost()){
            return $this->loginRequest();
        }

        return call_user_func($callback);
    }

    /**
     * We are sending a login request to the API.
     * If the response is successful,true will be returned.
     *
     * @return RedirectResponse
     */
    private function loginRequest() : RedirectResponse
    {
        $request = api('login')->post();

        if(!is_null($errorMessage = $request->errorMessage())){
            return redirect()->route('login')->with(
                [
                    'error' => $errorMessage,
                    'email' => (postValues())['email'] ?? '',
                ]
            );
        }

        return redirect()->route('home');
    }
}
