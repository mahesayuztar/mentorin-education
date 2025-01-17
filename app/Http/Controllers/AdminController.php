<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Order;
use App\Models\Paket;
use App\Models\RiwayatPaket;
use App\Models\Soal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Paket Controllers
    public function indexPaket()
    {
        $dataPaket = Paket::get();

        return view('admin.paket-list', compact('dataPaket'));
    }

    public function addPaket()
    {
        return view('admin.add-paket');
    }

    public function savePaket(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_paket' => 'required',
            'harga_paket' => 'required',
            'durasi_paket' => 'required',
            'aturan_paket' => 'required',
            'gambar_paket' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
            'solusi_paket' => 'nullable',
            'latihan_soal' => 'nullable',
        ]);

        $id = $request->id;
        $nama_paket = $request->nama_paket;
        $harga_paket = $request->harga_paket;
        $durasi_paket = $request->durasi_paket;
        $aturan_paket = $request->aturan_paket;
        $gambar_paket = $request->file('gambar_paket');
        $solusi_paket = $request->solusi_paket;
        $minimal_skor = $request->minimal_skor;
        $latihan_soal = $request->latihan_soal;

        $paket = new Paket;
        $paket->id = $id;
        $paket->nama_paket = $nama_paket;
        $paket->harga_paket = $harga_paket;
        $paket->durasi_paket = $durasi_paket;
        $paket->aturan_paket = $aturan_paket;
        $paket->minimal_skor = $minimal_skor;
        $paket->latihan_soal = $latihan_soal;
        if ($minimal_skor == null) {
            $paket->minimal_skor = 61;
        }
        if ($gambar_paket) {
            $nama_gambar_paket = time().'.'.$gambar_paket->extension();
            $paket->gambar_paket = $nama_gambar_paket;
            $gambar_paket->move(base_path('../public_html/user/img/paket'), $nama_gambar_paket);
        }
        $paket->solusi_paket = $solusi_paket;
        $paket->save();

        return redirect()->back()->with('success', 'Paket Berhasil Ditambahkan');
    }

    public function editPaket($id)
    {
        $dataPaket = Paket::where('id', '=', $id)->first();

        //dd($dataPaket);
        return view('admin.edit-paket', compact('dataPaket'));
    }

    public function updatePaket(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_paket' => 'required',
            'harga_paket' => 'required',
            'durasi_paket' => 'required',
            'aturan_paket' => 'required',
            'gambar_paket' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
            'solusi_paket' => 'nullable',
            'id_sebelum' => 'required',
            'latihan_soal' => 'nullable',
        ]);

        $id = $request->id;
        $nama_paket = $request->nama_paket;
        $harga_paket = $request->harga_paket;
        $durasi_paket = $request->durasi_paket;
        $aturan_paket = $request->aturan_paket;
        $gambar_paket = $request->file('gambar_paket');
        $solusi_paket = $request->solusi_paket;
        $id_sebelum = $request->id_sebelum;
        $minimal_skor = $request->minimal_skor;
        $latihan_soal = $request->latihan_soal;

        $paket = Paket::find($id_sebelum);

        $paket->id = $id;
        $paket->nama_paket = $nama_paket;
        $paket->harga_paket = $harga_paket;
        $paket->durasi_paket = $durasi_paket;
        $paket->aturan_paket = $aturan_paket;
        $paket->minimal_skor = $minimal_skor;
        $paket->latihan_soal = $latihan_soal;
        if ($gambar_paket) {
            $oldImagePaket = $paket->gambar_paket;
            $imageNamePaket = time().'.'.$gambar_paket->extension();

            $paket->gambar_paket = $imageNamePaket;
            $gambar_paket->move(base_path('../public_html/user/img/paket'), $imageNamePaket);

            if ($oldImagePaket) {
                unlink(base_path('../public_html/user/img/paket/'.$oldImagePaket));
            }
        }
        $paket->solusi_paket = $solusi_paket;
        $paket->save();

        return redirect(url('/edit-paket/'.$id))->with('success', 'Paket Berhasil Diperbarui');
    }

    public function deletePaket($id)
    {
        Paket::where('id', '=', $id)->delete();

        return redirect()->back()->with('success', 'Paket Berhasil Dihapus');
    }

    // Soal Controllers
    public function indexSoal()
    {
        $dataSoal = Soal::get();

        return view('admin.soal-list', compact('dataSoal'));
    }

    public function addSoal()
    {
        return view('admin.add-soal');
    }

    public function saveSoal(Request $request)
    {
        $request->validate([
            'id_paket' => 'required',
            'nomor_soal' => 'required',
            'isi_soal' => 'nullable',
            'gambar_soal' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:10240',
            'nomor_jawaban' => 'required',
            'isi_solusi' => 'nullable',
            'gambar_solusi' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:10240',
        ]);

        // dd($request->all());
        $hasil = $request->all();

        $id_paket = $request->id_paket;
        $nomor_soal = $request->nomor_soal;
        $isi_soal = $request->isi_soal;
        $gambar_soal = $request->file('gambar_soal');
        $nomor_jawaban = $request->nomor_jawaban;
        $isi_solusi = $request->isi_solusi;
        $gambar_solusi = $request->file('gambar_solusi');

        $soal = new Soal;
        $soal->id_paket = $id_paket;
        $soal->nomor_soal = $nomor_soal;
        $soal->isi_soal = $isi_soal;
        if ($gambar_soal) {
            $nama_gambar_soal = time().'.'.$gambar_soal->extension();
            $soal->gambar_soal = $nama_gambar_soal;
            $gambar_soal->move(base_path('../public_html/user/img/soal'), $nama_gambar_soal);
        }
        $soal->nomor_jawaban = $nomor_jawaban;
        if ($isi_solusi) {
            $soal->isi_solusi = $isi_solusi;
        }
        if ($gambar_solusi) {
            $nama_gambar_solusi = time().'.'.$gambar_solusi->extension();
            $soal->gambar_solusi = $nama_gambar_solusi;
            $gambar_solusi->move(base_path('../public_html/user/img/solusi'), $nama_gambar_solusi);
        }
        $soal->save();

        foreach ($hasil as $key => $value) {
            if (substr($key, 0, 11) == 'isi_jawaban' and $value != null) {
                $nomor_jawaban = substr($key, 11, 1);
                $jawaban = new Jawaban;
                $jawaban->nomor_jawaban = $nomor_jawaban;
                $jawaban->id_paket = $id_paket;
                $jawaban->nomor_soal = $nomor_soal;
                $jawaban->isi_jawaban = $value;
                $jawaban->save();
                // dump($jawaban);
            }
            if (substr($key, 0, 14) == 'gambar_jawaban' and $value != null) {
                $nomor_jawaban = substr($key, 14, 1);

                if (Jawaban::where('id_paket', $id_paket)->where('nomor_soal', $nomor_soal)->where('nomor_jawaban', $nomor_jawaban)->get()->first() == null) {
                    dump($nomor_jawaban);

                    continue;
                }
                $gambar_jawaban = $request->file($key);
                $filename = $gambar_jawaban->hashName();
                $lastDotPos = strrpos($filename, '.');
                $filename = substr($filename, 0, $lastDotPos);
                $nama_gambar_jawaban = $filename.time().'.'.$gambar_jawaban->extension();
                $gambar_jawaban->move(base_path('../public_html/user/img/jawaban'), $nama_gambar_jawaban);
                Jawaban::where('id_paket', $id_paket)->where('nomor_soal', $nomor_soal)->where('nomor_jawaban', $nomor_jawaban)->update(['gambar_jawaban' => $nama_gambar_jawaban]);
                // dump($nomor_jawaban);
            }
            if (substr($key, 0, 13) == 'benar_jawaban' and $value != null) {
                $nomor_jawaban = substr($key, 13, 1);
                if (Jawaban::where('id_paket', $id_paket)->where('nomor_soal', $nomor_soal)->where('nomor_jawaban', $nomor_jawaban)->get()->first() == null) {
                    continue;
                }
                Jawaban::where('id_paket', $id_paket)->where('nomor_soal', $nomor_soal)->where('nomor_jawaban', $nomor_jawaban)->update(['benar_jawaban' => $value]);
                // dump($nomor_jawaban);
            }
            if (substr($key, 0, 12) == 'skor_jawaban' and $value != null) {
                $nomor_jawaban = substr($key, 12, 1);
                if (Jawaban::where('id_paket', $id_paket)->where('nomor_soal', $nomor_soal)->where('nomor_jawaban', $nomor_jawaban)->get()->first() == null) {
                    continue;
                }
                Jawaban::where('id_paket', $id_paket)->where('nomor_soal', $nomor_soal)->where('nomor_jawaban', $nomor_jawaban)->update(['skor_jawaban' => $value]);
                // dump($nomor_jawaban);
            }
        }

        return redirect()->back()->with('success', 'Soal Berhasil Ditambahkan');
    }

    public function editSoal($id)
    {
        $dataSoal = Soal::where('id', '=', $id)->first();

        return view('admin.edit-soal', compact('dataSoal'));
    }

    public function updateSoal(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'id_paket' => 'required',
            'nomor_soal' => 'required',
            'isi_soal' => 'nullable',
            'gambar_soal' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:10240',
            'nomor_jawaban' => 'required',
            'isi_solusi' => 'nullable',
            'gambar_solusi' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $id = $request->id;
        $id_paket = $request->id_paket;
        $nomor_soal = $request->nomor_soal;
        $isi_soal = $request->isi_soal;
        $gambar_soal = $request->file('gambar_soal');
        $nomor_jawaban = $request->nomor_jawaban;
        $isi_solusi = $request->isi_solusi;
        $gambar_solusi = $request->file('gambar_solusi');

        $soal = Soal::find($id);

        $soal->id_paket = $id_paket;
        $soal->nomor_soal = $nomor_soal;
        $soal->isi_soal = $isi_soal;

        if ($gambar_soal) {
            $oldImageSoal = $soal->gambar_soal;
            $imageNameSoal = time().'.'.$gambar_soal->extension();

            $soal->gambar_soal = $imageNameSoal;
            $gambar_soal->move(base_path('../public_html/user/img/soal'), $imageNameSoal);

            if ($oldImageSoal) {
                unlink(base_path('../public_html/user/img/soal/'.$oldImageSoal));
            }
        }

        $soal->nomor_jawaban = $nomor_jawaban;
        $soal->isi_solusi = $isi_solusi;

        if ($gambar_solusi) {
            $oldImageSolusi = $soal->gambar_solusi;
            $imageNameSolusi = time().'.'.$gambar_solusi->extension();

            $soal->gambar_solusi = $imageNameSolusi;
            $gambar_solusi->move(base_path('../public_html/user/img/solusi'), $imageNameSolusi);

            if ($oldImageSolusi) {
                unlink(base_path('../public_html/user/img/solusi/'.$oldImageSolusi));
            }
        }

        $soal->save();

        return redirect()->back()->with('success', 'Soal Berhasil Diperbarui');
    }

    public function deleteSoal($id)
    {
        Soal::where('id', '=', $id)->delete();

        return redirect()->back()->with('success', 'Soal Berhasil Dihapus');
    }

    public function deleteGambarSoal($id)
    {
        Soal::where('id', $id)->update(['gambar_soal' => null]);

        return redirect()->back()->with('success', 'Gambar Soal Berhasil Dihapus');
    }

    public function deleteGambarSolusi($id)
    {
        Soal::where('id', $id)->update(['gambar_solusi' => null]);

        return redirect()->back()->with('success', 'Gambar Solusi Berhasil Dihapus');
    }

    // Jawaban Controllers
    public function indexJawaban()
    {
        $dataJawaban = Jawaban::get();

        return view('admin.jawaban-list', compact('dataJawaban'));
    }

    public function addJawaban()
    {
        return view('admin.add-jawaban');
    }

    public function saveJawaban(Request $request)
    {
        $request->validate([
            'id_paket' => 'required',
            'nomor_soal' => 'required',
            'nomor_jawaban' => 'required',
            'isi_jawaban' => 'nullable',
            'gambar_jawaban' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:10240',
            'benar_jawaban' => 'required',
        ]);

        $id_paket = $request->id_paket;
        $nomor_soal = $request->nomor_soal;
        $nomor_jawaban = $request->nomor_jawaban;
        $isi_jawaban = $request->isi_jawaban;
        $gambar_jawaban = $request->file('gambar_jawaban');
        $benar_jawaban = $request->benar_jawaban;
        $skor_jawaban = $request->skor_jawaban;

        $jawaban = new Jawaban;
        $jawaban->id_paket = $id_paket;
        $jawaban->nomor_soal = $nomor_soal;
        $jawaban->nomor_jawaban = $nomor_jawaban;
        $jawaban->isi_jawaban = $isi_jawaban;
        $jawaban->skor_jawaban = $skor_jawaban;
        if ($gambar_jawaban) {
            $nama_gambar_jawaban = time().'.'.$gambar_jawaban->extension();
            $jawaban->gambar_jawaban = $nama_gambar_jawaban;
            $gambar_jawaban->move(base_path('../public_html/user/img/jawaban'), $nama_gambar_jawaban);
        }
        $jawaban->benar_jawaban = $benar_jawaban;
        $jawaban->save();

        return redirect()->back()->with('success', 'Jawaban Berhasil Ditambahkan');
    }

    public function editJawaban($id)
    {
        $dataJawaban = Jawaban::where('id', '=', $id)->first();

        return view('admin.edit-jawaban', compact('dataJawaban'));
    }

    public function updateJawaban(Request $request)
    {
        $request->validate([
            'id_paket' => 'required',
            'nomor_soal' => 'required',
            'nomor_jawaban' => 'required',
            'isi_jawaban' => 'nullable',
            'gambar_jawaban' => 'image|mimes:webp,jpeg,png,jpg,gif,svg|max:10240',
            'benar_jawaban' => 'required',
        ]);

        $id = $request->id;
        $id_paket = $request->id_paket;
        $nomor_soal = $request->nomor_soal;
        $nomor_jawaban = $request->nomor_jawaban;
        $isi_jawaban = $request->isi_jawaban;
        $gambar_jawaban = $request->file('gambar_jawaban');
        $benar_jawaban = $request->benar_jawaban;
        $skor_jawaban = $request->skor_jawaban;

        $jawaban = Jawaban::find($id);

        $jawaban->id = $id;
        $jawaban->id_paket = $id_paket;
        $jawaban->nomor_soal = $nomor_soal;
        $jawaban->nomor_jawaban = $nomor_jawaban;
        $jawaban->isi_jawaban = $isi_jawaban;
        $jawaban->skor_jawaban = $skor_jawaban;
        if ($gambar_jawaban) {
            $oldImageJawaban = $jawaban->gambar_jawaban;
            $imageNameJawaban = time().'.'.$gambar_jawaban->extension();

            $jawaban->gambar_jawaban = $imageNameJawaban;
            $gambar_jawaban->move(base_path('../public_html/user/img/jawaban'), $imageNameJawaban);

            if ($oldImageJawaban) {
                unlink(base_path('../public_html/user/img/jawaban/'.$oldImageJawaban));
            }
        }
        $jawaban->benar_jawaban = $benar_jawaban;
        $jawaban->save();

        return redirect()->back()->with('success', 'Jawaban Berhasil Diperbarui');
    }

    public function deleteJawaban($id)
    {
        Jawaban::where('id', '=', $id)->delete();

        return redirect()->back()->with('success', 'Jawaban Berhasil Dihapus');
    }

    public function deleteGambarJawaban($id)
    {
        Jawaban::where('id', '=', $id)->update(['gambar_jawaban' => null]);

        return redirect()->back()->with('success', 'Gambar Jawaban Berhasil Dihapus');
    }

    // Order Controllers
    public function editOrderStatus($id)
    {
        $dataOrder = Order::where('id', '=', $id)->first();

        return view('admin.edit-order-status', compact('dataOrder'));
    }

    public function updateOrderStatus(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' => 'required|integer|in:0,1',
        ]);

        $id = $request->id;
        $status = $request->status;

        $order = Order::find($id);

        // Perbarui nilai status
        $order->status = $status;
        $order->save();

        return redirect()->back()->with('success', 'Status Order Berhasil Diperbarui');
    }

    public function editOrderKonfirmasi($id)
    {
        $dataOrder = Order::where('id', '=', $id);
        if ($dataOrder == null) {
            return redirect()->back();
        }
        if ($dataOrder->first()->status == 0) {
            $dataOrder->update(['status' => 1]);
        } else {
            $dataOrder->update(['status' => 0]);
        }

        return redirect()->back();
    }

    public function deleteOrder($id)
    {
        $dataOrder = Order::where('id', '=', $id);
        if ($dataOrder == null) {
            return redirect()->back();
        }
        $id_user = $dataOrder->get()->first()->id_user;
        $id_paket = $dataOrder->get()->first()->id_paket;
        RiwayatPaket::where('id_user', $id_user)->where('id_paket', $id_paket)->delete();
        RiwayatPaket::where('id_user', $id_user)->where('paketan', $id_paket)->delete();
        $dataOrder->delete();

        return redirect()->back();
    }
}
