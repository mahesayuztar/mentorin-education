{{-- ==================== TAMPILAN AWAL ==================== --}}

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

        .btn-custom {
            border: 1px solid #003C43;
            color: #003C43;
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

        .spesifik {
            display: flex;
            flex-direction: column;
        }

        .card-title.spesifik, .card-text.spesifik {
            flex: 1;
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
                font-size: 14.5px;
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
                font-size: 14px;
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
                font-size: 14px;
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

            h3.card-title.umum, h3.card-title.spesifik {
                font-size: 16px;
            }

            p.card-text.mt-4.umum, p.card-text.spesifik {
                font-size: 14px;
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

            h3.card-title.umum, h3.card-title.spesifik {
                font-size: 16px;
            }

            p.card-text.mt-4.umum, p.card-text.spesifik {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Logo Section -->
    <div class="d-flex justify-content-center mt-4">
        <img src="{{ asset('user/img/logo.png') }}" alt="Logo" style="max-width: 150px;">
    </div>

    @php
    $id_paket = $paket->id;
    $kode_paket = substr($id_paket, 3, 3);
    @endphp
    @if(isset($noted_type))

    <!-- Container Section -->
    <div class="container-fluid mt-4">
        <!-- Baris Pertama: 3 Card -->
        <div class="row">
            <div class="row justify-content-center">
                <h2>Testing</h2>
            </div>
            <div class="col-md-4">
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
                                <p class="mb-0">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border: 1px solid #003C43; border-radius: 20px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Tahapan Ujian</h5>
                        <!-- Tahapan Ujian sebagai Button -->

                        <div class="btn-group w-100 mt-2 mb-5" style="gap: 10px;">
                            @if($kode_paket == "PPH" or $kode_paket == "PKC" or $kode_paket == "PKR" or $kode_paket == "PCM")
                            @switch($noted_type)
                            @case(1)
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Pass Hand</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kecerdasan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kepribadian</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kecermatan</button>
                            @break
                            @case(2)
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Pass Hand</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Kecerdasan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kepribadian</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kecermatan</button>
                            @break
                            @case(3)
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Pass Hand</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kecerdasan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Kepribadian</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kecermatan</button>
                            @break
                            @case(4)
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Pass Hand</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kecerdasan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kepribadian</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Kecermatan</button>
                            @break
                            @default
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Pass Hand</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kecerdasan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Kepribadian</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Kecermatan</button>
                            @endswitch
                            @endif
                            @if($kode_paket == "TWK" or $kode_paket == "TIU" or $kode_paket == "TKP")
                            @switch($noted_type)
                            @case(1)
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Tes Wawasan Kebangsaan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Intelegensi Umum</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Karakter Pribadi</button>
                            @break
                            @case(2)
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Wawasan Kebangsaan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Tes Intelegensi Umum</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Karakter Pribadi</button>
                            @break
                            @case(3)
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Wawasan Kebangsaan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Intelegensi Umum</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Tes Karakter Pribadi</button>
                            @break
                            @default
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Wawasan Kebangsaan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Intelegensi Umum</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill" disabled>Tes Karakter Pribadi</button>
                            @endswitch
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border: 1px solid #003C43; border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Sisa Waktu</h5>
                        @php
                        $hours = ($noted_time - $noted_time%3600)/3600;
                        $minutes = ($noted_time - $hours*3600);
                        $minutes = ($minutes - $minutes%60)/60;
                        $seconds = $noted_time%60;
                        $date = new DateTime();
                        $date->setTime($hours, $minutes, $seconds);
                        @endphp
                        @if($noted_time==$paket->durasi_paket)
                        <h6 class="card-text mt-1 mb-3" style="font-size: 65px;">{{$date->format('H:i:s')}}</h6>
                        @else
                        <h6 class="card-text mt-1 mb-3" id="timer" style="font-size: 65px;">{{$date->format('H:i:s')}}</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @else

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
                                <p class="mb-0">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="border: 1px solid #003C43; border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Sisa Waktu</h5>
                        @php
                        $hours = ($noted_time - $noted_time%3600)/3600;
                        $minutes = ($noted_time - $hours*3600);
                        $minutes = ($minutes - $minutes%60)/60;
                        $seconds = $noted_time%60;
                        $date = new DateTime();
                        $date->setTime($hours, $minutes, $seconds);
                        @endphp
                        @if($noted_time==$paket->durasi_paket)
                        <h6 class="card-text mt-1 mb-3" style="font-size: 65px;">{{$date->format('H:i:s')}}</h6>
                        @else
                        <h6 class="card-text mt-1 mb-3" id="timer" style="font-size: 65px;">{{$date->format('H:i:s')}}</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="col-12 justify-content-center text-align-center mt-5">
            <h1 style="text-align: center; color: #003C43;"><b>{{ucwords($paket->nama_paket)}}</b></h1>
        </div>

        <!-- Baris Penjelasan Soal -->
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-body umum">
                        <h3 class="card-title umum">Aturan Paket Umum</h3>
                        <p class="card-text mt-4 umum">
                            1. Persiapan Sebelum Tes: <br>
                                - Pastikan perangkat Anda terhubung ke internet dengan kecepatan yang stabil. <br>
                                - Gunakan perangkat dengan layar yang cukup besar untuk kenyamanan visual. <br>
                                - Periksa bahwa perangkat Anda memiliki daya yang cukup atau tetap tersambung ke sumber daya listrik. <br>
                                - Siapkan tempat yang tenang dan nyaman untuk mengerjakan tes, bebas dari gangguan eksternal. <br>
                                - Pastikan Anda memiliki waktu yang cukup untuk menyelesaikan tes secara keseluruhan. <br>
                            <br>
                            2. Akses ke Platform Tes: <br>
                                - Masuk ke platform tes menggunakan kredensial yang telah diberikan. <br>
                                - Pastikan akun Anda terverifikasi dan terhubung dengan tes yang sesuai. <br>
                            <br>
                            3. Instruksi pada Halaman Utama: <br>
                                - Baca semua instruksi dengan cermat sebelum memulai tes. <br>
                                - Perhatikan batasan waktu dan jumlah soal yang ada. <br>
                                - Pastikan Anda memahami bagaimana navigasi di dalam platform tes berfungsi. <br>
                            <br>
                            4. Selama Pelaksanaan Tes: <br>
                                - Fokus pada soal yang sedang dihadapi, dan manfaatkan waktu dengan efisien. <br>
                                - Jika Anda merasa kebingungan, jangan ragu untuk melanjutkan ke soal berikutnya dan kembali ke soal tersebut nanti. <br>
                                - Jangan menggunakan bantuan eksternal atau berkomunikasi dengan orang lain selama tes. <br>
                            <br>
                            5. Penyelesaian Tes: <br>
                                - Pastikan Anda telah menjawab semua soal yang tersedia, jika memungkinkan. <br>
                                - Periksa kembali jawaban Anda jika waktu memungkinkan. <br>
                                - Pastikan untuk menekan tombol "Submit" atau "Selesai" ketika Anda telah selesai mengerjakan semua soal. <br>
                            <br>
                            6. Setelah Tes Selesai: <br>
                                - Tunggu hasil tes untuk diproses. <br>
                                - Jangan keluar dari platform tes sampai Anda mendapatkan konfirmasi bahwa tes telah selesai dan jawaban Anda telah diterima. <br>
                            <br>
                            Catatan Penting: <br>
                                - Dilarang menggunakan perangkat lunak atau perangkat keras yang tidak disetujui selama tes. <br>
                                - Jika ada masalah teknis selama tes, segera hubungi penyelenggara tes untuk bantuan. <br>
                                - Setiap tindakan kecurangan atau pelanggaran akan ditindaklanjuti sesuai kebijakan penyelenggara tes. <br>
                            <br>
                            Terima kasih telah mengikuti petunjuk ini dengan cermat. Semoga Anda berhasil dalam tes ini!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body spesifik">
                        <h3 class="card-title spesifik">Aturan {{ucwords($paket->nama_paket)}}</h3>
                        <p class="card-text mt-4 spesifik">{!! nl2br(htmlspecialchars_decode($paket->aturan_paket)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row mt-4">
            <div class="col">
                <h4>Penjelasan Aturan</h4>
                <p style="white-space: pre-wrap;">
                    {{$paket->aturan_paket}}
                </p>

            </div>
        </div> --}}
        @if($paket->gambar_paket!=null)
        <div class="row justify-content-center p-5 m-5 mt-0 mb-0">
            <img src="{{ asset('user/img/paket/'.$paket->gambar_paket) }}" alt="Aturan">
        </div>
        @endif
        <div class="row">
    <div class="col text-center" style="margin-top: 100px;">
        <a href="{{ url('/try-out') }}" style="cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5" style="cursor: pointer;">
                <h4 style="cursor: pointer;">Kembali</h4>
            </button>
        </a>
        @if((substr($paket->id,3,3)=="PSI" or substr($paket->id,3,3)=="DKD") and isset($noted_type)!=true)
        <a href="{{ url('/soal/aturan/'.$paket->id.'/'.$riwayat_paket->benar) }}" style="cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5 cursor-pointer" id="tombol_submit" style="cursor: pointer;">
                <h4 style="cursor: pointer;">Mulai</h4>
            </button>
        </a>
        @elseif(isset($noted_type))
        @if($paket->latihan_soal==0)
        <a href="#" style="cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5 cursor-pointer" onclick="showConfirm()" style="cursor: pointer;">
                <h4 style="cursor: pointer;">Mulai</h4>
            </button>
        </a>
        @elseif($paket->latihan_soal==1)
        <a href="#" style="cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5 cursor-pointer" onclick="showConfirmLatsol()" style="cursor: pointer;">
                <h4 style="cursor: pointer;">Mulai</h4>
            </button>
        </a>
        @endif
        <a href="{{ url('/soal/'.$paketan.'/'.$noted_type) }}" style="cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5 cursor-pointer" id="tombol_submit" style="display: none; cursor: pointer;">
                <h4 style="cursor: pointer;">Mulai</h4>
            </button>
        </a>
        @else
        @if($paket->latihan_soal==0)
        <a href="#" style="cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5 cursor-pointer" onclick="showConfirm()" style="cursor: pointer;">
                <h4 style="cursor: pointer;">Mulai</h4>
            </button>
        </a>
        @elseif($paket->latihan_soal==1)
        <a href="#" style="cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5 cursor-pointer" onclick="showConfirmLatsol()" style="cursor: pointer;">
                <h4 style="cursor: pointer;">Mulai</h4>
            </button>
        </a>
        @endif
        <a href="{{ url('/soal/'.$paket->id) }}" style="display: none; cursor: pointer;">
            <button type="button" class="btn btn-outline-primary btn-custom m-5 cursor-pointer" id="tombol_submit" style="cursor: pointer;">
                <h4 style="cursor: pointer;">Mulai</h4>
            </button>
        </a>
        @endif
    </div>
</div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var startTime = {!!json_encode($noted_time)!!};
        var isStart = {!!json_encode($noted_time != $paket->durasi_paket)!!}
        if(startTime==0){
            var button = document.getElementById("tombol_submit");

                button.click();
        }
        function startTimer() {
            var startTimeClient = startTime; // Waktu mulai dalam milidetik
            var count = 0;
            // Fungsi yang akan dipanggil setiap detik untuk memperbarui timer
            function updateTimer() {
                count++;
                var elapsedTime = startTimeClient-count; // Waktu yang telah berlalu sejak waktu mulai dalam milidetik
                var hours = Math.floor(elapsedTime / (60 * 60)); // Hitung jam
                var minutes = Math.floor((elapsedTime % (60 * 60)) / (60)); // Hitung menit
                var seconds = Math.floor((elapsedTime % 60)); // Hitung detik

                // Format waktu dalam format HH:MM:SS
                var formattedTime = pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);

                // Perbarui elemen timer dengan waktu yang telah diformat
                document.getElementById('timer').innerText = formattedTime;
            }

            // Fungsi untuk menambah nol di depan angka jika angka < 10
            function pad(num) {
                return (num < 10) ? '0' + num : num;
            }

            // Panggil updateTimer setiap detik
            setInterval(updateTimer, 1000);
        }

        // Panggil fungsi startTimer untuk memulai timer
        startTimer();
        if(isStart=="true"){
            setTimeout(function () {
                var button = document.getElementById("tombol_submit");

                button.click();
            },startTime*1000);
        }
    </script>
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
        function showConfirm(){
            Swal.fire({
                  title: 'Konfirmasi masuk ke dalam tes',
                  text: "Tes akan segera dimulai. Pastikan Anda sudah siap dengan segala yang diperlukan.",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Masuk',
                  cancelButtonText: 'Kembali',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                    document.getElementById('tombol_submit').click();
                }
            });
        }
        function showConfirmLatsol(){
            Swal.fire({
                  title: 'Konfirmasi masuk ke dalam tes',
                  text: "Tes akan segera dimulai. JAWABAN dan SKOR di pengerjaan latihan soal sebelumnya akan TERHAPUS.",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Masuk',
                  cancelButtonText: 'Kembali',
                  reverseButtons: true
                }).then((result) => {
                  if (result.value) {
                    document.getElementById('tombol_submit').click();
                }
            });
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
    {{-- <script src="{{url('user/js/soal.js')}}"></script> --}}
</body>
</html>
