@extends('layouts.app')

@if(!AUth::user())
	<body><br><br><br><br>
		<div class="container">
		<h1>Maaf!</h1>
		<h3>Diperlukan Sesi Admin Untuk Mengedit Laman</h3>
			<br>
			<a href="/"><- Kembali Ke Halaman Utama</a>
	</div>
	</body>
@elseif(AUth::user() -> jabatan = 'admin')
	<body><br><br><br><br>
		<script src="/ckeditor/ckeditor.js"></script>


		<div class="container">
			<h2>Silahkan Edit Kalimat</h2>
			Kalimat yang anda tulis dibawah ini akan ditampilkan pada halaman utama atau halaman index.
			<form action="{{route('beranda.update', '1')}}" class="mt-4" method="post">
				@csrf

				{{method_field('PUT')}}
				<textarea id="editor1" name="editor1" style="width: 100%" >
					{{$data->isi}}
				</textarea>

				<input type="submit" class="btn btn-primary mt-3" name="submit" value="Perbarui Teks">
				<a href="/" class="btn mt-3 ml-2 text-dark">Batal Edit</a>
			</form>
		</div>
	</body>

	<script>
	CKEDITOR.replace( 'editor1' );
					</script>
@endif
