@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Latihan Soal yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/exercise/polri/akademik-polri/tes-pengetahuan-umum') }}" style="text-decoration: none; color: #001e26;">
        <div class="card akademik">
            <div>
                <h2 style="cursor: pointer;">TES TPU</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes Pengetahuan Umum Polri adalah tes yang dilakukan untuk mengukur pengetahuan umum calon anggota polisi.</p>
                <img src="{{ asset('user/img/icon/tpu.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/polri/akademik-polri/tes-penalaran-numerik') }}" style="text-decoration: none; color: #001e26;">
        <div class="card akademik">
            <div>
                <h2 style="cursor: pointer;">TES TPN</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes penalaran numerik Polri untuk menguji kemampuan dalam menyelesaikan masalah matematika dalam konteks kepolisian.</p>
                <img src="{{ asset('user/img/icon/tpn.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/polri/akademik-polri/tes-wawasan-kebangsaan') }}" style="text-decoration: none; color: #001e26;">
        <div class="card akademik">
            <div>
                <h2 style="cursor: pointer;">TES TWK</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes Wawasan Kebangsaan Polri adalah tes pemahaman tentang negara, sejarah Indonesia, dan lainnya.</p>
                <img src="{{ asset('user/img/icon/twk.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/polri/akademik-polri/tes-bahasa-inggris') }}" style="text-decoration: none; color: #001e26;">
        <div class="card akademik">
            <div>
                <h2 style="cursor: pointer;">TES BING</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes bahasa Inggris Polri adalah evaluasi kemampuan bahasa Inggris calon anggota polisi menggunakan sejumlah kriteria.</p>
                <img src="{{ asset('user/img/icon/bing.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/polri/akademik-polri/tes-potensi-akademik') }}" style="text-decoration: none; color: #001e26;">
        <div class="card akademik">
            <div>
                <h2 style="cursor: pointer;">TES TPA</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes potensi akademik Polri bertujuan untuk mengukur kemampuan calon polisi dalam bidang kognitif, logika, dan verbal.</p>
                <img src="{{ asset('user/img/icon/akademik.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/polri/akademik-polri/tes-bahasa-indonesia') }}" style="text-decoration: none; color: #001e26;">
        <div class="card akademik">
            <div>
                <h2 style="cursor: pointer;">TES BINDO</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes bahasa Indonesia Polri bertujuan untuk menguji kemampuan dalam pemahaman dan penggunaan bahasa Indonesia.</p>
                <img src="{{ asset('user/img/icon/bindo.png') }}" width="150" height="150">
            </div>
        </div>
    </a>
</div>

<script>
    function substringText() {
        var paragraphs = document.querySelectorAll('.card p'); // Mendapatkan semua elemen <p> dalam kelas .card
        paragraphs.forEach(function(paragraph) {
            var text = paragraph.textContent; // Mendapatkan teks dari elemen <p>
            var maxLength = 40; // Maksimum panjang teks yang diinginkan
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
