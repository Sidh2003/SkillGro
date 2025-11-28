<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Premium Auto Parts Admin Login" />
    <link id="themeColors" rel="stylesheet" href="/backend/dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 40px;
        }

        .toggle-password {
            position: absolute;
            top: 70%;
            right: 12px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            font-size: 1rem;
            transition: color 0.2s, transform 0.2s;
        }

        .toggle-password:hover {
            color: #0d6efd;
            transform: translateY(-50%) scale(1.1);
        }

        /* ---------- Professional OTP Styling ---------- */
        .otp-wrapper {
            position: relative;
            padding: 40px 30px;
            background: linear-gradient(145deg, #ffffff, #f7f9fc);
            border-radius: 18px;
            border: 1px solid #e4e9f2;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            text-align: center;
            overflow: hidden;
        }

        .otp-wrapper::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(13, 110, 253, 0.05) 0%, transparent 60%);
            z-index: 0;
        }

        .otp-wrapper * {
            position: relative;
            z-index: 1;
        }

        .otp-title {
            font-weight: 700;
            font-size: 1.35rem;
            color: #0d1b2a;
            letter-spacing: 0.5px;
            margin-bottom: 15px;
        }

        .otp-subtext {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 25px;
        }

        .otp-input-group {
            display: flex;
            justify-content: center;
            gap: 14px;
            margin-bottom: 20px;
        }

        .otp-input {
            width: 58px;
            height: 58px;
            text-align: center;
            font-size: 1.4rem;
            font-weight: 600;
            border: 1.5px solid #cfd5e0;
            border-radius: 12px;
            background: #fff;
            transition: all 0.25s ease;
        }

        .otp-input:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.2);
            outline: none;
            transform: translateY(-2px);
        }

        .otp-footer {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .otp-footer a {
            color: #0d6efd;
            font-weight: 500;
            text-decoration: none;
        }

        .otp-footer a:hover {
            text-decoration: underline;
        }

        /* Logo spacing */
        .logo-title img {
            margin-bottom: 5px;
        }

        .logo-title h2 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">

                    <!-- Left Image -->
                    <div class="col-xl-7 col-xxl-8">
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="/backend/dist/images/backgrounds/login-security.svg" alt=""
                                class="img-fluid" width="500">
                        </div>
                    </div>

                    <!-- Login / OTP Form -->
                    <div class="col-xl-5 col-xxl-4">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">

                                <!-- Logo -->
                                <div class="text-center mb-4 logo-title">
                                    <img src="/frontend/assets/img/logo/logo.svg" width="180" alt="Logo" />
                                    <h2 class="mb-2 fs-7 fw-bolder">Welcome to SkillGro</h2>
                                    <p class="mb-4">Your Admin Dashboard</p>
                                </div>

                                <!-- Validation Errors -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Session Messages -->
                                @if (session('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                @endif

                                <form method="POST" action="{{ route('login.submit') }}">
                                    @csrf

                                    @if (session('otp_required'))
                                        <!-- ✅ Modern OTP Screen -->
                                        <div class="otp-wrapper mb-3">
                                            <div class="otp-title">Verify Your Identity</div>
                                            <div class="otp-subtext">Enter the 4-digit code sent to your registered
                                                email.</div>

                                            <div class="otp-input-group">
                                                <input type="text" maxlength="1" class="otp-input" />
                                                <input type="text" maxlength="1" class="otp-input" />
                                                <input type="text" maxlength="1" class="otp-input" />
                                                <input type="text" maxlength="1" class="otp-input" />
                                            </div>
                                            <input type="hidden" name="otp" id="otp-hidden">

                                            <!-- ✅ Same style as Sign In -->
                                            <button type="submit" class="btn btn-primary w-100 py-2 rounded-2">
                                                Validate OTP
                                            </button>

                                            <div class="otp-footer">
                                                Didn’t receive the code?
                                                <a href="#">Resend OTP</a>
                                            </div>
                                        </div>

                                        <a href="{{ route('login') }}" class="btn btn-link w-100 mt-2">← Back to
                                            Login</a>
                                    @else
                                        <!-- Login Form -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">E-Mail</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{ old('email') }}" required autofocus>
                                        </div>

                                        <div class="mb-3 password-wrapper">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password" required>
                                            <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100 py-2 rounded-2">Sign
                                            In</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="/backend/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="/backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/dist/js/app.min.js"></script>
    <script src="/backend/dist/js/custom.js"></script>

    <!-- Password Toggle -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword?.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // OTP input auto-move logic
        const otpInputs = document.querySelectorAll('.otp-input');
        const otpHidden = document.getElementById('otp-hidden');

        otpInputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }
                otpHidden.value = Array.from(otpInputs).map(i => i.value).join('');
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value === '' && index > 0) {
                    otpInputs[index - 1].focus();
                }
            });
        });
    </script>
</body>

</html>
