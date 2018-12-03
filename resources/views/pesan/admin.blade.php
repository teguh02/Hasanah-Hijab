<!DOCTYPE html>
<html lang="en" dir="ltr">
  @extends('layouts.app')

  @if(!Auth::user())
  <body><br><br><br><br>
    <div class="container">
      <h2>Maaf!</h2>
      Diperlukan SESSI Admin untuk mengakses halaman ini
    </div>
  </body>
  @elseif(Auth::user()->jabatan = "admin")
  <body><br><br><br><br>
    <div class="container">
      
      
      @if($email == Auth::user()->email)
      <h2>Daftar Pesanan</h2>
      Jika anda menekan tombol tandai selesai pesanan, anda telah dianggap selesai dengan pesanan tersebut dan data otomatis terhapus dari database.
      <br><br>
      <p>Menampilkan pesanan yang sebelumnya diposting oleh {{$email}} dengan jumlah pesanan yang masuk adalah <strong>{{$data->count()}}</strong> pesanan</p>
        @foreach($data as $d)
        <div class="row mt-2 p-3">
          <div class="col-md-2 col-lg-2 bg-primary text-white p-3">
            <h5>
                <strong><div>{{$d->barang}}</div></strong>
               <b>Jumlah Pesanan</b> <strong>{{$d->jumlah}}</strong></h5>

               <div class="">
                 Total Harga {{$d->harga}}
               </div>
          </div>

          <div class="col-md-9 col-lg-9 p-3 border">
            <h5>Pesanan oleh {{$d->nama}}</h5>
            <div class="">
              Nomor Invoice <strong>{{$d->invoice}}</strong>
            </div>
            <div class="">
              Keterangan {{$d->keterangan}}
            </div>
            <div class="">
              Nomor WhatsApp yang di masukan <div class="">
                <strong>{{$d->telp}}</strong> -

                <?php if ($d->pertanyaan == "ya"): ?>
                  (Bisa dihubungi Telp / SMS biasa)
                <?php else: ?>
                  (Tidak bisa dihubungi Telp / SMS biasa)
                <?php endif; ?>

                <div class="">
                  Pemesanan Masuk Pada {{$d->created_at}}
                </div>
              </div>
            </div>
            <br>
            <p>Alamat COD :</p>
            {!!($d->alamat)!!}
          </div>

          <div class="col-md-1 col-lg-1 border p-3">
            <form class="" action="{{route('Pesan.destroy', $d->id)}}" method="post">
              @csrf
              {{method_field('DELETE')}}
              <center><button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-check-square"></i>
              </button> <div class="text-primary d-inline">
                Tandai Selesai
              </div> </center>
            </form>
          </div>
        </div>
        @endforeach

      
      @else
        
        <div class="container p-3">
            <h2>Maaf!</h2>
            Terdapat kesalahan autentikasi, silahkan refresh halaman ini
            
            <a class="d-block mt-4" href="/">
                <button class="btn btn-light p-2 border">Halaman Utama</button>
            </a>
        </div>      
      
      @endif

    </div>
  </body>
  @endif
</html>
