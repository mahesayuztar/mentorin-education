<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Order;
use App\Models\Paket;
use App\Models\RiwayatPaket;
use App\Models\Soal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
    public function viewSoal($id_paket)
    {
        $order = Order::where('id_user', Auth::id())->where('id_paket', $id_paket)->orderBy('updated_at', 'desc')->get()->first();
        if ($order == null or $order->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum melakukan pembayaran']);
        }
        $paket = Paket::where('id', $id_paket)->get()->first();
        if ($paket == null) {
            return redirect(url('/try-out'))->withErrors(['error' => 'Paket tidak tersedia']);
        }
        $soals = Soal::where('id_paket', $id_paket)->orderBy('nomor_soal')->get();
        $jawabans = collect();
        foreach ($soals as $soal) {
            $sub_jawabans = Jawaban::where('nomor_soal', $soal->nomor_soal)->where('id_paket', $id_paket)->get();
            foreach ($sub_jawabans as $sj) {
                $jawabans->add($sj);
            }
            if ($soal->nomor_jawaban > 9) {
                $soal->pilgan_kompleks = true;
            } else {
                $soal->pilgan_kompleks = false;
            }
        }
        $id_user = Auth::id();
        $riwayat_paket = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_paket)->where('paketan', null)->get()->first();
        if ($paket->latihan_soal == 1 and $riwayat_paket != null) {
            RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_paket)->delete();
        }
        $now = Carbon::now();
        if ($riwayat_paket == null or $paket->latihan_soal == 1) {
            RiwayatPaket::create([
                'id_user' => Auth::id(),
                'id_paket' => $id_paket,
                'time' => $now,
            ]);
        } elseif ($riwayat_paket->status == 1 and $riwayat_paket->paketan == null and $paket->latihan_soal == 0) {
            return redirect(url('history'))->withErrors(['error' => 'Anda sudah mengerjakan paket ini!']);
        }
        $riwayat_paket = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_paket)->get()->first();
        $noted_time = $riwayat_paket->time;
        $noted_time = $paket->durasi_paket - (Carbon::now()->timestamp - strtotime($noted_time));
        if ($noted_time < 0) {
            $noted_time = 0;
        }

        $kode_tipe = substr($id_paket, 3, 3);

        if ($kode_tipe == 'PCM') {
            $rp = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_paket);
            $rp->update(['time' => Carbon::now()]);
            $riwayat_paket = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_paket)->get()->first();
            $noted_time = $riwayat_paket->time;
            $noted_time = $paket->durasi_paket - (Carbon::now()->timestamp - strtotime($noted_time));
            $noted_time += 5;
            // dd($rp->first()->time);
            foreach ($soals as $s) {
                $isi_soal = $s->isi_soal;
                $urutan_kolom = explode(' ', $isi_soal)[0];
                // dd($isi_soal);
                $isi_kolom = array_slice(explode(' ', $isi_soal), 2, 6);
                $isi_soal = array_slice(explode(' ', $isi_soal), 8, 11);
                $s->urutan_kolom = $urutan_kolom;
                $s->isi_kolom = $isi_kolom;
                $s->isi_soal = $isi_soal;
            }

            return view('user.pages.soal-kecermatan')->with([
                'paket' => $paket,
                'soals' => $soals,
                'jawabans' => $jawabans,
                'noted_time' => $noted_time,
                'kode_tipe' => $kode_tipe,
            ]);
        }

        return view('user.pages.soal')->with([
            'paket' => $paket,
            'soals' => $soals,
            'jawabans' => $jawabans,
            'noted_time' => $noted_time,
            'kode_tipe' => $kode_tipe,
        ]);
    }

    public function viewAturan($id_paket)
    {
        $user = Auth::user();
        $paket = Paket::where('id', $id_paket)->get()->first();
        $order = Order::where('id_user', $user->id)->where('id_paket', $id_paket)->orderBy('updated_at', 'desc')->get()->first();
        $riwayat_paket = RiwayatPaket::where('id_user', $user->id)->where('id_paket', $id_paket)->where('paketan', null)->get()->first();

        if ($order == null or $order->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum melakukan pembayaran']);
        }
        if ($riwayat_paket == null or substr($id_paket, 3, 3) == 'PCM' or $paket->latihan_soal == 1) {
            $noted_time = $paket->durasi_paket;
        } elseif ($riwayat_paket->status == 1 and $riwayat_paket->paketan == null and $paket->latihan_soal == 0) {
            return redirect(url('history'))->withErrors(['error' => 'Anda sudah mengerjakan paket ini!']);
        } else {
            $noted_time = $riwayat_paket->time;
            $noted_time = $paket->durasi_paket - (Carbon::now()->timestamp - strtotime($noted_time));
        }
        if ($noted_time < 0) {
            $noted_time = 0;
        }
        $kode_tipe = substr($id_paket, 3, 3);

        if ($kode_tipe == 'PSI') {
            $noted_time = $paket->durasi_paket;
            if ($riwayat_paket == null) {
                $riwayat_paket = RiwayatPaket::create([
                    'id_user' => Auth::id(),
                    'id_paket' => $id_paket,
                    'benar' => 1,
                ]);
            }
            $noted_type = $riwayat_paket->benar;

            return view('user.soal/soal-aturan')->with([
                'user' => $user,
                'paket' => $paket,
                'riwayat_paket' => $riwayat_paket,
                'noted_time' => $noted_time,
            ]);
        } elseif ($kode_tipe == 'DKD') {
            $noted_time = $paket->durasi_paket;
            if ($riwayat_paket == null) {
                $riwayat_paket = RiwayatPaket::create([
                    'id_user' => Auth::id(),
                    'id_paket' => $id_paket,
                    'benar' => 1,
                ]);
            }
            $noted_type = $riwayat_paket->benar;

            return view('user.soal/soal-aturan')->with([
                'user' => $user,
                'paket' => $paket,
                'riwayat_paket' => $riwayat_paket,
                'noted_time' => $noted_time,
            ]);
        } elseif ($riwayat_paket == null or $paket->latihan_soal == 1) {
            return view('user.soal/soal-aturan')->with([
                'user' => $user,
                'paket' => $paket,
                'noted_time' => $noted_time,
            ]);
        }

        return view('user.soal/soal-aturan')->withErrors(['info' => 'Maaf, jawaban reset karena halaman sudah dimuat ulang.'])->with([
            'user' => $user,
            'paket' => $paket,
            'noted_time' => $noted_time,
        ]);
    }

    public function viewHasil($id_paket)
    {
        $user = Auth::user();
        $soals = Soal::where('id_paket', $id_paket)->get();
        $order = Order::where('id_user', $user->id)->where('id_paket', $id_paket)->orderBy('updated_at', 'desc')->get()->first();
        if ($order == null or $order->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum melakukan pembayaran']);
        }
        $paket = Paket::where('id', $id_paket)->get()->first();

        $riwayat_paket = RiwayatPaket::where('id_user', $user->id)->where('id_paket', $id_paket)->where('paketan', null)->get()->first();
        if ($riwayat_paket == null or $riwayat_paket->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum menyelesaikan paket tryout ini!']);
        }
        $noted_time = $riwayat_paket->time;
        $noted_time = $paket->durasi_paket - (Carbon::now()->timestamp - strtotime($noted_time));

        if (substr($id_paket, 3, 3) == 'PSI') {
            $riwayat_pakets = RiwayatPaket::where('id_user', Auth::id())->where('paketan', $id_paket)->get();
            foreach ($riwayat_pakets as $r) {
                $paket_ini = Paket::where('id', $r->id_paket)->first();
                $nama_paket = $paket_ini->nama_paket;
                $r->nama_paket = $nama_paket;
            }

            return view('user.soal.soal-hasil')->with([
                'user' => $user,
                'paket' => $paket,
                'soals' => $soals,
                'riwayat_pakets' => $riwayat_pakets,
                'riwayat_paket' => null,
                'score' => $riwayat_paket->score,
            ]);
        } elseif (substr($id_paket, 3, 3) == 'DKD') {
            $riwayat_pakets = RiwayatPaket::where('id_user', Auth::id())->where('paketan', $id_paket)->get();
            foreach ($riwayat_pakets as $r) {
                $paket_ini = Paket::where('id', $r->id_paket)->first();
                $nama_paket = $paket_ini->nama_paket;
                $r->nama_paket = $nama_paket;
            }

            return view('user.soal.soal-hasil')->with([
                'user' => $user,
                'paket' => $paket,
                'soals' => $soals,
                'riwayat_pakets' => $riwayat_pakets,
                'riwayat_paket' => null,
                'score' => $riwayat_paket->score,
            ]);
        } elseif (substr($id_paket, 3, 3) == 'SKD') {
            $riwayat_jawaban = $riwayat_paket->riwayat_jawaban;
            $arr_riwayat_jawaban = explode('_', $riwayat_jawaban);
            // dd($arr_riwayat_jawaban);
            if (count($soals) < 110) {
                return view('user.soal.soal-hasil')->with([
                    'user' => $user,
                    'paket' => $paket,
                    'soals' => $soals,
                    'benar' => $riwayat_paket->benar,
                    'salah' => $riwayat_paket->salah,
                    'kosong' => $riwayat_paket->kosong,
                    'score' => $riwayat_paket->score,
                    'riwayat_paket' => $riwayat_paket,
                ]);
            }
            $jawabans = Jawaban::where('id_paket', $id_paket);
            $jawaban_asli = [];
            foreach ($soals as $r) {
                $jawaban_asli[] = $r->nomor_jawaban;

            }
            // dd($jawabans->where('nomor_soal', 1)->get());
            $tiu_skor = 0;
            $tiu_benar = 0;
            $twk_skor = 0;
            $twk_benar = 0;
            $tkp_skor = 0;
            $tkp_benar = 0;
            foreach ($arr_riwayat_jawaban as $i => $r) {
                if ($i >= 110) {
                    continue;
                }
                $copy_jawabans = clone $jawabans;
                if ($i >= 65) {
                    $tkp_benar++;
                    $tkp_skor += $copy_jawabans->where('nomor_soal', $i + 1)->where('nomor_jawaban', $r)->first()->skor_jawaban;
                } else {
                    if ($r == $jawaban_asli[$i]) {
                        if ($i < 30) {
                            $twk_benar++;
                            $twk_skor += 5;
                        } elseif ($i < 65) {
                            $tiu_benar++;
                            $tiu_skor += 5;
                        }
                    }
                }
            }
            $khusus_skd = collect([
                'tiu_skor' => $tiu_skor,
                'tiu_benar' => $tiu_benar,
                'twk_skor' => $twk_skor,
                'twk_benar' => $twk_benar,
                'tkp_skor' => $tkp_skor,
                'tkp_benar' => $tkp_benar,
            ]);
            $waktu_paket = $riwayat_paket->created_at->setTimezone('Asia/Jakarta')->format('H:i:s d-m-Y');
            $riwayat_paket->waktu_paket = $waktu_paket;

            return view('user.soal.soal-hasil')->with([
                'user' => $user,
                'paket' => $paket,
                'soals' => $soals,
                'benar' => $riwayat_paket->benar,
                'salah' => $riwayat_paket->salah,
                'kosong' => $riwayat_paket->kosong,
                'score' => $riwayat_paket->score,
                'riwayat_paket' => $riwayat_paket,
                'khusus_skd' => $khusus_skd,
            ]);
        }

        return view('user.soal.soal-hasil')->with([
            'user' => $user,
            'paket' => $paket,
            'soals' => $soals,
            'benar' => $riwayat_paket->benar,
            'salah' => $riwayat_paket->salah,
            'kosong' => $riwayat_paket->kosong,
            'score' => $riwayat_paket->score,
            'riwayat_paket' => $riwayat_paket,
        ]);
    }

    public function submitJawaban(Request $request)
    {
        $benar = 0;
        $salah = 0;
        $kosong = 0;
        $score = 0;
        $hasil = $request->all();
        $riwayat_jawaban = '';

        $paket = Paket::where('id', $hasil['id_paket'])->get()->first();
        if ($paket->latihan_soal == 1) {
            Order::where('id_user', Auth::id())->where('id_paket', $hasil['id_paket'])->update(['status' => 2]);
        }
        $soals = Soal::where('id_paket', $hasil['id_paket'])->orderBy('nomor_soal')->get();
        $jawabans_saved = Jawaban::where('id_paket', $hasil['id_paket']);
        $jawabans = collect();
        foreach ($request->all() as $key => $r) {
            if (substr($key, 0, 7) == 'answerc') {
                $encode = substr($key, 7);
                $soal = substr($encode, 0, -1);
                $jawaban = substr($encode, -1);
                if ($jawabans->has('answer'.$soal) == false) {
                    $jawabans['answer'.$soal] = $jawaban;
                } else {
                    $jawabans['answer'.$soal] = $jawabans['answer'.$soal].$jawaban;
                    $chars = str_split($jawabans['answer'.$soal]); // Split the string into an array of characters
                    sort($chars); // Sort the array of characters
                    $jawabans['answer'.$soal] = implode('', $chars); // Join the sorted characters back into a string
                }
            } elseif (substr($key, 0, 6) == 'answer') {
                $jawabans[$key] = $r;
            }
        }
        for ($i = 1; $i <= count($soals); $i++) {
            if ($jawabans->has('answer'.$i)) {

                $j = $jawabans['answer'.$i];
                $riwayat_jawaban .= $j.'_';
                $pointed_jawaban = clone $jawabans_saved;
                if (strlen($j) == 1) {
                    $pointed_jawaban = $pointed_jawaban->where('nomor_soal', $i)->where('nomor_jawaban', (int) $j)->get()->first();
                } else {
                    $pointed_jawaban = $pointed_jawaban->where('nomor_soal', $i)->where('nomor_jawaban', 1)->get()->first();
                }
                if ($j == $soals->where('nomor_soal', $i)->first()->nomor_jawaban) {
                    $benar++;
                    $score += $pointed_jawaban->skor_jawaban;
                } else {
                    $salah++;
                }
            } else {
                $riwayat_jawaban .= 'x_';
                $kosong++;
            }
        }
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $request->id_paket)->where('paketan', null);
        $kode_tipe = substr($riwayat_paket->get()->first()->id_paket, 3, 3);
        if ($kode_tipe == 'PCM') {
            $score = intval(($benar / $soals->count()) * 100);
        }
        if ($riwayat_paket->get()->first()->status == 0) {
            $riwayat_paket->update(['status' => 1, 'benar' => $benar, 'salah' => $salah, 'kosong' => $kosong, 'score' => $score, 'riwayat_jawaban' => $riwayat_jawaban]);
        }

        return redirect(url('/soal/hasil/'.$hasil['id_paket']));
    }

    public function viewSolusi($id_paket)
    {
        $order = Order::where('id_user', Auth::id())->where('id_paket', $id_paket)->orderBy('updated_at', 'desc')->get()->first();
        if ($order == null or $order->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum melakukan pembayaran']);
        }
        $paket = Paket::where('id', $id_paket)->get()->first();
        if ($paket == null) {
            return redirect(url('/try-out'))->withErrors(['error' => 'Paket tidak tersedia']);
        }

        $soals = Soal::where('id_paket', $id_paket)->orderBy('nomor_soal')->get();
       
        $jawabans = collect();
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $id_paket)->get()->first();
        if ($paket->latihan_soal == 1 and $order->status != 2) {
            return redirect(url('/exercise'))->withErrors(['error' => 'Anda belum mengerjakan Latihan Soal ini']);
        } elseif ($riwayat_paket == null or $riwayat_paket->status == 0) {
            return redirect(url('/try-out'))->withErrors(['error' => 'Anda belum mengerjakan Paket ini']);
        }

        $riwayat_jawaban = $riwayat_paket->riwayat_jawaban;
        $riwayat_jawaban = explode('_', $riwayat_jawaban);
        $count = 0;
        foreach ($soals as $soal) {
            $soal->benar_jawaban = 1;
            $sub_jawabans = Jawaban::where('nomor_soal', $soal->nomor_soal)->where('id_paket', $id_paket)->get();
            foreach ($sub_jawabans as $sj) {
                if ($riwayat_paket->riwayat_jawaban != null and array_key_exists($count, $riwayat_jawaban)) {
                    if (strstr($riwayat_jawaban[$count], $sj->nomor_jawaban) and strstr($soal->nomor_jawaban, $sj->nomor_jawaban) == false) {
                        $sj->benar_jawaban = 2;
                        $soal->benar_jawaban = 2;
                    }
                    if (strstr($riwayat_jawaban[$count], $sj->nomor_jawaban) and strstr($soal->nomor_jawaban, $sj->nomor_jawaban)) {
                        $sj->benar_jawaban = 3;
                        $soal->benar_jawaban = 3;
                    }
                }
                $jawabans->add($sj);
            }
            $count++;
            if ($soal->nomor_jawaban > 9) {
                $soal->pilgan_kompleks = true;
            } else {
                $soal->pilgan_kompleks = false;
            }
        }
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $id_paket)->get()->first();
        $now = Carbon::now();
        
        if ($riwayat_paket == null) {
            RiwayatPaket::create([
                'id_user' => Auth::id(),
                'id_paket' => $id_paket,
                'time' => $now,
            ]);
        }
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $id_paket)->get()->first();

        return view('user.pages.solusi')->with([
            'paket' => $paket,
            'soals' => $soals,
            'jawabans' => $jawabans,
        ]);
    }

    public function viewAturanPaket($id_paket, $type)
    {
        $id_type = collect();
        if (substr($id_paket, 3, 3) == 'PSI') {
            $id_type = collect([
                '1' => 'POLPPH'.substr($id_paket, 6, 3),
                '2' => 'POLPKC'.substr($id_paket, 6, 3),
                '3' => 'POLPKR'.substr($id_paket, 6, 3),
                '4' => 'POLPCM'.substr($id_paket, 6, 3),
            ]);
        } elseif (substr($id_paket, 3, 3) == 'DKD') {
            $id_type = collect([
                '1' => 'PNSTWK'.substr($id_paket, 6, 3),
                '2' => 'PNSTIU'.substr($id_paket, 6, 3),
                '3' => 'PNSTKP'.substr($id_paket, 6, 3),
                '4' => 'PNSPCM'.substr($id_paket, 6, 3),
            ]);
        }

        $user = Auth::user();
        $paket = Paket::where('id', $id_type[$type])->get()->first();
        $order = Order::where('id_user', $user->id)->where('id_paket', $id_paket)->orderBy('updated_at', 'desc')->get()->first();
        $noted_type = $type;
        $noted_paket = $id_type[$type];

        $riwayat_paket = RiwayatPaket::where('id_user', $user->id)->where('id_paket', $id_type[$type])->where('paketan', $id_paket)->get()->first();
        if ($order == null or $order->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum melakukan pembayaran']);
        }
        if ($riwayat_paket == null or substr($id_type[$type], 3, 3) == 'PCM') {
            $noted_time = $paket->durasi_paket;
        } elseif ($riwayat_paket->status == 1) {
            return redirect(url('history'))->withErrors(['error' => 'Anda sudah mengerjakan paket ini!']);
        } else {
            $noted_time = $riwayat_paket->time;
            $noted_time = $paket->durasi_paket - (Carbon::now()->timestamp - strtotime($noted_time));
        }
        if ($noted_time < 0) {
            $noted_time = 0;
        }
        $kode_tipe = substr($id_type[$type], 3, 3);
        if ($riwayat_paket == null) {
            return view('user.soal/soal-aturan')->with([
                'user' => $user,
                'paket' => $paket,
                'paketan' => $id_paket,
                'noted_time' => $noted_time,
                'noted_type' => $noted_type,
            ]);
        }

        return view('user.soal/soal-aturan')->withErrors(['info' => 'Maaf, jawaban reset karena halaman sudah dimuat ulang. Pengerjaan terakhir anda berada di tahap '.$paket->nama_paket.'.'])->with([
            'user' => $user,
            'paket' => $paket,
            'paketan' => $id_paket,
            'noted_time' => $noted_time,
            'noted_type' => $noted_type,
        ]);
    }

    public function viewSoalPaket($id_paket, $type)
    {
        $id_type = collect();
        if (substr($id_paket, 3, 3) == 'PSI') {
            $id_type = collect([
                '1' => 'POLPPH'.substr($id_paket, 6, 3),
                '2' => 'POLPKC'.substr($id_paket, 6, 3),
                '3' => 'POLPKR'.substr($id_paket, 6, 3),
                '4' => 'POLPCM'.substr($id_paket, 6, 3),
            ]);
        } elseif (substr($id_paket, 3, 3) == 'DKD') {
            $id_type = collect([
                '1' => 'PNSTWK'.substr($id_paket, 6, 3),
                '2' => 'PNSTIU'.substr($id_paket, 6, 3),
                '3' => 'PNSTKP'.substr($id_paket, 6, 3),
            ]);
        }
        $noted_type = $id_type[$type];
        $order = Order::where('id_user', Auth::id())->where('id_paket', $id_paket)->orderBy('updated_at', 'desc')->get()->first();
        if ($order == null or $order->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum melakukan pembayaran']);
        }
        $paket = Paket::where('id', $id_type[$type])->get()->first();
        if ($paket == null) {
            return redirect(url('/try-out'))->withErrors(['error' => 'Paket tidak tersedia']);
        }
        $soals = Soal::where('id_paket', $id_type[$type])->orderBy('nomor_soal')->get();
        $jawabans = collect();
        foreach ($soals as $soal) {
            $sub_jawabans = Jawaban::where('nomor_soal', $soal->nomor_soal)->where('id_paket', $id_type[$type])->get();
            foreach ($sub_jawabans as $sj) {
                $jawabans->add($sj);
            }
            if ($soal->nomor_jawaban > 9) {
                $soal->pilgan_kompleks = true;
            } else {
                $soal->pilgan_kompleks = false;
            }
        }
        $id_user = Auth::id();
        $riwayat_paket = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_type[$type])->where('paketan', $id_paket)->get()->first();
        // dd($riwayat_paket);
        $now = Carbon::now();
        if ($riwayat_paket == null) {
            RiwayatPaket::create([
                'id_user' => Auth::id(),
                'id_paket' => $id_type[$type],
                'time' => $now,
                'paketan' => $id_paket,
            ]);
        } elseif ($riwayat_paket->status == 1) {
            return redirect(url('history'))->withErrors(['error' => 'Anda sudah mengerjakan paket ini!']);
        }
        $riwayat_paket = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_type[$type])->where('paketan', $id_paket)->get()->first();
        $noted_time = $riwayat_paket->time;
        $noted_time = $paket->durasi_paket - (Carbon::now()->timestamp - strtotime($noted_time));
        if ($noted_time < 0) {
            $noted_time = 0;
        }

        $kode_tipe = substr($id_type[$type], 3, 3);

        if ($kode_tipe == 'PCM') {
            $rp = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_type[$type]);
            $rp->update(['time' => Carbon::now()]);
            $riwayat_paket = RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_type[$type])->get()->first();
            $noted_time = $riwayat_paket->time;
            $noted_time = $paket->durasi_paket - (Carbon::now()->timestamp - strtotime($noted_time));
            $noted_time += 5;
            // dd($rp->first()->time);
            foreach ($soals as $s) {
                $isi_soal = $s->isi_soal;
                $urutan_kolom = explode(' ', $isi_soal)[0];
                $isi_kolom = explode(' ', substr($isi_soal, 5, 9));
                $isi_soal = explode(' ', substr($isi_soal, 18, 7));
                $s->urutan_kolom = $urutan_kolom;
                $s->isi_kolom = $isi_kolom;
                $s->isi_soal = $isi_soal;
            }

            return view('user.pages.soal-kecermatan')->with([
                'paket' => $paket,
                'soals' => $soals,
                'jawabans' => $jawabans,
                'noted_time' => $noted_time,
                'noted_type' => $type,
                'kode_tipe' => $kode_tipe,
                'kode_paket' => $id_paket,
            ]);
        }

        return view('user.pages.soal')->with([
            'paket' => $paket,
            'soals' => $soals,
            'jawabans' => $jawabans,
            'noted_time' => $noted_time,
            'noted_type' => $type,
            'kode_tipe' => $kode_tipe,
            'kode_paket' => $id_paket,
        ]);
    }

    public function submitJawabanPaket(Request $request)
    {
        $benar = 0;
        $salah = 0;
        $kosong = 0;
        $score = 0;
        $hasil = $request->all();

        // dd($hasil);
        if (substr($hasil['id_paket'], 3, 3) == 'PSI') {
            $id_type = collect([
                '1' => 'POLPPH'.substr($hasil['id_paket'], 6, 3),
                '2' => 'POLPKC'.substr($hasil['id_paket'], 6, 3),
                '3' => 'POLPKR'.substr($hasil['id_paket'], 6, 3),
                '4' => 'POLPCM'.substr($hasil['id_paket'], 6, 3),
            ]);
        } elseif (substr($hasil['id_paket'], 3, 3) == 'DKD') {
            $id_type = collect([
                '1' => 'PNSTWK'.substr($hasil['id_paket'], 6, 3),
                '2' => 'PNSTIU'.substr($hasil['id_paket'], 6, 3),
                '3' => 'PNSTKP'.substr($hasil['id_paket'], 6, 3),
            ]);
        }
        $id_type_exact = $id_type[$hasil['noted_type']];
        $soals = Soal::where('id_paket', $id_type_exact)->orderBy('nomor_soal')->get();
        $jawabans_saved = Jawaban::where('id_paket', $id_type_exact);
        // dd($soals);
        $jawabans = collect();
        foreach ($request->all() as $key => $r) {
            if (substr($key, 0, 7) == 'answerc') {
                $encode = substr($key, 7);
                $soal = substr($encode, 0, -1);
                $jawaban = substr($encode, -1);
                if ($jawabans->has('answer'.$soal) == false) {
                    $jawabans['answer'.$soal] = $jawaban;
                } else {
                    $jawabans['answer'.$soal] = $jawabans['answer'.$soal].$jawaban;
                    $chars = str_split($jawabans['answer'.$soal]); // Split the string into an array of characters
                    sort($chars); // Sort the array of characters
                    $jawabans['answer'.$soal] = implode('', $chars); // Join the sorted characters back into a string
                }
            } elseif (substr($key, 0, 6) == 'answer') {
                $jawabans[$key] = $r;
            }
        }
        for ($i = 1; $i <= count($soals); $i++) {
            if ($jawabans->has('answer'.$i)) {
                $j = $jawabans['answer'.$i];
                $pointed_jawaban = clone $jawabans_saved;
                if (strlen($j) == 1) {
                    $pointed_jawaban = $pointed_jawaban->where('nomor_soal', $i)->where('nomor_jawaban', (int) $j)->get()->first();
                } else {
                    $pointed_jawaban = $pointed_jawaban->where('nomor_soal', $i)->where('nomor_jawaban', 1)->get()->first();
                }
                if (substr($id_type_exact, 3, 3) == 'PCM' and $j == $soals->where('nomor_soal', $i)->first()->nomor_jawaban) {
                    $benar++;
                } elseif ($j == $soals->where('nomor_soal', $i)->first()->nomor_jawaban or $pointed_jawaban->benar_jawaban == 1) {
                    $benar++;
                    $score += $pointed_jawaban->skor_jawaban;
                } else {
                    $salah++;
                }
            } else {
                $kosong++;
            }
        }
        // dd("Benar: ".$benar.", Salah: ".$salah.", Kosong: ".$kosong);
        // foreach($request->all() as $key => $r){
        //     if(substr($key,0,3)!='ans') continue;
        //     $id_soal = substr($key,6);
        //     // dd($id_soal);
        //     $soal = $soals->where('id', $id_soal)->first();
        //     // dd($soal->id);
        //     if($r==-1) $kosong++;
        //     else if($r==$soal->nomor_jawaban) $benar++;
        //     else $salah++;
        // }
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $id_type_exact)->where('paketan', $hasil['id_paket']);
        // dd($riwayat_paket->get());
        $kode_tipe = substr($riwayat_paket->get()->first()->id_paket, 3, 3);
        if ($kode_tipe == 'PCM') {
            $score = ($benar / $soals->count()) * 100;
        }
        if ($riwayat_paket->get()->first()->status == 0) {
            $riwayat_paket->update(['status' => 1, 'benar' => $benar, 'salah' => $salah, 'kosong' => $kosong, 'score' => $score]);
        }
        if ($hasil['noted_type'] != count($id_type)) {
            RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $hasil['id_paket'])->update(['benar' => $hasil['noted_type'] + 1]);

            return redirect(url('/soal/aturan/'.$hasil['id_paket'].'/'.($hasil['noted_type'] + 1)));
        }
        $score_total = 0;
        $riwayat_paket_type = RiwayatPaket::where('id_user', Auth::id())->where('paketan', $hasil['id_paket'])->get();
        if (substr($hasil['id_paket'], 3, 3) == 'PSI') {
            foreach ($riwayat_paket_type as $key => $r) {
                if (substr($r->id_paket, 3, 3) == 'PPH') {
                    continue;
                }
                if (substr($r->id_paket, 3, 3) == 'PKC') {
                    $score_total += $r->score * 20 / 100;
                }
                if (substr($r->id_paket, 3, 3) == 'PKR') {
                    $score_total += $r->score * 55 / 100;
                }
                if (substr($r->id_paket, 3, 3) == 'PCM') {
                    $score_total += $r->score * 25 / 100;
                }
            }
        } elseif (substr($hasil['id_paket'], 3, 3) == 'DKD') {
            foreach ($riwayat_paket_type as $key => $r) {
                $score_total += $r->score;
            }
        }
        RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $hasil['id_paket'])->update([
            'status' => 1,
            'score' => $score_total,
        ]);

        return redirect(url('/soal/hasil/'.$hasil['id_paket']));
    }

    public function viewSolusiPaket($id_paket, $type)
    {
        $order = Order::where('id_user', Auth::id())->where('id_paket', $id_paket)->orderBy('updated_at', 'desc')->get()->first();
        if ($order == null or $order->status == 0) {
            return redirect(url('/dashboard'))->withErrors(['error' => 'Anda belum melakukan pembayaran']);
        }
        if (substr($id_paket, 3, 3) == 'PSI') {
            $id_type = collect([
                '1' => 'POLPPH'.substr($id_paket, 6, 3),
                '2' => 'POLPKC'.substr($id_paket, 6, 3),
                '3' => 'POLPKR'.substr($id_paket, 6, 3),
            ]);
        } elseif (substr($id_paket, 3, 3) == 'DKD') {
            $id_type = collect([
                '1' => 'PNSTWK'.substr($id_paket, 6, 3),
                '2' => 'PNSTIU'.substr($id_paket, 6, 3),
                '3' => 'PNSTKP'.substr($id_paket, 6, 3),
            ]);
        }
        $id_paket_parent = $id_paket;
        $id_paket = $id_type[$type];

        $paket = Paket::where('id', $id_paket)->get()->first();
        if ($paket == null) {
            return redirect(url('/try-out'))->withErrors(['error' => 'Paket tidak tersedia']);
        }
        $soals = Soal::where('id_paket', $id_paket)->orderBy('nomor_soal')->get();
        $jawabans = collect();
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $id_paket)->get()->first();
        if ($riwayat_paket == null or $riwayat_paket->status == 0) {
            return redirect(url('/try-out'))->withErrors(['error' => 'Anda belum mengerjakan Paket ini']);
        }
        $riwayat_jawaban = $riwayat_paket->riwayat_jawaban;
        $riwayat_jawaban = explode('_', $riwayat_jawaban);
        $count = 0;
        foreach ($soals as $soal) {
            $sub_jawabans = Jawaban::where('nomor_soal', $soal->nomor_soal)->where('id_paket', $id_paket)->get();
            foreach ($sub_jawabans as $sj) {
                if ($riwayat_paket->riwayat_jawaban != null) {
                    if (strstr($riwayat_jawaban[$count], $sj->nomor_jawaban) and strstr($soal->nomor_jawaban, $sj->nomor_jawaban) == false) {
                        $sj->benar_jawaban = 2;
                    }
                    if (strstr($riwayat_jawaban[$count], $sj->nomor_jawaban) and strstr($soal->nomor_jawaban, $sj->nomor_jawaban)) {
                        $sj->benar_jawaban = 3;
                    }
                }
                $jawabans->add($sj);
            }
            $count++;
            if ($soal->nomor_jawaban > 9) {
                $soal->pilgan_kompleks = true;
            } else {
                $soal->pilgan_kompleks = false;
            }
        }
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $id_paket)->get()->first();
        $now = Carbon::now();
        if ($riwayat_paket == null) {
            RiwayatPaket::create([
                'id_user' => Auth::id(),
                'id_paket' => $id_paket,
                'time' => $now,
            ]);
        }
        $riwayat_paket = RiwayatPaket::where('id_user', Auth::id())->where('id_paket', $id_paket)->get()->first();

        return view('user.pages.solusi')->with([
            'id_paket' => $id_paket_parent,
            'urutan_paket' => $type,
            'max_urutan_paket' => count($id_type),
            'paket' => $paket,
            'soals' => $soals,
            'jawabans' => $jawabans,
        ]);
    }
}
