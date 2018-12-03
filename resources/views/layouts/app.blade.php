<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hasanah Hijab</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      .logo {filter: invert(100%);}

		a.navigasi:hover {opacity: 0.8}

      a {text-decoration: none !important}

      a.pilih:hover {background-color: #343a40 !important; color: white !important}
      a.pilih:active {background-color: #007bff !important; color: white !important}

      @media (max-width: 601px) {
          .hide-small {display: none}
      }

      @media (min-width: 993px) {
          .hide-large {display: none;}
      }

      @media (min-width: 601px) {
          .hide-medium {display: none;}
      }

      @font-face{ font-family: FORTE; src: url(‘font/FORTE.ttf’); }
      .forte{ font-family:FORTE;}
    </style>
</head>

<script>
window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
</script>

<header>

<div style="position: fixed !important; width: 100%; top: 0px !important">
	  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <div class="row  hide-large hide-medium">

    <div class="col">
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon float-sm-right"></span>
        </button>
    </div>

    <div class="text-white text-right pt-2 forte" style="right: 29px !important; position: absolute !important"> <a href="/" class="text-white"><strong> <h5>Hasanah Hijab</h5> </strong></a> </div>
  </div>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">

      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto hide-small ml-5">
          <li> <a href="/" class="navbar-item text-white">
            <div class="forte" style="float: left; font-size: 24px">
              <a href="/" class="text-white">Hasanah Hijab</a>
            </div>
          </a> </li>
      </ul>


      <ul class="navbar-nav ml-auto mr-5">

          <li class="nav-item mr-1">
            <a class="text-white nav-link navigasi" href="/">Beranda</a>
          </li>

          <li class="nav-item mr-1">
              <a class="text-white nav-link navigasi" href="{{route('barang.index')}}">Lihat Produk</a>
          </li>
          <!-- Authentication Links -->
          @guest
              <li class="nav-item mr-1">
                  <a class="nav-link navigasi text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>

          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item pilih" href="{{route('kategori.create')}}">Tambah Kategori</a>
                    <a class="dropdown-item pilih" href="{{route('barang.create')}}">Tambah Barang</a>
                    
                    <?php if (Auth::user()->email == "teguh@goeroeku.net"): ?>
                        <a class="dropdown-item pilih" href="{{route('register')}}">Tambah Akun Admin</a>
                    <?php else: ?>

                    <?php endif; ?>
                    
                    
                    <?php $name = Auth::user()->email ?>
                    <a class="dropdown-item pilih" href="{{route('Pesan.show', $name)}}">Lihat Pesanan</a>
                    
                    
                    <a class="dropdown-item pilih" href="{{route('inbox.index')}}">Lihat Inbox</a>
                    
                    <?php if (Auth::user()->email == "teguh@goeroeku.net"): ?>
                        <a class="dropdown-item pilih" href="{{route('loading.index')}}">Pengaturan</a>
                    <?php else: ?>

                    <?php endif; ?>
                    
                    
                      <a class="dropdown-item pilih" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Keluar') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest

          <li class="nav-item mr-1">
              <a class="text-white nav-link navigasi" href="{{route('Bantuan.index')}}">Bantuan</a>
          </li>
      </ul>
    </div>
  </nav>
	</div>
</header>
