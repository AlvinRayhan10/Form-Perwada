@extends('layouts.app')

@section('nama')
    Dasboard
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <body>
                        <!-- loader -->
                        <div class="bg-loader">
                            <div class="loader"></div>
                        </div>

                        <!-- header -->
                        <section class="about">
                            <div class="container">
                                <h5><strong>Selamat Datang di website Pendataan Perwakilan Daerah (Perwada) dan
                                        Pusat!</strong></h5>
                                <p>Website ini dibuat dengan tujuan untuk menyediakan informasi lengkap dan terpercaya
                                    mengenai pengurus perwakilan daerah dan pusat di EOA Club. Melalui website ini, pengguna
                                    dapat dengan mudah mengakses data terkait pengurus perwakilan daerah dan pusat.
                                </p>

                                <p>Pengurus perwakilan daerah dan pusat merupakan pilar penting dalam berjalannya EOA Club
                                    ini. Mereka adalah para pengurus yang terpilih untuk memperjuangkan ekonomi umat.
                                </p>

                                <p>Website ini bertujuan untuk memberikan transparansi dan aksesibilitas yang lebih baik
                                    terhadap informasi terkait pengurus perwakilan daerah dan pusat, dengan fitur fitur yang
                                    mudah digunakan dalam mencari informasi tentang kepengurusan EOA Club.
                                </p>

                                <p>Diharapkan website ini dapat menjadi sumber informasi yang berguna dalam memahami
                                    kepengurusan perwakilan daerah dan pusat EOA Club.</p>
                            </div>
                        </section>


                        <script type="text/javascript">
                            $(document).ready(function() {
                                $(".bg-loader").hide();
                            })
                        </script>
                    </body>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
