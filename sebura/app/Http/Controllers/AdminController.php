<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Login;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        if (Session::get('akun')) {
        return view('admin.dashboard');
    } else {
        return redirect('/login');
    }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function datauser(){
        $data = [
        "data_user" => Login::all()
    ];

    return view('admin.datauser', $data);
    }

    public function kepengurusan()
    {
        return view("admin.kepengurusan");
    }

    public function absensi()
    {
        return view("admin.absensi");
    }

    public function oprec()
    {
        return view('admin.oprec');
    }

    public function event()
    {
        return view("admin.event");
    }
}
