@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ route('/category/sekdin/akademik-sekdin') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES AKADEMIK</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi berbagai jenis try out semua mapel tes akademik persiapan seleksi anggota TNI</p>
                <img src="{{ asset('user/img/icon/doc5.png') }}" width="170" height="170">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/sekdin/lanjutan-sekdin') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES LANJUTAN</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi paket tryout tes lainnya meliputi Tes Pauli, Tes Kraepelin, Tes AHS Hilang</p>
                <img src="{{ asset('user/img/icon/doc3.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
</div>
@endsection
