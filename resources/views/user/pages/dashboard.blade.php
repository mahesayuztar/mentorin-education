@extends('user.layouts.sidebar')

@section('content')
<div class="dashboard-container">
    {{-- container 1: card carousel --}}
    <div class="container-carousel">
        <div class="carousel">
            <div class="carousel-item active">
                <div class="poster-description">
                    <!-- Poster -->
                    <img src="{{ asset('user/img/poster/poster-1.png') }}">
                    <!-- Penjelasan -->
                    <div class="description">
                        <h3>DIBUKA BIMBINGAN TES MASUK</h3>
                        <p>TNI/POLRI dan SEKOLAH KEDINASAN 2024</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="poster-description">
                    <!-- Poster --> 
                    <img src="{{ asset('user/img/poster/poster-2.png') }}">
                    <!-- Penjelasan --> 
                    <div class="description">
                        <h3>Try Out Akbar</h3>
                        <p>Try Out Online SKD CPNS 2024 Part 1</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="poster-description">
                    <!-- Poster -->
                    <img src="{{ asset('user/img/poster/poster-3.png') }}">
                    <!-- Penjelasan -->  
                    <div class="description">
                        <h3>Try Out Online SKD CPNS</h3>
                        <p>Try Out Online SKD CPNS 2024 Part 2</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control prev"><ion-icon name="chevron-back-outline"></ion-icon></button>
        <button class="carousel-control next"><ion-icon name="chevron-forward-outline"></ion-icon></button>
    </div>

    {{-- container 2: card peserta --}}
    <div class="container-cards">
        <div class="user-info">
            <!-- Foto Pengguna -->
            <div class="user-photo">
                <img src="{{ asset('user/img/profile/' . Auth::user()->photo_profile) }}">
            </div>
            <!-- Informasi Pengguna -->
            <div class="user-details">
                <h2>Halo, {{ Auth::user()->name ?? '' }}!</h2>
                <p>Username : {{ Auth::user()->username ?? '' }}</p>
                <p>Email : {{ Auth::user()->email ?? '' }}</p>
                <p>Nomor Telepon : {{ Auth::user()->phoneNumber ?? '' }}</p>
                <p>Alamat : {{ Auth::user()->address ?? '' }}</p>
                <!-- Tombol Edit Profil -->
            </div>
        </div>
        <a href="{{ route('profile.edit') }}" class="profile-btn"><ion-icon name="pencil-outline"></ion-icon>
            Edit Profil
        </a>
    </div>
</div>

{{-- cards --}}
<h1 class="card-title">Pilih Jenis Try Out yang Akan Kamu Kerjakan!</h1>
<div class="cardBox">

    <a href="{{ route('/category/polri') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Try Out</h2>
                <h5 style="cursor: pointer;">POLRI</h5>
                <p style="cursor: pointer;">Kepolisian Negara Republik Indonesia</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-polri-new.png') }}" alt="">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/cpns') }}" style="text-decoration: none; color: #001e26;">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Try Out</h2>
                <h5 style="cursor: pointer;">CPNS - KEDINASAN</h5>
                <p style="cursor: pointer;">Calon Pegawai Negeri Sipil</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-skd-new.png') }}" alt="">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/tni') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Try Out</h2>
                <h5 style="cursor: pointer;">TNI</h5>
                <p style="cursor: pointer;">Tentara Nasional Indonesia</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-tni-new.png') }}" alt="">
            </div>
        </div>
    </a>

    {{-- <a href="{{ route('/category/sekdin') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Try Out</h2>
                <h5 style="cursor: pointer;">SEKDIN</h5>
                <p style="cursor: pointer;">Sekolah Kedinasan</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-skd-new.png') }}" alt="">
            </div>
        </div>
    </a> --}}

    <a href="{{ route('/category/cpns') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Try Out</h2>
                <h5 style="cursor: pointer;">BUMN</h5>
                <p style="cursor: pointer;">Badan Usaha Milik Negara</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-bumn-new.png') }}" alt="">
            </div>
        </div>
    </a>

    <a href="{{ route('/category/cpns') }}" style="text-decoration: none; color: #001e26;" onclick="showComingSoon(event)">
        <div class="card">
            <div>
                <h2 style="cursor: pointer;">Try Out</h2>
                <h5 style="cursor: pointer;">PPPK</h5>
                <p style="cursor: pointer;">Pegawai Pemerintah Perjanjian Kerja</p>
            </div>

            <div class="iconBx">
                <img src="{{ asset('user/img/icon-pppk-new.png') }}" alt="">
            </div>
        </div>
    </a>

</div>

<!-- Script untuk SweetAlert -->
@if(session('verified'))
    <script>
        Swal.fire({
            title: 'Email Terverifikasi!',
            text: 'Alamat email Anda telah berhasil diverifikasi.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif

<script>
    function substringText() {
        var paragraphs = document.querySelectorAll('.card p'); // Mendapatkan semua elemen <p> dalam kelas .card
        paragraphs.forEach(function(paragraph) {
            var text = paragraph.textContent; // Mendapatkan teks dari elemen <p>
            var maxLength = 27; // Maksimum panjang teks yang diinginkan
            if (text.length > maxLength) {
                var substring = text.substr(0, maxLength) + ' ...'; // Mengambil substring dan menambahkan elipsis di akhir
                paragraph.textContent = substring; // Mengganti teks asli dengan substring
            }
        });
    }

    // Panggil fungsi saat dokumen selesai dimuat
    window.onload = function() {
        substringText();
    };
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector(".carousel");
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    let counter = 0;
    let intervalId; // Variable untuk menyimpan ID interval

    // Fungsi untuk memulai interval
    function startInterval() {
        intervalId = setInterval(() => {
            counter++;
            if (counter >= carousel.children.length) {
                counter = 0; // Kembali ke gambar pertama setelah mencapai yang terakhir
            }
            moveCarousel();
        }, 5000); // Waktu dalam milidetik antara setiap perpindahan
    }

    // Fungsi untuk menghentikan interval
    function stopInterval() {
        clearInterval(intervalId);
    }

    // Fungsi untuk memindahkan carousel
    function moveCarousel() {
        carousel.style.transform = `translateX(-${counter * 100}%)`;
    }

    // Memulai interval pertama kali
    startInterval();

    // Event listener untuk tombol prev
    prevButton.addEventListener("click", () => {
        counter--;
        if (counter < 0) {
            counter = carousel.children.length - 1; // Kembali ke gambar terakhir setelah mencapai yang pertama
        }
        moveCarousel();
        stopInterval(); // Hentikan interval saat tombol ditekan
        startInterval(); // Mulai interval kembali setelah pengguna mengklik tombol
    });

    // Event listener untuk tombol next
    nextButton.addEventListener("click", () => {
        counter++;
        if (counter >= carousel.children.length) {
            counter = 0; // Kembali ke gambar pertama setelah mencapai yang terakhir
        }
        moveCarousel();
        stopInterval(); // Hentikan interval saat tombol ditekan
        startInterval(); // Mulai interval kembali setelah pengguna mengklik tombol
    });
});
</script>

@endsection
