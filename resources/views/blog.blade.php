<x-app>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container mt-5">
  <div class="row text-center mb-5">
  <h1 class="text-center mb-4 animated-title">Contact Kami</h1>
    <!-- Alamat -->
    <div class="col-md-4 d-flex align-items-stretch mb-4">
      <div class="card p-3 shadow-sm w-100 h-100">
        <div class="icon mb-3">
          <i class="fas fa-map-marker-alt" style="font-size: 40px; color: #FFD700;"></i>
        </div>
        <h5>Alamat</h5>
        <p>Dk.Godongan RT.01 RW.01, Ds.Sugihan, Kec.Toroh, Kab.Grobogan</p>
      </div>
    </div>
    
    <!-- Email Kami -->
    <div class="col-md-4 d-flex align-items-stretch mb-4">
      <div class="card p-3 shadow-sm w-100 h-100">
        <div class="icon mb-3">
          <i class="fas fa-envelope" style="font-size: 40px; color: #FFD700;"></i>
        </div>
        <h5>Email Kami</h5>
        <p>ssr.msikabgrobogan@gmail.com</p>
      </div>
    </div>
    
    <!-- Hubungi Kami -->
    <div class="col-md-4 d-flex align-items-stretch mb-4">
      <div class="card p-3 shadow-sm w-100 h-100">
        <div class="icon mb-3">
          <i class="fas fa-phone-alt" style="font-size: 40px; color: #FFD700;"></i>
        </div>
        <h5>Hubungi Kami</h5>
        <p>085848484231</p>
      </div>
    </div>
  </div>

  <!-- Google Maps Embed -->
  <div class="row mt-4 mb-5">
    <div class="col-md-12 text-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4241580806043!2d110.64229381543213!3d-7.256156573392616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7087a3bda3a9ff%3A0xabc39114cf0b246b!2sMentari%20Sehat%20Indonesia%20Kab.%20Demak!5e0!3m2!1sen!2sid!4v1695470421676!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="mt-3">
        <a href="https://maps.app.goo.gl/a9HuAJqaKZ1Lnucn6" target="_blank" class="btn btn-primary">
          <i class="fas fa-map-marker-alt"></i> Lihat di Google Maps
        </a>
      </div>
    </div>
  </div>

  <!-- Kirim Pesan Form -->
  <div class="row mt-5">
    <div class="col-md-8 mx-auto">
      <h3 class="text-center mb-4">Kirim Pesan</h3>
      <form>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Nama Anda" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Email Anda" required>
        </div>
        <div class="mb-3">
          <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </div>
      </form>
    </div>
  </div>
</div>
</x-app>
