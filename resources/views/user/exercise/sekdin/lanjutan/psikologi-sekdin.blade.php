@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ route('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecerdasan') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES KECERDASAN</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi paket tryout tes kecerdasan meliputi kemampuan verbal, numerikal, logikal, figural, dan lain - lainn</p>
                <img src="{{ asset('user/img/icon/doc6.png') }}" width="170" height="170">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecermatan') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES KECERMATAN</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi paket tryout tes kecermatan meliputi angka hilang, huruf hilang, simbol hilang, angka acak, dan lain - lain</p>
                <img src="{{ asset('user/img/icon/doc6.png') }}" width="170" height="170">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kepribadian') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES KEPRIBADIAN</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi paket tryout tes kepribadian meliputi tes minat EPPS, pernyataan Ya/Tidak, Frekuensi waktu, dan lain - lain</p>
                <img src="{{ asset('user/img/icon/doc6.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
</div>
@endsection
