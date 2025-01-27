<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Himpunan Mahasiswa Elektro - Politeknik Negeri Banjarmasin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/hme.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Hero Section --}}
    @include('partials.hero')

    <main id="main">

        {{-- Logo Section --}}
        @include('partials.logo')

        {{-- About Us Section --}}
        @include('partials.aboutUs')

        {{-- Struktur Organisasi Section --}}
        @include('partials.strukturOrganisasi')

        {{-- Divisi Section --}}
        @include('partials.divisi')

        {{-- Profile Video Section --}}
        @include('partials.profileVideo')

        {{-- Portofolio Section --}}
        @include('partials.portofolio')

    </main><!-- End #main -->

    <!-- ======= Cta Section ======= -->
    <section id="mdprt" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="row align-items-center">
                <!-- Menambahkan kelas align-items-center untuk mengatur posisi vertikal ke tengah -->
                <div class="col-lg-9">
                    <h3>Media Partner</h3>
                    <p style="text-align: justify;">
                        Apa itu Media Partner? Sebagai mitra media kami, Anda adalah bagian integral dari ekosistem kami
                        yang memainkan peran kunci dalam memperluas jangkauan dan dampak konten. Sebagai media partner,
                        Anda akan mendapatkan akses eksklusif ke berbagai fitur yang dirancang untuk meningkatkan
                        visibilitas konten Anda, termasuk promosi bersama, kolaborasi kreatif, dan analisis kinerja yang
                        mendalam.

                        Dengan menjadi media partner kami, Anda tidak hanya mendapatkan kesempatan untuk meningkatkan
                        lalu lintas dan interaksi dengan audiens yang relevan, tetapi juga menjadi bagian dari komunitas
                        yang saling mendukung dan tumbuh bersama.
                    </p>
                    <h5 style="color: white;">Narahubung : 085828715576 (Sri Mulyani)</h5>
                </div>
                <div class="col-lg-3 text-center"> <!-- Menggunakan kelas text-center -->
                    <button
                        onclick="window.open('https://docs.google.com/forms/d/1bKdbus0qDoOQ4H0APPkm7CeBV3v72RZl8ha1Nn-ozUU/edit', '_blank')"
                        class="cta-btn align-middle glightbox" style="background-color: #37517e;">Formulir</button>
                </div>
            </div>
        </div>
    </section><!-- End Cta Section -->

    <hr style="border: 1px solid #37517e; margin: 40px 0;"> <!-- Garis pemisah -->

    <!-- ======= Cta Section ======= -->
    <section id="oprc" class="cta" style="background-color: #f8f9fa;">
        <div class="container" data-aos="zoom-in">
            <div class="row align-items-center">
                <!-- Menambahkan kelas align-items-center untuk mengatur posisi vertikal ke tengah -->
                <div class="col-lg-9">
                    <h3>Form Pendaftaran Open Recruitment</h3>
                    <p style="text-align: justify;">
                        Daftarkan dirimu sekarang dan bergabunglah dengan Himpunan Mahasiswa Elektro Poliban! Jadilah
                        bagian dari himpunan yang penuh inovasi, kolaborasi, dan semangat untuk membangun masa depan
                        teknologi bersama. Isi formulir pendaftaran dan tunjukkan kontribusimu!
                    </p>

                    {{-- NaraHubung --}}
                    @include('partials.narahubung')

                </div>
                <div class="col-lg-3 text-center"> <!-- Menggunakan kelas text-center -->
                    <button onclick="window.open('https://bit.ly/BerkasOprecHME2025-2026', '_blank')"
                        class="cta-btn align-middle glightbox" style="background-color: #37517e;">Formulir</button>
                </div>
            </div>
        </div>
    </section><!-- End Cta Section -->



    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <!-- <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
                        <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe"> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row align-center justify-content-center">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>HME Poliban</h3>
                        <p>
                            Jalan Brigjen H. Hasan Basri, Pangeran<br>
                            Kec.Banjarmasin Utara, 707124<br>
                            Kalimantan Selatan <br><br>
                            <!--<strong>Phone:</strong> +1 5589 55488 55<br>-->
                            <strong>Email:</strong> hmepoliban14@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menu Utama</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Divisi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Kegiatan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#mdprt">Media Partner</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Social Media</h4>
                        <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
                            <a href="https://www.instagram.com/hme_poliban?igsh=MWJvazUzOGZmdDMweg=="
                                class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="http://www.youtube.com/@hmepoliban396" class="youtube"><i
                                    class="bx bxl-youtube"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100077874230516" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.tiktok.com/@hmepoliban?_t"=8lozKMNjDw0&_r=1=100077874230516"
                                class="tiktok"><i class="bx bxl-tiktok"></i></a>
                            <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>HME Poliban</span></strong>.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                {{-- All Rights Reserved --}}
                <a href="https://www.instagram.com/hmsakif__/"><i class="ri-instagram-fill">Maintain by Hmsakif__</i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
