<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing() {
        if (Session::get('akun')) {
        return redirect('/admin')->with('message', '<script>alert("Harus logout dulu!");</script>');
    } else {
        return view('mahasiswa.home');
    }
}

    public function home() {
        return view('mahasiswa.home');
    }

    public function visimisi() {
        return view('mahasiswa.profil.visimisi');
    }

    public function kepengurusan() {
        return view('mahasiswa.profil.strukturkepengurusan');
    }

    public function chrodpage() {
        return view('mahasiswa.informasi.chrodpage');
    }

    public function oprec() {
        return view('mahasiswa.informasi.oprec');
    }

    public function pengenalandiv() {
        return view('mahasiswa.informasi.pengenalandiv');
    }

    public function login() {
        return view('login.login');
    }

}
