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
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-leaf" viewBox="0 0 16 16">
                                <path
                                    d="M1.4 1.7c.216.289.65.84 1.725 1.274 1.093.44 2.884.774 5.834.528l.37-.023c1.823-.06 3.117.598 3.956 1.579C14.16 6.082 14.5 7.41 14.5 8.5c0 .58-.032 1.285-.229 1.997q.198.248.382.54c.756 1.2 1.19 2.563 1.348 3.966a1 1 0 0 1-1.98.198c-.13-.97-.397-1.913-.868-2.77C12.173 13.386 10.565 14 8 14c-1.854 0-3.32-.544-4.45-1.435-1.125-.887-1.89-2.095-2.391-3.383C.16 6.62.16 3.646.509 1.902L.73.806zm-.05 1.39c-.146 1.609-.008 3.809.74 5.728.457 1.17 1.13 2.213 2.079 2.961.942.744 2.185 1.22 3.83 1.221 2.588 0 3.91-.66 4.609-1.445-1.789-2.46-4.121-1.213-6.342-2.68-.74-.488-1.735-1.323-1.844-2.308-.023-.214.237-.274.38-.112 1.4 1.6 3.573 1.757 5.59 2.045 1.227.215 2.21.526 3.033 1.158.058-.39.075-.782.075-1.158 0-.91-.288-1.988-.975-2.792-.626-.732-1.622-1.281-3.167-1.229l-.316.02c-3.05.253-5.01-.08-6.291-.598a5.3 5.3 0 0 1-1.4-.811" />
                            </svg>
                        </div>
                        <h4>Ramah Lingkungan</h4>
                        <p class="mt-4 mb-0">Teknologi yang mendukung pertanian berkelanjutan dengan minimal dampak
                            lingkungan</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded bg-white text-center">
                        <div class="icon-circle mx-auto mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-lightbulb" viewBox="0 0 16 16">
                                <path
                                    d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1" />
                            </svg>
                        </div>
                        <h4>Inovasi Terdepan</h4>
                        <p class="mt-4 mb-0">Sistem hidroponik otomatis dengan monitoring real-time dan AI analytics</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded bg-white text-center">
                        <div class="icon-circle mx-auto mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-award" viewBox="0 0 16 16">
                                <path
                                    d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z" />
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
                            </svg>
                        </div>
                        <h4>Kualitas Terjamin</h4>
                        <p class="mt-4 mb-0">Sertifikasi internasional dan standar kualitas tinggi untuk semua produk</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded bg-white text-center">
                        <div class="icon-circle mx-auto mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-globe2" viewBox="0 0 16 16">
                                <path
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
                            </svg>
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
                        <!-- Ikon daun -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-daun" viewBox="0 0 16 16">
                            <path d="M1.4 1.7c.216.289.65.84 1.725 1.274 ... (potong untuk ringkas)" />
                        </svg>
                        <h4>Vision</h4>
                        <p>Mewujudkan masa depan pertanian yang hijau, efisien, dan otomatis melalui teknologi IoT.</p>
                    </div>
                </div>

                <!-- MISI -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="visi-misi-box">
                        <!-- Ikon daun -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-daun" viewBox="0 0 16 16">
                            <path d="M1.4 1.7c.216.289.65.84 1.725 1.274 ... (potong untuk ringkas)" />
                        </svg>
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
                <p class="text-center mt-3">
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
                    <img src="/img/suhu.png" alt="Monitoring Suhu" class="card-img-top">
                    <h5>Monitoring Suhu</h5>
                    <p>Pantau suhu rumah kaca secara real-time.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <h5>Sensor Kelembapan</h5>
                    <p>Deteksi kelembapan tanah untuk pengairan otomatis.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <h5>Kontrol Otomatis</h5>
                    <p>Atur kipas, penyiram, dan pencahayaan otomatis.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <h5>Mobile Dashboard</h5>
                    <p>Kelola semua fitur melalui aplikasi seluler.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR TEAM --}}
    <section class="container my-5">
        <h2 class="text-center mb-4">Our Team</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <img src="/img/ceo.jpg" class="img-fluid rounded-circle mb-2" width="100">
                <h5>CEO</h5>
                <p>Dinda Patrisca</p>
            </div>
            <div class="col-md-3">
                <img src="/img/cto.jpg" class="img-fluid rounded-circle mb-2" width="100">
                <h5>CTO</h5>
                <p>Yoga Bayu</p>
            </div>
            <div class="col-md-3">
                <img src="/img/cmo.jpg" class="img-fluid rounded-circle mb-2" width="100">
                <h5>CMO</h5>
                <p>Akhyar</p>
            </div>
            <div class="col-md-3">
                <img src="/img/produksi.jpg" class="img-fluid rounded-circle mb-2" width="100">
                <h5>Kepala Produksi</h5>
                <p>Heru</p>
            </div>
        </div>
    </section>

    {{-- OUR ACHIEVEMENT --}}
    <section class="container my-5">
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
    </section>

    {{-- TESTIMONI --}}
    <section class="py-5" style="background-color: #e9f5ec;">
        <div class="container">
            <h2 class="text-center mb-4">Ini Kata Mereka</h2>
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-white">
                        <p>"Dengan Verdant, kami bisa menanam dengan cepat, hemat air dan hasil lebih maksimal."
                            <br><strong>– Tedi Sandi, Sleman</strong>
                        </p>
                        <span>⭐⭐⭐⭐⭐</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-white">
                        <p>"Saya bisa memantau tanaman, bahkan saat saya di luar kota. Luar biasa!"
                            <br><strong>– Yoking, Yogyakarta</strong>
                        </p>
                        <span>⭐⭐⭐⭐⭐</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
