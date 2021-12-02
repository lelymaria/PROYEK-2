@extends('layouts.mainadmin')

@section('sidebar')
@include('layouts.sidebar')
@endsection
@section('topbar')
@include('layouts.topbar')
@endsection
@section('content')
@if (session('success'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            Berhasil
        </div>
    </div>
</div>
@endif
<!-- Page Heading -->
<div class="row">
    <div class="col-md-11">
        <h1 class="h3 mb-2 text-gray-800">Data User</h1>
    </div>
    <div class="col-md-1">
        <a href="/admin/form_tambah_pengurus" class="btn btn-success">
            Tambah
        </a>
    </div>
</div>

<br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
    </div>
    <div class="card-body">
        <form action="/admin/tambah" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for=""> Nama </label>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
            </div>
            <div class="form-group">
                <label for=""> Jabatan : </label>
                <select name="jabatan" id="jabatan">
                    <option value="">Belum Ada Data Jabatan</option>
                    @foreach ($jabatan as $j)
                    <option value="{{ $j->id }}"> {{ $j->nama_jabatan }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for=""> Prodi : </label>
                <select name="prodi" id="prodi">
                    <option value="">Belum Ada Data Prodi</option>
                    @foreach ($prodi as $p)
                    <option value="{{ $p->id }}"> {{ $p->nama_prodi }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for=""> Divisi Sebura : </label>
                <select name="divisi" id="divisi">
                    <option value="">Belum Ada Data Prodi</option>
                    @foreach ($divisi as $d)
                    <option value="{{ $d->id }}"> {{ $d->nama_divisi }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for=""> Tahun Kepengurusan </label>
                <input type="text" class="form-control" placeholder="Masukkan Tahun Angkatan" name="tahun_kepengurusan">
            </div>
            <div class="form-group">
                <label for="formFileMultiple" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFileMultiple" name="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Tambah
                </button>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
