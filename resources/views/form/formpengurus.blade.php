@extends('layouts.app')

@section('nama')
    Form Pengurus Perwada
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form class="form-inline" class="mx-1 mx-md-4" method="POST" action="{{ route('formpengurus.store') }}"
                enctype="multipart/form-data" id="form-has-file">
                @csrf
                <!-- Nama dan tempat tinggal -->
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Nama</label>
                    <input type="text" id="form3Example1c" class="form-control" name="nama">
                    <span class="font-13 text-muted">Nama lengkap *</span>
                </div>


                <!--Alamat-->
                <div class="mb-3">
                    <label for="example-textarea" class="form-label">Alamat</label>
                    <textarea class="form-control" id="example-textarea" rows="5" name="alamat"></textarea>
                    <span class="font-13 text-muted">Alamat Lengkap *</span>
                </div>

                <!--No HP-->
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">No.Handphone</label>
                    <input type="text" id="form3Example1c" class="form-control" name="no_hp">
                    <span class="font-13 text-muted">No HP Yang digunakan *</span>
                </div>


                <!--Email-->
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Email</label>
                    <input type="text" id="form3Example1c" class="form-control" name="email">
                    <span class="font-13 text-muted">Alamat Email yang digunakan *</span>
                </div>

                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Perwada</label>
                    <input type="text" id="form3Example1c" class="form-control" name="perwada">
                    <span class="font-13 text-muted">Asal Perwada *</span>
                </div>

                <!--Status-->
                <div class="mb-3">
                    <label for="simpleinput" class="form-label"> Status </label>
                    <input type="text" id="form3Example1c" class="form-control" name="status">
                    <span class="font-13 text-muted">Status *</span>
                </div>

                <!--File Upload-->
                <div class="mb-3">
                    <label for="image" class="form-label">Upload KTP</label>
                    <input class="form-control" type="file" id="image" name="ktp">
                    <span class="font-13 text-muted">Upload KTP*</span>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection()

@section('css')
    <link href="{{ asset('assets/js/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection()

@section('js')
    <script src="{{ asset('assets/js/globalAjax.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2/sweetalert2.all.min.js') }}"></script>
@endsection()
