<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edukasi Stunting</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/kkn-jkp-logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/kkn-jkp-logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/kkn-jkp-logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/kkn-jkp-logo.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/') }}">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />

  </head>

  <body>

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="{{ asset('assets/img/favicons/kkn-jkp-logo.png') }}" width="70" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#pengenalan">Pengenalan</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#dampak">Dampak</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#penyebab">Penyebab</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#pencegahan">Pencegahan</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#dbmp">DBMP</a></li>
              {{-- <li class="nav-item px-2"><a class="nav-link" href="#findUs">Help </a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Contact</a></li> --}}
            </ul>
            {{-- <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="#!">Sign In</a> --}}
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/gallery/hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7"><strong>Menuju Generasi Sehat </strong><br />Pelajari Cara Mencegah Stunting Sejak Dini</h1>
              <p class="fs-1 mb-5">Selamat datang di media informasi pencegahan stunting! Temukan panduan edukatif untuk membantu orang tua, guru, dan komunitas memahami serta mencegah stunting sejak dini. Mari bersama-sama membangun masa depan yang lebih baik bagi generasi penerus kita. Pelajari lebih lanjut dan ambil tindakan sekarang!</p>
              {{-- <a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Make an Appointment</a> --}}
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="pengenalan">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <h1 class="text-center">Apa Itu Stunting?</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">

        <div class="container">
          <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
          </div>
          <!--/.bg-holder-->
  
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="assets/img/gallery/health-care.png" alt="..." /></div>
              <div class="col-md-6 text-center text-md-start">
                <h2 class="fw-bold mb-4">Ketahui Apa Itu Stunting</h2>
                {{-- <p>We think that everyone should have easy access to excellent <br class="d-none d-sm-block" />healthcare. Our aim is to make the procedure as simple as <br class="d-none d-sm-block" />possible for our patients and to offer treatment no matter<br class="d-none d-sm-block" />where they are — in person or at their convenience. </p> --}}
                <p style="font-size: 18px">Stunting merupakan sebuah kondisi gagal tumbuh pada anak balita (bawah lima tahun) akibat kekurangan gizi kronis sehingga anak terlalu pendek untuk usianya. Kekurangan gizi terjadi sejak bayi dalam kandungan dan pada masa awal setelah bayi lahir akan tetapi, kondisi stunting baru nampak setelah bayi berusia 2 tahun. Balita pendek (<em style="font-weight: bolder">stunted</em>) dan sangat pendek (<em style="font-weight: bold">severely stunted</em>) adalah balita dengan panjang badan (PB/U) atau tinggi badan (TB/U) menurut umurnya lebih kecil dibandingkan dengan standar baku dari WHO.</p>
                <div class="py-3">
                  {{-- <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Learn more </button> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div></div> 
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      <section class="bg-secondary" id="dampak">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="assets/img/gallery/eye-care.png" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Apa Saja Dampak yang Ditimbulkan Dari<br class="d-none d-sm-block" />Masalah Stunting?</h2>
              <p class="text-light" style="font-size: 20px">1. Anak mudah terserang penyakit, terutama penyakit infeksi dikarenakan sistem imun yang lebih lemah<br class="d-none d-sm-block" />
              2. Pertumbuhan tidak optimal <br class="d-none d-sm-block" />
              3. Kemampuan akademik tidak optimal, dikarenakan perkembangan dan pertumbuhan otak yang tidak optimal <br class="d-none d-sm-block"/>
              4. Meningkatkan risiko terkena penyakit kronis terutama penyakit tidak menular, seperti diabetes, hipertensi, dan penyakit jantung </p>
              {{-- <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Learn more </a></div> --}}
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="penyebab">

        <div class="container">
          <div class="row">
            <div class="col-12 py-0">
              {{-- <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-us.png);background-position:top center;background-size:contain;">
              </div> --}}
              <!--/.bg-holder-->

              <h1 class="text-center">Apa Saja yang Menyebabkan Stunting?</h1>
              <p class=" text-justify mt-5">Stunting disebabkan oleh faktor multi dimensi dan tidak hanya disebabkan oleh faktor gizi buruk dan penyakit infeksi yang dialami oleh ibu hamil maupun anak balita. Intervensi yang paling menentukan untuk mengurangi pervalensi stunting dapat dilakukan pada 1.000 Hari Pertama Kehidupan (HPK), yaitu mulai dari awal kehamilan sampai anak berumur 2 tahun. Beberapa faktor lain yang dapat menjadi penyebab stunting dapat diantaranya adalah</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      <section class="py-5 pb-0">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-top">
            {{-- <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-50" src="assets/img/gallery/health-care.png" alt="..." /></div> --}}
            <div class="col-md-6 text-md-start">
              <h2 class="fw-bold mb-2">1. Pola Asuh yang Kurang Baik</h2>
              <p class=" ">termasuk kurangnya pengetahuan ibu mengenai kesehatan dan gizi sebelum dan pada masa kehamilan, serta setelah ibu melahirkan. Beberapa fakta dan informasi yang ada menunjukkan bahwa 60% dari anak usia 0-6 bulan tidak mendapatkan Air Susu Ibu (ASI) secara ekslusif, dan 2 dari 3 anak usia 0-24 bulan tidak menerima Makanan Pendamping Air Susu Ibu (MP-ASI). MP-ASI diberikan/mulai diperkenalkan ketika balita berusia diatas 6 bulan. Selain berfungsi untuk mengenalkan jenis makanan baru pada bayi, MP-ASI juga dapat mencukupi kebutuhan nutrisi tubuh bayi yang tidak lagi dapat disokong oleh ASI, serta membentuk daya tahan tubuh dan perkembangan sistem imunologis anak terhadap makanan maupun minuman.</p>
            </div>
            <div class="col-md-6 text-md-start">
              <h2 class="fw-bold mb-2">2. Masih terbatasnya layanan kesehatan termasuk layanan ANC-Ante natal Care (pelayanan kesehatan untuk ibu selama masa kehamilan), Post Natal Care, dan pembelajaran dini yang berkualitas </h2>
              {{-- <p>Sanitasi yang buruk dapat menimbulkan penyakit infeksi pada balita serta diare dan kecacingan yang mengganggu proses penyerapan nutrisi, jika kondisi ini terjadi dalam waktu lama dapat mengakibatkan stunting</p> --}}
            </div>
            <div class="col-md-6 text-md-start">
              <h2 class="fw-bold mb-2 mt-2">3. Kurangnya Akses Rumah Tangga ke Makanan Bergizi</h2>
              <p>dikarenakan harga beberapa bahan makanan di Indonesia masih tergolong mahal dan tidak sebanding dengan pendapatan sehari-hari pada sebagian besar rumah tangga</p>
            </div>
            <div class="col-md-6 text-md-start">
              <h2 class="fw-bold mb-2 mt-2">4. Kurangnya Akses Air Bersih dan Sanitasi</h2>
              <p>Data yang diperoleh di lapangan menunjukkan bahwa 1 dari 5 rumah tangga di Indonesia masih buang air besar (BAB) diruang terbuka, serta 1 dari 3 rumah tangga belum memiliki akses ke air minum bersih</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="py-5 pb-0 pt-0">
          <div class="container" id="pencegahan">
            <div class="row">
              <div class="col-12 py-3 mt-3">
                {{-- <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
                </div> --}}
                <!--/.bg-holder-->
                <h1 class="text-center mb-2">Bagaimana Cara Mencegah Stunting?</h1>
                <p class="text-center mb-0">Periode 1000 Hari Pertama Kehidupan (HPK) merupakan periode emas (golden age) untuk pertumbuhan dan perkembangan anak. Hal tersebut didasarkan pada kenyataan bahwa pada masa janin hingga anak berusia 2 tahun, terjadi proses tumbuh kembang yang sangat cepat dan tidak terjadi pada kelompok usia lain. Gagal tumbuh pada periode ini dapat mempengaruhi status gizi dan kesehatan pada usia dewasa. Maka dari itu, pencegahan terutama pada periode 1000 HPK sangat diperlukan, yakni mulai sejak masa konsepsi hingga berusia 2 tahun.</p>
              </div>
            </div>
          </div>
          <!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
        <section class="py-8 pt-5">
          <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
          </div>
          <!--/.bg-holder-->
  
          <div class="container">
            <div class="row align-items-center">
              <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100">
                      <div class=" text-center text-sm-start pt-3 pt-sm-0">
                        <h2>Sejak Kehamilan</h2>
                        {{-- <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div> --}}
                        <p>Pemeriksaan kehamilan rutin atau antenatal care (ANC) merupakan salah satu usaha pencegahan stunting selama masa kehamilan. Selama hamil ibu disarankan untuk memeriksakan kehamilan minimal sebanyak 6 kali, 1 kali pada trimester pertama, 2 kali pada trimester kedua, dan 3 kali pada trimester ketiga. Paling sedikit 2 kali pemeriksaan oleh dokter atau dokter spesialis kebidanan dan kandungan pada trimester pertama dan ketiga dengan memakai USG. Pemeriksaan ini dilakukan untuk memantau kesehatan ibu dan janin, salah satunya melalui penimbangan berat badan ibu dan pengukuran lingkar lengan atas  (LiLA) secara berkala. Hal ini dilakukan untuk mengetahui pemenuhan gizi ibu hamil dan janin. Pada ibu yang masuk kategori kekurangan energi kronis (KEK) dilakukan pemberian PMT atau makanan tambahan untuk mengejar kenaikan berat badan selama kehamilan.
                        <br /><br />
                        Selain melakukan pemeriksaan rutin, selama kehamilan ibu perlu rutin minum tablet tambah darah (TTD) minimal 90 tablet selama kehamilan, mengkonsumsi beragam jenis bahan makanan seperti makanan pokok, protein hewani, kacang-kacangan, buah dan sayur, minum air 8-12 gelas/hari (2-3 liter)/hari, serta menambahkan 1 porsi makanan utama atau makanan selingan dari sebelumnya.
                          </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100">
                      <div class=" text-center text-sm-start pt-3 pt-sm-0">
                        <h2>Saat Bayi Lahir</h2>
                        {{-- <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div> --}}
                        <p>Pada periode ini, pencegahan stunting dilakukan dengan cara mendorong ibu pasca melahirkan untuk melakukan inisiasi menyusu dini (IMD) terutama memberikan kolostrum dan pemberian ASI eksklusif selama enam bulan pertama. Selain itu, diberikan promosi mengenai pemberian ASI Eksklusif selama 6 bulan disertai pemantauan tumbuh kembang rutin minimal 1 bulan sekali di posyandu atau puskesmas. 
                         <br /><br /> 
                        Sebagai upaya pencegahan penyakit, dianjurkan juga untuk dilakukan pemberian imunisasi dasar lengkap pada bayi. Untuk ibu, pada 1-2 hari pasca bersalin akan diberikan suplementasi kapsul vitamin A.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100">
                      <div class=" text-center text-sm-start pt-3 pt-sm-0">
                        <h2>Saat Bayi Berusia 6-24 Bulan</h2>
                        {{-- <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div> --}}
                        <p>Intervensi gizi dilakukan dengan mendorong ibu untuk tetap memberikan ASI hingga anak berusia 24 bulan. Selain itu, usaha pencegahan lainnya yakni mendorong pemberian Makanan Pendamping ASI (MP-ASI) setelah anak berusia lebih dari 6 bulan. Intervensi lainnya dilakukan dengan menyediakan obat cacing, pemberian suplementasi zinc, menyediakan fortifikasi zat besi pada makanan, imunisasi dasar dan lanjutan, pemberian suplementasi vitamin A (kapsul biru/merah), dan melakukan perlindungan dari penyakit menular seperti malaria dan diare. 
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100">
                      <div class=" text-center text-sm-start pt-3 pt-sm-0">
                        <h2>Perilaku Hidup Bersih dan Sehat (PHBS)</h2>
                        {{-- <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div> --}}
                        <p>Penerapan PHBS di rumah tangga dapat dimulai dengan meningkatkan akses terhadap air bersih dan fasilitas sanitasi, serta menjaga kesehatan lingkungan. PHBS dapat menurunkan kejadian sakit terutama penyakit infeksi yang dapat membuat energi untuk pertumbuhan teralihkan kepada perlawanan tubuh untuk menghadapi infeksi penyakit, sehingga zat gizi sulit terserap dan pertumbuhan dapat terhambat. 
                        </p>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100">
                      <div class="col-sm-3 text-center"><img src="assets/img/gallery/people-who-loves.png" width="100" alt="" />
                        <h5 class="mt-3 fw-medium text-secondary">Jhon Doe</h5>
                        <p class="fw-normal mb-0">UI/UX Designer</p>
                      </div>
                      <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                        <h2>Fantastic Response!</h2>
                        <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                        <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100">
                      <div class="col-sm-3 text-center"><img src="assets/img/gallery/people-who-loves.png" width="100" alt="" />
                        <h5 class="mt-3 fw-medium text-secondary">Jeny Doe</h5>
                        <p class="fw-normal mb-0">Web Designer</p>
                      </div>
                      <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                        <h2>Fantastic Response!</h2>
                        <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                        <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                      </div>
                    </div>
                  </div> --}}
                </div>
                <div class="row">
                  <div class="position-relative z-index-2 mt-5">
                    <ol class="carousel-indicators">
                      <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                      <li data-bs-target="#carouselPeople" data-bs-slide-to="3"> </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
        <div class="container " id="dbmp">
          <div class="row">
            <div class="col-12 py-3">
              {{-- <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-us.png);background-position:top center;background-size:contain;">
              </div> --}}
              <!--/.bg-holder-->
              <h1 class="text-center mb-4 ">Daftar Bahan Makanan Penukar</h1>
              <p class=" text-center">Daftar Bahan Makanan Penukar (DBMP) merupakan daftar yang memuat nama bahan pangan dalam ukuran rumah tangga (URT), berat dalam gram, serta kandungan energi, protein, karbohidrat, dan lemak pangan tersebut. DBMP mencakup beberapa bahan makanan yang memiliki nilai gizi yang sama untuk berat yang berbeda, sehingga dapat saling menukar dan disebut 1 satuan penukar.</p>
              <p class="text-center">DBMP terdiri dari 7 golongan bahan makanan, masing-masing golongan dapat dihitung beratnya untuk menghasilkan nilai energi dan zat gizi yang relatif sama. Jadi pada masing-masing golongan bahan makanan tersebut dapat ditukar dengan nilai gizi yang sama namun, beratnya berbeda. Perlu diingat bahwa bahan makan dari satu golongan tidak dapat ditukar dengan bahan makanan dari golongan lain.</p>
              <p class="text-center">Ukuran Rumah Tangga (URT) adalah satuan jumlah dari bahan makanan yang dinyatakan dalam bentuk peralatan dan ukuran yang lazim digunakan dalam rumah tangga pada kehidupan sehari-hari. Satuan yang biasanya digunakan seperti, piring, gelas (240 ml untuk air serta minuman lain dan 200 ml untuk susu cair), sendok, mangkok, potong, buah, dsb.</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      <div class="container mb-4">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
        </div>  
        <!--/.bg-holder-->
        
          <h3 class="text-center mb-0">Golongan 1</h3>
          <p class="text-center mb-0">(Sumber Karbohidrat)</p>
          <p class="text-center mb-0">Bahan makanan ini umumnya digunakan sebagai makanan pokok<br />Satu satuan penukar mengandung :
          <br /><button class="btn btn-secondary rounded-pill mt-2">40 g Karbohidrat</button>
          <button class="btn btn-secondary rounded-pill mt-2">4 g Protein</button>
          <button class="btn btn-secondary rounded-pill mt-2">175 Kalori</button></p>
        <div class="carousel slide" id="golongan1" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="row h-100 mx-3 mt-6 mx-md-4 my-md-4">
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Bihun</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 1/2 Gelas</p>
                      <p class="text-600 mb-4">Berat(g) : 50</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Biskuit</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 4 Buah Besar</p>
                      <p class="text-600 mb-4">Berat(g) : 40</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Kentang</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 2 Buah Sedang</p>
                      <p class="text-600 mb-4">Berat(g) : 210</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Talas</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 1/2 Biji Sedang</p>
                      <p class="text-600 mb-4">Berat(g) : 125</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Roti Putih</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 3 Iris</p>
                      <p class="text-600 mb-4">Berat(g) : 70</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Singkong</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 1,5 Gelas</p>
                      <p class="text-600 mb-4">Berat(g) : 120</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <div class="row h-100 mx-3 mx-md-4 my-md-4">
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Tepung Tapioka</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 8 Sdm</p>
                      <p class="text-600 mb-4">Berat(g) : 50</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Tepung Beras</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 8 Sdm</p>
                      <p class="text-600 mb-4">Berat(g) : 50</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Jagung Segar</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 3 Biji Sedang</p>
                      <p class="text-600 mb-4">Berat(g) : 125</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Tepung Terigu</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 5 Sdm</p>
                      <p class="text-600 mb-4">Berat(g) : 50</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Nasi Ketan Putih</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT :  3/4 Gelas</p>
                      <p class="text-600 mb-4">Berat(g) : 100</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-4">
                  <div class="card card-span h-10 shadow">
                    <div class="card-body d-flex flex-column flex-center py-2">
                      {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                      <h4 class="mt-4">Tape Beras Ketan</h4>
                      <p class="mb-0 fs-xxl-1 text-center">URT : 5 Sdm</p>
                      <p class="text-600 mb-4">Berat(g) : 100</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

{{-- GOLONGAN 2 --}}

        <div class="container mb-4">
          <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
          </div>  
          <!--/.bg-holder-->
          <h3 class="text-center mb-0">Golongan 2</h3>
          <p class="text-center mb-0">(Sumber Protein Hewani)</p>
          <p class="text-center mb-4">Umumnya digunakan sebagai lauk. Menurut kandungan lemaknya, sumber protein hewani dibagi menjadi 3 (tiga), yaitu: </p>
          <h4 class="text-center mb-0">1. Rendah Lemak</h4>
          <p class="text-center mb-0">Satu satuan penukar mengandung :
          <br /><button class="btn btn-secondary rounded-pill mt-2">7 g Protein</button>
          <button class="btn btn-secondary rounded-pill mt-2">2 g Lemak</button>
          <button class="btn btn-secondary rounded-pill mt-2">50 Kalori</button></p>
          <div class="carousel slide" id="golongan2-rendah-lemak" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan2-rendah-lemak" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan2-rendah-lemak" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100 mx-3 mx-md-4 my-md-4 mt-0">
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Babat</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Besar</p>
                        <p class="text-600 mb-4">Berat(g) : 40</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Cumi-Cumi</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 4 Buah Besar</p>
                        <p class="text-600 mb-4">Berat(g) : 45</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Daging Ayam Tanpa Kulit</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Sedang</p>
                        <p class="text-600 mb-4">Berat(g) : 40</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Ikan Kembung</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1/3 Ekor Sedang</p>
                        <p class="text-600 mb-4">Berat(g) : 30</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Ikan Lele</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1/2 Ekor Sedang</p>
                        <p class="text-600 mb-4">Berat(g) : 40</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Ikan Mas</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1/3 Ekor Sedang</p>
                        <p class="text-600 mb-4">Berat(g) : 45</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row h-100 mx-3 mx-md-4 my-md-4">
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Ikan Pindang</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1/2 Ekor Sedang</p>
                        <p class="text-600 mb-4">Berat(g) : 25</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Ikan Mujair</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1/3 Ekor Kecil</p>
                        <p class="text-600 mb-4">Berat(g) : 30</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Kepiting</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1/3 Gelas</p>
                        <p class="text-600 mb-4">Berat(g) : 125</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Teri Kering</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1 Sdm</p>
                        <p class="text-600 mb-4">Berat(g) : 50</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Ikan Kakap</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 1/3 Ekor Besar</p>
                        <p class="text-600 mb-4">Berat(g) : 35</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                        <h4 class="mt-4">Putih Telur Ayam</h4>
                        <p class="mb-0 fs-xxl-1 text-center">URT : 2,5 Butir</p>
                        <p class="text-600 mb-4">Berat(g) : 65</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <h4 class="text-center mb-0">2. Lemak Sedang</h4>
            <p class="text-center mb-0">Satu satuan penukar mengandung :
            <br /><button class="btn btn-secondary rounded-pill mt-2">7 g Protein</button>
            <button class="btn btn-secondary rounded-pill mt-2">5 g Lemak</button>
            <button class="btn btn-secondary rounded-pill mt-2">75 Kalori</button></p>
            <div class="carousel slide" id="golongan2-lemak-sedang" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan2-lemak-sedang" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan2-lemak-sedang" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100 mx-3 mx-md-4 my-md-4">
                    <div class="col-md-4 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                          <h4 class="mt-4">Daging Sapi</h4>
                          <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Sedang</p>
                          <p class="text-600 mb-4">Berat(g) : 35</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                          <h4 class="mt-4">Daging Kambing</h4>
                          <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Sedang</p>
                          <p class="text-600 mb-4">Berat(g) : 40</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                          <h4 class="mt-4">Hati Ayam</h4>
                          <p class="mb-0 fs-xxl-1 text-center">URT : 1 Buah Sedang</p>
                          <p class="text-600 mb-4">Berat(g) : 30</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                          <h4 class="mt-4">Telur Ayam</h4>
                          <p class="mb-0 fs-xxl-1 text-center">URT : 1 Butir</p>
                          <p class="text-600 mb-4">Berat(g) : 55</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                          <h4 class="mt-4">Telur Puyuh</h4>
                          <p class="mb-0 fs-xxl-1 text-center">URT : 5 Butir</p>
                          <p class="text-600 mb-4">Berat(g) : 55</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                          <h4 class="mt-4">Usus Sapi</h4>
                          <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Besar</p>
                          <p class="text-600 mb-4">Berat(g) : 50</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <h4 class="text-center mb-0">3. Tinggi Lemak</h4>
              <p class="text-center mb-0">Satu satuan penukar mengandung :
              <br /><button class="btn btn-secondary rounded-pill mt-2">7 g Protein</button>
              <button class="btn btn-secondary rounded-pill mt-2">13 g Lemak</button>
              <button class="btn btn-secondary rounded-pill mt-2">150 Kalori</button></p>
              <div class="carousel slide" id="golongan2-lemak-tinggi" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan2-lemak-tinggi" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan2-lemak-tinggi" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 mx-3 mx-md-4 my-md-4">
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Daging Ayam degan Kulit</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 50</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Kuning Telur Ayam</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 4 Butir</p>
                            <p class="text-600 mb-4">Berat(g) : 40</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Belut</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 3 Ekor Kecil</p>
                            <p class="text-600 mb-4">Berat(g) : 45</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Bebek</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 45</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Telur Bebek</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Butir</p>
                            <p class="text-600 mb-4">Berat(g) : 55</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Telur Ikan</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 40</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>

            {{-- GOLONGAN 3 --}}

            <div class="container mb-4">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
              </div>  
              <!--/.bg-holder-->
              <h3 class="text-center mb-0">Golongan 3</h3>
              <p class="text-center mb-0">(Sumber Protein Nabati)</p>
              <p class="text-center mb-0">Umumnya digunakan sebagai lauk juga<br />Satu satuan penukar mengandung :
              <br /><button class="btn btn-secondary rounded-pill mt-2">7 g Karbohidrat</button>
              <button class="btn btn-secondary rounded-pill mt-2">5 g Protein</button>
              <button class="btn btn-secondary rounded-pill mt-2">3 g Lemak</button>
              <button class="btn btn-secondary rounded-pill mt-2">75 Kalori</button></p>
              <div class="carousel slide" id="3" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan3" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan3" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 mx-3 mt-6 mx-md-4 my-md-4">
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Tahu</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Biji Besar</p>
                            <p class="text-600 mb-4">Berat(g) : 110</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Tempe</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Potong Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 50</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Kacang Hijau</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Sdm</p>
                            <p class="text-600 mb-4">Berat(g) : 20</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Kacang Tanah</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Sdm</p>
                            <p class="text-600 mb-4">Berat(g) : 15</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Kacang Kedelai</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2,5 Sdm</p>
                            <p class="text-600 mb-4">Berat(g) : 25</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            {{-- <img src="assets/img/gallery/anita.png" width="128" alt="..." /> --}}
                            <h4 class="mt-4">Kacang Merah</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Sdm</p>
                            <p class="text-600 mb-4">Berat(g) : 20</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            
          {{-- GOLONGAN 4 --}}

        <div class="container mb-4">
          <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
          </div>  
          <!--/.bg-holder-->
          <h3 class="text-center mb-0">Golongan 4</h3>
          <p class="text-center mb-0">(Sayuran)</p>
          <p class="text-center mb-4">Merupakan sumber vitamin dan mineral, terutama karoten, vitamin C, zat kapur, zat besi, dan fosfor. Hendaknya digunakan campuran dari daun-daunan, seperti bayam, kangkung, dan singkong, dengan kacang panjang, buncis, wortel, labu kuning, dan sebagainya. Satu satuan penukar adalah 100 gram sayuran campur, kurang lebih 1 gelas (setelah masak dan ditiriskan). Golongan sayuran dibagi menjadi 3 macam berdasarkan kandungang zat gizinya.</p>
          <h4 class="text-center mb-0">1. Sayuran A</h4>
          <p class="text-center mb-0">Digunakan sesuai keinginan karena mengandung kalori yang sangat sedikit :
          <br /><button class="btn btn-secondary rounded-pill mt-2">7 g Protein</button>
          <button class="btn btn-secondary rounded-pill mt-2">2 g Lemak</button>
          <button class="btn btn-secondary rounded-pill mt-2">50 Kalori</button></p>
          <div class="carousel slide" id="golongan4-sayuran-a" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan4-sayuran-a" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan4-sayuran-a" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100 mx-3 mx-md-4 my-md-4 mt-0">
                  <div class="col-md-3 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        <h5 class="mt-3 text-center mb-3">Ketimun</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        <h5 class="mt-3 text-center mb-3">Lobak</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        <h5 class="mt-3 text-center mb-3">Selada</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-4 mb-md-4">
                    <div class="card card-span h-10 shadow">
                      <div class="card-body d-flex flex-column flex-center py-2">
                        <h5 class="mt-3 text-center mb-3">Tomat</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <h4 class="text-center mb-0">2. Sayuran B</h4>
            <p class="text-center mb-0">Satu satuan penukar (100 g) mengandung :
            <br /><button class="btn btn-secondary rounded-pill mt-2">5 g Karbohidrat</button>
            <button class="btn btn-secondary rounded-pill mt-2">1 g Protein</button>
            <button class="btn btn-secondary rounded-pill mt-2">25 Kalori</button></p>
            <div class="carousel slide" id="golongan4-sayuran-b" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan4-sayuran-b" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan4-sayuran-b" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100 mx-3 mx-md-4 my-md-4">
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Cabe Hijau Besar</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Kol</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Brokoli</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Buncis</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Cabe Merah Besar</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Daun Bawang</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Sawi</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Seledri</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Terong</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Jantung Pisang</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Kacang Panjang</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-4">
                      <div class="card card-span h-10 shadow">
                        <div class="card-body d-flex flex-column flex-center py-2">
                          <h5 class="mt-3 text-center mb-3">Wortel</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <h4 class="text-center mb-0">3. Sayuran C</h4>
              <p class="text-center mb-0">Satu satuan penukar (100 g) mengandung :
              <br /><button class="btn btn-secondary rounded-pill mt-2">10 g Karbohidrat</button>
              <button class="btn btn-secondary rounded-pill mt-2">3 g Protein</button>
              <button class="btn btn-secondary rounded-pill mt-2">50 Kalori</button></p>
              <div class="carousel slide" id="golongan4-sayuran-c" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan4-sayuran-c" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan4-sayuran-c" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 mx-3 mx-md-4 my-md-4">
                      <div class="col-md-3 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h5 class="mt-3 text-center mb-3">Bayam Merah</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h5 class="mt-3 text-center mb-3">Daun Pepaya</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h5 class="mt-3 text-center mb-3">Daun Singkong</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h5 class="mt-3 text-center mb-3">Nangka Muda</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
            
            {{-- GOLONGAN 5 --}}

            <div class="container mb-4">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
              </div>  
              <!--/.bg-holder-->
              
                <h3 class="text-center mb-0">Golongan 5</h3>
                <p class="text-center mb-0">(Buah-buahan dan Gula)</p>
                <p class="text-center mb-0">Merupakan sumber vitamin terutama karoten, Vit. B1, B6, & Vit C. Juga merupakan sumber mineral. Berat buah-buahan dalam daftar ditimbang tanpa kulit dan biji (berat bersih)<br />Satu satuan penukar mengandung :
                <br /><button class="btn btn-secondary rounded-pill mt-2">12 g Karbohidrat</button>
                <button class="btn btn-secondary rounded-pill mt-2">50 Kalori</button></p>
              <div class="carousel slide" id="golongan5" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#golongan5" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#golongan5" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 mx-3 mt-6 mx-md-4 my-md-4">
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Apel Merah</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Buah Kecil</p>
                            <p class="text-600 mb-4">Berat(g) : 85</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Jambu Air</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Buah Besar</p>
                            <p class="text-600 mb-4">Berat(g) : 110</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Rambutan</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Buah</p>
                            <p class="text-600 mb-4">Berat(g) : 75</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Jambu Biji</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Buah Besar</p>
                            <p class="text-600 mb-4">Berat(g) : 100</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Jeruk Manis</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Buah Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 110</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Mangga</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 3/4 Buah Besar</p>
                            <p class="text-600 mb-4">Berat(g) : 90</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100 mx-3 mx-md-4 my-md-4">
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Nangka Masak</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 3 Biji Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 45</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Nanas</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1/4 Buah Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 50</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Pepaya</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Potong Besar</p>
                            <p class="text-600 mb-4">Berat(g) : 190</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Pisang Mas</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Buah</p>
                            <p class="text-600 mb-4">Berat(g) : 40</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Semangka</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 2 Buah Sedang</p>
                            <p class="text-600 mb-4">Berat(g) : 180</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-4">
                        <div class="card card-span h-10 shadow">
                          <div class="card-body d-flex flex-column flex-center py-2">
                            <h4 class="mt-4">Madu</h4>
                            <p class="mb-0 fs-xxl-1 text-center">URT : 1 Sdm</p>
                            <p class="text-600 mb-4">Berat(g) : 15</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>


          </div>
          </div>

        <h4 class="text-center mb-3">Akses File Daftar Bahan Makanan Penukar<br />Pada Tombol di Bawah Ini</h4>
          <div class="container">
            <div class="row flex-center">
              <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4 mb-5" href="https://drive.google.com/file/d/1owDIFtFtRq5MKsp24Mkd_Ygp8ogXfRU0/view?usp=drive_link">File DBMP</a>
              <div class="col-xl-10 px-0 flex-center">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      {{-- <section class="py-5">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">APPOINTMENT</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section> --}}
      <!-- <section> close ============================-->
      <!-- ============================================-->


      {{-- <section class="py-8">
        <div class="container">
          <div class="row">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="assets/img/gallery/appointment.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2">
              <form class="row g-3">
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputName">Name</label>
                  <input class="form-control form-livedoc-control" id="inputName" type="text" placeholder="Name" />
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputPhone">Phone</label>
                  <input class="form-control form-livedoc-control" id="inputPhone" type="text" placeholder="Phone" />
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Category</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Category</option>
                    <option> Category One</option>
                    <option> Category Two</option>
                    <option> Category Three</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputEmail">Email</label>
                  <input class="form-control form-livedoc-control" id="inputEmail" type="email" placeholder="Email" />
                </div>
                <div class="col-md-12">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea class="form-control form-livedoc-control" id="validationTextarea" placeholder="Message" style="height: 250px;" required="required"></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary rounded-pill" type="submit">Sign in</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">RECENT BLOGPOSTS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section> --}}
      <!-- <section> close ============================-->
      <!-- ============================================-->


      {{-- <section>
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/img/gallery/covid-19.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Health</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">COVID-19: The Most Up-to-Date Information</h5><a class="stretched-link" href="#!">read full article</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/img/gallery/laboratories.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Lifestyle</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 25, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Importance of Accreditation for Laboratories</h5><a class="stretched-link" href="#!">read full article</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/img/gallery/nicotine.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Health</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 28, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">The dangers of nicotine are addressed in depth</h5><a class="stretched-link" href="#!">read full article</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/img/gallery/treatment.png" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Health</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 30, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Treatment of patients with diabetes during COVID-19</h5><a class="stretched-link" href="#!">read full article</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      {{-- <section class="bg-primary"> --}}
        {{-- <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/cta-bg.png);background-position:center right;margin-top:-8.125rem;background-size:contain;">
        </div> --}}
        <!--/.bg-holder-->

        {{-- <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-light">Get an update every week</h2>
              <p class="text-soft-primary">Livedoc was created in order to improve the patient experience. <br />Providing world-class tests, and a wide range of other services.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="mb-3 text-soft-primary">SUBSCRIBE TO NEWSLETTER </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control form-livedoc-control form-cta-control text-soft-primary" id="inputEmailCta" type="email" placeholder="Email" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-lg btn-light rounded-3 px-5 py-3" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div> --}}
      </section>
      <section class="py-0 bg-secondary">
        <div class="bg-holder opacity-25" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          {{-- <div class="row py-8">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assets/img/gallery/footer-logo.png" height="51" alt="" /></a>
              <p class="text-light my-4">The world's most trusted <br />telehealth company.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Departments</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Eye care</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Cardiac are</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Heart care</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Membership</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Free trial</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Silver</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Premium</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Get Update</a></li>
              </ul>
            </div>
          </div> --}}
        </div>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

          <div class="container">
            <div class="row justify-content-md-between py-4">
              <div class="text-center ">
                <p class="fs--1 my-2 fw-bold text-200">KKN REGULER UNAND JINANG KAMPUNG PANSUR AMPANG PULAI &copy; 2024</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                {{-- <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                </p> --}}
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>