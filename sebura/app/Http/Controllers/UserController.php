<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class UserController extends Controller
{
    public function data()
    {
        $data = [
            "data_user" => Login::all()
        ];
        return view("admin.datauser", $data);
    }
}
