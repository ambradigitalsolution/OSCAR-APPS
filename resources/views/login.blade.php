<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk - App Oscar</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8fafc;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .login-wrapper {
            display: flex;
            width: 100%;
            max-width: 1000px;
            height: 600px;
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin: 20px;
        }

        /* Left Side - Graphic */
        .login-graphic {
            flex: 1;
            background: linear-gradient(135deg, #00B050 0%, #009643 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .login-graphic::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            animation: pulse 10s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .login-graphic-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .login-graphic h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .login-graphic p {
            font-size: 1.05rem;
            opacity: 0.9;
            line-height: 1.5;
        }

        /* Right Side - Form */
        .login-form-container {
            flex: 1;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }

        .login-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 40px;
            text-decoration: none;
        }

        .login-logo svg {
            width: 36px;
            height: 36px;
        }

        .login-logo span {
            font-size: 1.75rem;
            font-weight: 700;
            color: #0F172A;
            display: flex;
            align-items: center;
        }
        
        .login-logo span .highlight {
            color: #00B050;
        }

        .login-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 8px;
        }

        .login-subtitle {
            color: #64748b;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font-family: inherit;
            font-size: 0.95rem;
            color: #0f172a;
            transition: all 0.3s;
            outline: none;
        }

        .form-control:focus {
            border-color: #00B050;
            box-shadow: 0 0 0 4px rgba(0, 176, 80, 0.1);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: #475569;
            cursor: pointer;
        }
        
        .remember-me input {
            accent-color: #00B050;
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .forgot-password {
            font-size: 0.9rem;
            color: #00B050;
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: #00B050;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.1s;
        }

        .btn-login:hover {
            background-color: #009643;
        }

        .btn-login:active {
            transform: scale(0.98);
        }

        .register-link {
            text-align: center;
            margin-top: 30px;
            font-size: 0.95rem;
            color: #475569;
        }

        .register-link a {
            color: #00B050;
            font-weight: 600;
            text-decoration: none;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            body {
                background-color: #f8fafc;
                padding: 20px 15px;
                height: auto;
                min-height: 100vh;
                align-items: flex-start;
            }
            .login-wrapper {
                flex-direction: column;
                height: auto;
                width: 100%;
                max-width: 450px;
                margin: 0 auto;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            }
            .login-graphic {
                display: flex !important;
                flex: none;
                height: auto !important;
                padding: 30px 20px 20px !important;
            }
            .login-graphic-content {
                margin-bottom: 10px;
            }
            .login-graphic h2 {
                font-size: 1.4rem;
                margin-bottom: 0;
            }
            .login-graphic > div:nth-child(2) {
                flex: none !important;
                align-items: center !important;
                margin-top: 10px !important;
            }
            .login-graphic img {
                max-height: 180px !important;
                transform: scale(1.1) !important;
                margin-bottom: 0 !important;
            }
            .login-form-container {
                padding: 25px 25px;
                border-radius: 0;
                margin-top: 0;
                background: #ffffff;
                box-shadow: none;
            }
            .login-logo {
                margin-bottom: 15px;
            }
            .login-title {
                font-size: 1.4rem;
            }
            .login-subtitle {
                margin-bottom: 15px;
                font-size: 0.9rem;
            }
            .form-group {
                margin-bottom: 12px;
            }
            .form-control {
                padding: 12px 14px;
            }
            .form-options {
                margin-bottom: 15px;
            }
            .btn-login {
                padding: 12px;
            }
            .register-link {
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <!-- Left Side Graphic -->
        <div class="login-graphic" style="padding: 0; padding-top: 60px; justify-content: flex-start;">
            <div class="login-graphic-content" style="z-index: 2; width: 100%; text-align: center;">
                <h2>Selamat Datang Kembali</h2>
                <a href="/" class="login-logo" style="justify-content: center; margin-bottom: 0; margin-top: 15px;">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 9V7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V9" stroke="#FFF" stroke-width="2.5" stroke-linecap="round"/>
                        <rect x="3" y="9" width="18" height="12" rx="2" stroke="#FFF" stroke-width="2.5" fill="none"/>
                        <path d="M8 12V14M16 12V14" stroke="#FFF" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                    <span style="color: #FFF;">App <span style="color: #FFF;">Oscar</span></span>
                </a>
            </div>
            
            <!-- Transparent Illustration floating on Green Background -->
            <div style="flex: 1; width: 100%; display: flex; align-items: flex-end; justify-content: center; margin-top: 20px;">
                <img src="{{ asset('assets/login-bg.png') }}" alt="Ilustrasi App Oscar" style="width: 100%; max-height: 100%; object-fit: contain; filter: drop-shadow(0 15px 30px rgba(0,0,0,0.2)); transform: scale(1.1); transform-origin: bottom center;">
            </div>
        </div>

        <!-- Right Side Form -->
        <div class="login-form-container">
            <h1 class="login-title">Masuk ke Akun</h1>
            <p class="login-subtitle">Silakan masukkan email dan password Anda</p>

            <form id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="owner@oscar.com atau member@oscar.com" required>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div style="position: relative;">
                        <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required style="padding-right: 40px;">
                        <button type="button" id="togglePassword" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer; color: #64748b; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 20px; height: 20px;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <svg id="eyeSlashIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 20px; height: 20px; display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember">
                        Ingat Saya
                    </label>
                    <a href="#" class="forgot-password">Lupa Password?</a>
                </div>

                <button type="submit" class="btn-login">Masuk Sekarang</button>
            </form>

            <div class="register-link" style="margin-top: 15px; font-size: 0.85rem; color: #64748b;">
                <strong>Info Login Demo:</strong><br>
                Owner: <code>owner@oscar.com</code> | Pass: <code>admin123</code><br>
                Member: <code>member@oscar.com</code> | Pass: <code>user123</code>
            </div>
            
            <div class="register-link" style="margin-top: 15px;">
                Belum punya akun? <a href="/register">Daftar di sini</a>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeSlashIcon = document.getElementById('eyeSlashIcon');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            if (type === 'password') {
                eyeIcon.style.display = 'block';
                eyeSlashIcon.style.display = 'none';
            } else {
                eyeIcon.style.display = 'none';
                eyeSlashIcon.style.display = 'block';
            }
        });

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (email === 'owner@oscar.com' && password === 'admin123') {
                window.location.href = '/dashboard?role=owner';
            } else if (email === 'member@oscar.com' && password === 'user123') {
                window.location.href = '/dashboard?role=member';
            } else {
                alert('Email atau password salah! \n\nGunakan:\nowner@oscar.com / admin123\nmember@oscar.com / user123');
            }
        });
    </script>
</body>
</html>
