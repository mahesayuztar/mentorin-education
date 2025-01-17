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
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
            <a class="active" href="{{ url('/edit-paket/{id}') }}">Edit Data Paket</a>
            </li>
        </ul>
        </div>
    </div>

    <style>
        :root {
            --main-hue: 208;
        }
        .input-wrap {
            position: relative;
        }
        .input-wrap label {
            position: absolute;
            left: calc(1.35rem + 2px);
            transform: translateY(-80%);
            color: #001920;
            pointer-events: none;
            transition: .25s;
            margin-top: 1.5rem;
        }
        .form-control {
            width: 100%;
            background-color: #f2f2f2;
            padding: 1.5rem 1.35rem calc(0.75rem - 2px) 1.35rem;
            border: none;
            outline: none;
            font-family: inherit;
            border-radius: 20px;
            color: var(--text-color);
            font-weight: 500;
            font-size: 0.95rem;
            border: 2px solid transparent;
            box-shadow: 0 0 0 0px hsla(var(--main-hue), 92%, 54%, 0.169);
            transition: 0.3s;
            margin-bottom: 20px;
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
            border: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .btn:hover {
            background-color: #6CA6CD;
            color: #fff;
            text-decoration: none;
        }
        .btn-back {
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
        .btn-back:hover {
            background-color: #d9534f;
            color: #fff;
            text-decoration: none;
        }
        .btn:focus,
        .btn.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .form-control:invalid {
            border-color: #d9534f;
        }
        .text-danger {
            color: #d9534f;
        }
    </style>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h2>Edit Data Paket</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <form method="POST" action="{{ url('update-paket') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $dataPaket->id }}">
                <div class="input-wrap">
                    <label for="id">ID Paket</label>
                    <input type="text" class="form-control" name="id" placeholder="Masukkan ID Paket" value="{{ $dataPaket->id }}">
                    @error('id')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" class="form-control" name="nama_paket" placeholder="Masukkan Nama Paket" value="{{ $dataPaket->nama_paket }}">
                    @error('nama_paket')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="harga_paket">Harga Paket</label>
                    <input type="text" class="form-control" name="harga_paket" placeholder="Masukkan Harga Paket" value="{{ $dataPaket->harga_paket }}">
                    @error('harga_paket')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="durasi_paket">Durasi Paket</label>
                    <input type="text" class="form-control" name="durasi_paket" placeholder="Masukkan Durasi Paket" value="{{ $dataPaket->durasi_paket }}">
                    @error('durasi_paket')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-wrap">
                    <label for="aturan_paket">Aturan Paket</label>
                    <input type="text" class="form-control" name="aturan_paket" placeholder="Masukkan Aturan Paket" value="{{ $dataPaket->aturan_paket }}">
                    @error('aturan_paket')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-wrap">
                    <label for="gambar_paket">Pilih Gambar Paket</label>
                    <input type="file" class="form-control" name="gambar_paket" placeholder="Masukkan Gambar Paket" accept="image/*">
                    @error('gambar_paket')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-wrap">
                    <label for="solusi_paket">Solusi Paket</label>
                    <input type="text" class="form-control" name="solusi_paket" placeholder="Masukkan Solusi Paket (diisi apabila ingin solusi dalam bentuk file pdf)" value="{{ $dataPaket->solusi_paket }}">
                    @error('solusi_paket')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="minimal_skor">Minimal Skor</label>
                    <input type="text" class="form-control" name="minimal_skor" placeholder="Masukkan Minimal Skor (dikosongi berarti minimal skor = 61)" value="{{ old('minimal_skor') }}">
                    @error('minimal_skor')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="latihan_soal">Latihan Soal</label>
                    <input type="text" class="form-control" name="latihan_soal" placeholder="Masukkan label Latihan Soal (0 berarti paket tryout, 1 berarti latihan soal)" value="{{ old('latihan_soal') }}">
                    @error('latihan_soal')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>

                <a href="{{ url('paket-list') }}" class="btn-back">Kembali</a>
                <button type="submit" class="btn" name="id_sebelum" value="{{$dataPaket->id}}">Submit</button>
            </form>
        </div>
    </div>

<script>
    let form = document.querySelector('form');
    let inputs = form.querySelectorAll('.form-control');

    form.addEventListener('submit', (event) => {
    let errors = false;

    for (let i = 0; i < inputs.length; i++) {
        let input = inputs[i];
        if (!input.checkValidity()) {
        input.classList.add('is-invalid');
        errors = true;
        } else {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
        }
    }

    if (errors) {
        event.preventDefault();
    }
    });
</script>

@endsection
