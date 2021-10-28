@extends('layouts.mainadmin')

@section('sidebar')
@include('layouts.sidebar')
@endsection
@section('topbar')
@include('layouts.topbar')
@endsection
@section('content')

<!-- Page Heading -->
                                    <h1 class="h3 mb-2 text-gray-800">Data Absensi</h1>
                                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                                        For more information about DataTables, please visit the <a target="_blank"
                                            href="https://datatables.net">official DataTables documentation</a>.</p>

                                    <!-- DataTales Example -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">DataTables Absensi</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Prodi</th>
                                                            <th>Divisi</th>
                                                            <th>Gambar</th>
                                                            <th>Aksi</th>

                                                        </tr>
                                                    </thead>
                                                    <tfoot>

                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Alif</td>
                                                            <td>Ketua Umum</td>
                                                            <td>Teknik Pendingin Tata Udara</td>
                                                            <td>Paduan Suara</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>2</td>
                                                            <td>Beben</td>
                                                            <td>Wakil Ketua Umum</td>
                                                            <td>Teknik Pendingin Tata Udara</td>
                                                            <td>Paduan Suara</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>3</td>
                                                            <td>Ananta</td>
                                                            <td>Sekretaris Umum</td>
                                                            <td>Teknik Informatika</td>
                                                            <td>Paduan Suara</td>
                                                            <td></td>
                                                            <td></td>
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
