@extends('user.layouts.sidebar')

@section('content')
{{-- cards --}}
<h1 class="card-title">Berikan Ulasan Anda Kepada Kami!</h1>

@if(session('success'))
    <div id="success-message" data-message="{{ session('success') }}"></div>
@endif

<div class="card-form">
    <div class="card-body-form">
        <form action="{{ route('submit-review') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- User Photo --}}
            <div class="form-group">
                <label for="photo_profile">Foto User</label>
                <div>
                    <img src="{{ asset('user/img/profile/'.Auth::user()->photo_profile) }}" alt="User Photo" width="100" id="photo_profile" name="photo_profile">
                </div>
            </div>

            {{-- User Name --}}
            <div class="form-group">
                <label for="name">Nama User</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" readonly>
            </div>

            {{-- Review Title --}}
            <div class="form-group">
                <label for="review_title">Judul Ulasan</label>
                <input type="text" id="review_title" name="review_title" class="form-control" placeholder="Masukkan judul ulasan" required>
            </div>

            {{-- Review Description --}}
            <div class="form-group">
                <label for="review_description">Keterangan Ulasan</label>
                <textarea id="review_description" name="review_description" class="form-control" rows="4" placeholder="Masukkan keterangan ulasan" required></textarea>
            </div>

            {{-- Submit Button --}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
            </div>
        </form>
    </div>
</div>

{{-- SweetAlert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            const message = successMessage.getAttribute('data-message');
            Swal.fire({
                title: 'Sukses',
                text: message,
                icon: 'success',
                confirmButtonText: 'OK'
            });
        }
    });
</script>
@endsection
