<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Paket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaketController extends Controller
{
    public function viewDashboard()
    {
        $pakets = Paket::get();
        $tampil = collect();
        foreach ($pakets as $paket) {
            $string = $paket['id'];
            $string = Str::substr($string, 0, 3);
            $tampil->push($string);
        }

        return view('user.pages.dashboard')->with('tampil', $tampil);
    }

    public function viewPaket($test, $type)
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
        $pakets = Paket::get();
        $tampil = collect();
        if ($test == 'polri') {
            $test = 'POL';
            if ($type == 'akademik-polri') {
                $type = 'AKA';
            } else {
                $type = 'LAI';
            }
        } elseif ($test == 'cpns') {
            $test = 'PNS';
            if ($type == 'skd-cpns') {
                $type = 'SKD';
            } elseif ($type == 'skb-cpns') {
                $type = 'SKB';
            } else {
                $type = 'LAI';
            }
        }
        foreach ($pakets as $paket) {
            if ($paket->latihan_soal != 0) {
                continue;
            }
            $string = $paket['id'];
            $paket_test = Str::substr($string, 0, 3);
            $paket_type = Str::substr($string, 3, 3);
            $paket['ket_paket'] = Str::upper($to_nama[$paket_type]);
            $paket['nama_paket'] = Str::upper($paket['nama_paket']);
            $paket['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $paket['created_at']);
            $paket['tanggal'] = $paket['created_at']->format('d F Y');
            if ($paket_test == $test and $paket_type == $type) {
                $tampil->push($paket);
            }
        }

        return view('user.category.polri.template-category')->with('tampil', $tampil);
    }

    public function viewPaket2($test, $type, $type2)
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
        $pakets = Paket::get();
        $tampil = collect();
        if ($test == 'polri') {
            $test = 'POL';
            if ($type2 == 'tes-kecerdasan') {
                $type = 'PKC';
            } elseif ($type2 == 'tes-kecermatan') {
                $type = 'PCM';
            } elseif ($type2 == 'tes-kepribadian') {
                $type = 'PKR';
            } elseif ($type2 == 'tes-pass-hand') {
                $type = 'PPH';
            } elseif ($type2 == 'paket-tes-polri') {
                $type = 'PSI';
            } elseif ($type2 == 'tes-pengetahuan-umum') {
                $type = 'TPU';
            } elseif ($type2 == 'tes-penalaran-numerik') {
                $type = 'TPN';
            } elseif ($type2 == 'tes-wawasan-kebangsaan') {
                $type = 'TWK';
            } elseif ($type2 == 'tes-bahasa-inggris') {
                $type = 'TBG';
            } elseif ($type2 == 'tes-bahasa-indonesia') {
                $type = 'TBI';
            } elseif ($type2 == 'tes-kesamaptaan-jasmani') {
                $type = 'TKJ';
            } elseif ($type2 == 'tes-pmk') {
                $type = 'PMK';
            } elseif ($type2 == 'tes-potensi-akademik') {
                $type = 'TPA';
            }
        } elseif ($test == 'cpns') {
            $test = 'PNS';
            if ($type2 == 'cat-cpns') {
                $type = 'CAC';
            } elseif ($type2 == 'cat-sekdin') {
                $type = 'CAS';
            } elseif ($type2 == 'praktek-kerja') {
                $type = 'PRA';
            } elseif ($type2 == 'akademik-cpns') {
                $type = 'AKA';
            }
        }
        foreach ($pakets as $paket) {
            if ($paket->latihan_soal != 0) {
                continue;
            }
            $string = $paket['id'];
            $paket_test = Str::substr($string, 0, 3);
            $paket_type = Str::substr($string, 3, 3);
            $paket['ket_paket'] = Str::upper($to_nama[$paket_type]);
            $paket['nama_paket'] = Str::upper($paket['nama_paket']);
            $paket['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $paket['created_at']);
            $paket['tanggal'] = $paket['created_at']->format('d F Y');
            if ($paket_test == $test and $paket_type == $type) {
                $tampil->push($paket);
            }
        }

        return view('user.category.polri.template-category')->with('tampil', $tampil);
    }

    public function viewPaket3($test, $type, $type2, $type3)
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
        $pakets = Paket::get();
        $tampil = collect();
        if ($test == 'cpns') {
            $test = 'PNS';
            if ($type3 == 'tes-kecermatan') {
                $type = 'PCM';
            } elseif ($type3 == 'tes-kecerdasan') {
                $type = 'PKC';
            } elseif ($type3 == 'tes-kepribadian') {
                $type = 'PKR';
            } elseif ($type3 == 'tes-kejiwaan') {
                $type = 'KEJ';
            }
        }
        foreach ($pakets as $paket) {
            if ($paket->latihan_soal != 0) {
                continue;
            }
            $string = $paket['id'];
            $paket_test = Str::substr($string, 0, 3);
            $paket_type = Str::substr($string, 3, 3);
            $paket['ket_paket'] = Str::upper($to_nama[$paket_type]);
            $paket['nama_paket'] = Str::upper($paket['nama_paket']);
            $paket['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $paket['created_at']);
            $paket['tanggal'] = $paket['created_at']->format('d F Y');
            if ($paket_test == $test and $paket_type == $type) {
                $tampil->push($paket);
            }
        }

        return view('user.category.polri.template-category')->with('tampil', $tampil);
    }

    public function viewLatihanSoal($test, $type)
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
        $pakets = Paket::get();
        $tampil = collect();
        if ($test == 'polri') {
            $test = 'POL';
            if ($type == 'akademik-polri') {
                $type = 'AKA';
            } else {
                $type = 'LAI';
            }
        } elseif ($test == 'cpns') {
            $test = 'PNS';
            if ($type == 'skd-cpns') {
                $type = 'SKD';
            } elseif ($type == 'skb-cpns') {
                $type = 'SKB';
            } else {
                $type = 'LAI';
            }
        }
        foreach ($pakets as $paket) {
            if ($paket->latihan_soal == 0) {
                continue;
            }
            $string = $paket['id'];
            $paket_test = Str::substr($string, 0, 3);
            $paket_type = Str::substr($string, 3, 3);
            $paket['ket_paket'] = Str::upper($to_nama[$paket_type]);
            $paket['nama_paket'] = Str::upper($paket['nama_paket']);
            $paket['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $paket['created_at']);
            $paket['tanggal'] = $paket['created_at']->format('d F Y');

            $orders = Order::where('id_user', Auth::id())
                ->where(function ($query) {
                    $query->where('status', 0)
                        ->where('created_at', '>', Carbon::now()->subHours(24));
                })
                ->orWhere('status', '>', 0)
                ->where('id_user', Auth::id())
                ->where('id_paket', $paket->id)
                ->get()->first();
            if ($orders == null) {
                $paket['ordered'] = -1;
            } else {
                $paket['ordered'] = $orders->status;
            }

            if ($paket_test == $test and $paket_type == $type) {
                $tampil->push($paket);
            }
        }

        return view('user.exercise.polri.template-category')->with('tampil', $tampil);
    }

    public function viewLatihanSoal2($test, $type, $type2)
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
        $pakets = Paket::get();
        $tampil = collect();
        if ($test == 'polri') {
            $test = 'POL';
            if ($type2 == 'tes-kecerdasan') {
                $type = 'PKC';
            } elseif ($type2 == 'tes-kecermatan') {
                $type = 'PCM';
            } elseif ($type2 == 'tes-kepribadian') {
                $type = 'PKR';
            } elseif ($type2 == 'tes-pass-hand') {
                $type = 'PPH';
            } elseif ($type2 == 'paket-tes-polri') {
                $type = 'PSI';
            } elseif ($type2 == 'tes-pengetahuan-umum') {
                $type = 'TPU';
            } elseif ($type2 == 'tes-penalaran-numerik') {
                $type = 'TPN';
            } elseif ($type2 == 'tes-wawasan-kebangsaan') {
                $type = 'TWK';
            } elseif ($type2 == 'tes-bahasa-inggris') {
                $type = 'TBG';
            } elseif ($type2 == 'tes-bahasa-indonesia') {
                $type = 'TBI';
            } elseif ($type2 == 'tes-kesamaptaan-jasmani') {
                $type = 'TKJ';
            } elseif ($type2 == 'tes-pmk') {
                $type = 'PMK';
            }
        } elseif ($test == 'cpns') {
            $test = 'PNS';
            if ($type2 == 'cat-cpns') {
                $type = 'CAC';
            } elseif ($type2 == 'cat-sekdin') {
                $type = 'CAS';
            } elseif ($type2 == 'praktek-kerja') {
                $type = 'PRA';
            } elseif ($type2 == 'akademik-cpns') {
                $type = 'AKA';
            }
        }
        foreach ($pakets as $paket) {
            if ($paket->latihan_soal == 0) {
                continue;
            }
            $string = $paket['id'];
            $paket_test = Str::substr($string, 0, 3);
            $paket_type = Str::substr($string, 3, 3);
            $paket['ket_paket'] = Str::upper($to_nama[$paket_type]);
            $paket['nama_paket'] = Str::upper($paket['nama_paket']);
            $paket['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $paket['created_at']);
            $paket['tanggal'] = $paket['created_at']->format('d F Y');

            $orders = Order::where('id_user', Auth::id())
                ->where(function ($query) {
                    $query->where('status', 0)
                        ->where('created_at', '>', Carbon::now()->subHours(24));
                })
                ->orWhere('status', '>', 0)
                ->where('id_user', Auth::id())
                ->where('id_paket', $paket->id)
                ->get()->first();
            if ($orders == null) {
                $paket['ordered'] = -1;
            } else {
                $paket['ordered'] = $orders->status;
            }

            if ($paket_test == $test and $paket_type == $type) {
                $tampil->push($paket);
            }
        }

        return view('user.exercise.polri.template-category')->with('tampil', $tampil);
    }

    public function viewLatihanSoal3($test, $type, $type2, $type3)
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
        $pakets = Paket::get();
        $tampil = collect();
        if ($test == 'cpns') {
            $test = 'PNS';
            if ($type3 == 'tes-kecermatan') {
                $type = 'PCM';
            } elseif ($type3 == 'tes-kecerdasan') {
                $type = 'PKC';
            } elseif ($type3 == 'tes-kepribadian') {
                $type = 'PKR';
            } elseif ($type3 == 'tes-kejiwaan') {
                $type = 'KEJ';
            }
        }
        foreach ($pakets as $paket) {
            if ($paket->latihan_soal == 0) {
                continue;
            }
            $string = $paket['id'];
            $paket_test = Str::substr($string, 0, 3);
            $paket_type = Str::substr($string, 3, 3);
            $paket['ket_paket'] = Str::upper($to_nama[$paket_type]);
            $paket['nama_paket'] = Str::upper($paket['nama_paket']);
            $paket['created_at'] = Carbon::createFromFormat('Y-m-d H:i:s', $paket['created_at']);
            $paket['tanggal'] = $paket['created_at']->format('d F Y');

            $orders = Order::where('id_user', Auth::id())
                ->where(function ($query) {
                    $query->where('status', 0)
                        ->where('created_at', '>', Carbon::now()->subHours(24));
                })
                ->orWhere('status', '>', 0)
                ->where('id_user', Auth::id())
                ->where('id_paket', $paket->id)
                ->get()->first();
            if ($orders == null) {
                $paket['ordered'] = -1;
            } else {
                $paket['ordered'] = $orders->status;
            }

            if ($paket_test == $test and $paket_type == $type) {
                $tampil->push($paket);
            }
        }

        return view('user.exercise.polri.template-category')->with('tampil', $tampil);
    }

    public function orderPaket(Request $request)
    {
        $id = $request['submit'];
        $paket = Paket::where('id', $id)->first();
        $string = $paket['id'];
        $paket_type = Str::substr($string, 0, 3);

        $nowtime = Carbon::now()->subHours(24);

        $order = Order::where('id_user', Auth::id())
            ->where('id_paket', $id)
            ->where('created_at', '>', $nowtime)
            ->first();

        if ($order != null) {
            return redirect()->back()->withErrors(['error' => 'Anda sudah mempunyai paket Try Out ini!']);
        }

        $order = new Order;
        $order->id_user = Auth::id();
        $order->id_paket = $id;
        $order->nama_paket = $paket['nama_paket'];
        $order->total_amount = $paket['harga_paket'];

        if ($paket['harga_paket'] == 0) {
            $order->status = 1;
            $order->save();

            // Handle free package separately
            return $this->redirectAfterOrder($paket_type, true);
        } else {
            $order->save();
        }

        $order_saved = Order::where('id_user', Auth::id())
            ->where('id_paket', $id)
            ->where('created_at', '>', $nowtime)
            ->first();

        $user_saved = User::where('id', $order_saved['id_user'])->first();

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = true;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $order_saved->id,
                'gross_amount' => max(0.01, $order_saved->total_amount), // Ensure gross_amount is at least 0.01
            ],
            'customer_details' => [
                'first_name' => $user_saved->name,
                'last_name' => $user_saved->username,
                'email' => $user_saved->email,
                'phone' => $user_saved->phoneNumber,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $order_saved->update(['token' => $snapToken]);

        return $this->redirectAfterOrder($paket_type, false);
    }

    private function redirectAfterOrder($paket_type, $isFree)
    {
        $baseUrl = $isFree ? 'Paket gratis berhasil ditambahkan! Anda bisa langsung mengerjakan paket try-out tersebut, selamat mengerjakan.' : 'Paket berhasil dipesan! Silakan melakukan pembayaran.';

        switch ($paket_type) {
            case 'POL':
                return redirect('/try-out/polri')->withErrors(['info' => $baseUrl]);
            case 'PNS':
                return redirect('/try-out/cpns')->withErrors(['info' => $baseUrl]);
            default:
                return redirect()->back()->withErrors(['error' => 'Paket type not recognized.']);
        }
    }
}
