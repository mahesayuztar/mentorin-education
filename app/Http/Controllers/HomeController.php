<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Review;
use App\Models\RiwayatPaket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.adminHome');
    }

    public function notFoundPage()
    {
        if (Auth::user() != null) {
            return view('user.pages.dashboard')->withErrors(['error' => 'Anda mengakses URL yang invalid!']);
        } else {
            return view('user.home')->withErrors(['error' => 'Anda mengakses URL yang invalid!']);
        }
    }

    public function viewHistory()
    {
        $user = Auth::user();
        $riwayat_pakets = RiwayatPaket::where('id_user', $user->id)->where('paketan', null)->get();
        $pakets = Paket::all();
        foreach ($riwayat_pakets as $key => $value) {
            if ($value->paketan != null) {
                continue;
            }
            if ($pakets->where('id', $value->id_paket)->first()->latihan_soal == 1) {
                unset($riwayat_pakets[$key]);

                continue;
            }
            $kode_paket = $value->id_paket;
            $kode_tes = substr($kode_paket, 0, 3);
            $kode_tipe = substr($kode_paket, 3, 3);
            if ($kode_tes == 'POL') {
                $riwayat_pakets[$key]->nama_tes = 'TES POLRI';
            } elseif ($kode_tes == 'PNS') {
                $riwayat_pakets[$key]->nama_tes = 'TES CPNS';
            }

            $nama_paket = $pakets->where('id', $value->id_paket)->first()->nama_paket;
            $riwayat_pakets[$key]->nama_paket = $nama_paket;

            $waktu_paket = $value->created_at->setTimezone('Asia/Jakarta')->format('H:i:s d-m-Y');
            $riwayat_pakets[$key]->waktu_paket = $waktu_paket;

            $status_paket = $value->status;
            if ($status_paket == 0) {
                $riwayat_pakets[$key]->status = 'Belum Selesai';
            } else {
                $riwayat_pakets[$key]->status = 'Selesai';
            }
            $riwayat_pakets[$key]->solusi = url('soal/solusi/'.$value->id_paket);
            // if($)
        }

        return view('user.pages.history')->with('riwayat_pakets', $riwayat_pakets);
    }

    public function viewRank()
    {
        $riwayat_pakets = RiwayatPaket::where('paketan', null)->orderBy('id_paket')->orderBy('score', 'desc')->get();
        $daftar_paket = collect();
        $daftar_paket->add(['id_paket' => 'semua', 'nama_paket' => 'Semua Paket']);
        foreach ($riwayat_pakets as $key => $value) {
            $id_paket = $value->id_paket;
            $paket = Paket::where('id', $id_paket)->first();
            $nama_paket = $paket ? $paket->nama_paket : 'Unknown Paket';

            $updated_at = Carbon::parse($value->updated_at);
            $time = Carbon::parse($value->time);

            $diffInSeconds = $time->diffInSeconds($updated_at);
            $diff = gmdate('H:i:s', $diffInSeconds);
            $waktu_digunakan = $diff;

            $user = User::where('id', $value->id_user)->first();
            $nama_user = $user ? $user->name : 'Unknown User';

            $riwayat_pakets[$key]->nama_paket = $nama_paket;
            $riwayat_pakets[$key]->waktu_digunakan = $waktu_digunakan;
            $riwayat_pakets[$key]->nama_user = $nama_user;
            if (! in_array($value->id_paket, $daftar_paket->pluck('id_paket')->toArray())) {
                $daftar_paket->add(['id_paket' => $value->id_paket, 'nama_paket' => $nama_paket]);
            }
        }

        return view('user.pages.rank')->with(['riwayat_pakets' => $riwayat_pakets, 'daftar_paket' => $daftar_paket]);
    }

    public function submitReview(Request $request)
    {
        // Validate the request data
        $request->validate([
            'review_title' => 'required|string|max:255',
            'review_description' => 'required|string',
        ]);

        // Create the review
        Review::create([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name,
            'photo_profile' => Auth::user()->photo_profile,
            'review_title' => $request->input('review_title'),
            'review_description' => $request->input('review_description'),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Ulasan Anda telah berhasil disimpan!');
    }
}
