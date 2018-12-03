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
