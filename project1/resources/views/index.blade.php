<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas.com for Business</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- font --}}
    <link href="https://fonts.cdnfonts.com/css/gotham-9" rel="stylesheet">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Additional Custom Styles */
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.6)), url({{ 'assets/img/hero.png' }});
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }

        .trusted-by img {
            max-width: 100px;
            margin: 20px;
        }

        .pricing-card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 50px 0;
        }

        .btn-primary{
            background-color: #C19D6C;
            border: none;
        }

        .btn-primary:hover{
            background-color: #a4865c;
        }

        .btn-outline-primary{
            background-color: #fff;
            border: 1px solid #C19D6C;
            color: #C19D6C;
        }

        .btn-outline-primary:hover{
            background-color: #C19D6C;
            color: #fff;
            border: 1px solid #C19D6C;
        }

        .btn-package{
            background-color: #87BBD1;
            color: #000;
        }

        .btn-package:hover{
            background-color: #2D6075;
            color: #fff;
        }

        .price-tag{
            color: #87BBD1;
        }

        .btn-selected-package{
            background-color: #2D6075;
            color: #fff;
        }

        .card-selected{
            background-color: #E0EFF5;
        }

        .bg-brown{
            background-color: #C19D6C;
        }

        .promo {
            background-image: linear-gradient(rgba(248, 230, 200, 0.9),rgba(248, 230, 200, 0.9)), url({{ 'assets/img/hero.png' }});
            background-size: cover;
            background-position: center;
            color: #000;
            padding: 100px 0;
        }

        li a{
            text-decoration: none;
            color: #fff;
            font-weight: 100;
        }

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Kelas.com for Business</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Benefit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a href="#" class="btn btn-primary me-2">Ajukan Demo</a>
                <a href="#" class="btn btn-outline-primary">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold fs-2">Tingkatkan Performa Bisnis Anda</h1>
            <p class="lead fs-5">Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda</p>
            <a href="#" class="btn btn-primary btn-lg mt-4">Ajukan Demo</a>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section class="trusted-by py-5 text-center">
        <div class="container">
            <h5 class="text-muted fw-bold fs-3">Telah Dipercaya oleh 10.000+ Profesional User dari</h5>
            <div class="d-flex flex-wrap justify-content-center align-items-center mt-4">
                <img src="{{ asset('assets/img/logo/ieg.png') }}" alt="Logo 1">
                <img src="{{ asset('assets/img/logo/iep.png') }}" alt="Logo 2">
                <img src="{{ asset('assets/img/logo/sctv.png') }}" alt="Logo 3">
                <img src="{{ asset('assets/img/logo/emtek.png') }}" alt="Logo 4">
                <img src="{{ asset('assets/img/logo/sicepat.png') }}" alt="Logo 5">
                <img src="{{ asset('assets/img/logo/idcloudhost.png') }}" alt="Logo 6">
                <img src="{{ asset('assets/img/logo/adirect.png') }}" alt="Logo 7">
                <img src="{{ asset('assets/img/logo/volta.png') }}" alt="Logo 8">
            </div>
        </div>
    </section>

    {{-- Benefit section --}}
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h2 class="mb-4 text-center">Bagaimana Kelas Center Membantu Anda?</h2>
                <p class="text-center mb-5">Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
                <div class="d-flex justify-content-center mb-4">
                    <button class="btn btn-primary me-2">LMS</button>
                    <button class="btn btn-outline-primary me-2">Featured</button>
                    <button class="btn btn-outline-primary me-2">Video Learning + Live Webinar</button>
                    <button class="btn btn-outline-primary">Inquiry Learning</button>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="fw-bold fs-5">Optimalkan potensi karyawan Anda dengan Learning Management System (LMS).</p>
                <p>Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang unggul dengan LMS kami!</p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-check-lg text-success"></i>
                        <strong>Issued Certificate</strong>
                        <p class="mt-2">Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-lg text-success"></i>
                        <strong>On Boarding</strong>
                        <p class="mt-2">Memastikan setiap karyawan siap memberikan kontribusi maksimal sejak hari pertama mereka bergabung.</p>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-lg text-success"></i>
                        <strong>Training on-demand</strong>
                        <p class="mt-2">Pelatihan On-Demand yang fokus pada pengalaman pengguna, pelatihan berkualitas tinggi yang mudah diakses dan disesuaikan dengan kebutuhan Anda.</p>
                    </li>
                </ul>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/img/lms.jpg') }}" alt="Image describing LMS benefits" class="img-fluid w-10">
            </div>
        </div>
    </section>



    <!-- Pricing Section -->
    <section class="container my-7 w-75">
        <h2 class="text-center mb-5 fw-bold">Pilihan Paket Untuk Perusahaan di Kelas Center</h2>
        <div class="row justify-content-center">
            <!-- Starter Package -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body rounded">
                        <h4 class="card-title fw-bold"><i class="bi bi-brightness-high"></i> Starter</h4>
                        <p class="mt-3 fs-5">Kelebihan</p>
                        <ul class="list-unstyled my-4">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                LMS + Kelas by Kelas.Center
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Up to 5 users
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                no charge per users
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Up to 20 pilihan kelas
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Update pergantian kelas / 3 bulan
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Sertifikat
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Konsultasi Gratis
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Dedicated Assistant
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Full support 7x24 jam
                            </li>
                        </ul>
                        <p class="price-tag">Rp187.500</p>
                        <p class="mb-3 fs-4"><strong>Rp159.000</strong><span class="fs-6">/bulan</span></p>
                        <a href="#" class="btn col-lg-12 btn-package fw-medium">Pilih Paket</a>
                    </div>
                </div>
            </div>

            <!-- Basic Package -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body rounded">
                        <h4 class="card-title fw-bold"><i class="bi bi-person"></i> Basic</h4>
                        <p class="mt-3 fs-5">Kelebihan</p>
                        <ul class="list-unstyled my-4">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                LMS + Kelas by Kelas.Center
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                6-49 users
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                no charge per users
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Up to 50 pilihan kelas
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Update pergantian kelas / 3 bulan
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Sertifikat
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Konsultasi Gratis
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Dedicated Assistant
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Full support 7x24 jam
                            </li>
                        </ul>
                        <p class="price-tag">Rp187.500</p>
                        <p class="mb-3 fs-4"><strong>Rp159.000</strong><span class="fs-6">/bulan</span></p>
                        <a href="#" class="btn col-lg-12 btn-package fw-medium">Pilih Paket</a>
                    </div>
                </div>
            </div>

            <!-- Pro Package -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body card-selected rounded">
                        <h4 class="card-title fw-bold"><i class="bi bi-people"></i> Pro</h4>
                        <p class="mt-3 fs-5">Kelebihan</p>
                        <ul class="list-unstyled my-4">
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                LMS + Kelas by Kelas.Center
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                50-100 users
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                no charge per users
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                All Access Class
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Update pergantian kelas / 3 bulan
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Sertifikat
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Konsultasi Gratis
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Dedicated Assistant
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-circle-fill"></i>
                                Full support 7x24 jam
                            </li>
                        </ul>
                        <p class="price-tag">Rp3.750.000</p>
                        <p class="mb-3 fs-4"><strong>Rp2.900.000</strong><span class="fs-6">/bulan</span></p>
                        <a href="#" class="btn col-lg-12 btn-package fw-medium btn-selected-package">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-brown text-white py-4 px-5 rounded-bottom">
            <div class="row align-items-center">
              <div class="col-md-8 d-flex align-items-center">
                <h4 class="mb-0"><i class="bi bi-building me-2"></i> Enterprise</h4>
                <ul class="list-inline mb-0 ms-4">
                  <li class="list-inline-item"><i class="bi bi-check-circle-fill"></i> >100 Users</li>
                  <li class="list-inline-item"><i class="bi bi-check-circle-fill"></i> All Access Class</li>
                  <li class="list-inline-item"><i class="bi bi-check-circle-fill"></i> More Features</li>
                </ul>
              </div>
              <div class="col-md-4 text-end">
                <a href="#" class="btn btn-outline-primary">Contact Us</a>
              </div>
            </div>
          </div>
    </section>


    <!-- Learning Videos Section -->
    <section class="learning-videos py-5">
        <div class="container">
            <div class="text-center">
                <h3 class="fw-bold">Lebih dari 2000+ Learning Video</h3>
                <p>Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <button class="btn btn-primary me-2">Kelas.com</button>
                <button class="btn btn-outline-primary me-2">Kelas.work</button>
                <button class="btn btn-outline-primary me-2">Bootcamp</button>
            </div>
            <div class="row">
                <!-- Example Video Card -->
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/lms.jpg') }}" class="card-img-top" alt="Video Thumbnail">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Public Speaking: Merdeka Dalam Bicara</h5>
                            <p class="card-text fw-semibold">Pandji Pragiwaksono <br>
                                <span class="fw-light">Presenter Televisi & Komika</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/lms.jpg') }}" class="card-img-top" alt="Video Thumbnail">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Public Speaking: Merdeka Dalam Bicara</h5>
                            <p class="card-text fw-semibold">Pandji Pragiwaksono <br>
                                <span class="fw-light">Presenter Televisi & Komika</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/lms.jpg') }}" class="card-img-top" alt="Video Thumbnail">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Public Speaking: Merdeka Dalam Bicara</h5>
                            <p class="card-text fw-semibold">Pandji Pragiwaksono <br>
                                <span class="fw-light">Presenter Televisi & Komika</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/lms.jpg') }}" class="card-img-top" alt="Video Thumbnail">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Public Speaking: Merdeka Dalam Bicara</h5>
                            <p class="card-text fw-semibold">Pandji Pragiwaksono <br>
                                <span class="fw-light">Presenter Televisi & Komika</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promo py-5">
        <div class="container">
          <div class="align-items-center text-center">
              <h3>Tingkatkan Kualitas Perusahaan Anda</h3>
              <p>Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
              <a href="#" class="btn btn-primary">Ajukan Demo</a>
          </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Kelas.com for business</h4>
                </div>
                <div class="col-md-3">
                    <h5>Company</h5>
                    <ul class="list-unstyled fw-ligh">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Ajukan Demo</a></li>
                        <li><a href="#">Kelas.Work</a></li>
                        <li><a href="#">Kelas.Com</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Kebijakan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Nabilla.Anggraini@kelas.com</a></li>
                        <li><a href="tel:+621233676763">+62 811 3366 763 (Nabilah Anggraini)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
