<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Dashboard | Mentoring</title>
    
    {{-- ICON --}}
    <link rel="icon" href="{{ asset('user/img/logo_kecil.png') }}" type="image/png">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('user/css/dashboard.css') }}">

    <style>
        /* Gaya scrollbar vertikal */
        .navigation::-webkit-scrollbar {
            width: 5px; /* Lebar scrollbar */
        }

        /* Gaya thumb atau 'handle' scrollbar */
        .navigation::-webkit-scrollbar-thumb {
            background-color: #77B0AA; /* Warna dari thumb scrollbar */
            border-radius: 5px; /* Sudut dari thumb scrollbar */
        }

        /* Gaya track atau 'track' scrollbar */
        .navigation::-webkit-scrollbar-track {
            background-color: #003C43; /* Warna dari track scrollbar */
        }
    </style>
</head>
<body>

    {{-- navigation --}}
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            {{-- <ion-icon name="logo-apple"></ion-icon> --}}
                        </span>
                        {{-- <span class="title"><h2>Mentorin</h2></span> --}}
                        <span class="title" style="margin-top: 0.5rem;">
                            <img src="{{ asset('user/img/logo.png') }}" width="110" height="50">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Beranda</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('try-out') }}">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Try Out Saya</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('exercise') }}">
                        <span class="icon">
                            <ion-icon name="documents-outline"></ion-icon>
                        </span>
                        <span class="title">Latihan Soal</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('history') }}">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">Riwayat Try Out</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('rank') }}">
                        <span class="icon">
                            <ion-icon name="podium-outline"></ion-icon>
                        </span>
                        <span class="title">Lihat Peringkat</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pembahasan') }}">
                        <span class="icon">
                            <ion-icon name="desktop-outline"></ion-icon>
                        </span>
                        <span class="title">Pembahasan Try Out</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="showComingSoon(event)">
                        <span class="icon">
                            <ion-icon name="file-tray-stacked-outline"></ion-icon>
                        </span>
                        <span class="title">Info Paket Bimbel</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('materi') }}">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Materi Belajar</span>
                    </a>
                </li>

                <li>
                    <a href="https://wa.me/6282338902947">
                        <span class="icon">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </span>
                        <span class="title">Hubungi Kami</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('review') }}">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Kirim Ulasan</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <ion-icon name="exit-outline" style="color: red;"></ion-icon>
                        </span>
                        <span class="title" style="color: red;">Keluar</span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </div>

        {{-- main --}}
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    {{-- <label>
                        <input type="text" placeholder="Cari disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label> --}}
                </div>

                <div class="user-dropdown">
                    <div class="user">
                        <img src="{{ asset('user/img/profile/'.Auth::user()->photo_profile) }}" alt="">
                    </div>
                    <!-- Isi dropdown -->
                    <div class="dropdown-content">
                        <!-- Isi dropdown di sini, misalnya menu pengaturan, profil, dll -->
                        <h4>{{ Auth::user()->name ?? '' }}</h4>
                        <a href="{{ route('profile.edit') }}">Pengaturan</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: red;">Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>

    </div>

    {{-- JS --}}
    <script>
        // Mendapatkan tingkat zoom
        function getZoomLevel() {
            var zoomLevel = window.devicePixelRatio || 1;
            return zoomLevel * 100; // Mengubah ke dalam persen
        }

        // Menerapkan gaya CSS tambahan pada navigasi saat tingkat zoom mencapai atau melebihi 125%
        function applyStylesAtZoomLevel() {
            var zoomLevel = getZoomLevel();
            if (zoomLevel >= 125) {
                document.querySelector('.navigation').style.overflowY = 'auto'; // Mengubah ke overflow-y
                document.querySelector('.navigation').style.scrollBehavior = 'smooth';
            } else {
                document.querySelector('.navigation').style.overflowY = 'initial'; // Mengubah ke overflow-y
                document.querySelector('.navigation').style.scrollBehavior = 'initial';
            }
        }

        // Panggil fungsi saat halaman dimuat dan diresize
        window.onload = function() {
            applyStylesAtZoomLevel();
        };

        window.onresize = function() {
            applyStylesAtZoomLevel();
        };
    </script>

    <script src="{{ asset('user/js/dashboard.js') }}"></script>

    {{-- ionicons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert(event, title, message, icon) {
            event.preventDefault();
            Swal.fire({
                title: title,
                text: message,
                icon: icon,
                confirmButtonText: 'OK'
            });
        }

        // Alert untuk coming soon
        function showComingSoon(event) {
            showAlert(event, 'Segera Hadir!', 'Nantikan pembaruannya!', 'info');
        }

        // Alert untuk berhasil membuat akun
        function showSuccessCreateAccount(event) {
            showAlert(event, 'Sukses', 'Akun berhasil dibuat!', 'success');
        }

        // Alert untuk gagal membuat akun
        function showFailedCreateAccount(event) {
            showAlert(event, 'Terjadi Kesalahan', 'Gagal membuat akun. Silakan coba lagi.', 'error');
        }

        // Alert untuk berhasil login
        function showSuccessLogin(event) {
            showAlert(event, 'Sukses', 'Berhasil masuk!', 'success');
        }

        // Alert untuk gagal login
        function showFailedLogin(event) {
            showAlert(event, 'Terjadi Kesalahan', 'Gagal untuk masuk. Silakan periksa kredensial Anda dan coba lagi.', 'error');
        }

        // Alert untuk pembayaran berhasil
        function showSuccessPayment(event) {
            showAlert(event, 'Sukses', 'Pembayaran Berhasil!', 'success');
        }

        // Error general
        function showError(errorMessage) {
            Swal.fire({
                title: 'Terjadi Kesalahan',
                text: errorMessage,
                icon: 'error',
                confirmButtonText: 'OK'
            });
            // showAlert(event, 'Terjadi Kesalahan', errorMessage, 'error');
        }
        function showInfo(errorMessage) {
            Swal.fire({
                title: 'Informasi Penting',
                text: errorMessage,
                icon: 'info',
                confirmButtonText: 'OK'
            });
            // showAlert(event, 'Terjadi Kesalahan', errorMessage, 'error');
        }
    </script>
    @if ($errors->has('error'))
        <script type="text/javascript">
            var errorText = {!!json_encode($errors->first('error'));!!};
            showError(errorText);
        </script>
    @elseif($errors->has('info'))
        <script type="text/javascript">
            var errorText = {!!json_encode($errors->first('info'));!!};
            showInfo(errorText);
        </script>
    @endif
</body>
</html>
