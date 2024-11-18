<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Konsultasi</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/konsul.css') }}">

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/form.js') }}"></script>
    <!-- Cdn JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto lg:mt-0 bg-white lg:bg-transparent text-black lg:p-0 z-20"
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

    <!-- Informasi Konsultasi -->
    <div class="container" style="margin-top: 10%">
        <div class="info-card">
            <h2 style="font-size: 2.5em">Informasi Konsultasi</h2>
            <p>Durasi: 30 menit/sesi</p>
            <p>Jam Operasional: 09.00 - 17.00 WIB</p>
            <p>Metode: Online (Google Meet/Zoom), Voice Call WhatsApp</p>
        </div>

        <!-- Form Booking -->
        <form id="bookingForm">
            <div class="form-group">
                <label for="date">Tanggal Konsultasi</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time">Waktu Konsultasi</label>
                <input type="time" id="time" name="time" min="09:00" max="17:00" required>
                <small class="info">Pilih waktu antara 09.00 - 17.00 WIB</small>
            </div>

            <div class="form-group">
                <label for="topic">Topik Konsultasi</label>
                <select id="topic" name="topic" required>
                    <option value="">-- Pilih Topik --</option>
                    <option value="new_website">Konsultasi website baru</option>
                    <option value="redesign">Redesign website</option>
                    <option value="features">Penambahan fitur</option>
                    <option value="other">Lainnya</option>
                </select>
            </div>

            <div class="form-group">
                <label for="details">Detail Pertanyaan/Kebutuhan</label>
                <textarea id="details" name="details" placeholder="Tuliskan detail pertanyaan atau kebutuhan Anda"></textarea>
            </div>

            <!-- Preview & Konfirmasi -->
            <div class="preview">
                <h3>Preview Jadwal</h3>
                <p><b>Tanggal:</b> <span id="previewDate">-</span></p>
                <p><b>Waktu:</b> <span id="previewTime">-</span></p>
                <p><b>Topik:</b> <span id="previewTopic">-</span></p>
                <p><b>Detail:</b> <span id="previewDetails">-</span></p>
            </div>

            <!-- Tombol Konfirmasi -->
            <div class="button-group">
                <button type="button" id="confirmBooking">Konfirmasi Booking</button>
                <button type="reset">Reset Form</button>
            </div>
        </form>

        <!-- Kebijakan Singkat -->
        <div class="policy">
            <p>Reschedule maksimal H-1. Harap konfirmasi 15 menit sebelum jadwal.</p>
        </div>

    </div>


    <!-- Script -->
    <script>
        // Update preview jadwal
        document.getElementById("bookingForm").addEventListener("input", function() {
            document.getElementById("previewDate").textContent = document.getElementById("date").value || "-";
            document.getElementById("previewTime").textContent = document.getElementById("time").value || "-";
            document.getElementById("previewTopic").textContent = document.getElementById("topic").options[document
                .getElementById("topic").selectedIndex].text || "-";
            document.getElementById("previewDetails").textContent = document.getElementById("details").value || "-";
        });

        // Konfirmasi Booking
        document.getElementById("confirmBooking").addEventListener("click", function() {
            Swal.fire({
                icon: 'success', // Pilihan icon: 'success', 'error', 'warning', 'info', 'question'
                title: 'Jadwal Dikonfirmasi!',
                text: 'Jadwal konsultasi Anda telah berhasil dikonfirmasi.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#3085d6'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke halaman home
                    window.location.href = "/home";
                }
            });
        });

        // Ambil elemen
        const alertDialog = document.getElementById('alertDialog');
        const closeAlert = document.getElementById('closeAlert');

        // Tampilkan dialog ketika tombol diklik
        document.getElementById('confirmBooking').addEventListener('click', function() {
            alertDialog.classList.remove('hidden'); // Hapus kelas hidden untuk menampilkan
        });

        // Sembunyikan dialog
        closeAlert.addEventListener('click', function() {
            alertDialog.classList.add('hidden');
        });
    </script>

    <script>
        document.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            const brandName = document.getElementById('brandname');
            if (window.scrollY > 50) {
                header.style.backgroundColor = '#ffffff'; // Background solid saat scroll
                header.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)'; // Tambahkan bayangan
                brandName.style.color = '#133e87'; // Ubah warna teks logo saat scroll
            } else {
                header.style.backgroundColor = 'transparent'; // Background transparan di awal
                header.style.boxShadow = 'none';
                brandName.style.color = '#133e87'; // Warna teks logo saat di posisi atas
            }
        });
    </script>

</body>

</html>
