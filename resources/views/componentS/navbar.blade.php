<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/home') }}">
      <img src="Assets/img/new.png" alt="Logo" style="height: 50px; width: 100px;">
      Msi Grobogan
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">Hubungi Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('product') ? 'active' : '' }}" href="{{ url('/product') }}">Berita dan Kegiatan</a>
        </li>
        
        <!-- Language Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bahasa
          </a>
          <ul class="dropdown-menu" aria-labelledby="languageDropdown">
            <li><a class="dropdown-item" href="?lang=id">Bahasa Indonesia</a></li>
            <li><a class="dropdown-item" href="?lang=en">English</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

