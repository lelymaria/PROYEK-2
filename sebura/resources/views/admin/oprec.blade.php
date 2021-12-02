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
<h1 class="h3 mb-2 text-gray-800">Data Open Recruitmen</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
        DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Open Recruitmen</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>No. WhatsApp</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bpk Wardika</td>
                        <td>1934567</td>
                        <td>08986543246</td>
                        <td>bpkwardika@gmail.com</td>
                        <td>Teknik Mesin</td>
                        <td>
                            <a href="" class="btn btn-success">
                                Terima
                            </a>
                            <a href="" class="btn btn-danger">
                                Tidak
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Bpk Wardika</td>
                        <td>1934567</td>
                        <td>08986543246</td>
                        <td>bpkwardika@gmail.com</td>
                        <td>Teknik Mesin</td>
                        <td>
                            <a href="" class="btn btn-success">
                                Terima
                            </a>
                            <a href="" class="btn btn-danger">
                                Tidak
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Bpk Wardika</td>
                        <td>1934567</td>
                        <td>08986543246</td>
                        <td>bpkwardika@gmail.com</td>
                        <td>Teknik Mesin</td>
                        <td>
                            <a href="" class="btn btn-success">
                                Terima
                            </a>
                            <a href="" class="btn btn-danger">
                                Tidak
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Bpk Wardika</td>
                        <td>1934567</td>
                        <td>08986543246</td>
                        <td>bpkwardika@gmail.com</td>
                        <td>Teknik Mesin</td>
                        <td>
                            <a href="" class="btn btn-success">
                                Terima
                            </a>
                            <a href="" class="btn btn-danger">
                                Tidak
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
