@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/category/cpns/skb-cpns/cat-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES SKB CAT CPNS</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Ujian seleksi kompetensi berbasis komputer untuk calon pegawai di instansi pemerintah.</p>
                <img src="{{ asset('user/img/icon/skb.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/cpns/skb-cpns/cat-sekdin') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES SKB CAT SEKDIN</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Ujian seleksi kompetensi berbasis komputer untuk calon pegawai di instansi pemerintah.</p>
                <img src="{{ asset('user/img/icon/skb.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    {{-- <a href="{{ url('/category/cpns/skb-cpns/psikologi-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PSIKOTES</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi berbagai jenis try out mulai dari tes kecerdasan, kecermatan dan kepribadian</p>
                <img src="{{ asset('user/img/icon/doc4.png') }}" width="170" height="170">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/cpns/skb-cpns/praktek-kerja') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PRAKTEK KERJA</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Tes ini melibatkan situasi yang mirip dengan tugas yang akan dihadapi di tempat kerja.</p>
                <img src="{{ asset('user/img/icon/doc3.png') }}" width="170" height="170">
            </div>
        </div>
    </a> --}}
</div>
@endsection
