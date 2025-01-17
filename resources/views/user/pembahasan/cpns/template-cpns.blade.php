@extends('user.layouts.sidebar')

@section('content')

<style>
    .discussion-table .discussion-btn.p-0.disabled {
        background: #77B0AA;
    }
</style>

<div id="snap-container"></div>

<h1 class="card-title">Pilih Pembahasan Try Out yang telah Anda kerjakan!</h1>
<div class="discussion-content">
    <div class="discussion-info">
        <table class="discussion-table">
            <tbody>
                @forelse($tampil as $t)
                    <tr>
                        <td colspan="2" style="border: none;">
                            <span class="subtitle">{{$t->nama_paket}}</span>
                        </td>
                    </tr>
                    <tr>
                        @if($t['status']==0)
                            <td class="discussion-description">
                                <a>
                                    CPNS/SEKDIN - {{$t->keterangan_panjang}} - {{$t->tanggal}}
                                </a>
                            </td>
                            <td class="">
                                <button id="pay-button.{{$t->id}}" class="discussion-btn p-0" style="cursor: pointer;">Bayar</button>
                            </td>
                        @else
                            <td class="discussion-description">
                                <a href="{{url('/soal/aturan/'.$t->id_paket)}}" disabled>
                                    CPNS/SEKDIN - {{$t->keterangan_panjang}} - {{$t->tanggal}}
                                </a>
                            </td>
                            <td class=""><a href="{{url('/soal/solusi/'.$t->id_paket)}}"><button class="discussion-btn p-0" style="cursor: pointer;">Buka Pembahasan</button></a></td>
                        @endif
                    </tr>
                @empty
                    <style>
                        .centered-text {
                            text-align: center;
                            font-weight: normal;
                        }
                    </style>
                    <h2 class="centered-text">Maaf, anda belum memiliki paket dengan kategori ini.</h2>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
