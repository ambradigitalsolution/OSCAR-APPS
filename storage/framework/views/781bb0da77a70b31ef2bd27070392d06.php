<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mitra - App Oscar</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8fafc;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .login-wrapper {
            display: flex;
            width: 100%;
            max-width: 1100px;
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
            justify-content: flex-start;
            padding: 60px 40px 0;
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
            width: 100%;
        }

        .login-graphic h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .login-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
            margin-top: 15px;
        }

        .login-logo svg {
            width: 36px;
            height: 36px;
        }

        .login-logo span {
            font-size: 1.75rem;
            font-weight: 700;
            color: #FFF;
            display: flex;
            align-items: center;
        }

        /* Right Side - Form */
        .login-form-container {
            flex: 1.2;
            padding: 40px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
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

        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
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
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #00B050;
            box-shadow: 0 0 0 4px rgba(0, 176, 80, 0.1);
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
            margin-top: 10px;
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
                padding: 20px 15px;
                align-items: flex-start;
            }
            .login-wrapper {
                flex-direction: column;
                margin: 0 auto;
                max-width: 450px;
            }
            .login-graphic {
                padding: 30px 20px 20px;
            }
            .login-form-container {
                padding: 25px;
            }
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <!-- Left Side Graphic -->
        <div class="login-graphic">
            <div class="login-graphic-content">
                <h2>Bergabung Bersama Kami</h2>
                <a href="/" class="login-logo">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 9V7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V9" stroke="#FFF" stroke-width="2.5" stroke-linecap="round"/>
                        <rect x="3" y="9" width="18" height="12" rx="2" stroke="#FFF" stroke-width="2.5" fill="none"/>
                        <path d="M8 12V14M16 12V14" stroke="#FFF" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                    <span>App Oscar</span>
                </a>
            </div>
            
            <div style="flex: 1; width: 100%; display: flex; align-items: flex-end; justify-content: center; margin-top: 20px;">
                <img src="<?php echo e(asset('assets/login-bg.png')); ?>" alt="Ilustrasi App Oscar" style="width: 100%; max-height: 100%; object-fit: contain; filter: drop-shadow(0 15px 30px rgba(0,0,0,0.2)); transform: scale(1.1); transform-origin: bottom center;">
            </div>
        </div>

        <!-- Right Side Form -->
        <div class="login-form-container">
            <h1 class="login-title">Daftar Kemitraan</h1>
            <p class="login-subtitle">Lengkapi formulir di bawah ini untuk menjadi mitra kami</p>

            <form id="registerForm" action="/" method="GET">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                        <input type="tel" id="whatsapp" name="whatsapp" class="form-control" placeholder="081234567890" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mitra" class="form-label">Nama Mitra</label>
                    <input type="text" id="mitra" name="mitra" class="form-control" placeholder="Mitra Sejahtera" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@contoh.com" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" class="btn-login" onclick="event.preventDefault(); alert('Pendaftaran berhasil! Silakan login dengan akun yang Anda daftarkan.'); window.location.href='/';">Daftar Sekarang</button>
            </form>

            <div class="register-link">
                Sudah punya akun? <a href="/">Masuk di sini</a>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\OSCARAPP\resources\views/register.blade.php ENDPATH**/ ?>