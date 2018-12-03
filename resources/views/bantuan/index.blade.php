<!DOCTYPE html>
<html lang="en" dir="ltr">
  @extends('layouts.app')
  <body><br><br><br><br>
    <div class="container">
      <h2>Halaman Bantuan</h2>
      Selamat datang di halaman bantuan, silahkan temukan kesulitan atau anda dapat mengajukan
      <div class="">
        pesan, kesan atau keluhan anda melalui formulir pengaduan yang dapat anda temukan linknya dibawah ini.
      </div>
        <br>
      <p>Terima Kasih!</p>
        <br>
      <h4>Pertanyaan yang sering diajukan (FAQ)</h4>
      <div class="d-block">
        <strong>Q: Website apa yang saya kunjungi ini?</strong>
        <div>A: Toko Online Hasanah Hijab, dapat anda lihat profil singkat Toko Online Hasanah Hijab pada bagian footer website</div>
      </div>
        <br>
      <div class="d-block">
        <strong>Q: Bagaimana cara saya membeli barang disini?</strong>
        <div>A: Silahkan buka halaman <a class="text-success d-inline" href="{{route('barang.index')}}">Lihat Produk</a> untuk memilih barang </div>
      </div>
      <br>
      <div class="d-block">
        <strong>Q: Bagaimana cara saya ingin mencari pesanan saya?</strong>
        <div>A: Silahkan buka halaman <a class="text-success d-inline" href="{{route('Invoice.index')}}">Cari Pesanan</a> untuk mulai mencari </div>
      </div>

      <br>

      <div class="d-block">
        <strong>Q: Siapa yang membuat Toko Online Ini?</strong>
        <div>A: <a class="text-success" href="{{route('teguh-rijanandi.index')}}">Teguh Rijanandi</a> adalah seorang programmer toko online ini</div>
      </div>
        <br>
      <div class="d-block">
        <strong>Q: Bagaimana saya melakukan pembayaran?</strong>
        <div>A: Setelah anda mengirim pesanan anda, silahkan tunggu balasan dari penjual melalui <a target="_blank" href="http://bit.ly/Hasanah-Hijab" class="text-success">WhatsApp</a>. Disana anda akan diberi tahu segala informasi dari penjual</div>
      </div>
      <br>
      <div class="d-block">
        <strong>Q: Saya mengalami kendala dengan pesanan saya?</strong>
        <div>A: Jika anda mempunyai kendala atau pertanyaan silahkan buka halaman <a href="{{route('Bantuan.create')}}" class="text-success">Formulir Pengaduan</a> dan isi semua informasi berdasarkan petunjuk yang ada </div>
      </div>
        <br>
      <div class="d-block">
        <strong>Q: Saya ingin menghubungi penjual secara langsung?</strong>
        <div>A: Jika anda membuka laman ini menggunakan ponsel anda, silahkan tekan <a target="_blank" href="http://bit.ly/Hasanah-Hijab" class="text-success">link ini</a> maka anda akan langsung diarahkan menuju aplikasi WhatsApp dan langsung terbuka inbox dengan penjual. Dan jika anda mengakses laman ini menggunakan Komputer, berikut adalah nomor whatsapp penjual
            <div class="mt-2">
              0823 2500 6253 <code>atau</code> 0821 3728 5380
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
