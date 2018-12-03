<!DOCTYPE html>
<html lang="en" dir="ltr">
@extends('layouts.app')
  <body><br><br><br><br>
    <script src="/ckeditor/ckeditor.js"></script>
    <div class="container">
      <h2>Pesan {{$barang->nama}}</h2>
      Saat ini anda berada di halaman pemesanan, barang yang saat ini anda ingin pesan adalah {{$barang->nama}}. Untuk
      proses selanjutnya silahkan isi formulir pemesanan berikut dengan benar sesuai petunjuk yang ada, jika anda sudah
      selesai mengisi formulir harap periksa kembali data yang anda masukan. Kami berusaha untuk tidak mengumpulkan data diri dari pembeli yang
      masuk kedalam sistem kami, segala informasi apapun yang masuk kedalam sistem kami Insyaallah aman

      <form class="form-group" action="{{route('Pesan.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="container">
          <div class="row p-3 mt-2 bg-info text-white">
            <div class="col-lg-2 col-md-2 hide-small">
              <center> <img src="../gambar/{{$barang->gambar}}" class="img-thumbnail" width="120px" alt=""> </center>
            </div>

            <div class="col">
              <div class="hide-small">
                <h3>{{$barang->nama}}</h3>
                Harga Satuan {{$barang->harga}}
              </div>

              <div class="hide-large hide-medium text-center">
                <h3>{{$barang->nama}}</h3>
                Harga Satuan {{$barang->harga}}
              </div>

              <center> <img src="../gambar/{{$barang->gambar}}" width="60%" class="hide-large hide-medium mt-2 img-thumbnail" alt=""> </center>
              <input type="hidden" name="barang" value="{{$barang->nama}}">
              <input type="hidden" name="harga" value="{{$barang->harga}}">
              <input required size="1" type="text" name="jumlah" class="form-control mt-3" value="" placeholder="Masukan Jumlah Pemesanan (1 - {{$barang->stok}})">
                <br>
              <a href="{{route('barang.index')}}" class="btn btn-danger hide-small">Batalkan Pemesanan</a>
              <center><a href="{{route('barang.index')}}" class="btn btn-danger hide-large hide-medium">Batalkan Pemesanan</a></center>
            </div>
          </div>
        </div>
          <br>
          <input type="hidden" name="id" value="<?php echo base_convert(microtime(false), 4,10); ?>">

        <input maxlength="120" type="text" name="nama" required value="" class="form-control" placeholder="Masukan Nama Lengkap Anda">
        
        <input maxlength="40" type="text" name="keterangan" required value="" class="form-control mt-2" placeholder="Masukan Keterangan Warna Ukuran atau lainnya mengenai produk">

        <input maxlength="40" type="text" name="telp" required value="" class="form-control mt-2" placeholder="Masukan Nomor WhatsApp anda yang aktif">

          <select class="form-control mt-2" name="pertanyaan">
            <option value="#" selected disabled>Apakah anda bisa dihubungi dengan SMS dan Telepon biasa melalui nomor diatas?</option>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
          </select>

          <br>Masukan Alamat COD dibawah ini
        <textarea required name="alamat" id="editor1" rows="8" cols="80"></textarea>
          <br>
          <input type="hidden" name="oleh" value="{{$email}}">
        <input type="submit" name="submit" value="Kirim Pesanan" class="btn btn-primary">

      </form>
    </div>
  </body>

  <script>
  CKEDITOR.replace( 'editor1' );
          </script>

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
