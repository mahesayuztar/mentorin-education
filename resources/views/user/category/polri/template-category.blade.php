@extends('user.layouts.sidebar')

@section('content')
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="discussion-content">
    <div class="discussion-info">
        <table class="discussion-table">
            <tbody>
                @forelse($tampil as $t)
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">{{$t['nama_paket']}}</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#">
                            @if(substr($t['id'], 0, 3)=="POL")
                            POLRI
                            @elseif(substr($t['id'], 0, 3)=="PNS")
                            CPNS/SEKDIN
                            @endif
                            - {{$t['ket_paket']}} - {{$t['tanggal']}}
                        </a>
                    </td>
                    <form action="{{url('/category/order')}}" method="post" accept-charset="utf-8">
                        @csrf
                        <td class=""><button type="submit" class="discussion-btn" style="cursor: pointer;" name="submit" value="{{$t['id']}}">{{'Rp. '.number_format($t['harga_paket'])}}</button></td>
                    </form>
                </tr>
                @empty 
                <style>
                    .centered-text {
                        text-align: center;
                        font-weight: normal;
                    }
                </style>
                <h2 class="centered-text">Maaf, paket dengan kategori ini belum tersedia.</h2>
                @endforelse
        </table>
    </div>
</div>
@endsection