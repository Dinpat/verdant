@extends('layouts.app')

@section('content')
    {{-- HERO SECTION --}}
    <section class="text-white text-center position-relative mt-0"
        style="background: url('/img/hero.png') center/cover no-repeat; height: 90vh; margin-top: 0;">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="display-4 fw-bold">VERDANT</h1>
            <h1 class="lead fw-bold">Smart Modular Green House</h1>
            <p class="lead">Solusi rumah kaca pintar berbasis teknologi untuk pertanian berkelanjutan</p>
            <a href="#about" class="btn btn-light btn-lg">Explore More</a>
        </div>
    </section>

    {{-- SEJARAH --}}
    <section id="about" class="container my-5">
        <h1 class="text-center bold">Sejarah Verdant</h1>
        <hr class="mx-auto" style="width: 150px; border-top: 5px solid black;">
        <div class="col-md-8 mx-auto">
            <p class="text-center mt-3">
                Verdant lahir dari keprihatinan atas tingginya ketergantungan pangan kota besar terhadap pasokan dari daerah
                yang jauh, dengan jejak karbon tinggi dan risiko rantai pasok yang rapuh. Dengan validasi awal dari survei
                250 warga Yogyakarta, Verdant mengembangkan sistem urban farming modular yang dapat digunakan di rumah,
                sekolah, kampus, dan kantor. Didukung oleh teknologi AI dan IoT, Verdant menawarkan solusi praktis bertani
                di lahan terbatas dengan bimbingan pintar.
            </p>
        </div>
    </section>

    {{-- KENAPA VERDANT --}}
    <section class="py-5 pb-10" style="background-color: #e9f5ec;">
        <div class="container text-center">
            <h2 class="text-center bold">Kenapa Verdant?</h2>
            <div class="row mt-4">
                <div class="col-md-3 ">
                    <div class="p-3 border rounded bg-white text-center">
                        <div class="icon-circle mx-auto mb-3">
                            <i class="bi bi-leaf fs-2"></i>
                        </div>
                        <h4>Ramah Lingkungan</h4>
                        <p class="mt-4 mb-0">Teknologi yang mendukung pertanian berkelanjutan dengan minimal dampak
                            lingkungan</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded bg-white text-center">
                        <div class="icon-circle mx-auto mb-3">
                            <i class="bi bi-lightbulb fs-2"></i>
                        </div>
                        <h4>Inovasi Terdepan</h4>
                        <p class="mt-4 mb-0">Sistem hidroponik otomatis dengan monitoring real-time dan AI analytics</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded bg-white text-center">
                        <div class="icon-circle mx-auto mb-3">
                            <i class="bi bi-award fs-2"></i>
                        </div>
                        <h4>Kualitas Terjamin</h4>
                        <p class="mt-4 mb-0">Sertifikasi internasional dan standar kualitas tinggi untuk semua produk</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded bg-white text-center">
                        <div class="icon-circle mx-auto mb-3">
                            <i class="bi bi-globe2 fs-2"></i>
                        </div>
                        <h4>Jangkauan Luas</h4>
                        <p class="mt-4 mb-0">Melayani petani di seluruh Indonesia dengan dukungan teknis terpadu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section class="py-5" style="background: #799a0a; min-height: 300px;">
        <div class="container text-white">
            <div class="row justify-content-center text-center mx-2">
                <!-- VISI -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="visi-misi-box">
                        <i class="bi bi-leaf"></i>
                        <h4>Vision</h4>
                        <p>Mewujudkan masa depan pertanian yang hijau, efisien, dan otomatis melalui teknologi IoT.</p>
                    </div>
                </div>

                <!-- MISI -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="visi-misi-box">
                        <!-- Ikon daun -->
                        <i class="bi bi-leaf"></i>
                        <h4>Mission</h4>
                        <p>
                            Menyediakan solusi pertanian modern berbasis teknologi.<br>
                            Menurunkan biaya operasional bagi petani.<br>
                            Meningkatkan produksi dan keberlanjutan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    {{-- PENJELASAN VERDANT --}}
    <section class="container my-5">
        <div class="text-center">
            <img src="/img/verdant1.png" alt="Verdant Logo" height="400">
            <div class="col-md-8 mx-auto">
                <p id="penjelasan" class="text-center mt-3">
                    VERDANT adalah solusi rumah kaca modular berbasis IoT yang mendukung pertanian perkotaan dan skala
                    kecil.
                    Dengan sistem otomatisasi dan dashboard pintar, petani dapat mengelola pertanian secara efisien dari
                    jarak
                    jauh.
                </p>
            </div>
        </div>
    </section>

    {{-- FITUR UTAMA --}}
    <section class="container my-5">
        <h2 class="text-center">Produk & Layanan</h2>
        <div class="row mt-4 text-center">
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="ratio ratio-9x16 mb-3">
                        <img src="/img/modular.jpg" alt="Modular Farming" class="card-img-top">
                    </div>
                    <h5>Modular Farming</h5>
                    <p>Pantau suhu rumah kaca secara real-time.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="ratio ratio-9x16 mb-3">
                        <img src="/img/biji.jpg" alt="Biji" class="card-img-top">
                    </div>
                    <h5>Benih Premium</h5>
                    <p>Ragam benih sayuran siap tanam</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="ratio ratio-9x16 mb-3">
                        <img src="/img/vitamin.jpg" alt="Vitamin" class="card-img-top">
                    </div>
                    <h5>Nutrisi AB Mix</h5>
                    <p>nutrisi lengkap optimalisasi tanaman.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="ratio ratio-9x16 mb-3">
                        <img src="/img/aplikasi2.png" alt="Aplikasi" class="card-img-top">
                    </div>
                    <h5>Aplikasi Verdant</h5>
                    <p>Pantau langsung dari smartphone Anda.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR TEAM --}}
    <section class="container my-5">
        <h2 class="text-center mb-4">Our Team</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <img src="/img/ceo.png" class="img-fluid rounded-circle mb-2" width="400">
                <h5>CEO</h5>
                <p>Dinda Patrisca</p>
            </div>
            <div class="col-md-3">
                <img src="/img/ceo.png" class="img-fluid rounded-circle mb-2" width="400">
                <h5>CTO</h5>
                <p>Yoga Bayu</p>
            </div>
            <div class="col-md-3">
                <img src="/img/ceo.png" class="img-fluid rounded-circle mb-2" width="400">
                <h5>CMO</h5>
                <p>Akhyar</p>
            </div>
            <div class="col-md-3">
                <img src="/img/ceo.png" class="img-fluid rounded-circle mb-2" width="400">
                <h5>Kepala Produksi</h5>
                <p>Heru</p>
            </div>
        </div>
    </section>

    {{-- OUR ACHIEVEMENT --}}
    {{-- <section class="container my-5">
        <h2 class="text-center mb-4">Our Achievement</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="/img/achieve1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <img src="/img/achieve2.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <img src="/img/achieve3.jpg" class="img-fluid rounded">
            </div>
        </div>
    </section> --}}

    {{-- PENGHARGAAN --}}

    <section id="artikel" class="penghargaan-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="title mb-5">Penghargaan Terkini</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-sm">
                        <img src="/img/fotbar.jpg" class="card-img-top" alt="Best AgriTech Innovation Award">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="award-year">2024</span>
                                <i class="bi bi-bookmark award-icon"></i>
                            </div>
                            <h5 class="award-title">Best AgriTech Innovation Award</h5>
                            <p class="award-organizer">Indonesia AgriTech Summit</p>
                            <p class="award-description mt-auto pt-2">
                                Penghargaan inovasi terbaik dalam teknologi.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-sm">
                        <img src="/img/team.jpg" class="card-img-top" alt="Sustainability Excellence Award">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="award-year">2023</span>
                                <i class="bi bi-bookmark award-icon"></i>
                            </div>
                            <h5 class="award-title">Sustainability Award</h5>
                            <p class="award-organizer">Green Business Awards Indonesia</p>
                            <p class="award-description mt-auto pt-2">
                                Pengakuan atas komitmen terhadap praktik bisnis.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-sm">
                        <img src="/img/acc.jpg" class="card-img-top" alt="Top 10 StartUp of the Year">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="award-year">2023</span>
                                <i class="bi bi-bookmark award-icon"></i>
                            </div>
                            <h5 class="award-title">Top 10 StartUp of the Year</h5>
                            <p class="award-organizer">Tech in Asia Conference Award</p>
                            <p class="award-description mt-auto pt-2">
                                Masuk dalam 10 startup teknologi tema modular agritech terbaik di Asia Tenggara.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-sm">
                        <img src="/img/team.jpg" class="card-img-top" alt="Innovation In Agriculture">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="award-year">2022</span>
                                <i class="bi bi-bookmark award-icon"></i>
                            </div>
                            <h5 class="award-title">Innovation In Agriculture</h5>
                            <p class="award-organizer">Ministry of Agriculture Indonesia</p>
                            <p class="award-description mt-auto pt-2">
                                Penghargaan dari Kementerian Pertanian RI untuk inovasi teknologi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="gallery-title">Client Gallery</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/aplikasi2.png" alt="Application">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Aplikasi Verdant</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/contoh2.webp" alt="">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Indoor area</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/panen.png" alt="Proses Panen">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Proses Panen</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/lembab.png" alt=" Lembab">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Kebun Verdant Yogyakarta</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/team.jpg" alt="Client Langganan">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Client Langganan</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/cektanam.png" alt="Cek Tanam">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Perawatan Tanaman</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/home.png" alt="Verdant Jakarta">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Verdant Jakarta</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gallery-item">
                        <img src="/img/home2.png" alt="Verdant Bandung">
                        <div class="gallery-overlay">
                            <div class="gallery-caption">Verdant Bandung</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- event --}}
    <section class="activities-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Dokumentasi Kegiatan</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-img-container">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzNzEyNjZ8MHwxfHNlYXJjaHw1fHxjb21wYW55JTIwc2VtaW5hcnxlbnwwfDB8fHwxNzIyODQyMDYyfA&ixlib=rb-4.0.3&q=80&w=1080"
                                alt="Seminar Perusahaan" class="event-card-img">
                        </div>
                        <div class="event-card-content">
                            <h5 class="event-title">Seminar Perusahaan 2025</h5>
                            <p class="event-date">Depok, 5 Agustus 2025</p>
                            <p class="event-description">Seminar tahunan untuk meningkatkan kapabilitas dan inovasi tim
                                internal.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-img-container">
                            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzNzEyNjZ8MHwxfHNlYXJjaHw4fHxwcm9kdWN0JTIwbGF1bmNofGVufDB8MHx8fDE3MjI4NDIwOTJ8&ixlib=rb-4.0.3&q=80&w=1080"
                                alt="Peluncuran Produk" class="event-card-img">
                        </div>
                        <div class="event-card-content">
                            <h5 class="event-title">Peluncuran Produk 'Innovate X'</h5>
                            <p class="event-date">Jakarta, 17 Juli 2025</p>
                            <p class="event-description">Perilisan resmi produk terbaru kami yang revolusioner kepada media
                                dan publik.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-img-container">
                            <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzNzEyNjZ8MHwxfHNlYXJjaHwxfHxDU1IlMjB2b2x1bnRlZXJ8ZW58MHwwfHx8MTcyMjg0MjEyN3w&ixlib=rb-4.0.3&q=80&w=1080"
                                alt="Kegiatan Sosial" class="event-card-img">
                        </div>
                        <div class="event-card-content">
                            <h5 class="event-title">Bakti Sosial & CSR</h5>
                            <p class="event-date">Yogyakarta, 22 Juni 2025</p>
                            <p class="event-description">Berbagi dengan masyarakat sekitar sebagai wujud kepedulian sosial
                                perusahaan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="event-card">
                        <div class="event-card-img-container">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzNzEyNjZ8MHwxfHNlYXJjaHwxfHxtYXJrZXRpbmclMjBleHBvfGVufDB8MHx8fDE3MjI4NDIxODF8&ixlib=rb-4.0.3&q=80&w=1080"
                                alt="Pameran Bisnis" class="event-card-img">
                        </div>
                        <div class="event-card-content">
                            <h5 class="event-title">Partisipasi di Indo-Tech Expo</h5>
                            <p class="event-date">Surabaya, 10-12 April 2025</p>
                            <p class="event-description">Memperkenalkan keunggulan teknologi dan produk kami di pameran
                                terbesar.</p>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </section>


    {{-- TESTIMONI --}}
    <section class="py-5 testimonial-section" style="background-color: #f0f7f2;">
        <div class="container">
            <h2 class="text-center mb-5">Kata Mereka</h2>

            <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                                    <div class="card-body">
                                        <div class="stars mb-3"><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic">"Sejak menggunakan sistem EcoVerdant, hasil panen saya
                                            meningkat 250%. Teknologinya mudah digunakan dan dukungan timnya sangat baik."
                                        </p>
                                        <hr class="my-4">
                                        <div>
                                            <h6 class="fw-bold mb-0">Pak Joko Widodo</h6>
                                            <small class="text-muted">Petani Hidroponik, Bandung</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 d-none d-md-block">
                                <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                                    <div class="card-body">
                                        <div class="stars mb-3"><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic">"EcoVerdant membantu saya mengotomatisasi proses bertani.
                                            Sekarang saya bisa fokus pada pengembangan bisnis tanpa khawatir masalah
                                            teknis."</p>
                                        <hr class="my-4">
                                        <div>
                                            <h6 class="fw-bold mb-0">Ibu Sari Dewi</h6>
                                            <small class="text-muted">Pemilik Kebun Organik, Malang</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                                    <div class="card-body">
                                        <div class="stars mb-3"><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic">"Analisis data dari sensor sangat membantu kami dalam
                                            mengambil keputusan penyiraman dan pemupukan. Sangat efisien!"</p>
                                        <hr class="my-4">
                                        <div>
                                            <h6 class="fw-bold mb-0">Bapak Budi Santoso</h6>
                                            <small class="text-muted">Manajer Perkebunan, Lembang</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 d-none d-md-block">
                                <div class="card h-100 p-4 border-0 shadow-sm rounded-4">
                                    <div class="card-body">
                                        <div class="stars mb-3"><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                        <p class="fst-italic">"Aplikasi mobile-nya sangat intuitif. Saya bisa memantau
                                            kebun dari mana saja, bahkan saat liburan. Benar-benar game-changer."</p>
                                        <hr class="my-4">
                                        <div>
                                            <h6 class="fw-bold mb-0">Ibu Rina Hartati</h6>
                                            <small class="text-muted">Penggiat Urban Farming, Jakarta</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i
                            class="bi bi-chevron-right"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <div class="carousel-indicators position-static mt-4">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal"
                    data-bs-target="#testimonialModal">
                    <i class="bi bi-chat-square-quote"></i> Tulis Testimoni Anda
                </button>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modalUntukTestimoni" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Formulir Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTestimoni" action="{{ route('testimoni.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_user" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_user" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan_user" class="form-label">Pekerjaan / Lokasi</label>
                            <input type="text" class="form-control" id="pekerjaan_user" name="pekerjaan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block">Rating Anda</label>
                            <div class="star-rating">
                                <input type="radio" id="5-stars" name="rating" value="5" required /><label
                                    for="5-stars" class="star">&#9733;</label>
                                <input type="radio" id="4-stars" name="rating" value="4" /><label
                                    for="4-stars" class="star">&#9733;</label>
                                <input type="radio" id="3-stars" name="rating" value="3" /><label
                                    for="3-stars" class="star">&#9733;</label>
                                <input type="radio" id="2-stars" name="rating" value="2" /><label
                                    for="2-stars" class="star">&#9733;</label>
                                <input type="radio" id="1-star" name="rating" value="1" /><label
                                    for="1-star" class="star">&#9733;</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="isi_testimoni" class="form-label">Testimoni Anda</label>
                            <textarea class="form-control" id="isi_testimoni" name="testimoni" rows="4" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" form="formTestimoni">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
@endsection
