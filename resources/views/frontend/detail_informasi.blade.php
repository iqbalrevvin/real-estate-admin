@extends('frontend.layout.master')
<!-- start banner Area -->
@section('content')
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						{{ $informasi->judul }}				
					</h1>	
					{{-- <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Blog Details Page</a></p> --}}
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->					  

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="{{ asset($informasi->gambar) }}" alt="">
							</div>									
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#"> {{ $informasi->kategori_informasi->nama }} </a></li>
							</ul>
							<div class="user-details row">
								<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{ $informasi->tanggal_rilis }}</a> <span class="lnr lnr-calendar-full"></span></p>
								<ul class="social-links col-lg-12 col-md-12 col-6">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-github"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>																				
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20">{{ $informasi->judul }}</h3>
							{!! $informasi->konten !!}
						</div>
					</div>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">

						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title">Informasi Lainnya</h4>
							<div class="popular-post-list">
								@forelse($informasi_lainnya as $info)
									<div class="single-post-list d-flex flex-row align-items-center">
										<div class="thumb">
											<img class="img-fluid" src="{{ asset($info->gambar) }}" alt="">
										</div>
										<div class="details">
											<a href="{{ url('/detail/'.$info->id) }}"><h6>{{ $info->judul }}</h6></a>
											<p>{{ $info->tanggal_rilis }}</p>
										</div>
									</div>
								@empty
									<div class="single-post-list d-flex flex-row align-items-center">
										<div class="details">
											<a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
											<p>02 Hours ago</p>
										</div>
									</div>
								@endforelse														
							</div>
						</div>
							
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- End post-content Area -->
@endsection
