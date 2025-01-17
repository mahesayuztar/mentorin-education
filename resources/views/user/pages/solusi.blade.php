<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembahasan | Mentoring</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('user/css/soal.css') }}">
    
    {{-- ICON --}}
    <link rel="icon" href="{{ asset('user/img/logo_kecil.png') }}" type="image/png">

    <style>
        .form-solusi-check {
            margin-top: 1rem;
            margin-bottom: 10px;
            background: #e9ecef;
            border-radius: 20px;
            padding: 25px 25px 25px 30px;
            line-height: 2;
            /* width: fit-content; */
        }
        
        .card-image {
            width: 600px;
            height: 600px;
            border: 1px solid #135D66;
            margin: 2.5rem 0rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            overflow: auto;
        }
        
        .card-image .border {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 10px;
        }
        
        .card-image .content {
            width: 100%;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.7);
            text-align: justify;
            padding: 20px 30px;
            line-height: 2;
        }
        
        .card-image img {
            width: 100%;
            max-width: 400px;
            height: 100%;
            max-height: 400px;
            object-fit: contain;
            display: block;
            padding: 10px;
        }

        /* ------------------- responsive ------------------- */
        @media (max-width: 576px) {
            .card-image {
                width: 100%;
                height: auto; 
                margin: 1rem 0; 
            }
        
            .card-image img {
                padding: 10px; 
            }
        
            .card-image .border {
                padding: 5px; 
            }
        
            .card-image .content {
                padding: 5px; 
            }
        }

        @media (max-width: 380px) {
            .card-image {
                width: 100%; 
                height: auto; 
                margin: 1rem 0; 
            }
        
            .card-image img {
                padding: 10px; 
            }
        
            .card-image .border {
                padding: 5px; 
            }
        
            .card-image .content {
                padding: 5px;
            }
        }
        .btn-hijau {
            background-color: #6fc276;
        }
        .btn-merah {
            background-color: #FF6961;
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
                    <h3>{{"PEMBAHASAN TES"}}</h3>
                    <p>{{$paket->nama_paket}}</p>
                </div>

                <div class="empty-space"></div>
            </div>

            <!-- Progress bar -->
            <div class="progress-container">
                <progress id="progress" min="0" max="100" value="100">
                    <span class="progress-text">50%</span>
                </progress>
            </div>

            <form action="{{url('/soal/submit')}}" method="post" accept-charset="utf-8">
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
                        <div class="card-body" class="solusian">
                            <h5 class="card-title">No. {{$key+1}}</h5><br>
                            <p class="card-text" id="questionText" style="font-weight: normal;"><i>Jawaban anda belum tercatat jika mengerjakan pada versi sebelumnya.</i></p><br><br>
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
                                <div class="form-solusi-check"
                                    @if($j->nomor_jawaban == $soal->nomor_jawaban)
                                        style="background-color: #135D66;"
                                    @elseif($j->benar_jawaban == 1 || $j->benar_jawaban == 3)
                                        style="margin-top: 1rem;
                                               margin-bottom: 10px;
                                               background: var(--container-color);
                                               border-radius: 20px;
                                               padding: 25px;
                                               line-height: 2;
                                               color: var(--bg-color);
                                               pointer-events: none;
                                               display: flex;
                                               align-items: center;"
                                    @elseif($j->benar_jawaban == 2)
                                        style="margin-top: 1rem;
                                               margin-bottom: 10px;
                                               background: #FF6961;
                                               border-radius: 20px;
                                               padding: 25px;
                                               line-height: 2;
                                               color: var(--bg-color);
                                               pointer-events: none;
                                               display: flex;
                                               align-items: center;"
                                    @endif
                                >
                                    <input class="form-check-input" type="checkbox" name="{{ 'answerc'.$soal->nomor_soal.$j->nomor_jawaban }}" value="1" id="{{ $soal->nomor_soal.$j->nomor_jawaban }}" onclick="markedAsDone({!! json_encode($soal->nomor_soal) !!})"
                                        @if($j->benar_jawaban == 2 || $j->benar_jawaban == 3)
                                        checked
                                        disabled="true"
                                        @else
                                        disabled="true"
                                        @endif
                                    >
                                    <label class="form-check-label" for="{{ $soal->nomor_soal.$j->nomor_jawaban }}" style="margin-left: 10px;">&ensp;{!! $j->isi_jawaban !!}</label>
                                    @if($j->gambar_jawaban != null)
                                    <img src="{{ url('user/img/jawaban/'.$j->gambar_jawaban) }}" alt="Gambar Jawaban" style="width: 100%; max-width: 200px; height: auto; max-height: 200px; display: block; margin-left: 10px;">
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @else
                            @foreach($p_jawabans as $j)
                            <div class="form-solusi-check"
                                @if($j->benar_jawaban == 1 || $j->benar_jawaban == 3)
                                    style="margin-top: 1rem;
                                           margin-bottom: 10px;
                                           background: var(--container-color);
                                           border-radius: 20px;
                                           padding: 25px;
                                           line-height: 2;
                                           color: var(--bg-color);
                                           pointer-events: none;
                                           display: flex;
                                           align-items: center;"
                                @elseif($j->benar_jawaban == 2)
                                    style="margin-top: 1rem;
                                           margin-bottom: 10px;
                                           background: #FF6961;
                                           border-radius: 20px;
                                           padding: 25px;
                                           line-height: 2;
                                           color: var(--bg-color);
                                           pointer-events: none;
                                           display: flex;
                                           align-items: center;"
                                @endif
                            >
                                <div style="display: flex; align-items: center; width: 100%;">
                                    <input class="form-check-input option1" type="radio" name="{{ 'answer'.$soal->nomor_soal }}" id="{{ $soal->nomor_soal.$j->nomor_jawaban }}" value="{{ $j->nomor_jawaban }}" onclick='markedAsDone({!! json_encode($soal->nomor_soal) !!})'
                                        @if($j->benar_jawaban == 2 || $j->benar_jawaban == 3)
                                        checked
                                        disabled="true"
                                        @else
                                        disabled="true"
                                        @endif
                                    >
                                    <label class="form-check-label" for="{{ $soal->nomor_soal.$j->nomor_jawaban }}" style="margin-left: 10px;">
                                        &ensp;{!! $j->isi_jawaban !!}
                                        @if(substr($paket->id, 3, 3) == "DKD" && $j->nomor_jawaban > 65)
                                            &nbsp;({{ $j->skor_jawaban }})
                                        @endif
                                    </label>
                                    @if($j->gambar_jawaban != null)
                                    <img src="{{ url('user/img/jawaban/'.$j->gambar_jawaban) }}" alt="Gambar Jawaban" style="width: 100%; max-width: 200px; height: auto; max-height: 200px; display: block; margin-left: 10px;">
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @endif

                            <!-- Image below the answer key -->
                            {{-- @if($soal->gambar_bawah_jawaban!=null) --}}
                            @if($soal->gambar_solusi or $soal->isi_solusi)
                            <br>
                            <hr>
                            <div class="card-image">
                                <div class="border">
                                    <h2>Pembahasan Soal</h2>
                                </div>
                                <div class="content">
                                    <p>{!!$soal->isi_solusi!!}</p>
                                </div>
                                @if($soal->gambar_solusi)
                                <img src="{{url('user/img/solusi/'.$soal->gambar_solusi)}}" alt="Gambar Solusi">
                                @endif
                            </div>
                        @endif

                            {{-- @endif --}}

                            <!-- Tombol "Sebelumnya", "Ragu-Ragu", "Selanjutnya" -->
                            <div class="button-group">
                                <button type="button" class="btn btn-previous" onclick="previousQuestion()">Sebelumnya</button>
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

                            </div>
                            <!-- Kolom-kolom untuk memilih nomor soal -->
                            <div id="questionNumbers" class="btn-group-vertical" role="group" aria-label="Pilih nomor soal">
                                @foreach($soals as $key => $soal)
                                <button onclick="showQuestion({{$key}})" id="{{'button'.$key}}" type="button"
                                class="btn btn-number
                                @if($key==0)
                                active
                                @endif
                                @if($soal->benar_jawaban==3)
                                btn-hijau
                                @elseif($soal->benar_jawaban==2)
                                btn-merah
                                @endif
                                "
                                style="font-size: 15pt"
                                >{{($key+1)}}</button>
                                @endforeach
                                <!-- Tambahkan tombol nomor soal lainnya sesuai kebutuhan -->
                            </div><br>
                            @if(isset($urutan_paket))
                            <button type="button" value="{{$paket->id}}" name="id_paket"
                                @if($urutan_paket=='1')
                                style="background-color: transparent; all: initial; cursor: not-allowed; opacity: 0.5;"
                                ><h5 class="card-title">Tes Sebelumnya</h5></button>
                                @else
                                style="background-color: transparent; all: initial;"
                                ><a href='{{url("/soal/solusi/".$id_paket."/".($urutan_paket-1))}}'><h5 class="card-title">Tes Sebelumnya</h5></a></button>
                                @endif
                            <button type="button" value="{{$paket->id}}" name="id_paket"
                                @if($urutan_paket==$max_urutan_paket)
                                style="background-color: transparent; all: initial; cursor: not-allowed; opacity: 0.5;"
                                ><h5 class="card-title">Tes Setelahnya</h5></button>
                                @else
                                style="background-color: transparent; all: initial;"
                                ><a href='{{url("/soal/solusi/".$id_paket."/".($urutan_paket+1))}}'><h5 class="card-title">Tes Selanjutnya</h5></a></button>
                                @endif
                            @endif
                            <a href='{{url("/history")}}'><button type="button" style="background-color: transparent; all: initial;" value="{{$paket->id}}" name="id_paket"><h5 class="card-title">Keluar</h5></button></a>
                        </div>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>

    {{-- JS --}}
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
                        if (formCheckLabel) {
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

    <script>
        // var delay = 100;
        // var isClicked = false;
        // var button = document.getElementById("dummy_button");
        // button.addEventListener("click", function() {
        //     delay = 9999999;
        //     isClicked = !isClicked;
        // });
        // setInterval(function(){
        //     if(isClicked==false){
        //         window.location.reload();
        //         window.stop();
        //     }
        // },delay);


        var manyDone = 0;

        ///////////////////////////////////////////////////////////////////////////
        // Supaya jawaban tidak hilang ketika reload

        function setSessionItem(name, value) {
            var mySession;
            try {
                mySession = JSON.parse(localStorage.getItem('mySession'));
            } catch (e) {
                console.log(e);
                mySession = {};
            }

            mySession[name] = value;

            mySession = JSON.stringify(mySession);

            localStorage.setItem('mySession', mySession);
        }

        function getSessionItem(name) {
            var mySession = localStroage.getItem('mySession');
            if (mySession) {
                try {
                    mySession = JSON.stringify(mySession);
                    return mySession[name];
                } catch (e) {
                    console.log(e);
                }
            }
        }

        function restoreSession(data) {
            for (var x in data) {
                //use saved data to set values as needed
                console.log(x, data[x]);
            }
        }

        window.addEventListener('load', function(e) {
            var mySession = localStorage.getItem('mySession');
            if (mySession) {
                try {
                    mySession = JSON.parse(localStorage.getItem('mySession'));
                } catch (e) {
                    console.log(e);
                    mySession = {};
                }
                restoreSession(mySession);
            } else {
                localStorage.setItem('mySession', '{}');
            }

            setSessionItem('foo', Date.now()); //should change each time

            if (!mySession.bar) {
                setSessionItem('bar', Date.now()); //should not change on refresh
            }
        }, false);

        ///////////////////////////////////////////////////////////////////////////

        function showQuestion(questionNumber) {
            // Mendapatkan semua elemen div soal
            var allQuestions = document.querySelectorAll('.soal-pointer');

            // Menyembunyikan semua div soal
            allQuestions.forEach(function(question) {
                question.style.display = 'none';
            });

            var allButtons = document.querySelectorAll('.btn-number');
            allButtons.forEach(function(button) {
                button.classList.remove('active');
            });

            // Menampilkan div soal yang sesuai dengan nomor soal yang diklik
            var currentQuestion = document.getElementById('soal' + questionNumber);
            var currentButton = document.getElementById('button' + questionNumber);
            if (currentQuestion) {
                currentQuestion.style.display = 'block';
                currentButton.classList.add('active');
            }
        }

        function previousQuestion() {
            var i = 0;
            var presentQuestion = 0;
            var allQuestions = document.querySelectorAll('.soal-pointer');
            allQuestions.forEach(function(question) {
                var computedStyle = window.getComputedStyle(question);
                var displayAttribute = computedStyle.getPropertyValue('display');
                if(displayAttribute=="block") presentQuestion = i;
                i++;
            });
            if (presentQuestion > 0) {
                presentQuestion--;
                showQuestion(presentQuestion);
            }
        }

        function nextQuestion(max) {
            var i = 0;
            var presentQuestion = 0;
            var allQuestions = document.querySelectorAll('.soal-pointer');
            allQuestions.forEach(function(question) {
                var computedStyle = window.getComputedStyle(question);
                var displayAttribute = computedStyle.getPropertyValue('display');
                if(displayAttribute=="block") presentQuestion = i;
                i++;
            });
            if (presentQuestion < max) {
                presentQuestion++;
                showQuestion(presentQuestion);
            }
        }

        function markAsDoubt() {
            var i = 0;
            var presentQuestion = 0;
            var isDoubt = false;
            var allQuestions = document.querySelectorAll('.soal-pointer');
            allQuestions.forEach(function(question) {
                var computedStyle = window.getComputedStyle(question);
                var displayAttribute = computedStyle.getPropertyValue('display');
                if(displayAttribute=="block"){
                    presentQuestion = i;
                }
                i++;
            });
            var currentButton = document.getElementById('button' + presentQuestion);
            isDoubt = currentButton.classList.contains('flagged');
            currentButton.classList.toggle('flagged', !isDoubt);
            if(currentButton.classList.contains('isDone')==true){
                currentButton.classList.remove('flagged');
                currentButton.classList.remove('isDone');
                currentButton.classList.add('done');
            }
            else if(currentButton.classList.contains('done')==true){
                currentButton.classList.remove('done');
                currentButton.classList.add('flagged');
                currentButton.classList.add('isDone');
            }
        }

        function markedAsDone(questionNumber){
            var currentButton = document.getElementById('button' + (questionNumber-1));
            var radioButtons = document.getElementsByName("answer"+questionNumber);

            // Loop through each radio button
            for (var i = 0; i < radioButtons.length; i++) {
                // Check if the current radio button is checked
                if (radioButtons[i].checked == true && currentButton.classList.contains('done')==false) {
                manyDone+=1;
                // If you want to break the loop after finding the checked radio button
                // you can use `break;` statement here
                }
            }
            if(currentButton.classList.contains('flagged')==true){
                currentButton.classList.add('isDone');
            }
            else{
                currentButton.classList.add('done');
            }


            var progressBar = document.getElementById('progress');
            progressBar.value=Math.floor(manyDone/manySoals*100);
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

        function showSubmit(){
            var allButtons = document.querySelectorAll('.btn-number');
            var isDoubt = false;
            allButtons.forEach(function(button) {
                if(button.classList.contains('flagged')){
                    isDoubt = true;
                }
            });
            Swal.fire({
                title: 'Apakah anda yakin untuk menyelesaikan tes?',
                text: "Silakan periksa kembali setiap soal dengan teliti dan cermat. Untuk menyelesaikan tes, silahkan memilih OK.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'OK',
                cancelButtonText: 'Kembali',
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    if(isDoubt){
                        Swal.fire({
                            title: 'Anda memiliki soal dengan label ragu-ragu',
                            text: "Silakan periksa kembali setiap soal dengan teliti dan cermat. Untuk menyelesaikan tes, silahkan memilih OK.",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK',
                            cancelButtonText: 'Kembali',
                            reverseButtons: true
                            }).then((result) => {
                            if (result.value) {
                                document.getElementById('tombol_submit').click();
                            }
                        });
                    }
                    else document.getElementById('tombol_submit').click();
                }
            });
        }

        // Panggil fungsi startTimer untuk memulai timer
        startTimer();
        setTimeout(function () {

            Swal.fire({
            title: 'Waktu sudah habis',
            text: "Waktu untuk tes ini sudah berakhir. Konfirmasi untuk melihat rekap hasil pengerjaan tes.",
            icon: 'warning',
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            confirmButtonColor: '#3085d6'
            }).then((result)=>{
                if(result.value){
                    var button = document.getElementById("tombol_submit");

                    button.click();
                }
            });
        },startTime*1000);

        // function checkJawaban(jawabanNumber, soalNumber){
        //     document.getElementById(soalNumber+jawabanNumber).checked = true;
        // }


        // var buttons = document.querySelectorAll('#questionNumbers button');
        //         buttons.forEach(button => {
        //             button.addEventListener('click', function() {
        //                 buttons.forEach(btn => btn.classList.remove('active')); // Hapus kelas 'active' dari semua tombol
        //                 this.classList.add('active'); // Tambahkan kelas 'active' ke tombol yang diklik

        //                 var questionNumber = this.value;
        //                 var soal_i = soalData[questionNumber].isi_soal;
        //                 // Lakukan permintaan AJAX untuk memuat soal yang dipilih
        //                 // dan perbarui bagian soal pada halaman tanpa me-refresh
        //                 document.getElementById('questionText').innerText = 'Soal ' + questionNumber;
        //             });
        //         });

        //         // Variabel untuk menyimpan nomor soal saat ini
        //         var currentQuestion = 1;

        //         // Variabel untuk menyimpan status ragu-ragu
        //         var isDoubt = false;

        //         // Fungsi untuk memperbarui tampilan soal berdasarkan nomor soal saat ini
        //         function updateQuestion() {
        //             // Lakukan permintaan AJAX untuk memuat soal yang dipilih
        //             // dan perbarui bagian soal pada halaman tanpa me-refresh
        //             document.getElementById('questionText').innerText = 'Soal ' + currentQuestion;
        //         }

        //         // Fungsi untuk navigasi ke soal sebelumnya
        //         function previousQuestion() {
        //             if (currentQuestion > 1) {
        //                 currentQuestion--;
        //                 updateQuestion();
        //                 // Hapus kelas 'active' dari tombol sekarang
        //                 document.querySelector('#questionNumbers .btn.active').classList.remove('active');
        //                 // Tambahkan kelas 'active' ke tombol sebelumnya
        //                 document.querySelector('#questionNumbers .btn[value="' + currentQuestion + '"]').classList.add('active');
        //             }
        //         }

        //         // Fungsi untuk navigasi ke soal selanjutnya
        //         function nextQuestion() {
        //             // Anda dapat menyesuaikan logika ini sesuai dengan jumlah total soal
        //             if (currentQuestion < 3) {
        //                 currentQuestion++;
        //                 updateQuestion();
        //                 // Hapus kelas 'active' dari tombol sekarang
        //                 document.querySelector('#questionNumbers .btn.active').classList.remove('active');
        //                 // Tambahkan kelas 'active' ke tombol selanjutnya
        //                 document.querySelector('#questionNumbers .btn[value="' + currentQuestion + '"]').classList.add('active');
        //             }
        //         }

        //         function markAsDoubt() {
        //             isDoubt = !isDoubt; // Toggle status ragu-ragu
        //             var activeButton = document.querySelector('#questionNumbers .btn.active');
        //             activeButton.classList.toggle('flagged', isDoubt);
        //         }

        //         // Tambahkan kelas 'active' ke tombol nomor soal pertama saat halaman dimuat
        //         document.querySelector('#questionNumbers .btn[value="1"]').classList.add('active');
    </script>
</body>
</html>
