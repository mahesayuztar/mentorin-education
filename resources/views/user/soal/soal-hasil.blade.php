{{-- ==================== TAMPILAN HASIL NiLAI ==================== --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Mentoring</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #003C43;
        }

        .container-fluid {
            background: #fff;
            min-height: 150vh;
            max-height: 1000vh;
            padding: 3rem;
            border-top-left-radius: 4rem;
            border-top-right-radius: 4rem;
        }

        .hasil_skd {
            border: 1px solid #003C43; 
            border-radius: 20px;
            padding: 20px;
            margin-top: 3%;
        }

        .div_table_hasil_skd {
            margin-top: 10px;
        }

        .table_hasil_skd {
            border: solid black 1px;
        }

        .table_hasil_skd thead {
            background-color: #003C43;
            color: white
        }

        .btn-custom {
            border: 1px solid #003C43;
            color: #003C43;
            cursor: pointer;
        }


        .btn-custom:hover {
            background-color: #135D66;
            border-color: #135D66;
        }

        .btn-custom.active,
        .btn-custom:active {
            background-color: #135D66 !important;
            border-color: #135D66 !important;
        }

        h4 {
            margin: 10px 0px;
            cursor: pointer;
        }

        button.btn.btn-outline-primary.btn-custom.mx-auto.mt-5.mb-5.text-align-center.p-0 {
            cursor: pointer;
            width: 10%;
        }

        /* ======================== RESPONSIVE ======================== */
        @media (min-width: 1401px) {
            .container-fluid {
                padding: 2rem;
                min-height: 150vh;
                max-height: 1000vh;
            }

            .card {
                border-radius: 0;
                border: none;
            }

            .card-body {
                padding: 20px;
            }

            .btn-group {
                flex-direction: row;
                gap: 10px;
            }

            .btn-custom {
                width: 100%;
                font-size: 14px;
            }
        }

        @media (max-width: 1400px) {
            .container-fluid {
                padding: 2rem;
                height: 100%;
            }

            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .card {
                border-radius: 0;
                border: none;
            }

            .card-body {
                padding: 20px;
            }

            .btn-group {
                flex-direction: row;
                gap: 10px;
            }

            .btn-custom {
                width: 100%;
                font-size: 14px;
            }
        }

        @media (max-width: 1200px) {
            .container-fluid {
                padding: 2rem;
                height: 100%;
            }

            .card-body h6.card-text {
                font-size: 60px;
            }

            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .card {
                border-radius: 0;
                border: none;
            }

            .card-body {
                padding: 20px;
            }

            .btn-group {
                flex-direction: row;
                gap: 10px;
            }

            .btn-custom {
                width: 100%;
                font-size: 14px;
            }

            .card-body.row .col-5,
            .card-body.row .col-6 {
                width: 100%;
            }

            .card-body.row .col-6 {
                margin-top: 10px;
            }

            button.btn.btn-outline-primary.btn-custom.mx-auto.mt-5.mb-5.text-align-center.p-0 {
                width: 15%;
            }

            h4 {
                font-size: 26px;
                margin: 10px 0px;
                cursor: pointer;
            }
        }

        @media (max-width: 992px) {
            .container-fluid {
                padding: 2rem;
                height: 100%;
            }

            .profile-img img {
                width: 70px;
                height: 70px;
            }

            .card-body h6.card-text {
                font-size: 60px;
            }

            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }

            .card {
                border-radius: 0;
                border: none;
            }

            .card-body {
                padding: 20px;
            }

            .btn-group {
                flex-direction: row;
                gap: 10px;
            }

            .btn-custom {
                width: 100%;
                font-size: 14px;
            }

            .card-body.row .col-5,
            .card-body.row .col-6 {
                width: 100%;
            }

            .card-body.row .col-6 {
                margin-top: 10px;
            }

            button.btn.btn-outline-primary.btn-custom.mx-auto.mt-5.mb-5.text-align-center.p-0 {
                width: 15%;
            }

            h4 {
                font-size: 24px;
                margin: 10px 0px;
                cursor: pointer;
            }
        }

        @media (max-width: 768px) {
            .container-fluid {
                padding: 2rem;
                height: 100%;
            }

            .profile-img img {
                width: 70px;
                height: 70px;
            }

            .card-body h6.card-text {
                font-size: 60px;
            }

            .card {
                margin-bottom: 1rem;
            }

            .card-body {
                padding: 1rem;
            }

            .btn-custom {
                padding: 0.5rem 1rem;
                font-size: 14px;
            }

            .card-body.row .col-5,
            .card-body.row .col-6 {
                width: 100%;
            }

            .card-body.row .col-6 {
                margin-top: 10px;
            }

            button.btn.btn-outline-primary.btn-custom.mx-auto.mt-5.mb-5.text-align-center.p-0 {
                width: 20%;
            }

            h4 {
                font-size: 24px;
                margin: 10px 0px;
                cursor: pointer;
            }
        }

        @media (max-width: 576px) {
            .container-fluid {
                padding: 2rem;
                height: 100%;
            }

            .profile-img img {
                width: 60px;
                height: 60px;
            }

            .card-body h6.card-text {
                font-size: 50px;
            }

            .card {
                margin-bottom: 1rem;
            }

            .card-body {
                padding: 1rem;
            }

            .btn-custom {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }

            .btn-group {
                flex-wrap: wrap;
            }

            .card-custom {
                width: 300px;
            }

            .card-custom h4.card-title.text-center {
                font-size: 18px;
            }

            .card-custom h4.card-text.text-center {
                font-size: 18px;
            }

            .card.col-10.mx-auto.mt-3 {
                width: 100%;
            }

            .card-body.row {
                flex-direction: column;
                gap: 10px;
            }

            .card-body.row .col-5,
            .card-body.row .col-6 {
                width: 100%;
            }

            .card-body.row .col-6 {
                margin-top: 10px;
            }

            button.btn.btn-outline-primary.btn-custom.mx-auto.mt-5.mb-5.text-align-center.p-0 {
                width: 25%;
            }

            h4 {
                font-size: 22px;
                margin: 10px 0px;
                cursor: pointer;
            }
        }

        @media (max-width: 380px) {
            .container-fluid {
                padding: 2rem 1.5rem;
                height: 100%;
            }

            .profile-img img {
                width: 60px;
                height: 60px;
            }

            .card-body h6.card-text {
                font-size: 50px;
            }

            .btn-custom {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }

            .card-custom {
                width: 200px;
            }

            .card-custom h4.card-title.text-center {
                font-size: 14px;
            }

            .card-custom h4.card-text.text-center {
                font-size: 14px;
            }

            .card.col-10.mx-auto.mt-3 {
                width: 100%;
            }

            .card-body.row {
                flex-direction: column;
                gap: 10px;
            }

            .card-body.row .col-5,
            .card-body.row .col-6 {
                width: 100%;
            }

            .card-body.row .col-6 {
                margin-top: 10px;
            }

            button.btn.btn-outline-primary.btn-custom.mx-auto.mt-5.mb-5.text-align-center.p-0 {
                width: 30%;
            }

            h4 {
                font-size: 20px;
                margin: 10px 0px;
                cursor: pointer;
            }
        }
    </style>
