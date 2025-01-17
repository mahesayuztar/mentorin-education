@extends('user.layouts.sidebar')

@section('content')
<h1 class="card-title">Pilih Jenis Latihan Soal yang Akan Kamu Kerjakan!</h1>
<div class="discussion-content">
    <div class="discussion-info">
        <table class="discussion-table">
            <tbody>
                @foreach($tampil as $t)
                <tr>
                    <td colspan="2" style="border: none;">
                        <span class="subtitle">{{$t['nama_paket']}}</span>
                    </td>
                </tr>
                <tr>
                    <td class="discussion-description">
                        <a href="#">
                            POLRI - TES {{$t['ket_paket']}} - {{$t['tanggal']}}
                        </a>
                    </td>
                    <form action="{{url('/category/order')}}" method="post" accept-charset="utf-8">
                        @csrf
                        <td class=""><button type="submit" class="discussion-btn" style="cursor: pointer;" name="submit" value="{{$t['id']}}">{{'Rp. '.number_format($t['harga_paket'])}}</button></td>
                    </form>
                </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection
