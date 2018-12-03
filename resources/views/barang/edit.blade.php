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
      <h1>Update Data {{$data->nama}}</h1><br>
      <form class="form-group" action="{{route('barang.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}

        <input type="text" name="judul" value="{{$data->nama}}" class="form-control" placeholder="Masukan Judul Barang">
        <input type="text" name="harga" value="{{$data->harga}}" placeholder="Masukan Harga Barang (Ubah Nominalnya saja, tanpa menambahkan Rp.)" class="form-control mt-2">
        <input type="number" name="stok" class="form-control mt-2" placeholder="Masukan Stok Barang" value="{{$data->stok}}">

        <select class="form-control mt-2" name="kategori">
          <option selected disabled value="">Kategori yang dipilih {{$data->kategori}}</option>
          <option value="#" disabled>- Kategori lainnya -</option>
            @foreach($kat as $k)
              <option value="{{$k->id}}">{{$k->kategori}}</option>
            @endforeach
        </select>
          <br>
          <label for="deskripsi">Masukan Deskripsi Barang</label>
        <textarea name="deskripsi" id="editor1" rows="8" cols="80">
          {{$data->deskripsi}}
        </textarea>
        <br>
        <label for="file">Masukan Gambar Produk</label>
        <input class="d-block" type="file" name="gambar" value="">
          <br><br>
        <input type="submit" class="btn btn-primary" name="kirim" value="Update Barang">
        <input type="reset" name="reset" value="Reset Data" class="btn btn-danger">
        <a href="{{route('barang.index')}}" class="btn btn-light d-inline">Batal Update</a>
      </form>
    </div>

    <script>
    CKEDITOR.replace( 'editor1' );
            </script>
  </body>
  @endif


</html>
