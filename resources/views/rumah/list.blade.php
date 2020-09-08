@extends('frontend.layout.master')
@section('content')
	<section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>List Rumah</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="blog-section blog-page ">
        <div class="container">
            <div class="row">
            	@foreach($rumah as $item)
	            	<div class="col-lg-4 col-md-6">
	                    <div class="single-blog-item">
	                        <div class="sb-pic">
	                            <img src="{{asset($item->foto_1)}}" alt="">
	                        </div>
	                        <div class="sb-text">
	                            <ul>
	                                <li><i class="icon_pin"></i> {{kelurahan($item->kelurahan_id)}}, {{kecamatan($item->kecamatan_id)}}, {{kabupaten($item->kabupaten_id)}}</li>
	                            </ul>
	                            <h4><a href="{{route('detail',['id' => $item->id])}}">{{$item->nama}}</a></h4>
	                        </div>
	                    </div>
	                </div>
                @endforeach
            </div>
        </div>
   	</section>
@endsection