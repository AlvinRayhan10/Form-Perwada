@extends('layouts.app')

@section('nama')
    Data Pengurus Perwada
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-5">
                                <a href="formpengurus" class="btn btn-danger mb-2"><i
                                        class="mdi mdi-plus-circle me-2"></i>Tambah Data pengurus Perwada</a>
                            </div>
                            <div class="col-sm-7">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success mb-2 me-1"><i
                                            class="mdi mdi-cog"></i></button>
                                    <a href="{{ route('pengurusperwada.import') }}" class="btn btn-success mb-2"><i
                                            class="mdi mdi-plus-circle me-2"></i>Import</a>
                                    <a href="{{ route('pengurusperwada.export') }}" class="btn btn-danger mb-2"><i
                                            class="mdi mdi-plus-circle me-2"></i>Export</a>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Perwada</th>
                                        <th>No.Handphone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formpengurus as $d)
                                        <tr>
                                            <td>
                                                {{ $d->id }}
                                            </td>
                                            <td>
                                                {{ $d->nama }}
                                            </td>
                                            <td>
                                                {{ $d->alamat }}
                                            </td>
                                            <td>
                                                {{ $d->email }}
                                            </td>
                                            <td>
                                                {{ $d->perwada }}
                                            </td>
                                            <td>
                                                {{ $d->no_hp }}
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end table-responsive-->
@endsection()

@section('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.css" rel="stylesheet" />
@endsection()

@section('js')
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.js"></script>
@endsection()
