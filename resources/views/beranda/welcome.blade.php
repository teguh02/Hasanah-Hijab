<html>
@extends('layouts.app')
<body>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<br><br><br>
	<div class="container">
		<img src="images/Banner.jpg" width="100%" alt="">




	<div class="container mt-3">
		{!!($lihat->isi)!!}
	</div>

	@if(!Auth::user())

	@elseif(Auth::user() -> jabatan = 'admin')
<br>
	<div class="container border-bottom pb-4">
		<a href="{{route('beranda.edit', '1')}}"><i class="fas fa-edit btn btn-primary text-white"></i>
			<div class="text-primary d-inline ml-2">
				Edit Teks
			</div>
		</a>
	</div>
	@endif
<br><br>
	<div class="container ">
		<div class="row">
			<div class="col-lg-4 p-3">
				<center><h1 class="display-1"><i class="fas fa-user-shield"></i></h1></center>
				<center> <h3>Aman</h3> </center>
					<br>
				<div class="text-center" style="color: #777">
					Insyallah kami akan bekerja dengan amanah dan bertanggung jawab
					demi tercapainya tujuan kami, yaitu kepuasannya seorang pelanggan
					terhadap pelayanan kami
				</div>
			</div>

			<div class="col-lg-4 p-3">
				<center> <h1 class="display-1"><i class="far fa-clock"></i></h1> </center>
				<center> <h3>Cepat</h3> </center>

				<br>

				<div class="text-center" style="color: #777">
					Insyallah kami bekerja sesuai dengan kemampuan kami untuk merespon pesanan anda dengan cepat
					yang masuk ke dalam sistem kami sehingga dapat kami memproses pengirimannya hingga ke tangan anda
				</div>
			</div>

			<div class="col-lg-4 p-3">
					<center> <h1 class="display-1"><i class="fas fa-shopping-basket"></i></h1> </center>
					<center> <h3>Sesuai</h3> </center>

					<br>

					<div class="text-center" style="color: #777">
						Sesuai dengan poin pertama tadi, Insyallah kami bekerja dengan amanah, dengan menerapkan sifat jujur dalam bisnis
						Jual Beli Online Kami ini
					</div>
			</div>
		</div>
		
		
	</div>

	</div>
</body>


<footer >

  <style>
    a.teguh:hover {text-decoration: underline !important;}
  </style>
  <br>
  <div class="container-fluid border-top pt-5 pb-5 ">
    <div class="mr-5 ml-5">
      <div class="row">
        <div class="col-lg-5">
          <h5><b>Kategori</b></h5>

          @foreach($kaki as $f)
            <span class="badge badge-light border p-2">{{$f->kategori}}</span>
          @endforeach
					<br><br>
        </div>

        <div class="col-lg-7">
          <h5><b>Hasanah Hijab</b></h5>

          <div style="color: #777">
            Website yang dibuat oleh <a class="teguh" style="color: #777" href="{{route('teguh-rijanandi.index')}}">Teguh Rijanandi</a> dengan nama <a href="/">Hasanah Hijab</a> ini
            dibuat bertujuan untuk memudahkan antara pembeli untuk memesan barang, dan memudahkan penjual dalam
            mengelola barangnya untuk dipasarkan. Kami harap dengan adanya <a href="/">Toko Online Hasanah Hijab</a> ini anda sebagai pembeli
            dapat merasa puas dengan produk kami. Untuk sementara waktu layanan kami hanya beroprasi di wilayah Kota Purwokerto dan sekitarnya
            yang insyaallah segera akan kami perluas kembali wilayah operasional kami. Tunggu apalagi? silahkan <a href="{{route('barang.index')}}">lihat produk kami</a> sekarang juga.

          </div>
          <br>
          <h5><b>Kontak Kami</b></h5>

          <div class="">
            <i class="fab fa-facebook mt-2"> Hasanah Hijab</i>
            <div class="mt-2"><i class="fab fa-instagram"> hasanah.hijab30_</i></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid pb-2 pt-2 border-top">
    <center>
      <?php
        $tgl=date('Y');
        echo "@". $tgl;
      ?>
    -  Powered By Hasanah Hijab
    </center>
  </div>
</footer>

</html>
