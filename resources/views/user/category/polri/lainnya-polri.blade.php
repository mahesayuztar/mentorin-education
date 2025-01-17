@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/category/polri/lainnya-polri/tes-kesamaptaan-jasmani') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES TKJ</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes kesamaptaan jasmani Polri melibatkan evaluasi fisik untuk menilai kesiapan anggota dalam tugas.</p>
                <img src="{{ asset('user/img/icon/tkj.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/polri/lainnya-polri/tes-pmk') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PMK</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes PMK Polri adalah ujian psikologi yang mengukur potensi kognitif dan kepribadian calon anggota Polri.</p>
                <img src="{{ asset('user/img/icon/pmk.png') }}" width="150" height="150">
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
