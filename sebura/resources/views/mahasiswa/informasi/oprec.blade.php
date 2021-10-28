@extends('layouts.main')
@section('content')
@include('layouts.navbar')

<div class="container pt-3">
    <div class="card p-3">
        <div class="row">
            <div class="col-md-2">
                <a href="" target="_blank" class="btn btn-danger">
                    <span class="fa fa-download"></span> Download File
                </a>
            </div>
            <div class="col-md-10">
                <p>ehfuehfeufeufgeufheufheufheufheufheufheufheufheufheufh</p>
            </div>
        </div>
        <hr>
        <h2 class="alert alert-primary text-center">FORM OPEN RECRUITMENT</h2>

        <form action="">

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label" style="text-align: right;">NIM 
                </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword">
              </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label" style="text-align: right;">Nama Lengkap 
            </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword">
          </div>
      </div>

      <div class="row">
          <div class="col-md-6">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label" style="text-align: right;">Tempat</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="inputPassword">
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-3 col-form-label" style="text-align: right;">TTL</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="inputPassword">
          </div>
      </div>
  </div>
</div>





<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label" style="text-align: right;">Nama Lengkap 
    </label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
  </div>
</div>

<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label" style="text-align: right;">Pilih Jurusan</label>
    <div class="col-sm-10">
        <select class="form-control">
            <option value="">1. Teknik Informatika</option>
            <option value="">2. Rekayasa Perangkat Lunak</option>
            <option value="">3. Perancangan Manufaktur</option>
            <option value="">4. Teknik Pendingin dan Tata Udara</option>
            <option value="">5. Teknik Mesin</option>
            <option value="">6. Keperawatan</option>
        </select>
    </div>
</div>

<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label" style="text-align: right;">Alasan Bergabung</label>
    <div class="col-sm-10">
        <textarea class="form-control" rows="6"></textarea>
    </div>
</div>

<div class="mb-3 row">
    <label for="" class="col-sm-2 col-form-label" style="text-align: right;">
        Masukkan File
    </label>
    <div class="col-sm-10">
        <input type="file" class="form-control" name="">
    </div>
</div>

<hr>

<div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-10">
        <button class="btn btn-success">
            <i class="fa fa-plus"></i> Submit
        </button>
    </div>
</div>

</form>
</div>
</div>

<br>

@endsection
