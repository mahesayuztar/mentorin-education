@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Pilih Pembahasan Try Out yang telah Anda kerjakan!</h1>
<div class="cardBox">
    @if($tampil->contains('PSI') or $tampil->contains('PKC') or $tampil->contains('PCM') or $tampil->contains('PKR') or $tampil->contains('PPH'))
    <a href="{{ url('/pembahasan/polri/PSI') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES PSIKOLOGI</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi berbagai jenis try out mulai dari tes kecerdasan, kecermatan dan kepribadian</p>
                <img src="{{ asset('user/img/icon/psikologi.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
    @endif
    @if($tampil->contains('AKA'))
    <a href="{{ url('/pembahasan/polri/AKA') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">TES AKADEMIK</h2>
                <p style="margin-top: 0.5rem; cursor: pointer;">Berisi berbagai jenis try out semua mapel tes akademik persiapan seleksi anggota POLRI</p>
                <img src="{{ asset('user/img/icon/akademik.png') }}" width="170" height="170">
            </div>
        </div>
    </a>
    @endif
    @if($tampil->contains('LAI'))
    <a href="{{ url('/pembahasan/polri/LAI') }}" style="text-decoration: none; color: #001e26;">
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
