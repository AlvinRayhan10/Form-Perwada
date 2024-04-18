@extends('layouts.app')

@section('nama')
    Form
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-xxl-3">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <div class="dropdown card-widgets">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                        </a>
                    </div>
                    <!-- project title-->
                    <h5 class="mt-0">
                        <a href="formperwada" class="text-title">Form Pendaftaran Perwada Baru</a>
                    </h5>
                    <div class="badge bg-success">Perwada</div>
                    <p class="text-muted font-13 my-3">Form Pendaftaran pengurus perwada<a href="javascript:void(0);"
                            class="fw-bold text-muted"></a>
                    </p>
                    <div id="tooltip-container">
                        <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2"></a>
                    </div>
                </div> <!-- end card-body-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <!-- project progress-->
                        <p class="mb-2 fw-bold"><span class="float-end"></span></p>
                    </li>
                </ul>
            </div> <!-- end card-->
        </div> <!-- end col -->

        <div class="col-md-6 col-xxl-3">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <div class="dropdown card-widgets">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        </a>
                    </div>
                    <!-- project title-->
                    <h5 class="mt-0">
                        <a href="formpengurus" class="text-title">Form Pendataan Pengurus Perwada</a>
                    </h5>
                    <div class="badge bg-success">Perwada</div>
                    <p class="text-muted font-13 my-3">Form Pendataan pengurus perwada<a href="javascript:void(0);"
                            class="fw-bold text-muted"></a></p>
                    <div id="tooltip-container">
                        <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2"></a>
                    </div>
                </div> <!-- end card-body-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <!-- project progress-->
                        <p class="mb-2 fw-bold"><span class="float-end"></span></p>
                    </li>
                </ul>
            </div> <!-- end card-->
        </div> <!-- end col -->
        <!-- project card -->
        <div class="col-md-6 col-xxl-3">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <div class="dropdown card-widgets">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        </a>
                    </div>
                    <!-- project title-->
                    <h5 class="mt-0">
                        <a href="formpusat" class="text-title">Form Pendataan Pengurus Pusat</a>
                    </h5>
                    <div class="badge bg-success">Pusat</div>
                    <p class="text-muted font-13 my-3">Form Pendataan Pengurus Pusat<a href="javascript:void(0);"
                            class="fw-bold text-muted"></a></p>
                    <div id="tooltip-container">
                        <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2"></a>
                    </div>
                </div> <!-- end card-body-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <!-- project progress-->
                        <p class="mb-2 fw-bold"><span class="float-end"></span></p>
                    </li>
                </ul>
            </div> <!-- end card-->
        </div>

    </div>
    </div>
@endsection()
