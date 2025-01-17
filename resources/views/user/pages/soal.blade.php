<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal | Mentoring</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('user/css/soal.css') }}">
    
    {{-- ICON --}}
    <link rel="icon" href="{{ asset('user/img/logo_kecil.png') }}" type="image/png">
    
    <style>
        .form-check:hover {
            background: var(--container-color)!important;
            color: var(--bg-color)!important;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- main --}}
        <div class="soal-main">
            <div class="topbar">
                <div class="toggle">
                    <img src="{{ asset('user/img/logo.png') }}" width="110" height="40" style="margin-left: 50px;">
                </div>

                <div class="description">
                    @if(substr($paket->id, 0, 3) == "POL")
                        <h3>TES POLRI</h3>
                    @elseif(substr($paket->id, 0, 3) == "PNS")
                        <h3>TES CPNS</h3>
                    @endif
                    <p>{{$paket->nama_paket}}</p>
                </div>

                <div class="empty-space"></div>
            </div>

            <!-- Progress bar -->
            <div class="progress-container">
                <progress id="progress" min="0" max="100" value="0">
                    <span class="progress-text">50%</span>
                </progress>
            </div>

            <form action="
            @if(isset($noted_type))
            {{url('/soal/submit-paket')}}
            @else
            {{url('/soal/submit')}}
            @endif
            " method="post" accept-charset="utf-8">
            <div class="soal-container">
                @csrf
                @foreach($soals as $key => $soal)
                <div class="question-column soal-pointer" id="{{'soal'.$key}}"
                    @if($key != 0)
                    style="display: none;"
                    @endif
                    >
                    <!-- Card untuk menampilkan soal -->
                    <div class="card" id="questionCard">
                        <div class="card-body">
                            <h5 class="card-title">No. {{$key+1}}</h5><br>
                            @if($soal->gambar_soal!=null)
                            <img src="{{url('user/img/soal/'.$soal->gambar_soal)}}" alt="Gambar Soal" style="width: 100%; height: auto; display: block; object-fit: contain; max-width: 450px; max-height: 350px;">
                            @endif
                            <p class="card-text" id="questionText" style="font-weight: normal; text-align: justify;">{!!$soal->isi_soal!!}</p><br>
                            <!-- Jawaban pilihan ganda -->
                            @php
                            $p_jawabans = collect();
                            foreach($jawabans as $jawaban){
                                if($soal->nomor_soal==$jawaban->nomor_soal) $p_jawabans->add($jawaban);
                            }
                            $length = count($soals)-1;
                            $p_jawabans = $p_jawabans->sortBy('nomor_jawaban');
                            @endphp
                            @if($soal->pilgan_kompleks)
                            @foreach($p_jawabans as $j)
                            <div class="container mt-5">
                              <label class="form-check " style="display: block;" onclick="checkJawaban({!! json_encode($j->nomor_jawaban) !!}, {!! json_encode($soal->nomor_soal) !!})" id="{{'f'.$soal->nomor_soal.$j->nomor_jawaban}}">
                                @if($j->gambar_jawaban!=null)
                                <img src="{{ url('user/img/jawaban/'.$j->gambar_jawaban) }}" alt="Gambar" style="width: 100%; max-width: 200px; height: auto; max-height: 200px; display: block; margin-left: 10px;">
                                @endif
                                <input class="form-check-input" type="checkbox" name="{{'answerc'.$soal->nomor_soal.$j->nomor_jawaban}}" value="1" id="{{$soal->nomor_soal.$j->nomor_jawaban}}" onclick="markedAsDone({!! json_encode($soal->nomor_soal) !!})">&emsp;
                                <label class="form-check-label" for="{{$soal->nomor_soal.$j->nomor_jawaban}}">&ensp;{!! $j->isi_jawaban !!}</label>
                              </div>
                            </label>
                            @endforeach
                            @else
                            @foreach($p_jawabans as $j)
                            <label class="form-check {{'f'.$soal->nomor_soal}}" style="display: block;" id="{{'f'.$soal->nomor_soal.$j->nomor_jawaban}}" onclick="checkJawaban({!! json_encode($j->nomor_jawaban) !!}, {!! json_encode($soal->nomor_soal) !!})">
                                <div style="padding: 0;">


                                @if($j->gambar_jawaban!=null)
                                <img src="{{ url('user/img/jawaban/'.$j->gambar_jawaban) }}" alt="Gambar" style="width: 100%; max-width: 200px; height: auto; max-height: 200px; display: block; margin-left: 10px;">
                                @endif
                                <input class="form-check-input option1" type="radio" name="{{'answer'.$soal->nomor_soal}}" id="{{$soal->nomor_soal.$j->nomor_jawaban}}" value="{{$j->nomor_jawaban}}" onclick='markedAsDone({!! json_encode($soal->nomor_soal) !!})'>&emsp;
                                <label class="form-check-label" for="{{$soal->nomor_soal.$j->nomor_jawaban}}">&ensp;{!! $j->isi_jawaban !!}</label>
                                </div>
                            </label>
                            @endforeach
                            {{-- <input class="form-check-input" style="display: none" type="radio" name="{{'answer'.$soal->id}}" id="option1" value="-1" checked> --}}
                            @endif

                            <!-- Tombol "Sebelumnya", "Ragu-Ragu", "Selanjutnya" -->
                            <div class="button-group">
                                <button type="button" class="btn btn-previous" onclick="previousQuestion()">Sebelumnya</button>
                                <button type="button" class="btn btn-flagged" onclick="markAsDoubt()">Ragu-Ragu</button>
                                <button type="button" class="btn btn-next" onclick="nextQuestion({{$length}})" id="nextbutton">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="number-column">
                    <!-- Kolom untuk memilih nomor soal -->
                    <div class="card">
                        <div class="card-body">
                            <div class="title-time-wrapper">

                                <h5 class="card-title">Pilih Nomor Soal</h5>
                                <p class="remaining-time">
                                    <ion-icon name="alarm-outline"></ion-icon>
                                    @php
                                    $hours = ($noted_time - $noted_time%3600)/3600;
                                    $minutes = ($noted_time - $hours*3600);
                                    $minutes = ($minutes - $minutes%60)/60;
                                    $seconds = $noted_time%60;
                                    $date = new DateTime();
                                    $date->setTime($hours, $minutes, $seconds);
                                    @endphp
                                    <span id="timer">{{$date->format('H:i:s')}}</span>
                                </p>
                            </div>
                            <div class="answer-status">
                                <label>Sudah dijawab</label>
                                <label>Ragu-ragu</label>
                                <label>Belum dijawab</label>
                            </div> 
                            <!-- Kolom-kolom untuk memilih nomor soal -->
                            <div id="questionNumbers" class="btn-group-vertical" role="group" aria-label="Pilih nomor soal">
                                @foreach($soals as $key => $soal)
                                <button onclick="showQuestion({{$key}})" id="{{'button'.$key}}" type="button"
                                @if($key==0)
                                class="btn btn-number active"
                                @else
                                class="btn btn-number"
                                @endif
                                style="font-size: 15pt">{{$key+1}}</button>
                                @endforeach
                                <!-- Tambahkan tombol nomor soal lainnya sesuai kebutuhan -->
                            </div><br>
                            <button id="dummy_button" type="button" onclick="showSubmit()" style="background-color: transparent; all: initial;" value="{{$paket->id}}" name="id_paket"><h5 class="card-title">Submit</h5></button>
                            @if(isset($noted_type))
                            <input type="text" name="noted_type" value="{{$noted_type}}" placeholder="" style="display: none">
                            <button type="submit" style="display: none" value="{{$kode_paket}}" name="id_paket" id="tombol_submit"><h5 class="card-title">Submit</h5></button>
                            @else
                            <button type="submit" style="display: none" value="{{$paket->id}}" name="id_paket" id="tombol_submit"><h5 class="card-title">Submit</h5></button>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>

    {{-- JS --}}
    <script src="{{ asset('user/js/dashboard.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk menambahkan label option
            function addOptionLabelsForSoal(soalElement) {
                const labels = ['A', 'B', 'C', 'D', 'E']; // Sesuaikan dengan jumlah maksimal option

                // Loop untuk setiap elemen jawaban dalam soal
                const jawabanElements = soalElement.querySelectorAll('.form-check');
                jawabanElements.forEach((jawaban, index) => {
                    if (index < labels.length) { // Pastikan index tidak melebihi jumlah labels
                        const optionLabel = document.createElement('span');
                        optionLabel.textContent = labels[index] + '. ';
                        const formCheckLabel = jawaban.querySelector('.form-check-label');
                        if (formCheckLabel && formCheckLabel.innerText[2] != '.') {
                            formCheckLabel.before(optionLabel);
                        }
                    }
                });
            }

            // Loop untuk setiap elemen soal
            const soalElements = document.querySelectorAll('.question-column');
            soalElements.forEach(soalElement => {
                addOptionLabelsForSoal(soalElement);
            });
        });
    </script>

    <script type="text/javascript">
        var startTime = <?php echo json_encode($noted_time); ?>;
        var url = <?php echo json_encode(url('try-out')); ?>;
        var manySoals = {!! json_encode(count($soals)) !!};
    </script>
    <script src="{{ asset('user/js/soal.js') }}"></script>

     {{-- ionicons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

     {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        var buttons = document.querySelectorAll('.form-check');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                var this_input = document.getElementById(this.id.substr(1));
                var all_this_input = document.querySelectorAll('.f'+this.id.substr(1).slice(0,-1));
                all_this_input.forEach(all_in => {
                    all_in.style.backgroundColor = "#e9ecef";
                    all_in.style.color = "#000000";
                });
                if(this_input.checked==true){
                    this.style.backgroundColor = "#77B0AA";
                    this.style.color = "#E3FEF7";
                }
                else{
                    this.style.backgroundColor = "#e9ecef";
                    this.style.color = "#000000";
                }
                
                
            });
        });
    </script>
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
        // function showConfirm(){
        //     Swal.fire({
        //           title: 'Konfirmasi masuk ke dalam tes',
        //           text: "Tes akan segera dimulai. Pastikan Anda sudah siap dengan segala yang diperlukan.",
        //           icon: 'warning',
        //           showCancelButton: true,
        //           confirmButtonColor: '#3085d6',
        //           cancelButtonColor: '#d33',
        //           confirmButtonText: 'Masuk',
        //           cancelButtonText: 'Kembali',
        //           reverseButtons: true
        //         }).then((result) => {
        //           if (result.value) {
        //             document.getElementById('tombol_submit').click();
        //         }
        //     });
        // }
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
    
</body>
</html>
