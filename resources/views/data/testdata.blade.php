@extends('layouts.app')

@section('nama')
Test
@endsection

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-5">
                        <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Customers</a>
                    </div>
                    <div class="col-sm-7">
                        <div class="text-sm-end">
                            <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                            <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                    </div><!-- end col-->
                </div>

                <table class="table table-responsive">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Perwada</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($formpengurus as $d)
                        <tr>
                          <th scope="row">{{ $user->id }}</th>
                          <td>{{ $d->nama }}</td>
                          <td>{{ $d->perwada }}</td>
                          <td>{{ $d->jabatan }}</td>
                          <td>{{ $d->alamat }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