</head>
<body>
    <!-- Logo Section -->
    <div class="d-flex justify-content-center mt-4">
        <img src="{{ asset('user/img/logo.png') }}" alt="Logo" style="max-width: 150px;">
    </div>

    <!-- Container Section -->
    <div class="container-fluid mt-4">
        <!-- Baris Pertama: 3 Card -->
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="border: 1px solid #003C43; border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Data Peserta</h5>
                        <div class="d-flex align-items-center mt-4">
                            <!-- Foto Profil -->
                            <div class="me-3">
                                <img src="{{ asset('user/img/profile/'.Auth::user()->photo_profile) }}" alt="Profile Picture" style="width: 80px; height: 80px; border-radius: 50%;">
                            </div>
                            <!-- Nama dan Email -->
                            <div>
                                <h6 class="mb-0">{{Auth::user()->name}}</h6>
                                <p class="mb-0" style="word-break: break-all">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="border: 1px solid #003C43; border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Waktu Pengerjaan</h5>
                        @php
                        $noted_time =  $paket->durasi_paket;
                        $hours = ($noted_time - $noted_time%3600)/3600;
                        $minutes = ($noted_time - $hours*3600);
                        $minutes = ($minutes - $minutes%60)/60;
                        $seconds = $noted_time%60;
                        $date = new DateTime();
                        $date->setTime($hours, $minutes, $seconds);
                        @endphp
                        <h6 class="card-text mt-1 mb-3" style="font-size: 65px;">{{$date->format('H:i:s')}}</h6>
                    </div>
                </div>
            </div>
        </div>
        @if(substr($paket->id,3,3)=="SKD" and count($soals)>=110)
        <div class="row" style="margin-top: 6rem;">
            <div class="col">
                <h4 class="text-center">Hore! Ujian telah Selesai</h4>
                <p class="text-center mt-3">Terima kasih telah mengikuti Try Out {{$paket->nama_paket}}</p>
                <div class="hasil_skd">
                    <div>
                        <strong>Nama :</strong> {{$user->name}} <br>
                        <strong>Waktu Selesai :</strong> {{$riwayat_paket->waktu_paket}}
                    </div>
                    <div class="div_table_hasil_skd table-responsive">
                        <table class="table_hasil_skd table table-bordered align-middle">
                          <thead class="">
                            <tr>
                              <th class="text-center align-middle" scope="col" colspan="3">Skor</th>
                              <th class="text-center align-middle" rowspan="2">Total</th>
                              <th class="text-center align-middle" rowspan="2">Keterangan</th>
                            </tr>
                            <tr>
                                <th class="text-center align-middle">TWK</th>
                                <th class="text-center align-middle">TIU</th>
                                <th class="text-center align-middle">TKP</th>
                            </tr>
                            
                          </thead>
                          <tbody>
                            <tr>
                                <td>{{$khusus_skd['twk_skor']}}</td>
                                <td>{{$khusus_skd['tiu_skor']}}</td>
                                <td>{{$khusus_skd['tkp_skor']}}</td>
                                <td>{{$khusus_skd['twk_skor']+$khusus_skd['tiu_skor']+$khusus_skd['tkp_skor']}}</td>
                                @if($khusus_skd['twk_skor']+$khusus_skd['tiu_skor']+$khusus_skd['tkp_skor']<281 or $khusus_skd['tkp_skor']<156 or $khusus_skd['tiu_skor']<80 or $khusus_skd['twk_skor']<65)
                                @if($khusus_skd['twk_skor']+$khusus_skd['tiu_skor']+$khusus_skd['tkp_skor']<281)
                                <td><strong>TIDAK LULUS</strong> (Alasan: Total Skor minimal 281)</td>
                                @elseif($khusus_skd['tkp_skor']<156)
                                <td><strong>TIDAK LULUS</strong> (Alasan: Skor TKP minimal 156)</td>
                                @elseif($khusus_skd['tiu_skor']<80)
                                <td><strong>TIDAK LULUS</strong> (Alasan: Skor TIU minimal 80)</td>
                                @else
                                <td><strong>TIDAK LULUS</strong> (Alasan: Skor TWK minimal 65)</td>
                                @endif
                                @else
                                <td><strong>LULUS</strong></td>
                                @endif
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        @else
        <!-- Baris Penjelasan Soal -->
        <div class="row" style="margin-top: 6rem;">
            <div class="col">
                <h4 class="text-center">Hore! Ujian telah Selesai</h4>
                <p class="text-center mt-3">Terima kasih telah mengikuti Try Out {{$paket->nama_paket}}</p>

                <!-- Card -->
                @if(isset($riwayat_pakets))
                @foreach($riwayat_pakets as $key => $r)
                <div class="card col-10 mx-auto mt-3"> <!-- Menggunakan kelas mx-auto untuk memposisikan di tengah -->
                    <div class="card-body row">
                        <div class="col-12">
                            <h4>{{$r->nama_paket}}</h4>
                        </div>
                        <div class="col-5 p-3 pb-5 m-2" id="{{'chart'.$key}}" style="border: 1px solid #003C43; border-radius: 20px;"></div>
                        <div class="col-6 d-flex flex-column justify-content-center align-self-start p-5 m-2" style="border: 1px solid #003C43; border-radius: 20px;">
                            <h5 class="mb-1">Keterangan</h5>
                            <p class="mb-1">Benar : {{$r->benar}}</p>
                            <p class="mb-1">Salah : {{$r->salah}} </p>
                            <p class="mb-1">Tidak Dijawab : {{$r->kosong}}</p>
                            <p class="mb-1">Poin Total : {{$r->score}}</p>
                        </div>
                    </div>
                </div>
                <!-- Card -->

                @endforeach
                <div class="card card-custom mt-4 mb-5">
                    <div class="card-body" style="background: #135D66; color: #fff; border-radius: 20px;">
                        <h4 class="card-title text-center">Nilai Akhir : {{$score}}</h4>
                        <h4 class="card-title text-center">Nilai Minimum : {{$paket->minimal_skor}}</h4>
                        @if($score >= $paket->minimal_skor)
                        <h4 class="card-text text-center">Keterangan : <span style="color: #77B0AA;">Memenuhi syarat</span></h4>
                        @else
                        <h4 class="card-text text-center">Keterangan : <span style="color: #ff6961;">Tidak memenuhi syarat</span></h4>
                        @endif
                    </div>
                </div>
                @else
                <div class="card col-10 mx-auto mt-3"> <!-- Menggunakan kelas mx-auto untuk memposisikan di tengah -->
                    <div class="card-body row">
                        <div class="col-5 p-3 pb-5 m-2" id="chart" style="border: 1px solid #003C43; border-radius: 20px;"></div>
                        <div class="col-6 d-flex flex-column justify-content-center align-self-start p-5 m-2" style="border: 1px solid #003C43; border-radius: 20px;">
                            <h5 class="mb-1">Keterangan</h5>
                            <p class="mb-1">Benar : {{$benar}}</p>
                            <p class="mb-1">Salah : {{$salah}} </p>
                            <p class="mb-1">Tidak Dijawab : {{$kosong}}</p>
                            <p class="mb-1">Poin Total : {{$score}}</p>
                        </div>
                    </div>
                </div>
                @endif
                
            </div>
        </div>
        @endif
        @if($paket->latihan_soal==0)
                <form action="{{url('/history')}}" method="get" accept-charset="utf-8" class="row justify-content-center text-align-center">
                    <button type="submit" class="btn btn-outline-primary btn-custom mx-auto mt-5 mb-5 text-align-center p-0" style="cursor: pointer;"><h4 style="cursor: pointer;">Keluar</h4></button><br><br><br>
                </form>
                @elseif($paket->latihan_soal==1)
                <form action="{{url('exercise')}}" method="get" accept-charset="utf-8" class="row justify-content-center text-align-center">
                    <button type="submit" class="btn btn-outline-primary btn-custom mx-auto mt-5 mb-5 text-align-center p-0" style="cursor: pointer;"><h4 style="cursor: pointer;">Keluar</h4></button><br><br><br>
                </form>
                @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    @if(substr($paket->id, 3, 3)!="PSI" and substr($paket->id, 3, 3)!="DKD")
    <script type="text/javascript">
        var options = {
            series: [{!! json_encode($riwayat_paket->benar) !!}, {!! json_encode($riwayat_paket->salah) !!}, {!! json_encode($riwayat_paket->kosong) !!}],
            chart: {
                width: '100%',
                type: 'pie',
                offsetY: 20
            },
            labels: ['Benar', 'Salah', 'Tidak Dijawab'],
            colors:['#6fc276', '#FF6961', '#77B0AA'],
            responsive: [
                {
                    breakpoint: 380,
                    options: {
                        chart: {
                            width: '100%',
                        },
                        legend: {
                            position: 'bottom',
                        },
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                {
                    breakpoint: 576,
                    options: {
                        chart: {
                            width: '100%',
                        },
                        legend: {
                            position: 'bottom',
                        },
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                {
                    breakpoint: 768,
                    options: {
                        chart: {
                            width: '100%',
                        },
                        legend: {
                            position: 'bottom',
                        },
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                {
                    breakpoint: 992,
                    options: {
                        chart: {
                            width: '100%',
                        },
                        legend: {
                            position: 'bottom',
                        },
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                {
                    breakpoint: 1200,
                    options: {
                        chart: {
                            width: '100%',
                        },
                        legend: {
                            position: 'bottom',
                        },
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                {
                    breakpoint: 1400,
                    options: {
                        chart: {
                            width: '100%',
                        },
                        legend: {
                            position: 'bottom',
                        },
                        dataLabels: {
                            enabled: false
                        }
                    }
                }
            ]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
    @else
    <script type="text/javascript">
        var riwayatPakets = {!! json_encode($riwayat_pakets) !!};
        for(var i = 0; i < riwayatPakets.length; i++){
            var row = riwayatPakets[i];
            var options = {
                series: [row.benar, row.salah, row.kosong],
                chart: {
                    width: '100%',
                    type: 'pie',
                    offsetY: 20
                },
                labels: ['Benar', 'Salah', 'Tidak Dijawab'],
                colors:['#6fc276', '#FF6961', '#77B0AA'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#chart"+i), options);
            chart.render();
        }
    </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert(event, title, message, icon) {
            event.preventDefault();
            Swal.fire({
                title: title,
                text: message,
                icon: icon,
                confirmButtonText: 'OK'
            });
        }

        // Alert untuk coming soon
        function showComingSoon(event) {
            showAlert(event, 'Segera Hadir!', 'Nantikan pembaruannya!', 'info');
        }

        // Alert untuk berhasil membuat akun
        function showSuccessCreateAccount(event) {
            showAlert(event, 'Sukses', 'Akun berhasil dibuat!', 'success');
        }

        // Alert untuk gagal membuat akun
        function showFailedCreateAccount(event) {
            showAlert(event, 'Terjadi Kesalahan', 'Gagal membuat akun. Silakan coba lagi.', 'error');
        }

        // Alert untuk berhasil login
        function showSuccessLogin(event) {
            showAlert(event, 'Sukses', 'Berhasil masuk!', 'success');
        }

        // Alert untuk gagal login
        function showFailedLogin(event) {
            showAlert(event, 'Terjadi Kesalahan', 'Gagal untuk masuk. Silakan periksa kredensial Anda dan coba lagi.', 'error');
        }

        // Alert untuk pembayaran berhasil
        function showSuccessPayment(event) {
            showAlert(event, 'Sukses', 'Pembayaran Berhasil!', 'success');
        }

        // Error general
        function showError(errorMessage) {
            Swal.fire({
                title: 'Terjadi Kesalahan',
                text: errorMessage,
                icon: 'error',
                confirmButtonText: 'OK'
            });
            // showAlert(event, 'Terjadi Kesalahan', errorMessage, 'error');
        }
        function showInfo(errorMessage) {
            Swal.fire({
                title: 'Informasi Penting',
                text: errorMessage,
                icon: 'info',
                confirmButtonText: 'OK'
            });
            // showAlert(event, 'Terjadi Kesalahan', errorMessage, 'error');
        }
    </script>
    @if ($errors->has('error'))
        <script type="text/javascript">
            var errorText = {!!json_encode($errors->first('error'));!!};
            showError(errorText);
        </script>
    @elseif($errors->has('info'))
        <script type="text/javascript">
            var errorText = {!!json_encode($errors->first('info'));!!};
            showInfo(errorText);
        </script>
    @endif
    <script src="{{ url('user/js/dashboard.js') }}"></script>
</body>
</html>