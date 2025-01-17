@extends('admin.layouts.master')

@section('content')
<!-- MAIN -->
<main>
  <div class="head-title">
    <div class="left">
      <h1>Paket</h1>
      <ul class="breadcrumb">
        <li>
          <a href="#">Paket</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
          <a class="active" href="{{ url('/paket-list') }}">Daftar Data Paket</a>
        </li>
      </ul>
    </div>
  </div>

  <style>
    #content main .table-data {
        text-align: center;
    }

    #content main .table-data .order table th {
        text-align: center;
    }
    .btn {
        display: inline-block;
        padding: 5px 15px;
        background-color: #00345b;
        color: #fff;
        font-size: 12px;
        line-height: 1.5;
        text-align: center;
        text-decoration: none;
        border-radius: 20px;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn:hover {
        background-color: #6CA6CD;
        color: #fff;
        text-decoration: none;
    }

    .btn-del {
        display: inline-block;
        padding: 5px 15px;
        background-color: #c9302c;
        color: #fff;
        font-size: 12px;
        line-height: 1.5;
        text-align: center;
        text-decoration: none;
        border-radius: 20px;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-del:hover {
        background-color: #d9534f;
        color: #fff;
        text-decoration: none;
    }

    .btn:focus,
    .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
  </style>

  <div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Daftar Data Paket</h3>
            <a href="{{ url('add-paket') }}" class="btn">Tambah Paket</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID Paket</th>
                    <th>Nama Paket</th>
                    <th>Harga Paket</th>
                    <th>Durasi Paket</th>
                    <th>Gambar Paket</th>
                    <th>Minimal Skor</th>
                    <th>Latihan Soal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            @foreach($dataPaket as $paket)
                <tr>
                    <td>{{ $paket->id }}</td>
                    <td>{{ $paket->nama_paket }}</td>
                    <td>{{ $paket->harga_paket }}</td>
                    <td>{{ $paket->durasi_paket }}</td>
                    <td>{{ $paket->gambar_paket }}</td>
                    <td>{{ $paket->minimal_skor }}</td>
                    <td>{{ $paket->latihan_soal }}</td>
                    <td>
                        <center>
                            <a href="{{ url('edit-paket/'.$paket->id) }}" class="btn">Edit</a>
                            <a href="{{ url('delete-paket/'.$paket->id) }}" class="btn-del">Hapus</a>
                        </center>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</main>


@endsection
