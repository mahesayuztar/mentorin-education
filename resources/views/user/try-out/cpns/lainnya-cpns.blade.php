@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">
    <a href="{{ url('/category/cpns/lainnya-cpns/praktek-kerja') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PRAKTEK KERJA</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Tes ini melibatkan situasi yang mirip dengan tugas yang akan dihadapi di tempat kerja.</p>
                <img src="{{ asset('user/img/icon/prakerja.png') }}" width="170" height="170">
            </div>
        </div>
    </a>

    <a href="{{ url('/category/cpns/lainnya-cpns/psikologi-cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PSIKOLOGI</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi berbagai jenis try out mulai dari tes kecerdasan, kecermatan dan kepribadian</p>
                <img src="{{ asset('user/img/icon/psikologi.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
</div>
@endsection
