<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Support\ControllerData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    private function orderData(): array
    {
        $orders = ControllerData::activeOrdersForUser(Auth::id());

        return [$orders, ControllerData::packagesById($orders->pluck('id_paket'))];
    }

    public function viewOrder()
    {
        [$orders, $packagesById] = $this->orderData();
        $tampil = collect();
        foreach ($orders as $order) {
            $string = $order['id_paket'];
            $string_type = Str::substr($string, 0, 3);
            $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
            if ($latihan_soal == 0) {
                $tampil->push($string_type);
            }
        }

        return view('user.pages.try-out')->with('tampil', $tampil);
    }

    public function viewOrderDetails($test)
    {
        [$orders, $packagesById] = $this->orderData();
        if ($test == 'polri') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string_type != 'POL') {
                    continue;
                }
                if ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'PPH') {
                    $string = 'PSI';
                } elseif ($string == 'TPU' or $string == 'TPN' or $string == 'TWK' or $string == 'TBG' or $string == 'TPA' or $string == 'TBI') {
                    $string = 'AKA';
                } elseif ($string == 'TKJ' or $string == 'PMK') {
                    $string = 'LAI';
                }
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    $tampil->push($string);
                }
            }

            return view('user.try-out.polri.polri-list')->with('tampil', $tampil);
        } elseif ($test == 'cpns') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string_type != 'PNS') {
                    continue;
                }
                if ($string == 'CAC' or $string == 'CAS') {
                    $string = 'SKB';
                } elseif ($string == 'SKD') {
                    $string = 'SKD';
                } elseif ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'AKA' or $string == 'KEJ' or $string == 'PRA') {
                    $string = 'LAI';
                }
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    $tampil->push($string);
                }
            }

            // dd($tampil->contains('PSI'));
            // dd($tampil);
            return view('user.try-out.cpns.cpns-list')->with('tampil', $tampil);
        }
    }

    public function viewOrderTypes($test, $type)
    {
        $to_nama = collect([
            'PSI' => 'Tes Psikologi',
            'AKA' => 'Tes Akademik',
            'LAI' => 'Tes Lainnya',
            'PKC' => 'Tes Kecerdasan',
            'PCM' => 'Tes Kecermatan',
            'PKR' => 'Tes Kepribadian',
            'PPH' => 'Tes Pass Hand',
            'TPU' => 'Tes Pengetahuan Umum',
            'TPN' => 'Tes Penalaran Numerik',
            'TWK' => 'Tes Wawasan Kebangsaan',
            'TBG' => 'Tes Bahasa Inggris',
            'TPA' => 'Tes Potensi Akademik',
            'TBI' => 'Tes Bahasa Indonesia',
            'TKJ' => 'Tes Kesamaptaan Jasmani',
            'PMK' => 'Tes Penelusuran Mental Kepribadian',
            'SKD' => 'Seleksi Kompetensi Dasar',
            'CAC' => 'Seleksi Kompetensi Bidang CAT CPNS',
            'CAS' => 'Seleksi Kompetensi Bidang CAT Sekdin',
            'PRA' => 'Seleksi Kompetensi Bidang Praktek Kerja',
            'TIU' => 'Tes Intelegensi Umum',
            'TKP' => 'Tes Karakteristik Pribadi',
            'KEJ' => 'Tes Kejiwaan',
        ]);

        if ($test == 'cpns') {
            if ($type == 'skd-cpns') {
                $type = 'SKD';
            } elseif ($type == 'skb-cpns') {
                $type = 'SKB';
            } else {
                $type = 'LAI';
            }
        }
        $type = Str::upper($type);
        [$orders, $packagesById] = $this->orderData();
        if ($test == 'polri') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'PPH') {
                    $string = 'PSI';
                } elseif ($string == 'TPU' or $string == 'TPN' or $string == 'TWK' or $string == 'TBG' or $string == 'TPA' or $string == 'TBI') {
                    $string = 'AKA';
                } elseif ($string == 'TKJ' or $string == 'PMK') {
                    $string = 'LAI';
                }
                $order['nama_paket'] = Str::upper($order->nama_paket);
                $order['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $order['created_at']);
                $order['tanggal'] = $order['created_at']->format('d F Y');
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    if ($string == Str::upper($type) and $string_type == 'POL') {
                        $tampil->add($order);
                    }
                }
            }

            return view('user.try-out.polri.'.$type)->with('tampil', $tampil);
        } elseif ($test == 'cpns') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string == 'CAC' or $string == 'CAS' or $string == 'PRA') {
                    $string = 'SKB';
                } elseif ($string == 'SKD') {
                    $string = 'SKD';
                } elseif ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'PRA' or $string == 'AKA' or $string == 'KEJ') {
                    $string = 'LAI';
                }
                $order['nama_paket'] = Str::upper($order->nama_paket);
                $order['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $order['created_at']);
                $order['tanggal'] = $order['created_at']->format('d F Y');
                $order['keterangan_panjang'] = Str::upper($to_nama[Str::substr($order['id_paket'], 3, 3)]);
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    if ($string == Str::upper($type) and $string_type == 'PNS') {
                        $tampil->add($order);
                    }
                }
            }

            return view('user.try-out.cpns.template-cpns')->with('tampil', $tampil);
        }
    }

    public function viewPembahasan()
    {
        [$orders, $packagesById] = $this->orderData();
        $tampil = collect();
        foreach ($orders as $order) {
            $string = $order['id_paket'];
            $string_type = Str::substr($string, 0, 3);
            $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
            if ($latihan_soal == 0) {
                $tampil->push($string_type);
            }
        }

        return view('user.pages.pembahasan')->with('tampil', $tampil);
    }

    public function viewPembahasanDetails($test)
    {
        [$orders, $packagesById] = $this->orderData();
        if ($test == 'polri') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string_type != 'POL') {
                    continue;
                }
                if ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'PPH') {
                    $string = 'PSI';
                } elseif ($string == 'TPU' or $string == 'TPN' or $string == 'TWK' or $string == 'TBG' or $string == 'TPA' or $string == 'TBI') {
                    $string = 'AKA';
                } elseif ($string == 'TKJ' or $string == 'PMK') {
                    $string = 'LAI';
                }
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    $tampil->push($string);
                }
            }

            return view('user.pembahasan.polri.polri-list')->with('tampil', $tampil);
        } elseif ($test == 'cpns') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string_type != 'PNS') {
                    continue;
                }
                if ($string == 'CAC' or $string == 'CAS') {
                    $string = 'SKB';
                } elseif ($string == 'SKD') {
                    $string = 'SKD';
                } elseif ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'AKA' or $string == 'KEJ' or $string == 'PRA') {
                    $string = 'LAI';
                }
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    $tampil->push($string);
                }
            }

            return view('user.pembahasan.cpns.cpns-list')->with('tampil', $tampil);
        }
    }

    public function viewPembahasanTypes($test, $type)
    {
        $to_nama = collect([
            'PSI' => 'Tes Psikologi',
            'AKA' => 'Tes Akademik',
            'LAI' => 'Tes Lainnya',
            'PKC' => 'Tes Kecerdasan',
            'PCM' => 'Tes Kecermatan',
            'PKR' => 'Tes Kepribadian',
            'PPH' => 'Tes Pass Hand',
            'TPU' => 'Tes Pengetahuan Umum',
            'TPN' => 'Tes Penalaran Numerik',
            'TWK' => 'Tes Wawasan Kebangsaan',
            'TBG' => 'Tes Bahasa Inggris',
            'TPA' => 'Tes Potensi Akademik',
            'TBI' => 'Tes Bahasa Indonesia',
            'TKJ' => 'Tes Kesamaptaan Jasmani',
            'PMK' => 'Tes Penelusuran Mental Kepribadian',
            'SKD' => 'Seleksi Kompetensi Dasar',
            'CAC' => 'Seleksi Kompetensi Bidang CAT CPNS',
            'CAS' => 'Seleksi Kompetensi Bidang CAT Sekdin',
            'PRA' => 'Seleksi Kompetensi Bidang Praktek Kerja',
            'TIU' => 'Tes Intelegensi Umum',
            'TKP' => 'Tes Karakteristik Pribadi',
            'KEJ' => 'Tes Kejiwaan',
        ]);

        if ($test == 'cpns') {
            if ($type == 'skd-cpns') {
                $type = 'SKD';
            } elseif ($type == 'skb-cpns') {
                $type = 'SKB';
            } else {
                $type = 'LAI';
            }
        }
        $type = Str::upper($type);
        [$orders, $packagesById] = $this->orderData();
        if ($test == 'polri') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'PPH') {
                    $string = 'PSI';
                } elseif ($string == 'TPU' or $string == 'TPN' or $string == 'TWK' or $string == 'TBG' or $string == 'TPA' or $string == 'TBI') {
                    $string = 'AKA';
                } elseif ($string == 'TKJ' or $string == 'PMK') {
                    $string = 'LAI';
                }
                $order['nama_paket'] = Str::upper($order->nama_paket);
                $order['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $order['created_at']);
                $order['tanggal'] = $order['created_at']->format('d F Y');
                $order['keterangan_panjang'] = Str::upper($to_nama[Str::substr($order['id_paket'], 3, 3)]);
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    if ($string == Str::upper($type) and $string_type == 'POL' and $order->status == 1) {
                        $tampil->add($order);
                    }
                }
            }

            return view('user.pembahasan.polri.template-polri')->with('tampil', $tampil);
        } elseif ($test == 'cpns') {
            $tampil = collect();
            foreach ($orders as $order) {
                $string = $order['id_paket'];
                $string_type = Str::substr($string, 0, 3);
                $string = Str::substr($string, 3, 3);
                if ($string == 'CAC' or $string == 'CAS' or $string == 'PRA') {
                    $string = 'SKB';
                } elseif ($string == 'SKD') {
                    $string = 'SKD';
                } elseif ($string == 'PKC' or $string == 'PCM' or $string == 'PKR' or $string == 'PRA' or $string == 'AKA' or $string == 'KEJ') {
                    $string = 'LAI';
                }
                $order['nama_paket'] = Str::upper($order->nama_paket);
                $order['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $order['created_at']);
                $order['tanggal'] = $order['created_at']->format('d F Y');
                $order['keterangan_panjang'] = Str::upper($to_nama[Str::substr($order['id_paket'], 3, 3)]);
                $latihan_soal = $packagesById->get($order['id_paket'])?->latihan_soal;
                if ($latihan_soal == 0) {
                    if ($string == Str::upper($type) and $string_type == 'PNS' and $order->status == 1) {
                        $tampil->add($order);
                    }
                }
            }

            return view('user.pembahasan.cpns.template-cpns')->with('tampil', $tampil);
        }
    }

    public function paymentCallback(Request $request)
    {
        if ($request->isMethod('get')) {
            return redirect('/try-out')->withErrors([
                'info' => 'Status pembayaran sedang diproses. Silakan muat ulang halaman beberapa saat lagi.',
            ]);
        }

        $payload = $request->validate([
            'order_id' => ['required', 'integer'],
            'status_code' => ['required', 'string'],
            'gross_amount' => ['required', 'numeric'],
            'signature_key' => ['required', 'string'],
            'transaction_status' => ['required', 'string'],
            'fraud_status' => ['nullable', 'string'],
        ]);

        $expectedSignature = hash('sha512',
            $payload['order_id'].
            $payload['status_code'].
            $payload['gross_amount'].
            config('midtrans.serverKey')
        );

        abort_unless(hash_equals($expectedSignature, $payload['signature_key']), 403, 'Invalid payment signature.');

        $order = Order::findOrFail($payload['order_id']);
        abort_unless((float) $order->total_amount === (float) $payload['gross_amount'], 422, 'Invalid payment amount.');

        $isPaid = $payload['transaction_status'] === 'settlement'
            || ($payload['transaction_status'] === 'capture' && ($payload['fraud_status'] ?? 'accept') === 'accept');

        if ($isPaid) {
            $order->update(['status' => 1]);
        }

        return response()->json(['received' => true]);
    }
}
