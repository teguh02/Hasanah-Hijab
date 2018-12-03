<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Hasanah Hijab - {{$lihat -> nama}}</title>
    </head>
@extends('layouts.app')
  <body>
      
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
    <div class="container" style="font-size: 11px">
        <strong>
          <a style="color: #777 !important" href="/">Beranda</a> /
          <a style="color: #777 !important" href="{{route('barang.index')}}">Produk</a> /
          <a style="color: #777 !important" href="">{{$lihat -> nama}}</a>
        </strong>
    </div><br>
    <div class="container">
          <strong><h2>{{$lihat -> nama}}
          </h2></strong>

          <h5>Harga Barang Rp. {{$lihat->harga}}</h5><br>

        <form class="d-inline" action="{{route('Form-Pemesanan.update', $lihat->slug)}}" method="post">
          @csrf
          {{method_field('PUT')}}
        <?php if ($lihat->stok  == "0"): ?>
            <a href="#" class="btn btn-light border">Barang Habis</a>
          <?php else: ?>
          <input type="hidden" name="oleh" value="{{$lihat->oleh}}">
            <button type="submit" class="btn btn-success text-light" name="button">Pesan Produk <span class="badge badge-light">{{$lihat->stok}}</span></button>
          <?php endif; ?>
        </form>
        <br>
        <p class="mt-3"><strong class="d-block">Deskripsi Produk</strong>
          {!!($lihat->deskripsi)!!}</p>

          <div class="mt-2">
            <strong>Bagikan Produk</strong><br>
            <div class="addthis_inline_share_toolbox d-inline "></div>
          </div>  <br>
      <img src="../gambar/{{$lihat->gambar}}" width="100%" alt="{{$lihat->gambar}}">


      <div class="container p-2 mt-4 text-white bg-dark">
          <center> <strong>Komentari Produk Ini</strong> </center>

          <!-- Skrip Disqus Disini -->
                            
      </div>
      
      <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://hasanah-hijab.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
    </div>
  </body>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bdc3238cc3b05eb"></script>

  @extends('layouts.footer')
</html>
