<!DOCTYPE html>
<html lang="en" dir="ltr">
  @extends('layouts.app')

  @if(!Auth::user()
  <body><br><br><br><br>
    <div class="container">
      <h2>Maaf!</h2>
      Dibutuhkan Sessi admin untuk mengakses halaman ini
    </div>
  </body>
  @elseif(Auth::user()
  <body><br><br><br><br>
    <div class="container">
      <h2>Inbox Hasanah Hijab</h2>

    </div>
  </body>
  @endif
</html>
