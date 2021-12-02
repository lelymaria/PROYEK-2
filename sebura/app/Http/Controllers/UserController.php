<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 public function data()
    {
        $data = [
            "data_user" => Login::all()
        ];
        return view("admin.datauser", $data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
        'username' => 'required',
        'password' => "required",
        'role'=> 'required'
    ]);

    Login::create([
        'username' => $request->username,
        'password' => bcrypt($request->password),
        'role' => $request->role
    ]);
    return redirect("admin/datauser")->with('success','Post updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            "edit" => Login::where("id", $id)->first()
        ];
        return view("admin.edituser", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Login::where("id", $request->id)->update([
            "username" => $request->username,
            "password" => $request->password,
            "role" => $request->role
        ]);

        return redirect("/admin/datauser")->with("success", "Data Berhasil di Simpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
