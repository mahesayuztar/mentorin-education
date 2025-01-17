@extends('admin.layouts.master')

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
        <h1>Soal</h1>
        <ul class="breadcrumb">
            <li>
            <a href="#">Soal</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
            <a class="active" href="{{ url('/soal-list') }}">Daftar Data Soal</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
            <a class="active" href="{{ url('/edit-soal/{id}') }}">Edit Data Soal</a>
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
                <h2>Edit Soal</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <form method="POST" action="{{ url('update-soal') }}" enctype="multipart/form-data">
            @csrf
            <div>
                    <h4>Kolom Input Data Soal</h4>
                    <br>
                </div>
            <input type="hidden" name="id" value="{{ $dataSoal->id }}">
                <div class="input-wrap">
                    <label for="id_paket">ID Paket</label>
                    <input type="text" class="form-control" name="id_paket" placeholder="Masukkan ID Paket" value="{{ $dataSoal->id_paket }}">
                    @error('id_paket')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="nomor_soal">Nomor Soal</label>
                    <input type="text" class="form-control" name="nomor_soal" placeholder="Masukkan Nomor Soal" value="{{ $dataSoal->nomor_soal }}">
                    @error('nomor_soal')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="isi_soal">Isi Soal</label>
                    <textarea class="form-control" name="isi_soal" placeholder="Masukkan Isi Soal">{{ $dataSoal->isi_soal }}</textarea>
                    @error('isi_soal')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="gambar_soal">Pilih Gambar</label>
                    <input type="file" class="form-control" name="gambar_soal" placeholder="Masukkan Gambar" accept="image/*">
                    @error('gambar_soal')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="nomor_jawaban">Nomor Jawaban</label>
                    <input type="text" class="form-control" name="nomor_jawaban" placeholder="Masukkan Nomor Jawaban" value="{{ $dataSoal->nomor_jawaban }}">
                    @error('nomor_jawaban')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div>
                    <h4>Kolom Input Data Solusi</h4>
                    <br>
                </div>
                <div class="input-wrap">
                    <label for="isi_solusi">Isi Solusi</label>
                    <textarea class="form-control" name="isi_solusi" placeholder="Masukkan Isi Solusi" value="{{ old('isi_solusi') }}">{{$dataSoal->isi_solusi}}</textarea>
                    @error('isi_solusi')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label class="btn-choose" for="gambar_solusi">Pilih Gambar Solusi</label>
                    <input type="file" class="form-control" name="gambar_solusi" placeholder="Masukkan Gambar Solusi" value="{{ old('gambar_solusi') }}" accept="img/*">
                    @error('gambar_solusi')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <a href="{{ url('delete-gambar-soal/'.$dataSoal->id) }}" class="btn-back">Hapus Gambar Soal</a>
                <a href="{{ url('delete-gambar-solusi/'.$dataSoal->id) }}" class="btn-back">Hapus Gambar Solusi</a>
                <a href="{{ url('soal-list') }}" class="btn-back">Kembali</a>
                <button type="submit" class="btn">Submit</button>
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
