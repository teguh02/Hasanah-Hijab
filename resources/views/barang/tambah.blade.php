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
        
      <h1>Tambah Barang</h1><br>
      <form class="form-group" action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="text" name="judul" value="" class="form-control" placeholder="Masukan Judul Barang">
        <input type="number" name="harga" value="" placeholder="Masukan Harga Barang (Nominalnya Saja)" class="form-control mt-2">
        <input type="number" name="stok" class="form-control mt-2" placeholder="Masukan Stok Barang" value="">

        <select class="form-control mt-2" name="kategori">
          <option value="#" selected disabled>- Pilih Kategori Barang -</option>
            @foreach($lihat as $k)
              <option value="{{$k->id}}">{{$k->kategori}}</option>
            @endforeach
        </select>
          <br>
          <label for="deskripsi">Masukan Deskripsi Barang</label>
        <textarea name="deskripsi" id="editor1" rows="8" cols="80"></textarea>
        <br>
        <label for="file">Masukan Gambar Produk</label>
        <input class="d-block" type="file" name="gambar" value="">
          <br><br>
          <input type="hidden" name="oleh" value="{{Auth::user()->email}}">
        <input type="submit" class="btn btn-primary" name="kirim" value="Tambah Barang">
        <a href="/" class="btn btn-light d-inline">Batal Tambah</a>
      </form>
    </div>

    <script>
    CKEDITOR.replace( 'editor1' );
            </script>
  </body>
  @endif


</html>
