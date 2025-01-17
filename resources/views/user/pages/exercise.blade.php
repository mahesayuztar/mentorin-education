@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Latihan Soal yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">

    <a href="{{ route('/exercise/polri') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Latihan Soal</h2>
                <h5 style="cursor: pointer;">POLRI</h5>
                <p style="cursor: pointer;">Kepolisian Negara Republik Indonesia</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-polri-new.png') }}" alt="">
            </div>
        </div>
    </a>

    <a href="{{ route('/exercise/cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Latihan Soal</h2>
                <h5 style="cursor: pointer;">CPNS - KEDINASAN</h5>
                <p style="cursor: pointer;">Calon Pegawai Negeri Sipil</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-skd-new.png') }}" alt="">
            </div>
        </div>
    </a>

    <a href="{{ route('/exercise/tni') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Latihan Soal</h2>
                <h5 style="cursor: pointer;">TNI</h5>
                <p style="cursor: pointer;">Tentara Nasional Indonesia</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-tni-new.png') }}" alt="">
            </div>
        </div>
    </a>

    {{-- <a href="{{ route('/exercise/sekdin') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Latihan Soal</h2>
                <h5 style="cursor: pointer;">SEKDIN</h5>
                <p style="cursor: pointer;">Sekolah Kedinasan</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-skd-new.png') }}" alt="">
            </div>
        </div>
    </a> --}}

    <a href="{{ route('/exercise/cpns') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Latihan Soal</h2>
                <h5 style="cursor: pointer;">BUMN</h5>
                <p style="cursor: pointer;">Badan Usaha Milik Negara</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-bumn-new.png') }}" alt="">
            </div>
        </div>
    </a>

    <a href="{{ route('/exercise/cpns') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Latihan Soal</h2>
                <h5 style="cursor: pointer;">PPPK</h5>
                <p style="cursor: pointer;">Pegawai Pemerintah Perjanjian Kerja</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-pppk-new.png') }}" alt="">
            </div>
        </div>
    </a>

</div>
<script>
    function substringText() {
        var paragraphs = document.querySelectorAll('.card p'); // Mendapatkan semua elemen <p> dalam kelas .card
        paragraphs.forEach(function(paragraph) {
            var text = paragraph.textContent; // Mendapatkan teks dari elemen <p>
            var maxLength = 27; // Maksimum panjang teks yang diinginkan
            if (text.length > maxLength) {
                var substring = text.substr(0, maxLength) + ' ...'; // Mengambil substring dan menambahkan elipsis di akhir
                paragraph.textContent = substring; // Mengganti teks asli dengan substring
            }
        });
    }

    // Panggil fungsi saat dokumen selesai dimuat
    window.onload = function() {
        substringText();
    };
</script>

@endsection
