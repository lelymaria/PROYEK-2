@extends('layouts.mainadmin')

@section('sidebar')
@include('layouts.sidebar')
@endsection
@section('topbar')
@include('layouts.topbar')
@endsection
@section('content')

<!-- Page Heading -->
                                    <h1 class="h3 mb-2 text-gray-800">Data Event</h1>
                                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                                        For more information about DataTables, please visit the <a target="_blank"
                                            href="https://datatables.net">official DataTables documentation</a>.</p>

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
                                                            <th>Nama Event</th>
                                                            <th>Panitia</th>
                                                            <th>Nama Panitia</th>
                                                            <th>Tugas</th>
                                                            <th>Aksi</th>

                                                        </tr>
                                                    </thead>
                                                    <tfoot>

                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Diesnatalis</td>
                                                            <td>Sie Acara</td>
                                                            <td>Alif Rizki</td>
                                                            <td>Membuat Rundown Acara</td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>3</td>
                                                            <td>Diesnatalis</td>
                                                            <td>Wakil Sie Acara</td>
                                                            <td>Ananta</td>
                                                            <td>Membuat Rundown Acara</td>
                                                            <td></td>
                                                        </tr>

                                                        <tr>
                                                            <td>2</td>
                                                            <td>Diesnatalis</td>
                                                            <td>Korlap</td>
                                                            <td>Fiya</td>
                                                            <td>Mengatur Kondisi Lapangan</td>
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
