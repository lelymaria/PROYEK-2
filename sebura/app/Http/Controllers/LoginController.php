<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Login;

class LoginController extends Controller
{
    // public function admin()
    // {
    //     echo "hay";
    // }

    public function login(Request $request){
        $login = Login::where('username', $request->username)->first();

        if($login) {
            if(password_verify($request->password, $login->password)){
                Session::put('akun', $login);
                return redirect('/admin');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function logout() {
        Session::flush();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $request->validate([
        'username' => 'required',
        'password' => "required",
        'role'=> 'required'
    ]);
    Login::create($request->all());
    return redirect()->back()->with('success','Post updated successfully');
    }

    public function destroy($id) {
        Login::where("id", $id)->delete();

        return redirect()->back()
                        ->with('success',"<script>alert('Post deleted successfully')</script>");
    }
}
