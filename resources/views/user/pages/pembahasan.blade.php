@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pembahasan Try Out yang Sudah Dikerjakan</h1>

<div class="cardBox">
    
@if($tampil->contains('POL'))
    <a href="{{ url('/pembahasan/polri') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Pembahasan</h2>
                <h5 style="cursor: pointer;">POLRI</h5>
                <p style="cursor: pointer;">Kepolisian Republik Indonesia</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-polri-new.png') }}" alt="">
            </div>
        </div>
    </a>
@endif

@if($tampil->contains('PNS'))
    <a href="{{ url('/pembahasan/cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Pembahasan</h2>
                <h5 style="cursor: pointer;">CPNS - KEDINASAN</h5>
                <p style="cursor: pointer;">Calon Pegawai Negeri Sipil</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-skd-new.png') }}" alt="">
            </div>
        </div>
    </a>
@endif
    
</div>
@if($tampil->isEmpty())
    <div class="col-12 justify-content-center text-align-center mt-5">
        <p style="text-align: center; color: #003C43; margin-top: 20px;">Keterangan :</p>
        <h3 style="text-align: center; color: #003C43; margin-top: 10px;">Anda belum memiliki Paket Try Out Mentorin untuk saat ini</h3>
    </div>
@endif

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
