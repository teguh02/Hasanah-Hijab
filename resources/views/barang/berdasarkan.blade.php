<html lang="en" dir="ltr">
  @extends('layouts.app')
  <body style="background-color: #f1f1f1 !important">
  <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <script src="/assets/jquery-3.3.1.min.js"></script>
    <script src="/assets/main.js"></script>
  
  <!--Loading PHP Skrip-->

    <!-- Jika status sama dengan 1 atau berarti nyala, maka tampilkan skrip dibawah -->
    <?php if ($loading->status == "1"): ?>
      {!!($loading->skrip)!!}

    <!-- Jika status sama dengan 0 atau berarti mati, maka tidak melakukan apa apa -->
    <?php else: ?>
      //Nothing Happen
    <?php endif; ?>
  
  
    <br><br><br><br>
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <strong>Tampilkan Berdasarkan</strong>

              <form class="form-group bg-white p-3 mt-2" action="{{route('Cari.store')}}" method="post">
                @csrf

                <select class="form-control mt-2" name="kategori">
                  <option value="{{$nomor->id}}">Kategori Yang Terpilih : {{$nomor->kategori}}</option>
                  <option value="#" disabled>- Kategori Lainnya -</option>
                  @foreach($data2 as $k)
                    <option value="{{$k->id}}">{{$k->kategori}}</option>
                  @endforeach
                </select>

                <input type="submit" name="submit" value="Tampilkan" class="mt-3 btn btn-primary text-white">
                <a class="btn btn-light mt-3" href="{{route('barang.index')}}">Reset Kategori</a>
              </form>
          </div>

          <div class="col-lg-8 ">
            <strong>Produk dengan kategori {{$nomor->kategori}}</strong>
              @foreach($data as $l)
                <div class="container bg-white mt-3">
                    <div class="row">
                        <div class="col-lg-8 p-3">
                          <a href="{{route('barang.show', $l->slug)}}"><h2>{{$l->nama}}</h2></a>
                          {!!substr($l->deskripsi,0,200)!!} ...
                        </div>

                        <div class="col-lg-4 p-3">
                            <center>
                              <a href="{{route('barang.show', $l->slug)}}"><img src="gambar/{{$l->gambar}}" width="100px" alt="{{$l->nama}}" title="{{$l->nama}}"></a>
                            </center>
                        </div>
                    </div>
                </div>

                @if(!Auth::user())

                @elseif(AUth::user()->jabatan = 'admin')
                  <div class="container p-3">
                    <form class="form-group" action="{{route('barang.destroy', $l->slug)}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                      <a href="{{route('barang.edit', $l->slug)}}">
                        <i class="fas fa-edit btn btn-primary text-white" title="Edit Barang {{$l->nama}}"></i>
                      </a>
                      <input type="submit" name="hapus" class="btn btn-danger" value="Hapus">
                    </form>
                  </div>
                @endif
              @endforeach
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
          <div class="col-lg-5 ">
            <h5><b>Kategori</b></h5>

            @foreach($data2 as $f)
              <span class="badge border p-2">{{$f->kategori}}</span>
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
