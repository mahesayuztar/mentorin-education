@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ route('/category/tni/skd-tni') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES SKD</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi Tes Wawasan Kebangsaan, Inteligensi Umum, dan Karakteristik Pribadi</p>
                <img src="{{ asset('user/img/icon/doc1.png') }}" width="170" height="170">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/tni/psikologi-tni') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PSIKOLOGI</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi berbagai jenis try out semua mapel tes akademik persiapan seleksi anggota TNI</p>
                <img src="{{ asset('user/img/icon/doc4.png') }}" width="170" height="170">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/tni/akademik-tni') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES AKADEMIK</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi berbagai jenis try out semua mapel tes akademik persiapan seleksi anggota TNI</p>
                <img src="{{ asset('user/img/icon/doc5.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
</div>
@endsection
