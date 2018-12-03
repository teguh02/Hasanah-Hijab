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
      <h1>Tambah Kategori Baru</h1><br>
      <form class="form-group" action="{{route('kategori.store')}}" method="post">
        @csrf

        <input type="text" name="kategori" value="" class="form-control" placeholder="Masukan Kategori Baru">
          <br>
        <input type="submit" name="" class="btn btn-primary" value="Tambah">
        <a class="btn btn-light" href="/">Batal Tambah</a>
      </form>

      <br><br>
      <table style="width: 100%" class="table table-hover table-responsive-sm table-responsive-md	">
        <tr>
          <td style="width: 50px"><th >No</th></td>
          <td><th>Kategori</th></td>
          <td><th>Aksi</th></td>
        </tr>

        @foreach($lihat as $h)
            <tr>
              <td></td>
              <td>{{$h->id}}</td>
              <td></td>
              <td>{{$h->kategori}}</td>
              <td></td>
              <td>
                  <form class="form-group" action="{{route('kategori.destroy', $h->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <a title="Edit Kategori {{$h->kategori}}" href="{{route('kategori.edit', $h->id)}}"><i class="fas fa-edit btn btn-primary text-white"></i></a>
                    <input type="submit" title="Hapus Kategori {{$h->kategori}}" name="submit" value="Hapus" class="btn btn-danger ">
                  </form>
              </td>
            </tr>
        @endforeach
      </table>

    </div>
  </body>

  @endif

</html>
