@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/category/polri/psikologi-polri') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PSIKOLOGI</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi berbagai jenis try out mulai dari tes kecerdasan, kecermatan dan kepribadian</p>
                <img src="{{ asset('user/img/icon/psikologi.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/polri/akademik-polri') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES AKADEMIK</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi berbagai jenis try out semua mapel tes akademik persiapan seleksi anggota POLRI</p>
                <img src="{{ asset('user/img/icon/akademik.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/polri/lainnya-polri') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES LAINNYA</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi paket tryout tes lainnya meliputi Tes Pauli, Tes Kraepelin, Tes AHS Hilang</p>
                <img src="{{ asset('user/img/icon/lainnya.png') }}" width="150" height="150">
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

