<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8854e150e8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('user/css/login.css') }}" />
    <title>Masuk & Daftar Akun | Mentoring</title>
    
    {{-- ICON --}}
    <link rel="icon" href="{{ asset('user/img/logo_kecil.png') }}" type="image/png">
</head>
<body>
    <style>
        .input-field {
            position: relative;
        }

        .input-field input {
            padding-right: 30px;
        }

        .input-field .eye {
            position: absolute;
            top: 50%;
            right: 1.5rem;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
    
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{ route('login') }}" class="sign-in-form" id="login" autocomplete="off">
                    @csrf
                    <h2 class="title">Masuk</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="credential" type="text" class="form-control @error('credential') is-invalid @enderror" name="credential" value="{{ old('credential') }}" required placeholder="Email / Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="login-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Kata Sandi" />
                        <span toggle="#login-password" class="eye field-icon toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="color: #003C43;">Lupa Kata Sandi?</a>
                    @endif
                    <input type="submit" value="Masuk" class="btn solid" />
                </form>

                <form method="POST" action="{{ route('register') }}" class="sign-up-form" id="register" autocomplete="off">
                    @csrf
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-person"></i>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-phone-volume"></i>
                        <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" placeholder="Nomor Telpon" />
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-location-pin"></i>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Alamat Lengkap" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="register-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Kata Sandi" />
                        <span toggle="#register-password" class="eye field-icon toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" />
                        <span toggle="#password-confirm" class="eye field-icon toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                    <input type="submit" class="btn" value="Daftar" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum punya akun ?</h3>
                    <p>
                        Apabila anda belum memiliki akun, silahkan buat akun anda dengan menekan tombol daftar yang ada dibawah ini.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Daftar</button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah punya akun ?</h3>
                    <p>
                        Apabila anda sudah memiliki akun, silahkan masuk ke akun anda dengan menekan tombol masuk yang dibawah ini.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Masuk</button>
                </div>
                <img src="img/login.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ url('user/js/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePasswordButtons = document.querySelectorAll('.sign-in-form .toggle-password, .sign-up-form .toggle-password');

            togglePasswordButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    const passwordField = document.querySelector(button.getAttribute('toggle'));

                    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);

                    button.querySelector('i').classList.toggle('fa-eye-slash');
                });
            });

            const form = document.querySelector('.sign-up-form');

            form.addEventListener('submit', function(event) {
                const password = document.getElementById('register-password').value;
                const passwordConfirm = document.getElementById('password-confirm').value;

                if (password !== passwordConfirm) {
                    event.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Kata Sandi Tidak Sama',
                        text: 'Konfirmasi kata sandi harus sama dengan kata sandi.',
                    });
                }
            });

            @if ($errors->has('username'))
                Swal.fire({
                    icon: 'error',
                    title: 'Username Sudah Terdaftar',
                    text: 'Silakan gunakan username lain.',
                });
            @elseif ($errors->has('email'))
                Swal.fire({
                    icon: 'error',
                    title: 'Email Sudah Terdaftar',
                    text: 'Silakan gunakan email lain.',
                });
            @elseif ($errors->has('phoneNumber'))
                Swal.fire({
                    icon: 'error',
                    title: 'Nomor HP Sudah Terdaftar',
                    text: 'Silakan gunakan nomor hp lain.',
                });
            @elseif ($errors->has('password'))
                Swal.fire({
                    icon: 'error',
                    title: 'Password Tidak Valid',
                    text: 'Password harus terdiri dari minimal 8 karakter.',
                });
            @endif

            @if (session('errors'))
                const errorMessages = @json(session('errors')->getMessages());
                if (errorMessages['credential']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Gagal',
                        text: 'Email atau username belum terdaftar.',
                    });
                } else if (errorMessages['password']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Gagal',
                        text: 'Kata sandi salah.',
                    });
                }
            @endif
        });
    </script>
</body>
</html>
