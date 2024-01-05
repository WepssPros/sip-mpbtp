<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>E-Mpbtp Landing Guide</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap"
            rel="stylesheet">

        <link href="{{asset('../frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('../frontend/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('../frontend/css/templatemo-ebook-landing.css')}}" rel="stylesheet">



    </head>

    <body>

        <main>


            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <i class="navbar-brand-icon bi-book me-2"></i>
                        <span>e-mpbtp</span>
                    </a>

                    @guest
                    <div class="d-lg-none ms-auto me-3">
                        <a href="{{route('login')}}" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Login</span>
                        </a>
                    </div>
                    @endguest
                    @auth
                    <div class="d-lg-none ms-auto me-3">
                        <a href="{{route('login')}}" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Dashboard</span>
                        </a>
                    </div>
                    @endauth


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            {{-- <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">The Book</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Author</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>  --}}
                        </ul>
                        @guest
                        <div class="d-none d-lg-block">
                            <a href="{{route('login')}}"
                                class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span>Login</span>
                            </a>
                        </div>
                        @endguest
                        @auth
                        <div class="d-none d-lg-block">
                            <a href="{{route('login')}}"
                                class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span>Dashboard</span>
                            </a>
                        </div>
                        @endauth
                    </div>
                </div>
            </nav>

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                            <h6>Introducing Sistem Informasi</h6>

                            <h1 class="text-white mb-4">Sistem Informasi Manajemen Perkara Bidang Tindak Pidana Umum
                                Kejaksaan Negri <br> Sungai Penuh </h1>

                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Discover More</a>

                            <a href="#section_3" class="link link--kale smoothscroll">Meet the Author</a>
                        </div>

                        <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                            <img src="{{asset('../frontend/images/education-online-books.png')}}"
                                class="hero-image img-fluid" alt="education online books">
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="avatar-group d-flex flex-wrap align-items-center">
                                <img src="{{asset('../frontend/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg')}}"
                                    class="img-fluid avatar-image" alt="">

                                <img src="{{asset('../frontend/images/avatar/portrait-young-redhead-bearded-male.jpg')}}"
                                    class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="{{asset('../frontend/images/avatar/pretty-blonde-woman.jpg')}}"
                                    class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="{{asset('../frontend/images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend.jpg')}}"
                                    class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>

                                    <small class="ms-3">2,564 reviews</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-lg-5"></section>


            <section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('../frontend/images/tablet-screen-contents.jpg')}}" class="img-fluid"
                                alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h6>Modern &amp; Efisien</h6>


                                <h2 class="mb-4">Tentang Sistem Informasi</h2>

                                <p>Sistem Informasi <a rel="nofollow" href="#" target="_blank">e-mpbtp</a>
                                    bertujuan untuk mengelola perkara dalam bidang tindak pidana umum secara efisien.
                                    Sistem ini dirancang berbasis web,
                                    memungkinkan Kejaksaan Negeri Sungai Penuh untuk mengelola, melacak, dan mengakses
                                    informasi perkara dengan lebih baik.
                                </p>

                                <p>Dengan sistem ini, diharapkan akan meningkatkan transparansi, aksesibilitas, dan
                                    efektivitas dalam mengelola perkara
                                    tindak pidana umum, sehingga memperkuat tata kelola hukum di wilayah tersebut.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h6>Apa Yang Saya Kerjakan ?</h6>

                            <h2 class="mb-5">Tentang Aplikasi</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <nav id="navbar-example3" class="h-100 flex-column align-items-stretch">
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link smoothscroll" href="#item-1">Introduction</a>

                                    <a class="nav-link smoothscroll" href="#item-2">Chapter 1: <strong>Input Data Master
                                        </strong></a>

                                    <a class="nav-link smoothscroll" href="#item-3">Chapter 2: <strong>Pengolahan Data
                                            Perkara</strong></a>

                                    <a class="nav-link smoothscroll" href="#item-4">Chapter 3:
                                        <strong>Laporan Data Perkara </strong></a>

                                    <a class="nav-link smoothscroll" href="#item-5">Chapter 4:
                                        <strong>Laporan Data Tindak Pidana </strong></a>
                                </nav>
                            </nav>
                        </div>

                        <div class="col-lg-8 col-12">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                                class="scrollspy-example-2" tabindex="0">
                                <div class="scrollspy-example-item" id="item-1">
                                    <h5>Tentang Aplikasi</h5>

                                    <p>Sistem informasi yang bertujuan untuk mengelola perkara dalam bidang tindak
                                        pidana umum secara efisien. Sistem ini
                                        dirancang berbasis web, memungkinkan Kejaksaan Negeri Sungai Penuh untuk
                                        mengelola, melacak, dan mengakses informasi
                                        perkara dengan lebih baik. Dengan sistem ini, diharapkan akan meningkatkan
                                        transparansi, aksesibilitas, dan efektivitas
                                        dalam mengelola perkara tindak pidana umum, sehingga memperkuat tata kelola
                                        hukum di wilayah tersebut.</p>

                                    <p><strong>What is Content Marketing?</strong> If you are wondering what content
                                        marketing is all about, this is the place to start.</p>

                                    <blockquote class="blockquote">Harapannya, aplikasi ini akan membantu pengguna
                                        mencapai lebih banyak dalam hidup mereka dan mengelola waktu mereka
                                        dengan lebih baik, menciptakan dampak positif dalam kehidupan pribadi dan
                                        profesional mereka.</blockquote>


                                </div>

                                <div class="scrollspy-example-item" id="item-2">
                                    <h5>Input Data Master</h5>

                                    <p>Identifikasi berbagai jenis tindak pidana yang akan dimasukkan ke dalam sistem.
                                        Ini mungkin mencakup jenis kejahatan,
                                        kode tindak pidana, tingkat keparahan, dan elemen-elemen penting lainnya.</p>

                                    <blockquote class="blockquote">Penginputan data tindak pidana yang baik adalah kunci
                                        dalam memastikan bahwa sistem informasi manajemen perkara dapat
                                        berfungsi efektif, membantu kejaksaan dalam memproses perkara tindak pidana
                                        dengan benar, dan menyediakan data yang
                                        akurat untuk pengambilan keputusan dan pelaporan..</blockquote>


                                </div>

                                <div class="scrollspy-example-item" id="item-3">
                                    <h5>Pengolahan Data Perkara</h5>

                                    <p>Pengolahan data merujuk pada serangkaian tindakan atau proses yang dilakukan pada
                                        data untuk mengubahnya menjadi
                                        informasi yang lebih bermakna. Ini melibatkan transformasi, analisis,
                                        penyimpanan, dan manipulasi data untuk tujuan
                                        tertentu. Pengolahan data sangat penting dalam berbagai aspek kehidupan,
                                        termasuk dalam bisnis, ilmu pengetahuan,
                                        teknologi, dan administrasi. Berikut adalah beberapa poin penting dalam
                                        pengolahan data
                                    </p>
                                    <p>Manajemen Data: Manajemen data adalah aspek pengolahan data yang berfokus pada
                                        organisasi, penyimpanan, dan pemeliharaan
                                        data secara keseluruhan. Ini termasuk pembaruan data, cadangan data, dan
                                        kebijakan retensi data.</p>

                                    <blockquote class="blockquote">Pengolahan data memungkinkan organisasi dan individu
                                        untuk mengambil keputusan yang lebih baik, memahami lingkungan
                                        sekitarnya, dan menjalankan operasi sehari-hari dengan lebih efisien. Dalam era
                                        digital, pengolahan data menjadi semakin
                                        penting dengan adanya ledakan data yang terus bertambah. Dengan kemajuan
                                        teknologi seperti kecerdasan buatan dan
                                        analitik data, pengolahan data menjadi lebih canggih dan memberikan peluang yang
                                        tak terbatas untuk inovasi dan
                                        pengembangan..</blockquote>

                                </div>

                                <div class="scrollspy-example-item" id="item-4">
                                    <h5>Laporan Data Perkara</h5>

                                    <p>Laporan data perkara adalah dokumen yang berisi informasi terperinci tentang
                                        perkara hukum atau kasus yang sedang
                                        diproses oleh sistem peradilan atau lembaga yang berwenang. Laporan ini
                                        digunakan untuk menyajikan fakta, perkembangan,
                                        dan hasil terkait dengan perkara tertentu kepada pihak-pihak yang terlibat,
                                        seperti hakim, pengacara, pihak yang terkait
                                        dalam perkara, dan pihak berkepentingan lainnya. Berikut adalah beberapa poin
                                        penting dalam laporan data perkara.</p>

                                    <p>Hasil dan Keputusan: Laporan ini akan mencantumkan hasil atau keputusan yang
                                        telah diambil dalam perkara, seperti apakah
                                        perkara telah ditutup, dihentikan, atau masih dalam proses. Jika ada keputusan
                                        pengadilan, itu juga akan dicantumkan..</p>

                                    <p>Informasi Pihak-Pihak Terkait: Laporan akan mencantumkan informasi tentang semua
                                        pihak yang terlibat dalam perkara,
                                        termasuk pengacara, saksi, ahli, dan lain-lain. Ini membantu dalam
                                        mengidentifikasi siapa yang terlibat dalam perkara
                                        tersebut.</p>

                                    <blockquote class="blockquote">Laporan data perkara sangat penting dalam sistem
                                        peradilan karena membantu pihak yang berkepentingan untuk memahami
                                        perkembangan perkara, mengambil keputusan yang tepat, dan mengikuti proses hukum
                                        secara transparan. Laporan semacam ini
                                        juga dapat digunakan dalam pelaporan ke atasannya atau kepada pihak berwenang
                                        lainnya untuk tujuan pengawasan dan
                                        evaluasi. Dalam beberapa kasus, laporan ini juga dapat digunakan untuk
                                        kepentingan publik dan media dalam rangka
                                        memberikan informasi tentang perkara yang penting.</blockquote>
                                </div>

                                <div class="scrollspy-example-item" id="item-5">
                                    <h5>Laporan Tindak Pidana</h5>

                                    <p>Laporan tindak pidana adalah dokumen yang berisi rincian tentang suatu kejahatan
                                        atau tindak pidana yang telah terjadi
                                        atau sedang dalam proses penyelidikan atau penuntutan oleh aparat penegak hukum.
                                        Laporan ini digunakan untuk mencatat
                                        informasi penting tentang tindak pidana dan untuk mengorganisir data terkait
                                        agar dapat digunakan dalam proses
                                        investigasi dan peradilan. Berikut adalah beberapa poin penting dalam laporan
                                        tindak pidana.</p>

                                    <p>Bukti dan Saksi: Laporan mencakup informasi tentang bukti fisik yang ditemukan di
                                        tempat kejadian dan nama-nama saksi
                                        yang melihat atau terlibat dalam tindak pidana. Bukti seperti barang bukti,
                                        dokumen, atau rekaman dapat dicantumkan.</p>

                                    <p>Hasil Penyelidikan: Laporan mencantumkan hasil penyelidikan atau perkembangan
                                        yang telah terjadi dalam penanganan tindak
                                        pidana, seperti apakah kasus telah ditutup, penuntutan sedang berlangsung, atau
                                        tindakan apa yang telah diambil oleh
                                        aparat penegak hukum.</p>

                                    <blockquote class="blockquote">Laporan tindak pidana sangat penting dalam sistem
                                        hukum karena membantu aparat penegak hukum untuk mengorganisir dan
                                        melacak informasi yang berkaitan dengan tindak pidana.</blockquote>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="author-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('../frontend/images/portrait-mature-smiling-authoress-sitting-desk.jpg')}}"
                                class="author-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <h6>Pembuat Aplikasi</h6>

                            <h2 class="mb-4">Mila .Sari</h2>

                            <p>Saya adalah seorang mahasiswa bersemangat yang tertarik pada bidang teknologi informasi
                                dan pengembangan perangkat
                                lunak. Saya memiliki minat khusus dalam mengembangkan sistem informasi berbasis web yang
                                dapat memberikan manfaat nyata
                                bagi masyarakat. Dengan latar belakang dalam program studi [Program Studi Mahasiswa],
                                saya telah menggabungkan
                                pengetahuan akademik saya dengan keahlian dalam pengembangan aplikasi web.</p>

                            <p>Saya bercita-cita untuk terus mengembangkan keterampilan dalam pengembangan perangkat
                                lunak dan teknologi informasi.
                                Saya ingin dapat memberikan kontribusi positif dalam perbaikan sistem hukum dan
                                manajemen perkara di Indonesia melalui
                                solusi berbasis teknologi informasi yang inovatif dan efisien.</p>
                        </div>

                    </div>
                </div>
            </section>





            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form ebook-download-form bg-white shadow" action="#" method="post"
                                role="form">
                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Get your free ebook</h2>
                                </div>

                                <div class="ebook-download-form-body">
                                    <div class="input-group mb-4">
                                        <input type="text" name="ebook-form-name" id="ebook-form-name"
                                            class="form-control" aria-label="ebook-form-name"
                                            aria-describedby="basic-addon1" placeholder="Your Name" required>

                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-person"></i>
                                        </span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" name="ebook-email" id="ebook-email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="your@company.com"
                                            aria-label="ebook-form-email" aria-describedby="basic-addon2" required="">

                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="custom-form-icon bi-envelope"></i>
                                        </span>
                                    </div>

                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Download ebook</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <h6 class="mt-5">Say hi and talk to us</h6>

                            <h2 class="mb-4">Contact</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                Jl. Depati Parbo, Karya Bakti, Kec. Sungai Penuh, Kota Sungai Penuh, Jambi 37111
                            </p>

                            <p class="mb-2">
                                <a href="tel: (0748) 21327" class="contact-link">
                                    (0748) 21327
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@kejaksaantinggisungaipenuh.com
                                </a>
                            </p>

                            <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/kejari_sungaipenuh/"
                                        class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://kejari-sungaipenuh.kejaksaan.go.id/"
                                        class="social-icon-link bi bi-browser-chrome"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/kejari_sungaipenuh/"
                                        class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://api.whatsapp.com/send/?phone=6281274038807&text=Hai+admin+Kejaksaan+Negeri+Sungai+Penuh&type=phone_number&app_absent=0"
                                        class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <p class="copyright-text">Copyright © 2203 ebook Sungai Penuh Mpbtp
                                <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by
                                    Mila Sari</a>
                            </p>
                        </div>

                    </div>
                </div>
            </section>


            // Default values shown

        </main>

        <!-- JAVASCRIPT FILES -->

        <script src="{{asset('../frontend/js/jquery.min.js')}}"></script>
        <script src="{{asset('../frontend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('../frontend/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('../frontend/js/click-scroll.js')}}"></script>
        <script src="{{asset('../frontend/js/custom.js')}}"></script>


    </body>

</html>