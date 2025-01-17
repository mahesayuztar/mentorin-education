@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/category/cpns/lainnya-cpns/akademik-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES AKADEMIK</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes ini menguji pengetahuan dasar, wawasan kebangsaan, dan karakteristik pribadi.</p>
                <img src="{{ asset('user/img/icon/akademik.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/cpns/lainnya-cpns/psikotes-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PSIKOTES</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Berisi berbagai jenis try out mulai dari tes kecerdasan, kecermatan dan kepribadian</p>
                <img src="{{ asset('user/img/icon/psikologi.png') }}" width="150" height="150">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/cpns/lainnya-cpns/praktek-kerja') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PRAKTEK KERJA</h2>
                <p style="margin-top: 0.5rem; margin-bottom: 1rem; cursor: pointer;">Tes ini melibatkan situasi yang mirip dengan tugas yang akan dihadapi di tempat kerja.</p>
                <img src="{{ asset('user/img/icon/prakerja.png') }}" width="150" height="150">
            </div>
        </div>
    </a>
</div>
@endsection
