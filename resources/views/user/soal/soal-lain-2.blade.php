{{-- ==================== TAMPILAN KETIKA SUDAH SELESAI ==================== --}}

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
            height: 100vh;
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

        @media (max-width: 500px) {
            /* Adjustments for small screens */
            .container-fluid {
                height: 100%;
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
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill">Pass Hand</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill active">Kecerdasan</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill">Kepribadian</button>
                            <button type="button" class="btn btn-outline-primary btn-custom flex-fill">Ketrampilan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border: 1px solid #003C43; border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Sisa Waktu</h5>
                        <h6 class="card-text mt-1 mb-3" style="font-size: 65px;">00:00:00</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris Penjelasan Soal -->
        <div class="row" style="margin-top: 6rem;">
            <div class="col">
                <h4 class="text-center">Hore! Ujian telah Selesai</h4>
                <p class="text-center mt-3">Terima kasih telah mengikuti Try Out Tes Psikologi Kepolisian Republik Indonesia</p>
                <h5 class="text-center mt-3">Mohon menunggu, nilai akan tampil setelah semua peserta selesai mengerjakan.</h5>
                <!-- Menempatkan tombol di tengah -->
                <button type="button" class="btn btn-primary d-block mx-auto mt-4">Keluar</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ url('user/js/dashboard.js') }}"></script>
</body>
</html>
