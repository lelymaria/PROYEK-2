<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Login;

class LoginController extends Controller
{
    public function admin()
    {
        echo "hay";
    }

    public function login(Request $request){
        $login = Login::where([
            'username' => $request->username,
            'password' => $request->password
        ])->first();

        if($login) {
            Session::put('akun', $login);
            return redirect('/admin');
        } else {
            return redirect()->back();
        }
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

}
