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
                                                            <th>Jurusan</th>
                                                            <th>Absensi</th>
                                                            <th>Tanggal</th>
                                                            <th>Aksi</th>

                                                        </tr>
                                                    </thead>
                                                    <tfoot>

                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Bpk Wardika</td>
                                                            <td>Pembina</td>
                                                            <td>Teknik Pendingin Tata Udara</td>
                                                            <td>Hadir</td>
                                                            <td>29/10/2021</td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>2</td>
                                                            <td>Bpk Wardika</td>
                                                            <td>Pembina</td>
                                                            <td>Teknik Pendingin Tata Udara</td>
                                                            <td>Hadir</td>
                                                            <td>29/10/2021</td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>3</td>
                                                            <td>Bpk Wardika</td>
                                                            <td>Pembina</td>
                                                            <td>Teknik Pendingin Tata Udara</td>
                                                            <td>Hadir</td>
                                                            <td>29/10/2021</td>
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
