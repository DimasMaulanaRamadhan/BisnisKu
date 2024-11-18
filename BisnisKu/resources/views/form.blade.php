<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #133E87 0%, #F3F3E0 100%);
        }
    </style>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('assets/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/apex-charts.css') }}" />

    <!-- Helpers -->
    <script src="{{ url('assets/js/helpers.js') }}"></script>
    <!-- Config -->
    <script src="{{ url('assets/js/config.js') }}"></script>
    <!-- Tailwind CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/form.js') }}"></script>
    <!-- Cdn JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white -mt-6">
        <div class="w-full mx-auto max-w-none flex flex-wrap items-center justify-between"
            style="padding-left: 1.5%; padding-right: 1.5%;">
            <div class="flex items-center" style="padding-top: 2.5%;">
                <a id="brandname"
                    class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="#">
                    <img src="{{ url('assets/img/logo.png') }}" alt="Logo" class="inline h-20 w-20"
                        style="vertical-align: middle; margin-bottom: 2.5%;">
                    BisnisKu
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:mt-0 bg-white lg:bg-transparent text-black lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center" style="padding-top: 4%">
                    <li class="mr-2">
                        <a class="menu-item inline-block py-2 px-4 text-black no-underline" href="#about">Tentang
                            Kami</a>
                    </li>
                    <li class="mr-2">
                        <a class="menu-item inline-block text-black no-underline py-2 px-4" href="#fitur">Fitur</a>
                    </li>
                    <li class="mr-2">
                        <a class="menu-item inline-block text-black no-underline py-2 px-4" href="#harga">Harga</a>
                    </li>
                </ul>
                <!-- Profile Icon -->
                <a href="#profile" class="profile-icon inline-block py-2 px-4 text-gray-800 hover:text-gray-600"
                    style="margin-top: 2.5%">
                    <img src="{{ url('assets/img/profil.png') }}" alt="Profile" class="h-8 w-8 rounded-full">
                </a>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    <!-- Form -->
    <div class="pt-24">
        <div class="container-fluid card-container">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-7 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Formulir Pembuatan Website</h2>
                        <p>Isi semua langkah untuk menyelesaikan pendaftaran</p>
                        <form id="msform">
                            <!-- Progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="step1"><strong>Informasi Pribadi</strong></li>
                                <li id="step2"><strong>Kebutuhan Website</strong></li>
                                <li id="step3"><strong>Timeline</strong></li>
                                <li id="step4"><strong>Finish</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <br>

                            <!-- Step 1 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Informasi Pribadi</h2>
                                    <label class="fieldlabels">Nama Lengkap:</label>
                                    <input type="text" name="fullname" placeholder="Nama Lengkap">

                                    <label class="fieldlabels">Email:</label>
                                    <input type="email" name="email" placeholder="Email">

                                    <label class="fieldlabels">Nomor HP/WhatsApp:</label>
                                    <input type="text" name="phone" placeholder="Nomor HP/WhatsApp">

                                    <label class="fieldlabels">Nama Usaha/Perusahaan (jika ada):</label>
                                    <input type="text" name="business_name" placeholder="Nama Usaha/Perusahaan">

                                    <label class="fieldlabels">Alamat:</label>
                                    <input type="text" name="address" placeholder="Alamat Lengkap">

                                    <label class="fieldlabels">Kode Pos:</label>
                                    <input type="text" name="postal_code" placeholder="Kode Pos">

                                    <label class="fieldlabels">Kota:</label>
                                    <input type="text" name="city" placeholder="Kota">

                                    <label class="fieldlabels">Provinsi:</label>
                                    <input type="text" name="province" placeholder="Provinsi">

                                    <label class="fieldlabels">Media sosial yang dimiliki (opsional):</label>
                                    <input type="text" name="social_media" placeholder="Media Sosial">
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next">
                            </fieldset>

                            <!-- Step 2 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Kebutuhan Website</h2>
                                    <label class="fieldlabels">Jenis Bisnis:</label>
                                    <input type="text" name="business_type" placeholder="Jenis Bisnis">

                                    <label class="fieldlabels">Target Market/Audience:</label>
                                    <input type="text" name="target_market" placeholder="Target Market">

                                    <label class="fieldlabels">Referensi Website yang Disukai (URL):</label>
                                    <input type="url" name="website_reference"
                                        placeholder="Contoh: https://example.com">

                                    <label class="fieldlabels">Konsep/Tema Website:</label>
                                    <input type="text" name="website_concept" placeholder="Konsep/Tema">

                                    <label class="fieldlabels">Warna Dominan yang Diinginkan:</label>
                                    <input type="text" name="color_theme" placeholder="Warna Dominan">

                                    <label class="fieldlabels">Fitur-fitur yang Dibutuhkan:</label>
                                    <div class="checkbox-group">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <p>Sistem login member</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="features[]"
                                                            value="Sistem login member">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <p>Form kontak</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" name="features[]"
                                                                value="Form kontak">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <p>Gallery</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" name="features[]" value="Gallery">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <p>Blog</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" name="features[]" value="Blog">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <p>Sistem pemesanan</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" name="features[]"
                                                                value="Sistem pemesanan">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <p>Payment gateway</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" name="features[]"
                                                                value="Payment gateway">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <p>Integrasi media sosial</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" name="features[]"
                                                                value="Integrasi media sosial">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox-item">
                                                            <textarea name="features_other" placeholder="Dan lain-lain (sebutkan)"></textarea>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <label class="fieldlabels">Konten yang Ingin Ditampilkan:</label>
                                    <textarea name="website_content" placeholder="Deskripsi konten yang diinginkan"></textarea>

                                    <label class="fieldlabels">Fungsionalitas Khusus:</label>
                                    <textarea name="special_functionality" placeholder="Deskripsi fungsionalitas khusus"></textarea>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next">
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous">
                            </fieldset>

                            <!-- Step 3 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Timeline</h2>
                                    <label class="fieldlabels">Timeline Pengerjaan:</label>
                                    <select name="timeline">
                                        <option value="1-2 minggu">1-2 minggu</option>
                                        <option value="2-4 minggu">2-4 minggu</option>
                                        <option value="1-2 bulan">1-2 bulan</option>
                                        <option value="fleksibel">Fleksibel</option>
                                    </select>

                                    <label class="fieldlabels mt-4">Prioritas:</label>
                                    <select name="priority">
                                        <option value="Kualitas premium">Kualitas premium</option>
                                        <option value="Waktu pengerjaan cepat">Waktu pengerjaan cepat</option>
                                    </select>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next">
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous">
                            </fieldset>

                            <!-- Step 4 -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Finish</h2>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox-item">
                                                        <p
                                                            style="font-size: 1.05em; margin-top: -4%; margin-left: -1.7%;">
                                                            Saya setuju dengan syarat dan ketentuan yang berlaku.</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" name="terms" value="Ketentuan">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <input type="submit" name="submit" class="action-button" value="Submit">
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("msform"); // Ambil elemen formulir berdasarkan ID

            if (form) { // Pastikan formulir ditemukan
                form.addEventListener("submit", function(event) {
                    event.preventDefault(); // Mencegah pengiriman form secara default

                    // Sembunyikan formulir
                    this.style.display = "none";

                    // Tampilkan pesan sukses
                    const successMessage = `
                    <!--Nav-->
                    <nav id="header" class="fixed w-full z-30 top-0 text-white -mt-6">
                        <div class="w-full mx-auto max-w-none flex flex-wrap items-center justify-between"
                            style="padding-left: 1.5%; padding-right: 1.5%;">
                            <div class="flex items-center" style="padding-top: 2.5%;">
                                <a id="brandname"
                                    class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                                    href="#">
                                    <img src="{{ url('assets/img/logo.png') }}" alt="Logo" class="inline h-20 w-20"
                                        style="vertical-align: middle; margin-bottom: 2.5%;">
                                    BisnisKu
                                </a>
                            </div>
                            <div class="block lg:hidden pr-4">
                                <button id="nav-toggle"
                                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Menu</title>
                                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:mt-0 bg-white lg:bg-transparent text-black lg:p-0 z-20"
                                id="nav-content">
                                <ul class="list-reset lg:flex justify-end flex-1 items-center" style="padding-top: 4%">
                                    <li class="mr-2">
                                        <a class="menu-item inline-block py-2 px-4 text-black no-underline" href="#about">Tentang
                                            Kami</a>
                                    </li>
                                    <li class="mr-2">
                                        <a class="menu-item inline-block text-black no-underline py-2 px-4" href="#fitur">Fitur</a>
                                    </li>
                                    <li class="mr-2">
                                        <a class="menu-item inline-block text-black no-underline py-2 px-4" href="#harga">Harga</a>
                                    </li>
                                </ul>
                                <!-- Profile Icon -->
                                <a href="#profile" class="profile-icon inline-block py-2 px-4 text-gray-800 hover:text-gray-600"
                                    style="margin-top: 2.5%">
                                    <img src="{{ url('assets/img/profil.png') }}" alt="Profile" class="h-8 w-8 rounded-full">
                                </a>
                            </div>
                        </div>
                        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
                    </nav>
                    <div style="text-align: center; padding: 20px; font-family: 'Arial', sans-serif; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.3); max-width: 600px; margin: 50px auto; margin-top: 15%;">
                        <h2 style="color: #608bc1; font-size: 1.8em; margin-bottom: 10px;">Formulir Berhasil Dikirim!</h2>
                        <p style="color: #333; font-size: 1em; margin-bottom: 20px;">Terima kasih telah mengisi formulir. Kami akan segera menghubungi Anda.</p>
                        <div style="margin-top: 20px;">
                            <button id="btnHome"
                                style="background-color: #608bc1; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 1em; cursor: pointer; margin-right: 10px; font-weight: bold; transition: background 0.3s ease-in-out;">
                                Kembali ke Beranda
                            </button>
                            <button id="btnConsultation"
                                style="background-color: #4b73a3; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 1em; cursor: pointer; font-weight: bold; transition: background 0.3s ease-in-out;">
                                Jadwalkan Konsultasi
                            </button>
                        </div>
                    </div>
                `;

                    // Gantikan konten halaman dengan pesan sukses
                    document.body.innerHTML = successMessage;

                    // Tambahkan event listener untuk tombol
                    document.getElementById("btnHome").addEventListener("click", function() {
                        window.location.href = "/home"; // Arahkan ke halaman utama
                    });

                    document.getElementById("btnConsultation").addEventListener("click", function() {
                        window.location.href =
                            "/konsultasi"; // Arahkan ke halaman konsultasi
                    });
                });
            } else {
                console.error("Form with ID 'msform' not found.");
            }
        });
    </script>
    <script>
        document.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.style.backgroundColor = '#ffffff'; // Background solid saat scroll
                header.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)'; // Tambahkan bayangan
            } else {
                header.style.backgroundColor = 'transparent'; // Background transparan di awal
                header.style.boxShadow = 'none';
            }
        });
    </script>
</body>

</html>
