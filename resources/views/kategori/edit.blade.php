<html lang="en" dir="ltr">
  @extends('layouts.app')

  @if(!Auth::user())
    <body>
    <br><br><br><br>
    <div class="container">
      <h1>Maaf!</h1>
        Diperlukan Login Akun Admin
    </div>
  </body>
  @elseif(Auth::user() -> jabatan = 'admin')
  <body>
    <script src="/ckeditor/ckeditor.js"></script>
    <br><br><br><br>
    <div class="container">
      <h1>Edit Kategori {{$lihat->kategori}}</h1><br>
      <form class="form-group" action="{{route('kategori.update', $lihat->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}
        <input type="text" name="" value="Id Kategori = {{$lihat->id}}" class="form-control" disabled>
        <input type="text" name="kategori" value="{{$lihat->kategori}}" class="form-control mt-3" placeholder="Masukan Kategori Baru">
          <br>

        <input type="submit" name="" class="btn btn-primary" value="Perbarui">
        <a class="btn btn-light" href="{{route('kategori.index')}}">Batal Edit</a>
      </form>

      <br><br>

    </div>
  </body>

  @endif

</html>
