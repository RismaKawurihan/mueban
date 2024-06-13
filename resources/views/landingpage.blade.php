<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mueban</title>
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #mainNav .navbar-nav .nav-item .nav-link {
            font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.95rem;
            color: #120606;
            letter-spacing: 0.0625em;
        }



        .timeline>li .timeline-image {
            position: absolute;
            overflow: hidden;
            object-fit: cover;
            z-index: 100;
            left: 0;
            width: 150px;
            height: 150px;
            margin-left: 0;
            text-align: center;
            color: white;
            border: 7px solid #e9ecef;
            border-radius: 50%;
            background-color: #ffc800;
        }
        .timeline-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
        }


        @media (min-width: 700px) {
            .timeline:before {
                left: 50%;
            }

            .timeline>li {
                min-height: 100px;
                margin-bottom: 100px;
            }

            .timeline>li .timeline-panel {
                float: left;
                width: 41%;
                padding: 0 20px 20px 30px;
                text-align: right;
            }

            .timeline>li .timeline-image {
                left: 50%;
                width: 100px;
                height: 100px;
                margin-left: -50px;
            }


            .timeline>li.timeline-inverted>.timeline-panel {
                float: right;
                padding: 0 30px 20px 20px;
                text-align: left;
            }
        }

        @media (min-width: 92px) {

            .timeline>li .timeline-image {
                width: 200px;
                height: 200px;
                margin-left: -75px;
            }

        }

        .footer {
            text-align: center;
            font-size: 0.9rem;
            font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <img src="{{ asset('images/Mueban Logo.png') }}" alt=" " width="150" height="150" /></a>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Mueban</a></li>
                    <li class="nav-item"><a class="nav-link" href="#info">Info</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <img src="{{ asset('images/Background.png') }}" alt=" " width="1300" /></a>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center" style="margin-top: 2rem;">
                <h2 style="font-family: Georgia, serif;">Museum Bandung</h2>
                <h3 class="section-subheading text-muted" style="font-family: Georgia, serif;">Explore Lebih Tentang
                    Museum di Bandung</h3>
            </div>
            <div class="row text-center" style="margin-top: 2rem;">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-map-pin fa-stack-1x fa-inverse"></i>
                    </span>
                    <div style="font-family: Georgia, serif;">
                        <h4 class="my-3">Lokasi Museum</h4>
                        <p class="text-muted" style="text-align: justify;">
                            Bandung, kota dengan julukannya sebagai Paris van Java, tidak hanya dikenal dengan
                            keindahan alam dan kuliner yang menggugah selera, tetapi juga kaya akan sejarah dan budaya
                            yang dapat dieksplorasi melalui museum-museum yang tersebar di berbagai sudut kota.
                            Museum-museum ini menjadi jendela untuk melihat masa lalu, memahami perjalanan sejarah, dan
                            mengapresiasi warisan budaya yang ada.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-road fa-stack-1x fa-inverse"></i>
                    </span>
                    <div style="font-family: Georgia, serif;">
                        <h4 class="my-3">Jalan</h4>
                        <p class="text-muted" style="text-align: justify;">
                            Bandung, dengan segala pesonanya, menawarkan berbagai destinasi menarik yang sarat akan
                            nilai sejarah dan budaya. Menjelajahi museum-museum di kota ini,
                            menggunakan transportasi umum seperti bus kota dan angkot bisa menjadi pilihan yang nyaman
                            dan ekonomis. Berikut adalah panduan rute dan halte penting menuju beberapa museum terkenal
                            di Bandung.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-bus fa-stack-1x fa-inverse"></i>
                    </span>
                    <div style="font-family: Georgia, serif;">
                        <h4 class="my-3">Halte Trans Bandung</h4>
                        <p class="text-muted" style="text-align: justify;">
                            Salah satu cara yang nyaman dan efisien untuk mengunjungi museum-museum ini adalah dengan
                            menggunakan Bus Trans Bandung. Trans Metro Bandung adalah layanan bus raya terpadu di Kota
                            Bandung yang dioperasikan oleh Dinas Perhubungan Kota Bandung. Harga Tiket Trans Bandung
                            yaitu Rp2.000 - Rp4.900.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galery-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center" style="margin-top: 2rem;" >
                <h2 class="" style="font-family: Georgia, serif;">Galery</h2>
                <h3 class="" style="font-family: Georgia, serif;">Tentang Museum Bandung Untukmu</h3>
            </div>
            <ul class="timeline"  style="margin-top: 2rem;">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/museum barli.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Barlin</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Museum Barli Bandung dikenal sebagai museum yang menampilkan sebuah
                                pajangan karya lukis bahkan hingga mainan jadul. </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Amazing Artgamas.jpg') }}" alt="" /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Amazing Artgamas</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Amazing Artgames Bandung merupakan museum karya seni rupa 3D. Objek
                                wisata ini menawarkan beberapa zone 3D dengan cerita menarik. Setiap zone-nya bisa
                                dijadikan spot fotogenik yang instagramable.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Kota Bandung.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Kota Bandung</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Museum Kota Bandung adalah museum yang menyimpan barang-barang yang
                                berkaitan erat dengan sejarah berdirinya Kabupaten dan Kota Bandung </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Puspa Iptek Sundial.jpg') }}" alt="" /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Puspa Iptek Sundial</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Museum Puspa Iptek Sundial Bandung adalah tempat menarik yang
                                mengombinasikan wisata dan edukasi. Museum ini memiliki lebih dari 150 peraga interaktif
                                yang memungkinkan pengunjung untuk langsung berinteraksi dengan ilmu pengetahuan dan
                                teknologi.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Mandala Wangsit Siliwangi.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Mandala Wangsit Siliwangi</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Museum Wangsit Mandala Siliwangi adalah museum militer yang berada di
                                Kota Bandung, Jawa Barat. Koleksi museum terdiri dari peralatan perang yang digunakan
                                oleh pasukan Kodam Siliwangi, dari senjata tradisional Sunda yang digunakan sebelum era
                                modern seperti tombak, panah, keris, kujang, dan bom molotov.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/NuArt Sculpture Park.jpg') }}" alt="" /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum NuArt Sculpture Park</h4>
                        <div class="timeline-body">
                            <p class="text-muted">NuArt Sculpture Park adalah sebuah museum galeri seni patung yang
                                terletak di bagian Bandung Utara, Jawa Barat, Indonesia. Tempat ini merupakan pusat seni
                                patung karya Nyoman Nuarta.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Geologi Bandung.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Geologi Bandung</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Museum Geologi Bandung memiliki koleksi berupa materi geologi, mulai
                                dari fosir, batuan, hingga mineral. Koleksi dan materi geologi di dalam museum ini
                                merupakan hasil dari pengumpulan selama kerja lapangan di Indonesia sejak tahun 1850.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Pos Indonesia.jpg') }}" alt="" /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Pos Indonesia</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Museum Pos Indonesia merupakan museum yang hadir sejak masa Hindia
                                Belanda dengan nama Museum PTT (Pos Telegrap dan Telepon).</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Konverensi Asia Afrika.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Konverensi Asia Afrika</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Museum KAA, tempat sejarah Asia Afrika dikibarkan, dimana tempat
                                Kemitraan Asia Afrika ditegakkan demi masa depan yang lebih baik.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Museum Wot Bat u.jpg') }}" alt="" /></div>
                    <div class="timeline-panel" style="font-family: Georgia, serif;">
                        <h4>Museum Wot Batu</h4>
                        <div class="timeline-body">
                            <p class="text-muted">Wot Batu adalah karya seni instalasi berskala ruang yang dibuat oleh
                                Sunaryo, seniman asal Bandung. Pada ruang terbuka, lebih dari 135 batu ditanam dan
                                ditata secara konseptual dalam harmoni.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            <br />
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="gallery">

            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4" id="info">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-start">Copyright &copy; Mueban 2024</div>
                <div class="col-lg-3 text-lg-start">Distributed By Risma Kawurihan</a></div>
                <div class="col-lg-3 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2"
                        href="https://x.com/RismaKawurihan2?t=oSk05dLwwp9UsgTVpZl6fQ&s=08"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2"
                        href="https://www.instagram.com/risma_kawurihan2513?utm_source=qr&igsh=MWI2Z3A5aDY3MTNtZw=="><i
                            class="fab brands fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2"
                        href="#https://github.com/RismaKawurihan/responsi_pgweb"><i
                            class="fab brands fa-github"></i></a>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>
