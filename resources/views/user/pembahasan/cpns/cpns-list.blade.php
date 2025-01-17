@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Pembahasan Try Out yang telah Anda kerjakan!</h1>
<div class="cardBox">
    @if($tampil->contains('SKD'))
    <a href="{{ url('/pembahasan/cpns/skd-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES SKD</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi Tes Wawasan Kebangsaan, Intelegensi Umum, dan Karakteristik Pribadi</p>
                <img src="{{ asset('user/img/icon/skd.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
    @endif
    @if($tampil->contains('SKB'))
    <a href="{{ url('/pembahasan/cpns/skb-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES SKB</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi paket try out Tes Seleksi Kemampuan Bidang yang diujikan pada tes cpns</p>
                <img src="{{ asset('user/img/icon/skb.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
    @endif
    @if($tampil->contains('LAI'))
    <a href="{{ url('/pembahasan/cpns/lainnya-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES LAINNYA</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi paket tryout tes lainnya meliputi Tes Pauli, Tes Kraepelin, Tes AHS Hilang</p>
                <img src="{{ asset('user/img/icon/lainnya.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
    @endif
</div>
@endsection
