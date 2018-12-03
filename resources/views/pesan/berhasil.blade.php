<!DOCTYPE html>
<html lang="en" dir="ltr">
  @extends('layouts.app')
  <body><br><br><br><br>
    <div class="container">
      <h2>Sukses!</h2>

      Pesanan anda telah dikirim kepada penjual, segera akan kami hubungi anda melalui nomor <div class="">
        WhatsApp / telepon yang anda sertakan pada halaman pemesanan tadi.
      </div>
      Selanjutnya dapat anda pilih menu dibawah ini

      <div class="btn-group d-block mt-5">
        <a href="/" >
          <button type="button" class="btn btn-light border" name="button"><i class="fas fa-home"></i></button>
        </a>

        <a href="http://bit.ly/Hasanah-Hijab" class="ml-1">
          <button type="button" class="btn btn-success" name="button"><i class="fab fa-whatsapp"></i> WhatsApp Penjual</button>
        </a>

      <a class="ml-1" href="{{route('Invoice.index')}}">
          <button type="button" class="btn btn-primary" name="button">Cari Pesanan</button>
      </a>


      </div>
    </div>
  </body>
</html>
