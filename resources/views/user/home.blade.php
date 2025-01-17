<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda | Mentoring</title>
    
    {{-- ICON --}}
    <link rel="icon" href="{{ asset('user/img/logo_kecil.png') }}" type="image/png">

    {{-- Custom CSS Link --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/home.css') }}">

    {{-- Box Icons --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- AOS CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>

    {{-- header --}}
    <header>
        {{-- nav --}}
        <div class="nav container">
            {{-- logo --}}
            <a href="#" class="logo">
                <img src="{{ asset('user/img/logo.png') }}">
            </a>
            {{-- navbar --}}
            <div class="navbar">
                <a href="#home" class="nav-link">Beranda</a>
                <a href="#categories" class="nav-link">Kategori</a>
                <a href="#services" class="nav-link">Keunggulan</a>
                <a href="#team" class="nav-link">Pengajar</a>
                <a href="#promo" class="nav-link">Promo</a>
                <a href="#review" class="nav-link">Testimoni</a>
            </div>
            {{-- nav icons --}}
            <div class="nav-icons">
                {{-- <a href="#"><i class="bx bx-user"></i></a> --}}
                <a href="{{ route('login') }}" class="btn register">Daftar</a>
                <a href="{{ route('login') }}" class="btn login">Masuk</a>

                {{-- menu icon --}}
                <div class="menu-icon">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </div>
    </header>

    {{-- home --}}
    <section class="home container" id="home">
        <div class="home-text">
            <h6>Raih Cita-citamu Bersama Mentor Terbaikmu</h6>
            <h1>Mentorin</h1>
            <p>Bimbingan Belajar dan Try Out Terbaik Bersama Abdi Negara</p>
            <a href="https://wa.me/6282338902947" class="btn-home">
                <span>Konsultasi Dahulu</span>
                <i class="bx bxl-whatsapp"></i>
            </a>
        </div>
        {{-- home image --}}
        <img src="{{ asset('user/img/home.png') }}" alt="" class="home-img">
    </section>

    {{-- info --}}
    <section class="info-container container">
        <div class="container-box" data-aos="fade-up" data-aos-duration="1000">
            <div class="container-img">
                <img src="{{ asset('user/img/user.png') }}">
            </div>
            <div class="container-text">
                <h4>{{ DB::table('users')->count() }}&nbsp;+</h4>
                <p>Pengguna</p>
            </div>
        </div>

        <div class="container-box" data-aos="fade-up" data-aos-duration="1300">
            <div class="container-img">
                <img src="{{ asset('user/img/course.png') }}">
            </div>
            <div class="container-text">
                <h4>{{ DB::table('pakets')->count() }}&nbsp;+</h4>
                <p>Try Out</p>
            </div>
        </div>

        <div class="container-box" data-aos="fade-up" data-aos-duration="1600">
            <div class="container-img">
                <img src="{{ asset('user/img/tiktok.png') }}">
            </div>
            <div class="container-text">
                <h4>210&nbsp;+</h4>
                <p>Tiktok</p>
            </div>
        </div>

        <div class="container-box" data-aos="fade-up" data-aos-duration="1900">
            <div class="container-img">
                <img src="{{ asset('user/img/instagram.png') }}">
            </div>
            <div class="container-text">
                <h4>241&nbsp;+</h4>
                <p>Instagram</p>
            </div>
        </div>
    </section>

    {{-- categories --}}
    <section class="categories container" id="categories" style="margin-top: 10rem;">
        <div class="heading">
            <h2 data-aos="fade-down" data-aos-duration="1000">Kategori</h2>
        </div>

        <div class="categories-content">
            <a href="{{ route('/category/cpns') }}" style="text-decoration: none; color: #001e26;">
                <div class="box" data-aos="fade-right" data-aos-duration="1200">
                    <img src="{{ asset('user/img/icon-cpns-new.png') }}">
                    <h3>CPNS</h3>
                    <p>Ayo taklukkan Ujian CPNS dengan Mudah</p>
                </div>
            </a>

            <a href="{{ route('/category/polri') }}" style="text-decoration: none; color: #001e26;">
                <div class="box" data-aos="fade-left" data-aos-duration="1200">
                    <img src="{{ asset('user/img/icon-polri-new.png') }}">
                    <h3>POLRI</h3>
                    <p>Belajar bersama lulus seleksi Polri</p>
                </div>
            </a>

            <a href="{{ route('/category/tni') }}" style="text-decoration: none; color: #001e26;">
                <div class="box" data-aos="fade-right" data-aos-duration="1200">
                    <img src="{{ asset('user/img/icon-tni-new.png') }}">
                    <h3>TNI</h3>
                    <p>Belajar bersama lulus seleksi TNI</p>
                </div>
            </a>

            <div class="box" data-aos="fade-left" data-aos-duration="1200">
                <img src="{{ asset('user/img/icon-skd-new.png') }}">
                <h3>SEKDIN</h3>
                <p>lulus seleksi Sekolah Kedinasan dengan mudah</p>
            </div>

            <a href="{{ route('/category/cpns') }}" style="text-decoration: none; color: #001e26;" onclick="showAlert(event)">
                <div class="box"data-aos="fade-right" data-aos-duration="1200">
                    <img src="{{ asset('user/img/icon-bumn-new.png') }}">
                    <h3>BUMN</h3>
                    <p>Sikat Habis soal Tes Kemampuan Dasar BUMN</p>
                </div>
            </a>

            <a href="{{ route('/category/cpns') }}" style="text-decoration: none; color: #001e26;" onclick="showAlert(event)">
                <div class="box" data-aos="fade-left" data-aos-duration="1200">
                    <img src="{{ asset('user/img/icon-pppk-new.png') }}">
                    <h3>PPPK</h3>
                    <p>Optimis lulus seleksi ujian Pegawai Pemerintah</p>
                </div>
            </a>

            <a href="{{ route('/category/cpns') }}" style="text-decoration: none; color: #001e26;" onclick="showAlert(event)">
                <div class="box" data-aos="fade-right" data-aos-duration="1200">
                    <img src="{{ asset('user/img/icon-snbt-new.png') }}">
                    <h3>SNBT</h3>
                    <p>Mudah menyelesaikan soal-soal SNBT</p>
                </div>
            </a>

        </div>
    </section>

    {{-- services --}}
    <section class="services container" id="services" style="margin-top: 10rem;">
        <div class="heading">
            <h2 data-aos="fade-down" data-aos-duration="1000">Kenapa Try Out di Mentorin?</h2>
        </div>
        <div class="service-content">
            <div class="ser-box" data-aos="flip-left" data-aos-duration="1000">
                <img src="{{ asset('user/img/service-1.png') }}" alt="">
                <h4>Soal Terupdate</h4>
                <p>Soal-soal yang tersedia merupakan soal-soal yang sesuai dengan kisi-kisi terbaru dan mirip soal tahun-tahun sebelumnya</p>
            </div>
            <div class="ser-box" data-aos="flip-left" data-aos-duration="1300">
                <img src="{{ asset('user/img/service-2.png') }}" alt="">
                <h4>Pengerjaan Fleksibel</h4>
                <p>Soal-soal yang tersedia merupakan soal-soal yang sesuai dengan kisi-kisi terbaru dan mirip soal tahun-tahun sebelumnya</p>
            </div>
            <div class="ser-box" data-aos="flip-left" data-aos-duration="1600">
                <img src="{{ asset('user/img/service-3.png') }}" alt="">
                <h4>Hasil Try Out Instan</h4>
                <p>Hasil pengerjaan Try Out langsung muncul setelah selesai mengerjakan dan terdapat pemeringkatan secara nasional</p>
            </div>
            <div class="ser-box" data-aos="flip-left" data-aos-duration="1900">
                <img src="{{ asset('user/img/service-4.png') }}" alt="">
                <h4>Pembahasan Lengkap</h4>
                <p>Terdapat pembahasan lengkap yang dapat diakses langsung dan juga bisa di download dalam bentuk Pdf</p>
            </div>
            <div class="ser-box" data-aos="flip-left" data-aos-duration="2200">
                <img src="{{ asset('user/img/service-5.png') }}" alt="">
                <h4>Mentor Terbaik</h4>
                <p>Mentor yang mengajar merupakan lulusan-lulusan terbaik dari sekolah kedinasan, TNI/POLRI, dan CPNS</p>
            </div>
        </div>
    </section>

    {{-- team --}}
    <section class="team container" id="team" style="margin-top: 10rem;">
        <div class="heading">
            <h2 data-aos="fade-down" data-aos-duration="1000">Tim Pengajar Kami</h2>
        </div>
        <div class="team-content">
            <div class="team-box" data-aos="zoom-in" data-aos-duration="1500">
                <img src="{{ asset('user/img/ucup.jpg') }}" alt="">
                <h2>Dedy Yusuf</h2>
                <span>PNS Kejaksaan RI | Mahasiswa Universitas Brawijaya 2022-2023</span>
            </div>
            <div class="team-box" data-aos="zoom-in" data-aos-duration="1500">
                <img src="{{ asset('user/img/fajar.jpg') }}" alt="">
                <h2>BRIPDA Muhammad Wahyu Fajar Purnomo</h2>
                <span>Anggota Polri | Bintara Polri 2022</span>
            </div>
        </div>
    </section>

    <!-- Promo section -->
    <section class="promo container" id="promo" style="margin-top: 10rem;">
        <div class="heading">
            <h2 data-aos="fade-down" data-aos-duration="1000">Promo Saat Ini</h2>
        </div>
        <div class="promo-content">
            <!-- Card 1 -->
            <div class="promo-card" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('user/img/icon-polri-new.png') }}">
                <h3>Try Out Polri</h3>
                <h4>Rp. 0</h4>
                <p>Berisi 3 paket TO dengan soal-soal referensi langsung dari tes sebelumnya.</p>
            </div>
            <!-- Card 2 -->
            <div class="promo-card" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('user/img/icon-polri-new.png') }}">
                <h3>Try Out Polri</h3>
                <h4>Rp. 0</h4>
                <p>Berisi 3 paket TO dengan soal-soal referensi langsung dari tes sebelumnya.</p>
            </div>
            <!-- Card 3 -->
            <div class="promo-card" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('user/img/icon-polri-new.png') }}">
                <h3>Try Out Polri</h3>
                <h4>Rp. 0</h4>
                <p>Berisi 3 paket TO dengan soal-soal referensi langsung dari tes sebelumnya.</p>
            </div>
        </div>
    </section>

    {{-- reviews --}}
    <section class="review container" id="review" style="margin-top: 10rem;">
        <div class="heading">
            <h2 data-aos="fade-down" data-aos-duration="1000">Apa yang Mereka Katakan</h2>
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper" data-aos="zoom-out" data-aos-duration="1500">
            <div class="swiper-wrapper">
                @foreach(DB::table('reviews')->get() as $review)
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img src="{{ asset('user/img/profile/' . $review->photo_profile) }}" alt="">
                            <h2>{{ $review->name }}</h2>
                            <span>{{ $review->review_title }}</span>
                            <p>{{ $review->review_description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    {{-- footer --}}
    <section class="footer container">
        <div class="footer-box">
            <a href="#" class="logo">Mentorin</a>
            <div class="social">
                <a href="#"><i class="bx bxl-tiktok"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class="bx bxl-youtube"></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>About</h3>
            <a href="#">About</a>
            <a href="#">FAQ</a>
            <a href="#">Careers</a>
        </div>
        <div class="footer-box">
            <h3>Customer's Recourse</h3>
            <a href="#">Menu</a>
            <a href="#">Location</a>
            <a href="#">Support</a>
        </div>
        <div class="footer-box">
            <h3>Services</h3>
            <a href="#">Payment Options</a>
            <a href="#">Refuns & Exchanges</a>
            <a href="#">Limitation Of Liability</a>
        </div>
    </section>

    {{-- copyright --}}
    <p class="copyright">&#169; 2024 Mentorin. All rights reserved.</p>

    {{-- custom js link --}}
    <script src="{{ asset('user/js/home.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            },
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
        });
    </script>

    {{-- AOS Script --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert(event) {
            event.preventDefault(); // Menghentikan aksi default dari link
            // Menggunakan SweetAlert untuk menampilkan pesan alert yang menarik
            Swal.fire({
                title: 'Coming Soon!',
                text: 'Stay tuned for updates!',
                icon: 'info',
                confirmButtonText: 'OK'
            });
        }
    </script>
</body>
</html>
