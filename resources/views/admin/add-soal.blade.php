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
            <a class="active" href="{{ url('/add-soal') }}">Tambah Data Soal</a>
            </li>
        </ul>
        </div>
    </div>

    <style>
        :root {
            --main-hue: 208;

            --text-color: #001920;
            --input-bg: hsla(var(--main-hue), 50%, 50%, 6.5%);
            --input-bg-hover: hsla(var(--main-hue), 50%, 50%, 14%);
        }
        .input-wrap {
            position: relative;
        }
        .input-wrap label {
            position: absolute;
            left: calc(1.35rem + 2px);
            transform: translateY(-80%);
            color: var(--text-color);
            pointer-events: none;
            transition: .25s;
            margin-top: 1.5rem;
        }
        .form-control {
            width: 100%;
            background-color: var(--input-bg);
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
        .form-control:hover {
            background-color: var(--input-bg-hover);
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
        .input-wrap {
            position: relative;
            margin-bottom: 1rem;
        }
        .textarea-container {
            position: relative;
        }
        .textarea-container textarea {
            width: 100%;
            height: 200px;
            overflow-y: auto;
            resize: vertical;
        }
    </style>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h2>Tambah Data Soal</h2>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <form method="POST" action="{{ url('save-soal') }}" class="rent-form" enctype="multipart/form-data">
                @csrf
                <div>
                    <h4>Kolom Input Data Soal</h4>
                    <br>
                </div>
                <div class="input-wrap">
                    <label for="id_paket">ID Paket</label>
                    <input type="text" class="form-control" name="id_paket" placeholder="Masukkan ID Paket" value="{{ old('id_paket') }}">
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
                    <input type="text" class="form-control" name="nomor_soal" placeholder="Masukkan Nomor Soal" value="{{ old('nomor_soal') }}">
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
                    <div class="textarea-container">
                        <textarea class="form-control" name="isi_soal" placeholder="Masukkan Isi Soal">{{ old('isi_soal') }}</textarea>
                    </div>
                    @error('isi_soal')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label class="btn-choose" for="gambar_soal">Pilih Gambar Soal</label>
                    <input type="file" class="form-control" name="gambar_soal" placeholder="Masukkan Gambar Soal" value="{{ old('gambar_soal') }}" accept="img/*">
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
                    <input type="text" class="form-control" name="nomor_jawaban" placeholder="Masukkan Nomor Jawaban" value="{{ old('nomor_jawaban') }}">
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
                    <div class="textarea-container">
                        <textarea class="form-control" name="isi_solusi" placeholder="Masukkan Isi Solusi">{{ old('isi_solusi') }}</textarea>
                    </div>
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
                <div>
                    <h4>Kolom Input Data Jawaban</h4>
                    <br>
                </div>
                @for($i=0;$i<5;$i++)
                <div class="input-wrap">
                    <label for="{{'isi_jawaban'.($i+1)}}">Isi Jawaban {{$i+1}}</label>
                    <div class="textarea-container">
                        <textarea class="form-control" name="{{'isi_jawaban'.($i+1)}}" placeholder="{{'Masukkan Isi Jawaban '.($i+1)}}"></textarea>
                    </div>
                    @error('isi_jawaban'.($i+1))
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="{{'benar_jawaban'.($i+1)}}">Benar Jawaban {{$i+1}}</label>
                    <input type="text" class="form-control" name="{{'benar_jawaban'.($i+1)}}" placeholder="{{'Masukkan Benar Jawaban '.($i+1)}}" value="0">
                    @error('benar_jawaban')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label for="{{'skor_jawaban'.($i+1)}}">Skor Jawaban {{$i+1}}</label>
                    <input type="text" class="form-control" name="{{'skor_jawaban'.($i+1)}}" placeholder="{{'Masukkan Skor Jawaban '.($i+1)}}" value="0">
                    @error('skor_jawaban')
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="input-wrap">
                    <label class="btn-choose" for="{{'gambar_jawaban'.($i+1)}}">Pilih Gambar Jawaban {{$i+1}}</label>
                    <input type="file" class="form-control" name="{{'gambar_jawaban'.($i+1)}}" placeholder="{{'Masukkan Gambar Jawaban '.($i+1)}}" accept="img/*">
                    @error('gambar_jawaban'.($i+1))
                        <div class="text-danger">
                            <i class="bx bx-error-circle error-icon"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                @endfor
                <a href="{{ url('soal-list') }}" class="btn-back">Kembali</a>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</main>

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
