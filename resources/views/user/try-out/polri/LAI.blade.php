@extends('user.layouts.sidebar')

@section('content')

<style>
    .discussion-table .discussion-btn.p-0.disabled {
        background: #77B0AA;
    }
</style>

<div id="snap-container"></div>

<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="discussion-content">
    <div class="discussion-info">
        <table class="discussion-table">
            <tbody>
                @foreach($tampil as $t)
                    <tr>
                        <td colspan="2" style="border: none;">
                            <span class="subtitle">{{$t->nama_paket}}</span>
                        </td>
                    </tr>
                    <tr>
                        @if($t['status']==0)
                            <td class="discussion-description">
                                <a>
                                    POLRI - TES LAINNYA - {{$t->tanggal}}
                                </a>
                            </td>
                            <td class="">
                                <button id="pay-button.{{$t->id}}" class="discussion-btn p-0" style="cursor: pointer;">Bayar</button>
                            </td>
                        @else
                            <td class="discussion-description">
                                <a href="{{url('/soal/aturan/'.$t->id_paket)}}" disabled>
                                    POLRI - TES LAINNYA - {{$t->tanggal}}
                                </a>
                            </td>
                            <td class=""><a href="{{url('/soal/aturan/'.$t->id_paket)}}"><button class="discussion-btn p-0" style="cursor: pointer;">Kerjakan Sekarang</button></a></td>
                            <td class=""><a href="{{url('payment-callback')}}"><button id="pay-button.{{$t->id}}" class="discussion-btn p-0 disabled" disabled>Sudah Dibayar</button></a></td>
                        @endif
                            <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
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
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
