
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Monitoring & Controlling Tambak Udang</title>
  <link rel="shortcut icon" href="{{asset('Atlantis/assets/img/logo1.ico')}}">
  <link rel="stylesheet" href="{{asset('LandingPage/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  <link rel="stylesheet" href="{{asset('LandingPage/css/chocolat.min.css')}}">
  <link rel="stylesheet" href="{{asset('LandingPage/css/styles.min.css')}}">
  <link rel="stylesheet" href="{{asset('LandingPage/css/custom.min.css')}}">
  <link rel="stylesheet" href="{{asset('LandingPage/landing/styles.min.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>

<body>

  <nav class="navbar navbar-reverse navbar-expand-lg">
    <div class="container">
      <a href="{{route('landingpage.read')}}" class="logo">
        <img src="{{ asset('Atlantis/assets/img/logo.svg')}}" alt="Tambak Udang" class="navbar-brand" style="height: 45px; margin-left: 10px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-lg-3 align-items-lg-center">
          
        </ul>
        <ul class="navbar-nav ml-auto align-items-lg-center">
          <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
          <li class="ml-lg-3 nav-item">
            <a href="{{route('login.read')}}" class="btn btn-round smooth btn-icon icon-left" target="_blank">Masuk
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero-wrapper" id="top"> 
    <div class="hero">
      <div class="container flex-column flex-lg-row">
        <div class="text text-center text-lg-left">
          <h1>Sistem Informasi<br>Monitoring & Controlling Tambak Udang</h1>
          <p class="lead">
            Sistem budidaya udang windu secara intensif dilakukan inovasi tiap tahunnya. Termasuk dalam pengembangan Sistem Informasi.
          </p>
        </div>
        <div class="imgbox">
          <img src="{{asset('LandingPage/images/demo1.png')}}" class="imgpreview">
          <img src="{{asset('LandingPage/images/demo2.png')}}" class="imgpreview">
          <img src="{{asset('LandingPage/images/demo3.png')}}" class="imgpreview">
        </div>
      </div>
    </div>
  </div>
  <div class="callout container">
    <div class="row">
      <div class="col-md-6 col-12 mb-4 mb-lg-0">
        <div class="text-job text-muted text-14">Monitoring Data Terakhir</div>
        <div class="h1 mb-0 font-weight-bold"><span class="font-weight-500">Tambak Udang</span> Lokasi X</div>
      </div>
      <div class="col-12 col-sm-4 col-md-2 text-center">
        <div class="h2 font-weight-bold">{{$data['air']->nilai}}</div>
        <div class="text-uppercase font-weight-bold ls-2 text-primary">Data Air</div>
      </div>
      <div class="col-12 col-sm-4 col-md-2 mb-4 mb-md-0 text-center">
        <div class="h2 font-weight-bold">{{$data['ph']->nilai}}</div>
        <div class="text-uppercase font-weight-bold ls-2 text-primary">Data pH</div>
      </div>
      <div class="col-12 col-sm-4 col-md-2 mb-4 mb-md-0 text-center">
        <div class="h2 font-weight-bold">{{$data['suhu']->nilai}}</div>
        <div class="text-uppercase font-weight-bold ls-2 text-primary">Data Suhu</div>
      </div>
    </div>
  </div>

  {{-- <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="subtitle">
            BEST ADMIN TEMPLATE OF 2019
          </div>
          <h2 class="title">
            <span class="text-primary">Amazing</span> Features &amp; <span class="text-primary">Flexibility</span> Provided
          </h2>
          <p class="lead">
            Don’t go by our Words, checkout our awesome demos and verify yourself.<br>
            Save 1000s of hours of designing and coding work as we already did that for you.
          </p>
          <div class="products row">
            <a href="livepreview/examples/demo1" target="_blank" class="col-product col-md-6">
              <div class="product">
                <div class="imgbox">
                  <img src="{{asset('LandingPage/images/demo1.png')}}" class="imgpreview">
                  <div class="linkpreview">
                    <div class="btn btn-primary btn-border">Live Preview</div>
                  </div>
                </div>
                <h3 class="name">Light Vertical Dashboard</h3>
              </div>
            </a>

            <a href="livepreview/examples/demo2" target="_blank" class="col-product col-md-6">
              <div class="product">
                <div class="imgbox">
                  <img src="{{asset('LandingPage/images/demo2.png')}}" class="imgpreview">
                  <div class="linkpreview">
                    <div class="btn btn-primary btn-border">Live Preview</div>
                  </div>
                </div>
                <h3 class="name">Dark Vertical Dashboard</h3>
              </div>
            </a>

            <a href="livepreview/examples/demo3" target="_blank" class="col-product col-md-6">
              <div class="product">
                <div class="imgbox">
                  <img src="{{asset('LandingPage/images/demo3.png')}}" class="imgpreview">
                  <div class="linkpreview">
                    <div class="btn btn-primary btn-border">Live Preview</div>
                  </div>
                </div>
                <h3 class="name">Minimal Dashboard</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section id="features" class="section-skew">
    <div class="container">
      <div class="row mb-5 text-center">
        <div class="col-lg-10 offset-lg-1">
          <h2>Pengelolaan <span class="text-primary">Kesehatan </span> Udang</h2>
          <p class="lead">udang yang sehat memiliki ciri-ciri:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="features">
            <div class="feature">
              <div class="feature-icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <h5>Aktif di Dasar Tambak</h5>
              <p>Udang lalalalalallalala</p>
            </div>
            <div class="feature">
              <div class="feature-icon">
                <i class="fas fa-columns"></i>
              </div>
              <h5>Posisi Udang</h5>
              <p>Jika Udang menempel di ranting, posisi kepala selalu di bawah, dan jika ranting digerakkan udang akan cepat menghindar. Sebaliknya udang yang sakit akan menempel terus di ranting meskipun ranting tersebut diangkat ke atas.</p>
            </div>
            <div class="feature">
              <div class="feature-icon">
                <i class="fab fa-html5"></i>
              </div>
              <h5>Aktivitas Berenang</h5>
              <p>Bergerak berenang aktif mencari makan dengan kaki jalan pada dasar tambak.</p>
            </div>
            <div class="feature">
              <div class="feature-icon">
                <i class="fas fa-fire"></i>
              </div>
              <h5>Waktu Berenang</h5>
              <p>Udang berenang atau menjauh bila kena sorotan cahaya pada malam hari.</p>
            </div>
            <div class="feature">
              <div class="feature-icon">
                <i class="fas fa-check"></i>
              </div>
              <h5>Posisi Kepala</h5>
              <p>Menempel pada batang / ranting rumput atau tali anco dengan posisi kepala di bawah dan akan berenang bila tali onco tersebut di angkat atau digerakkan.</p>
            </div>
            <div class="feature">
              <div class="feature-icon">
                <i class="fas fa-chevron-right"></i>
              </div>
              <h5>Warna Kulit</h5>
              <p>Berwaran cerah hijau kekuningan dengan warna belang tubuh yang jelas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section id="components" class="section-design section-design-right">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 pr-lg-5 pr-0">
          <div class="badge badge-primary mb-3">Clean Components</div>
          <h2>Focus on your <span class="text-primary">goal</span>, let <span class="text-primary">Atlantis</span> help you to <span class="text-primary">design</span> the dashboard</h2>
          <p class="lead">Designing the dashboard from scratch without being based on a concept makes your time run out just to think of what components you need. Atlantis has many components and layouts that you need to save your development time, go to bed early.</p>
        </div>
        <div class="col-lg-5 d-none d-lg-block">
          <div class="abs-images">
            <img src="{{asset('LandingPage/landing/component2.png')}}" alt="user flow" class="img-fluid rounded dark-shadow">
            <img src="{{asset('LandingPage/landing/component1.png')}}" alt="user flow" class="img-fluid rounded dark-shadow">
            <img src="{{asset('LandingPage/landing/component3.png')}}" alt="user flow" class="img-fluid rounded dark-shadow">
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section id="try" class="section-circle-background">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <h2>Batasan Sistem</h2>
          <p class="lead">Dalam pembudidayaannya, perkembangan Udang Windu sangat dipengaruhi dengan Kualitas Air. Diantaranya adalah suhu air yang dapat mempengaruhi kecepatan metabolisme udang, semakin cepat suhu lingkungan meningkat, maka semakin cepat juga kecepatan metabolisme dari Udang. Secara umum, suhu optimal bagi Udang Windu adalah 25 – 30 0C. Suhu diatas 20 0C masih dianggap baik bagi budidaya Udang. Udang akan kurang aktif apabila suhu air turun di bawah 18 0C dan pada suhu 15 0C atau lebih rendah akan menyebabkan Udang Stress.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="support-us" class="support-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-none d-lg-block pr-lg-5 pr-sm-0">
          <div class="d-flex align-items-center h-100 justify-content-center abs-images-2">
            <img src="{{asset('LandingPage/images/demo3.png')}}" alt="image" class="img-fluid rounded dark-shadow">
            <img src="{{asset('LandingPage/images/demo2.png')}}" alt="image" class="img-fluid rounded dark-shadow">
            <img src="{{asset('LandingPage/images/demo1.png')}}" alt="image" class="img-fluid rounded dark-shadow">
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <h2>Pengelolaan <span class="text-primary">Pakan.</span> </h2>
          <p class="lead">Pengelolaan pakan dilakukan demi peningkatan produksi udang.</p>
          <ul class="list-icons">
            <li>
              <span class="card-icon bg-primary text-white">
                <i class="fas fa-box-open"></i>
              </span>
              <span><h6>Pakan Alami</h6>Menumbuhkan pakan alami dengan cara pemupukan susulan (pupuk kendang atau kompos dan pupuk anorganik.</span>
            </li>
            <li>
              <span class="card-icon bg-primary text-white">
                <i class="fas fa-fire"></i>
              </span>
              <span><h6>Pakan Tambahan</h6>Berupa pakan segar atau bahan pakan yang direkomendasikan.</span>
            </li>
            <li>
              <span class="card-icon bg-primary text-white">
                <i class="fas fa-stopwatch"></i>
              </span>
              <span><h6>Waktu Pemberian Pakan Tambahan</h6>Pada sore hari saat kandungan oksigen paling tinggi.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="before-footer">
    <div class="container">
      <div class="card long-shadow">
        <div class="card-body p-45">
          <div class="row align-items-center">
            <div class="col-md-7 d-flex">
              <div class="card-icon bg-primary text-white">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <div>
                <h2>Masuk ke Sistem</h2>
                <p class="lead">Mulai lihat data monitoring dan controlling.</p>
              </div>
            </div>
            <div class="col-md-5 text-right">
              <a href="{{route('login.read')}}" class="btn btn-primary btn-lg">Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div id="about" class="container">
      <div class="row">
        <div class="col-md-10">
          <h3 class="text-capitalize">Tentang</h3>
          <div class="pr-lg-5">
            <p>Sistem ini dibuat oleh Bima Fajar Setiawan dengan memanfaatkan data lapangan dari Nur Kholid. Bertujuan agar data lapangan yang dikirim oleh saudara Nur Kholid dapat dimonitoring dan dicontrol melalui sistem informasi ini. Kontak kami di bfsetiawan@student.ce.undip.ac.id</p>

            <p>&copy; Bima dengan <i class="fas fa-heart text-danger"></i> dari Indonesia</p>
          </div>
        </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('LandingPage/js/popper.js')}}"></script>
<script src="{{asset('LandingPage/js/tooltip.js')}}"></script>
<script src="{{asset('LandingPage/js/bootstrap.min.js')}}"></script>
<script src="{{asset('LandingPage/js/atlantis.js')}}"></script>
<script src="{{asset('LandingPage/landing/script.js')}}"></script>
<script src="{{asset('LandingPage/js/slick.min.js')}}"></script>

<script>
  $('.hero-wrapper .imgbox').slick({
    dots: true,
    infinite: true,
    speed: 1200,
    autoplaySpeed: 6000,
    autoplay: true,
    slidesToShow: 1,
    adaptiveHeight: true
  });

</script>
</body>
</html>