<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal | Mentoring</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #003C43;
        }

        .container-fluid {
            background: #fff;
            height: 150vh;
            padding: 3rem;
            border-top-left-radius: 4rem;
            border-top-right-radius: 4rem;
        }

        .waktu {
            background-color: #135D66;
            color: #F0FFFF;
            padding: 20px 40px;
            display: inline-block;
            margin: 0 auto;
            border-radius: 20px;
        }

        .tabel-penjelasan th {
            border: 1px solid #001e26;
            padding: 20px 30px;
            font-size: 22px;
        }

        .tabel-penjelasan td {
            border: 1px solid #001e26;
            padding: 20px 30px;
            font-size: 20px;
        }

        .tabel-soal th {
            border: 1px solid #001e26;
            padding: 10px 20px;
            font-size: 22px;
        }

        .btn {
            border: 1px solid #135D66;
            background: #fff;
            color: #135D66;
            padding: 50px 150px;
            font-size: 20px;
            border-radius: 10px;
        }

        .btn:hover {
            background-color: #135D66;
            border-color: #135D66;
            color: #fff;
        }

        .btn.active,
        .btn:active {
            background-color: #135D66 !important;
            border-color: #135D66 !important;
            color: #fff !important;
        }

        @media (min-width: 1401px) {
            .container-fluid {
                padding: 3rem;
            }

            .waktu {
                padding: 20px 40px;
                font-size: 1.5rem;
            }

            .tabel-penjelasan th,
            .tabel-penjelasan td,
            .tabel-soal th {
                padding: 0.8rem 1.5rem;
                font-size: 1.2rem;
            }

            .btn {
                padding: 50px 100px;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 1400px) {
            .container-fluid {
                padding: 2rem;
            }

            .waktu {
                padding: 1rem 2rem;
                font-size: 1.2rem;
            }

            .tabel-penjelasan th,
            .tabel-penjelasan td,
            .tabel-soal th {
                padding: 0.8rem 1.5rem;
                font-size: 1.2rem;
            }

            .btn {
                padding: 50px 100px;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 1200px) {
            .container-fluid {
                padding: 2rem;
            }

            .waktu {
                padding: 15px 30px;
                font-size: 18px;
            }

            .tabel-penjelasan th,
            .tabel-penjelasan td,
            .tabel-soal th {
                padding: 15px 20px;
                font-size: 18px;
            }

            .btn {
                padding: 40px 80px;
                font-size: 18px;
            }
        }

        @media (max-width: 992px) {
            .container-fluid {
                padding: 2rem;
            }

            .waktu {
                padding: 15px 30px;
                font-size: 18px;
            }

            .tabel-penjelasan th,
            .tabel-penjelasan td,
            .tabel-soal th {
                padding: 15px 20px;
                font-size: 18px;
            }

            .btn {
                padding: 30px 60px;
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .container-fluid {
                padding: 2rem;
                border-top-left-radius: 3rem;
                border-top-right-radius: 3rem;
            }

            .waktu {
                padding: 15px 30px;
                font-size: 18px;
                border-radius: 10px;
            }

            .tabel-penjelasan th,
            .tabel-penjelasan td {
                padding: 10px 15px;
                font-size: 16px;
            }

            .tabel-soal th {
                padding: 8px 12px;
                font-size: 16px;
            }

            .btn {
                padding: 15px 40px;
                font-size: 18px;
            }
        }

        @media (max-width: 576px) {
            .container-fluid {
                padding-left: 10px;
                padding-right: 10px;
                border-top-left-radius: 2rem;
                border-top-right-radius: 2rem;
            }

            h2 {
                font-size: 22px;
            }

            .waktu {
                font-size: 16px;
                padding: 10px 30px;
                border-radius: 8px;
            }

            .tabel-penjelasan th {
                font-size: 16px;
                padding: 15px 25px;
            }

            .tabel-penjelasan td {
                font-size: 14px;
                padding: 15px 25px;
            }

            .tabel-soal th {
                font-size: 16px;
            }

            .btn {
                margin: 5px;
                padding: 15px 25px;
                font-size: 16px;
            }
        }

        @media (max-width: 380px) {
            .container-fluid {
                padding: 1rem;
            }

            .waktu {
                padding: 15px 30px;
                font-size: 18px;
                border-radius: 10px;
            }

            .tabel-penjelasan th,
            .tabel-penjelasan td,
            .tabel-soal th {
                padding: 10px 15px;
                font-size: 16px;
            }

            .btn {
                margin: 5px;
                padding: 15px 40px;
                font-size: 16px;
            }
        }

    </style>
</head>
<body>
    <!-- Logo Section -->
    <div class="d-flex justify-content-center mt-4">
        <img src="{{ asset('user/img/logo.png') }}" alt="Logo" style="max-width: 150px;">
    </div>
    <form action="
    @if(isset($noted_type))
    {{url('/soal/submit-paket')}}
    @else
    {{url('/soal/submit')}}
    @endif
    " method="post" accept-charset="utf-8">
    @csrf


    <!-- Container Section -->
    @foreach($soals as $k => $s)
    <div class="container-fluid mt-4 text-center soal-pointer" id="{{'soal'.$s->nomor_soal}}"
    @if($k!=0)
    style="display: none;"
    @endif
    >
        <h2>{{$paket->nama_paket}}</h2>
        <h2>KOLOM {{$s->urutan_kolom}}</h2>
        <h5 class="waktu mt-4 timer-pointer" >

        </h5>
        <table class="tabel-penjelasan mt-5" style="margin: 0 auto; border-collapse: collapse;">
            <tr>
                <th>{{$s->isi_kolom[0]}}</th>
                <th>{{$s->isi_kolom[1]}}</th>
                <th>{{$s->isi_kolom[2]}}</th>
                <th>{{$s->isi_kolom[3]}}</th>
                <th>{{$s->isi_kolom[4]}}</th>
            </tr>
            <tr>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
            </tr>
        </table>

        {{-- soal --}}
        <table class="tabel-soal mt-5" style="margin: 0 auto; border-collapse: collapse;">
            <tr>
                <th>{{$s->isi_soal[0]}}</th>
                <th>{{$s->isi_soal[1]}}</th>
                <th>{{$s->isi_soal[2]}}</th>
                <th>{{$s->isi_soal[3]}}</th>
            </tr>
        </table>

        <div class="mt-5">
            <button type="button" class="btn m-1" onclick="showPickQuestion({!! json_encode($s->nomor_soal+1) !!},1)">A</button>
            <button type="button" class="btn m-1" onclick="showPickQuestion({!! json_encode($s->nomor_soal+1) !!},2)">B</button>
            <button type="button" class="btn m-1" onclick="showPickQuestion({!! json_encode($s->nomor_soal+1) !!},3)">C</button>
            <button type="button" class="btn m-1" onclick="showPickQuestion({!! json_encode($s->nomor_soal+1) !!},4)">D</button>
            <button type="button" class="btn m-1" onclick="showPickQuestion({!! json_encode($s->nomor_soal+1) !!},5)">E</button>
        </div>
        <input type="radio" id="{{'answer'.$s->nomor_soal."1"}}" name="{{'answer'.$s->nomor_soal}}" value="1" style="display: none;">
        <input type="radio" id="{{'answer'.$s->nomor_soal."2"}}" name="{{'answer'.$s->nomor_soal}}" value="2" style="display: none;">
        <input type="radio" id="{{'answer'.$s->nomor_soal."3"}}" name="{{'answer'.$s->nomor_soal}}" value="3" style="display: none;">
        <input type="radio" id="{{'answer'.$s->nomor_soal."4"}}" name="{{'answer'.$s->nomor_soal}}" value="4" style="display: none;">
        <input type="radio" id="{{'answer'.$s->nomor_soal."5"}}" name="{{'answer'.$s->nomor_soal}}" value="5" style="display: none;">

    </div>
    @endforeach
    <br><br><br><br>
    @if(isset($noted_type))
    <input type="text" name="noted_type" value="{{$noted_type}}" placeholder="" style="display: none">
    <button type="submit" style="display: none" value="{{$kode_paket}}" name="id_paket" id="tombol_submit"><h5 class="card-title">Submit</h5></button>
    @else
    <button type="submit" style="display: none" value="{{$paket->id}}" name="id_paket" id="tombol_submit"><h5 class="card-title">Submit</h5></button>
    @endif
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var notedTime = {!! json_encode($noted_time) !!};
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
    <script src="{{url('user/js/soal-kecermatan.js')}}"></script>
</body>
</html>
