<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use App\Models\DataPengurus;
use app\Models\Absensi;
use Dflydev\DotAccessData\Data;

class AcaraAbsensiController extends Controller
{
    public function absensi(Acara $acara)
    {
        $absensiacara = [
            "data_absensi" => $acara->absensi,
            "acara" => $acara
        ];
        return view('/admin/absen/absensi', $absensiacara);
    }

    public function tambah(Acara $acara)
    {
        $data = [
            "data_pengurus" => DataPengurus::all(),
            "acara" => $acara
        ];
        return view('/admin/absen/tambah_absensi', $data);
    }

    public function lihatabsensi($id)
    {
        $data = Acara::findOrfail($id);
        return $id;
        // return view('admin.absen.absensi')->with([
        //     'data' => $data
        // ]);
    }


    // public function simpan(Acara $acara, Request $request)
    // {
    //     $absensi = new Absensi;
    //     $absensi->keterangan = $request->keterangan;
    //     $absensi->acara()->associate($acara);
    //     $absensi->pengurus()->associate($request->pengurus);
    //     $absensi->save();
    //     return redirect('/admin/acara/' . $acara->id . '/absensi');
    // }

    public function hapus(Request $request)
    {
        Absensi::where("id", $request->id)->delete();
        return redirect()->back()
            ->with('success', "<script>alert('Post deleted successfully')</script>");
    }

    public function edit($id)
    {
        $data_pengurus = DataPengurus::get();
        $keterangan = Acara::get();
        return view('admin.absen.edit_absensi', compact('data_pengurus', 'keterangan'));
    }

    public function update(Request $request)
    {
    }
}
