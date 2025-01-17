<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal | Mentoring</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('user/css/soal(1).css') }}">

</head>
<body>
    <div class="container">
        {{-- main --}}
        <div class="soal-main">
            <div class="topbar">
                <div class="toggle">
                    <img src="{{ asset('user/img/logo.png') }}" width="110" height="40">
                </div>

                <div class="description">
                    <h3>Tes Potensi Skolastik</h3>
                    <p>Pengetahuan dan Pemahaman Umum</p>
                </div>

                <div class="empty-space"></div>
            </div>

            <!-- Progress bar -->
            <div class="progress-container">
                <progress id="progress" min="0" max="100" value="50">
                    <span class="progress-text">50%</span>
                </progress>
            </div>

            <div class="soal-container">
                <div class="question-column">
                    <!-- Card untuk menampilkan soal -->
                    <div class="card" id="questionCard">
                        <div class="card-body">
                            <h5 class="card-title">Soal</h5>
                            <p class="card-text" id="questionText">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
                            <!-- Jawaban pilihan ganda -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" id="option1" value="option1">
                                <label class="form-check-label">Opsi 1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" id="option2" value="option2">
                                <label class="form-check-label">Opsi 2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answer" id="option3" value="option3">
                                <label class="form-check-label">Opsi 3</label>
                            </div>

                            <!-- Tombol "Sebelumnya", "Ragu-Ragu", "Selanjutnya" -->
                            <div class="button-group">
                                <button type="button" class="btn btn-previous" onclick="previousQuestion()">Sebelumnya</button>
                                <button type="button" class="btn btn-flagged" onclick="markAsDoubt()">Ragu-Ragu</button>
                                <button type="button" class="btn btn-next" onclick="nextQuestion()">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="number-column">
                    <!-- Kolom untuk memilih nomor soal -->
                    <div class="card">
                        <div class="card-body">
                            <div class="title-time-wrapper">
                                <h5 class="card-title">Pilih Nomor Soal</h5>
                                <p class="remaining-time">
                                    <ion-icon name="alarm-outline"></ion-icon>
                                    1:39:41
                                </p>
                            </div>
                            <!-- Keterangan warna untuk status jawaban -->
                            <div class="answer-status">
                                <label>Sudah dijawab</label>
                                <label>Ragu-ragu</label>
                                <label>Belum dijawab</label>
                            </div>

                            <!-- Kolom-kolom untuk memilih nomor soal -->
                            <div id="questionNumbers" class="btn-group-vertical" role="group" aria-label="Pilih nomor soal">
                                <button type="button" class="btn btn-number active" value="1">1</button>
                                <button type="button" class="btn btn-number" value="2">2</button>
                                <button type="button" class="btn btn-number" value="3">3</button>
                                <!-- Tambahkan tombol nomor soal lainnya sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- JS --}}
    <script src="{{ asset('user/js/soal.js') }}"></script>

    {{-- ionicons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert(event) {
            event.preventDefault(); // Menghentikan aksi default dari link
            // Menggunakan SweetAlert untuk menampilkan pesan alert yang menarik
            Swal.fire({
                title: 'Coming Soon!',
                text: 'Stay tuned for updates!',
                icon: 'info',
                confirmButtonText: 'OK'
            });
        }
    </script>
</body>
</html>
