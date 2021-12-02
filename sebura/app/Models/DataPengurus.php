<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengurus extends Model
{
    use HasFactory;
    protected $table = 'data_penguruses';
    protected $fillable = [
        'nama',
        'prodi',
        'jabatan',
        'divisi_sebura',
        'tahun_kepengurusan',
        'gambar',
    ];

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_pengurus', 'id');
    }

    public function getjabatan()
    {
        return $this->hasOne(Jabatan::class, "id", 'jabatan');
    }

    public function getprodi()
    {
        return $this->hasOne(Prodi::class, "id", 'prodi');
    }

    public function getdivisi()
    {
        return $this->hasOne(Divisi::class, "id", 'divisi_sebura');
    }
}
