@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Latihan Soal yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/exercise/cpns/lainnya-cpns/psikologi-cpns/tes-kecerdasan') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES KECERDASAN</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi paket Latihan Soal tes kecerdasan meliputi kemampuan verbal, numerikal, logikal, figural, dan lain - lainn</p>
                <img src="{{ asset('user/img/icon/kecerdasan.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/cpns/lainnya-cpns/psikologi-cpns/tes-kecermatan') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES KECERMATAN</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi paket Latihan Soal tes kecermatan meliputi angka hilang, huruf hilang, simbol hilang, angka acak, dan lain - lain</p>
                <img src="{{ asset('user/img/icon/kecermatan.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/cpns/lainnya-cpns/psikologi-cpns/tes-kepribadian') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES KEPRIBADIAN</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi paket Latihan Soal tes kepribadian meliputi tes minat EPPS, pernyataan Ya/Tidak, Frekuensi waktu, dan lain - lain</p>
                <img src="{{ asset('user/img/icon/kepribadian.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/exercise/cpns/lainnya-cpns/psikologi-cpns/tes-kejiwaan') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES KEJIWAAN</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi paket Latihan Soal tes kepribadian meliputi tes minat EPPS, pernyataan Ya/Tidak, Frekuensi waktu, dan lain - lain</p>
                <img src="{{ asset('user/img/icon/kejiwaan.png') }}" width="150" height="150">
            </div>
        </div>
    </a>
</div>
@endsection
