<!DOCTYPE html>
<html lang="en" dir="ltr">
  @extends('layouts.app')

  @if(!Auth::user())
  <body><br><br><br><br>
    <div class="container">
      <h2>Maaf!</h2>
      Dibutuhkan SESI Admin untuk mengakses halaman ini
    </div>
  </body>
  @elseif(Auth::user()->jabatan = 'admin')
  <body><br><br><br><br>
    <div class="container">
      <h2>Kotak Masuk Layanan Pengaduan</h2>
    </div>

    @foreach($data as $d)
    <br>
      <div class="card container">
        <div class="card-body">
          <div class="card-title">
            <h3>Pengirim {{$d->nama}}</h3>
          </div>

          <p class="card-text"> <strong>Subjek {{$d->subjek}}</strong> </p>
          <div class="">
            <b>Email :</b> {{$d->email}}
          </div>

          <div class="">
            <b>WhatsApp :</b> {{$d->WA}}
          </div>
            <br>
          <div class="">
            <div class="">
              <b>Pesan :</b>
            </div>
            {!!($d->pesan)!!}
          </div>
        </div>
      </div>

      <div class="border p-2 pl-4 container">
        <form class="text-primary" action="{{route('inbox.destroy', $d->id)}}" method="post">
          @csrf
          {{method_field('DELETE')}}
          <a href="#" class="btn btn-success">Id Pesan : {{$d->id}}</a>
          <button type="submit" class="btn btn-primary ml-1" name="button"><i class="fas fa-check-square"></i></button> Selesai
        </form>
      </div>
    @endforeach
    <br><br><br>
  </body>
  @endif
</html>
