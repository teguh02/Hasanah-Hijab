<!DOCTYPE html>
<html lang="en" dir="ltr">
  @extends('layouts.app')
  <body><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-3 p-3 hide-small mr-3">
          <img src="/images/profil/profil.jpg" class="img-thumbnail" width="100%" alt="">
          <center class="mt-2">Profil Teguh Rijanandi</center>
        </div>

        <div class="col-md-8 p-3">
          <h1>Profil Programmer</h1>

          <table>
            <tr>
              <td> <strong>Nama </strong> </td>
              <td>:</td>
              <td>Teguh Rijanandi</td>
            </tr>

            <tr>
              <td> <strong>Asal </strong> </td>
              <td>:</td>
              <td>Kota Purwokerto Kabupaten Banyumas</td>
            </tr>

          </table>
          <br>
          Saya membuat website bertujuan untuk mempermudah pembeli dalam pemesanan barang yang diinginkan dan bertujuan
          untuk mempermudah penjual untuk mengelola barangnya sehingga dapat dapat dipublikasikan melalui Toko Online ini.
          Saya coding atau buat website ini sendiri mulai dari "Nol". Untuk Mesin atau Backend saya menggunakan
          <code>Framework PHP</code> Laravel versi 5.7 dan untuk Frontend atau tampilan saya menggunakan <div class="">
            Bootstrap V.4
          </div>

          <p class="mt-2">Saya harap dengan Toko Online Hasanah Hijab yang saya buat ini dapat membantu banyak orang dan tak
            lupa saya harap dengan adanya Toko Online ini dapat membantu penjual dalam me-manage barangnya. Terima kasih untuk anda
            yang telah membaca profil saya disini :)
          </p>
          <br><br>
          <strong>Prestasi dan Pengalaman Kerja</strong>
          <ul>
            <li>Pemenang LKS Web Design Juara 1 Tingkat Kabupaten Banyumas pada tahun 2018</li>
            <li>Peringkat 10 Besar LKS Web Design Tingkat Provinsi Jawa Tengah pada tahun 2018</li>
            <li>Pernah membuat web untuk yayasan Oemah Sinau Sinau di Limpakuwus, Kecamatan Sumbang</li>
            <li>Pernah membuat dan menulis blog seputar Teknologi dan tutorial pemrograman </li>
          </ul>
          <br>
          <strong>Sosial Media</strong>
            <ul type="circle">
              <li> <a href="http://bit.ly/082137285380"><i class="fab fa-whatsapp"></i> Hubungi Teguh Rijanandi</a> </li>
              <li><a href="https://www.facebook.com/teguh.rijanandi"><i class="fab fa-facebook"></i> Teguh Rijanandi</a></li>
              <li> <a href="https://www.instagram.com/teguh_rijanandi/"><i class="fab fa-instagram text-danger"></i> teguh_rijanandi</a> </li>
              <li> <a href="mailto:teguh@goeroeku.net"><i class="fas fa-at"></i> teguh@goeroeku.net</a> </li>
              <li> <a href="mailto:teguhrijanandi02@gmail.com"><i class="fas fa-at"></i> teguhrijanandi02@gmail.com</a> </li>
            </ul>
        </div>
      </div>

      <center><img src="/images/profil/profil.jpg" width="80%" class="hide-large hide-medium img-thumbnail" alt=""></center>

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
