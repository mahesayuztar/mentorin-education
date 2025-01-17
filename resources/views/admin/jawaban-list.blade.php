@extends('admin.layouts.master')

@section('content')
<!-- MAIN -->
<main>
  <div class="head-title">
    <div class="left">
      <h1>Jawaban</h1>
      <ul class="breadcrumb">
        <li>
          <a href="#">Jawaban</a>
        </li>
        <li><i class='bx bx-chevron-right'></i></li>
        <li>
          <a class="active" href="{{ url('/jawaban-list') }}">Daftar Data Jawaban</a>
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
            <h3>Daftar Data Jawaban</h3>
            <a href="{{ url('add-jawaban') }}" class="btn">Tambah Jawaban</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID Paket</th>
                    <th>Nomor Soal</th>
                    <th>Nomor Jawaban</th>
                    <th>Isi Jawaban</th>
                    <th>Gambar Jawaban</th>
                    <th>Benar Jawaban</th>
                    <th>Skor Jawaban</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @php
            $i = 1;
            @endphp
            
            @foreach(DB::table('jawabans')->orderBy('created_at', 'desc')->get() as $jawaban)
                <tr>
                    <td>{{ $jawaban->id_paket }}</td>
                    <td>{{ $jawaban->nomor_soal }}</td>
                    <td>{{ $jawaban->nomor_jawaban }}</td>
                    <td>{{ strlen($jawaban->isi_jawaban) > 20 ? substr($jawaban->isi_jawaban, 0, 20) . ' ...' : $jawaban->isi_jawaban }}</td>
                    <td>{{ $jawaban->gambar_jawaban }}</td>
                    <td>{{ $jawaban->benar_jawaban }}</td>
                    <td>{{ $jawaban->skor_jawaban }}</td>
                    <td>
                        <center>
                            <a href="{{ url('edit-jawaban/'.$jawaban->id) }}" class="btn">Edit</a>
                            <a href="{{ url('delete-jawaban/'.$jawaban->id) }}" class="btn-del">Hapus</a>
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
