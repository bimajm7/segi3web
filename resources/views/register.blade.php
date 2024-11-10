<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Buat Akun - Segitiga Motor</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/logo-5.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- LOGIN AREA START (Register) -->
        <div class="ltn__login-area pb-110">

            <div class="container">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <img src="img/logo-2.png" alt="Logo" class="logo"
                                style="max-width: 200px; max-height: 200px; margin-bottom: 20px; margin-top: 100px;">
                            <h1 class="section-title">Registrasi <br>Akun Anda</h1>
                            <p>Dan temukan pengalaman baru di platform kami.</p>
                        </div>
                    </div>
                </div>

                <!-- Tampilkan Pesan Sukses atau Error -->
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        @if (session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger text-center">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="account-login-inner">
                            <form action="{{ route('register') }}" method="POST" class="ltn__form-box contact-form-box">
                                @csrf <!-- Menambahkan token CSRF untuk keamanan -->
                                <input type="text" name="firstname" placeholder="First Name" required>
                                <input type="text" name="lastname" placeholder="Last Name" required>
                                <input type="email" name="email" placeholder="Email*" required>
                                <input type="password" name="password" placeholder="Password*" required>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password*"
                                    required>
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1 btn reverse-color btn-block" type="submit">BUAT AKUN</button>
                                </div>
                            </form>
                            <div class="by-agree text-center">
                                <div class="go-to-btn mt-10">
                                    <a href="login">SUDAH PUNYA AKUN ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGIN AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>