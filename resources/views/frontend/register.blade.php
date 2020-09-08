@extends('frontend.layout.master')

@section('content')
	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home" style="background: url({{ asset('/frontend/img/bg-web.jpg') }});">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Halaman {{ $title }}				
					</h1>	
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<section class="search-course-area relative" style="background: unset;">
	
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-6 col-md-6 search-course-left">
					@if (session('success'))
						<div class="alert alert-success">
							{{-- Pendaftaran Berhasil, Silahkan Klik Menu <a href="{{ url('admin') }}">Login</a> Di Atas Untuk Mengisi Formulir Secara Lengkap! --}}
							Terimakasih, pendaftaran anda berhasil di rekam dan akan dibuatkan ID Unik Gelang NFC
						</div>
					@endif
					
					<h1 class="text-black">
						Pendaftaran <br>
						Peserta Workshop
					</h1>
					<p>
						Daftarkan data anda agar terdata sebagai peserta di database kami.
					</p>
					
				</div>
				<div class="col-lg-4 col-md-6 search-course-right section-gap">
					<form class="form-wrap" action="{{ url('/postregister') }}" method="POST">
						@csrf
						{{-- <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4> --}}

						@if($errors->has('email'))
                    		<small id="namaHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
                		@endif
						<input type="email" class="form-control" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Isi Email'">
						

						@if($errors->has('nama'))
                    		<small id="nama" class="form-text text-danger">{{ $errors->first('nama') }}</small>
                		@endif
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Isi Nama Lengkap'">
						


						@if($errors->has('tgl_lahir'))
                    		<small id="tgl_lahir" class="form-text text-danger">{{ $errors->first('tgl_lahir') }}</small>
                		@endif
                		<input type="date" class="form-control" name="tgl_lahir" placeholder="No. Telp/HP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. '">
						

                		@if($errors->has('nama'))
                    		<small id="no_telp" class="form-text text-danger">{{ $errors->first('no_telp') }}</small>
                		@endif	
                		<input type="number" class="form-control" name="no_telp" placeholder="No. Telp/HP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Telp/HP'">
									
						<button type="submit" class="primary-btn text-uppercase">Daftar</button>
					</form>
				</div>
			</div>
		</div>	
	</section>
@endsection