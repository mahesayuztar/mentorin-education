@extends('user.layouts.sidebar')

@section('content')
<h1 class="card-title">Pilih Jenis Latihan Soal yang Akan Kamu Kerjakan!</h1>
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
                    @if($t->ordered==-1)
                    <form action="{{url('/category/order')}}" method="post" accept-charset="utf-8">
                        @csrf
                        <td class=""><button type="submit" class="discussion-btn" style="cursor: pointer;" name="submit" value="{{$t['id']}}">{{'Rp. '.number_format($t['harga_paket'])}}</button></td>
                    </form>
                    @elseif($t->ordered==0)
                    <td class="">
                        <button id="pay-button.{{$t->id}}" class="discussion-btn p-0" style="cursor: pointer;">Bayar</button>
                    </td>
                    @elseif($t->ordered==1)
                    <td class=""><a href="{{url('/soal/aturan/'.$t->id)}}"><button class="discussion-btn p-0" style="cursor: pointer;">Kerjakan Sekarang</button></a></td>
                    <td class=""><a href="{{url('/soal/solusi/'.$t->id)}}">
                        <button class="discussion-btn p-0" style="cursor: not-allowed;" disabled>Lihat Pembahasan</button>
                    </a></td>
                    <td class=""><a href="{{url('/soal/hasil/'.$t->id)}}">
                        <button class="discussion-btn p-0" style="cursor: not-allowed;" disabled>Lihat <br> Skor</button>
                    </a></td>
                    @elseif($t->ordered==2)
                    <td class=""><a href="{{url('/soal/aturan/'.$t->id)}}"><button class="discussion-btn p-0" style="cursor: pointer;">Kerjakan Sekarang</button></a></td>
                    <td class=""><a href="{{url('/soal/solusi/'.$t->id)}}"><button class="discussion-btn p-0" style="cursor: pointer;">Lihat Pembahasan</button></a></td>
                    <td class=""><a href="{{url('/soal/hasil/'.$t->id)}}">
                        <button class="discussion-btn p-0">Lihat <br> Skor</button>
                    </a></td>
                    @endif
                    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
                    <script type="text/javascript">
                        document.getElementById('pay-button.{{$t->id}}').onclick = function(){
                        // SnapToken acquired from previous step
                        snap.pay('{{$t->token}}', {
                            // Sukses
                            onSuccess: function(result){
                                window.location.href = '/payment-callback?order_id=' + result.order_id + '&transaction_status=' + result.transaction_status;
                            },
                            // Pending
                            onPending: function(result){
                                alert("wating your payment!"); console.log(result);
                            },
                            // Error
                            onError: function(result){
                                alert("payment failed!"); console.log(result);
                            },
                            // Close
                            onClose: function(){
                                alert('you closed the popup without finishing the payment');
                            }
                        });
                        };
                    </script>
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