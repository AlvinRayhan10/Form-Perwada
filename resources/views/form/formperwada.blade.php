@extends('layouts.app')

@section('nama')
    Form Pengurus Perwada Baru
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form class="mx-1 mx-md-4" method="POST" action="{{ route('formperwada.store') }}" enctype="multipart/form-data"
                id="form-has-file">
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

                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Domisili</label>
                    <input type="text" id="form3Example1c" class="form-control" name="domisili">
                    <span class="font-13 text-muted">Domisili *</span>
                </div>

                <!--Tgl Masuk-->
                <div class="mb-3">
                    <label for="example-date" class="form-label">Tanggal dan Tahun Lahir</label>
                    <input class="form-control" id="example-date" type="date" name="date" name="tanggal_tahun_lahir">
                    <span class="font-13 text-muted">Masukkan Tanggal,Bulan dan Tahun Lahir Kalian *</span>
                </div>

                <div class="mb-3">
                    <label for="simpleinput" class="form-label">No. Handphone</label>
                    <input type="text" id="form3Example1c" class="form-control" name="no_hp">
                    <span class="font-13 text-muted">No HP Yang digunakan *</span>
                </div>

                <!--Email-->
                <div class="mb-3">
                    <label for="simpleinput" class="form-label">Email</label>
                    <input type="text" id="form3Example1c" class="form-control" name="email">
                    <span class="font-13 text-muted">Alamat Email yang digunakan *</span>
                </div>


                <!--File Upload-->
                <div class="mb-3">
                    <label for="image" class="form-label">Upload KTP</label>
                    <input class="form-control" type="file" id="image" name="ktp">
                    <span class="font-13 text-muted">Upload KTP*</span>
                </div>

                <!--Keterangan-->
                <div class="mb-3">
                    <label for="example-textarea" class="form-label" name="keterangan">Keterangan</label>
                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                    <span class="font-13 text-muted">Tambah Keterangan *</span>
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
