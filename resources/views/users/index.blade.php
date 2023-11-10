<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BEASISWA POLMED</title>
    <link rel="icon" href="images/logo-polmed.png" type="image/png">
    @include('users.partials.styles')

</head>

<body>
    @include('users.partials.header')

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Selamat Datang di Sistem Informasi Beasiswa POLMED</h1>
                    <h2>Ayo, Segera daftarkan dirimu dan raih cita-citamu tanpa terhalang biaya.</h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Lihat Beasiswa</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="images/ilustrator1.png" class="img-fluid animated mt-5" width="600">
                </div>
            </div>
        </div>

    </section>

    <main id="main">

        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="images/ilustrator2.png" class="img-fluid" alt="" width="200" style="margin-top:-50px;">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Voluptatem dignissimos provident quasi</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Beasiswa</h2>
                    <p>Beasiswa yang buka saat ini</p>
                </div>

                <div class="row justify-content-center">
                    @forelse($beasiswas as $beasiswa)
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <img src="{{$beasiswa->gambar}}" width="175" class="mb-3">
                            <h4 class="title"><a href="">{{$beasiswa->nama}}</a></h4>
                            <p class="description" style="text-align: justify;">{{implode(' ', array_slice(str_word_count(strip_tags($beasiswa->deskripsi), 1), 0, 30))}}...</p>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-6 col-lg-3">
                        <p>Tidak ada beasiswa terbaru</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

    </main>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Beasiswa POLMED</h3>
                        <p>
                            Jl. Almamater No.1, Padang Bulan <br>
                            Kota Medan, Sumatera Utara 20155<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> (061) 8210436<br>
                            <strong>Email:</strong> polmed.ac.id <br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
