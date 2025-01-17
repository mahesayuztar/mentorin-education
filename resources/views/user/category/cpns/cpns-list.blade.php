@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/category/cpns/skd-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES SKD</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi Tes Wawasan Kebangsaan, Intelegensi Umum, dan Karakteristik Pribadi</p>
                <img src="{{ asset('user/img/icon/skd.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/cpns/skb-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES SKB</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi paket try out Tes Seleksi Kemampuan Bidang yang diujikan pada tes cpns</p>
                <img src="{{ asset('user/img/icon/skb.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/cpns/lainnya-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES LAINNYA</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi paket tryout tes lainnya meliputi Tes Pauli, Tes Kraepelin, Tes AHS Hilang</p>
                <img src="{{ asset('user/img/icon/lainnya.png') }}" width="150" height="150">
            </div>
        </div>
    </a>
</div>
@endsection
