<!DOCTYPE html>
<html lang="en" dir="ltr">
  @extends('layouts.app')
  <body><br><br><br><br>
    <div class="container">
        <h2>Pengaturan Website</h2>
        <br>
      <div class="card p-3">
          <fieldset>
        <legend> <h3>Loading Website</h3> </legend>
        Pada menu ini anda dapat mengaktifkan atau menonaktifkan fitur loading yang muncul pada tampilan smartphone. <code><b>*</b></code> Fitur loading hanya muncul pada tampilan smartphone saja

        <!-- Jika status sama dengan 1 atau aktif maka tampilkan skrip mematikan -->
        <?php if ($loading->status == "1"): ?>
          <div class="mt-3">
            Status fitur <div class="text-primary d-inline">Aktif</div>

            <form class="mt-2" action="{{route('loading.update', $loading->id)}}" method="post">
              @csrf
              {{method_field('PUT')}}
              <input type="hidden" name="status" value="{{$loading->status}}">
              <input type="submit" class="btn btn-danger" name="" value="Nonaktifkan">
            </form>
          </div>

          <!-- Jika status sama dengan 0 atau mati maka tampilkan skrip menonaktifkan -->
        <?php elseif ($loading->status == "0"): ?>
          <div class="mt-3 ">
            Status fitur <div class="text-danger d-inline">Nonaktif</div>

            <form class="mt-2" action="{{route('loading.update', $loading->id)}}" method="post">
              @csrf
              {{method_field('PUT')}}
              <input type="hidden" name="status" value="{{$loading->status}}">
              <input type="submit" class="btn btn-primary" name="" value="Nyalakan">
            </form>
          </div>
        <?php endif; ?>
      </fieldset>
      </div>
    </div>
  </body>
</html>
