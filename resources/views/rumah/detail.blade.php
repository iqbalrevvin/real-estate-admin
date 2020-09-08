@extends('frontend.layout.master')
@section('content')
	<section class="property-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="pd-details-text">
                        <div class="pd-details-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-send"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-print"></i></a>
                            <a href="#"><i class="fa fa-cloud-download"></i></a>
                        </div>
                        <div class="property-more-pic">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{asset($rumah->foto_1)}}" alt="">
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt" data-imgbigurl="{{ asset($rumah->foto_1) }}"><img
                                            src="{{asset($rumah->foto_1)}}" alt=""></div>
                                    <div class="pt active" data-imgbigurl="{{ asset($rumah->foto_2) }}"><img
                                            src="{{ asset($rumah->foto_2) }}" alt=""></div>
                                    <div class="pt" data-imgbigurl="{{ asset($rumah->foto_3) }}"><img
                                            src="{{ asset($rumah->foto_3) }}" alt=""></div>
                                    <div class="pt" data-imgbigurl="{{ asset($rumah->foto_4) }}"><img
                                            src="{{ asset($rumah->foto_4) }}" alt=""></div>
                                    <div class="pt" data-imgbigurl="{{ asset($rumah->foto_5) }}"><img
                                            src="{{ asset($rumah->foto_5) }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="pd-desc">
                            <h4>Description</h4>
                            <p>{{$rumah->deskripsi}}</p>
                        </div>
                        <div class="pd-details-tab">
                            <div class="tab-item">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab-1" role="tab">Overview</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-2" role="tab">Description</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-item-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                        <div class="property-more-table">
                                            <table class="left-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="pt-name">Harga</td>
                                                        <td class="p-value">Rp. {{number_format($rumah->harga)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Tipe</td>
                                                        <td class="p-value">{{$rumah->tipe->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Tahun</td>
                                                        <td class="p-value">{{$rumah->tahun}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Kamar Mandi</td>
                                                        <td class="p-value">{{$rumah->kamar_mandi}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Ruangan</td>
                                                        <td class="p-value">{{$rumah->ruangan}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Tempat Parkir</td>
                                                        <td class="p-value">{{$rumah->parkiran}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Luas Tanah</td>
                                                        <td class="p-value">{{$rumah->luas_tanah}} M2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="right-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="pt-name">Agent</td>
                                                        <td class="p-value">{{$rumah->agen->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Tempat Tidur</td>
                                                        <td class="p-value">{{$rumah->tempat_tidur}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">Garasi</td>
                                                        <td class="p-value">{{$rumah->garasi}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="pd-table-desc">
                                            <p>{{$rumah->deskripsi}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="property-map">
                            <h4>Map</h4>
                            <div class="map-inside">
                                {!!$rumah->link_maps!!}
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                            </div>
                        </div>
                        <div class="property-contactus">
                            <h4>Contact Us</h4>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="agent-desc">
                                        <img src="img/properties/agent-contact.jpg" alt="">
                                        <div class="agent-title">
                                            <h5>{{$rumah->agen->nama}}</h5>
                                            <span>Agen / Saler Marketing</span><br>
                                            <span>{{$rumah->agen->email}} | {{$rumah->agen->telp}}</span>

                                        </div>
                                        <div class="agent-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                        </div>
                                        <p>In today’s net-savvy world it has become common for any business to have a
                                            website which they use mostly for advertising their products and services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection