<x-app>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/img/makan.jpeg')}}" class="d-block w-100" alt="gunung">
      <div class="carousel-caption d-none d-md-block">
        <h5>Makan Bersama MSI Grobogan</h5>
        <p>Makan Di Resto SS Dekat Simpang Lima Purwodadi.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/kopdar.jpeg')}}" class="d-block w-100" alt="gunung 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kopdar dengan para Kader MSI Grobogan</h5>
        <p>Kopdar dan penyuluhan Bersama Kader Di Kediaman Pak Bambang.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/kumpul.jpeg')}}" class="d-block w-100" alt="gunung 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Foto Bersama Kader</h5>
        <p>KSetelah Kopdar di adakan Foto Bersama dengan kader MSI Grobogan.</p>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="hero-banner">
  <div class="overlay">
    <div class="container text-center text-black">
      <h1 class="display-4 animated-text">Visi Mentari Sehat Indonesia</h1>
      <p class="lead">Penggerak terwujudnya infrastruktur kesehatan non pemerintah dan dinamika kelompok sosial yang mampu secara mandiri menanggulangi masalah kesehatan, sosial, dan pendidikan di masyarakat..</p>
      <a href="{{ url('/about') }}" class="btn btn-primary">Baca Selengkapnya</a>     
    </div>
  </div>
</section>
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>MENTARI SEHAT INDONESIA KABUPATEN GROBOGAN</h2>
        <p>Mentari Sehat Indonesia Kabupaten Grobogan terletak di Dk.Godongan RT.01 RW.01, Ds.Sugihan, Kec.Toroh, Kab.Grobogan.</p>
        <a href="{{ url('/about') }}" class="btn btn-primary">Baca Selengkapnya</a>          
      </div>
      <div class="col-md-6">
        <img src="{{asset('assets/img/banner1.jpeg')}}" class="img-fluid rounded" alt="Gunung Image">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <h1 class="text-center mb-4">Artikel Terbaru</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{asset('assets/img/3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Keindahan Gunung</h5>
                    <p class="card-text">Gunung menawarkan pemandangan yang luar biasa indah dengan udara yang sejuk dan segar.</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{asset('assets/img/3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Misteri dan Mitos</h5>
                    <p class="card-text">Banyak gunung di dunia yang memiliki mitos dan cerita rakyat yang sangat menarik sekali dan membuat penasaran. </p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{asset('assets/img/3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Konservasi Gunung</h5>
                    <p class="card-text">Dengan meningkatnya jumlah pendaki dan aktivitas manusia, konservasi gunung menjadi semakin penting.</p>
                    </p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
      </div>
</x-app>        