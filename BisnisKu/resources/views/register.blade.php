<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk BisnisKu</title>
    <link rel="stylesheet" href="{{ url('assets/css/style_login.css') }}">
</head>
<body>
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
          <!-- SIGN UP -->
          <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
              <div class="form sign-up">
                <div class="input-group">
                  <i class='bx bxs-user'></i>
                  <input type="text" placeholder="Username">
                </div>
                <div class="input-group">
                  <i class='bx bx-mail-send'></i>
                  <input type="email" placeholder="Email">
                </div>
                <div class="input-group">
                  <i class='bx bxs-lock-alt'></i>
                  <input type="password" placeholder="Password">
                </div>
                <div class="input-group">
                  <i class='bx bxs-lock-alt'></i>
                  <input type="password" placeholder="Confirm password">
                </div>
                <button onclick="window.location.href='{{ url('/masuk') }}'">
                  Daftar
                </button>
                <p>
                  <span>
                    Sudah punya akun BisnisKu?
                  </span>
                  <b onclick="toggle()" class="pointer">
                    Masuk di sini
                  </b>
                </p>
              </div>
            </div>

          </div>
          <!-- END SIGN UP -->
          <!-- SIGN IN -->
          <div class="col align-items-center flex-col sign-in" id="harga">
            <div class="form-wrapper align-items-center">
              <div class="form sign-in">
                <div class="input-group">
                  <i class='bx bxs-user'></i>
                  <input type="text" placeholder="Username">
                </div>
                <div class="input-group">
                  <i class='bx bxs-lock-alt'></i>
                  <input type="password" placeholder="Password">
                </div>
                <button onclick="window.location.href='{{ url('/home') }}'">
                  Masuk
                </button>
                <p>
                  <b>
                    Lupa kata sandi?
                  </b>
                </p>
                <p>
                  <span>
                    Tidak punya akun BisnisKu?
                  </span>
                  <b onclick="toggle()" class="pointer">
                    Buat akun di sini
                  </b>
                </p>
              </div>
            </div>
            <div class="form-wrapper">

            </div>
          </div>
          <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->
        <!-- CONTENT SECTION -->
        <div class="row content-row">
          <!-- SIGN IN CONTENT -->
          <div class="col align-items-center flex-col">
            <div class="text sign-in">
              <h2>
                Selamat Datang di BisnisKu!
              </h2>

            </div>
            <div class="img sign-in">

            </div>
          </div>
          <!-- END SIGN IN CONTENT -->
          <!-- SIGN UP CONTENT -->
          <div class="col align-items-center flex-col">
            <div class="img sign-up">

            </div>
            <div class="text sign-up">
              <h2>
                Gabung bersama <br> kami!
              </h2>

            </div>
          </div>
          <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->
      </div>
    <script src="{{ url('assets/js/app_login.js') }}"></script>
</body>
</html>
