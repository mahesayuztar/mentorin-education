@extends('user.layouts.sidebar')

@section('content')

<style>
    .a-link {
        color: #001e26;
    }

    a:hover {
        color: #77B0AA;
    }
</style>

<h1 class="card-title">Lihat Riwayat Try Out</h1>
<div class="history-content">
    <div class="history-info">
        <table class="history-table">
            <thead>
                <tr>
                    <th>Jenis Tes</th>
                    <th>Nama Paket Try Out</th>
                    <th>Waktu Pengerjaan</th>
                    <th>Solusi</th>
                    <th>Status</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                @forelse($riwayat_pakets as $r)
                <tr>
                    <td>{{$r->nama_tes}}</td>
                    <td>{{$r->nama_paket}}</td>
                    <td>{{$r->waktu_paket}}</td>
                    @if($r->status!="Belum Selesai" and (substr($r->id_paket,3,3)=="PSI" or substr($r->id_paket,3,3)=="DKD"))
                    <td><a class="a-link" href="{{$r->solusi."/1"}}">Link Pembahasan</a></td>
                    @elseif($r->status!="Belum Selesai" and substr($r->id_paket,3,3)!="PCM")
                    <td><a class="a-link" href="{{$r->solusi}}">Link Pembahasan</a></td>
                    @else
                    <td>Belum Tersedia</td>
                    @endif
                    <td style="color: #001e26;"><b>{{$r->status}}</b></td>
                    @if($r->status=="Belum Selesai")
                    <td><a class="a-link" href="{{url('/soal/aturan/'.$r->id_paket)}}">Lanjutkan Pengerjaan</a></td>
                    @else
                    <td><a class="a-link" href="{{url('/soal/hasil/'.$r->id_paket)}}">Link Hasil</a></td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colspan="7" rowspan="" headers="">Anda belum mengerjakan Paket Try Out Mentorin sama sekali :D</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
