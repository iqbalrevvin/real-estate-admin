<section class="hero-section">
    <div class="hero-items owl-carousel">
        @foreach($rumah as $item)
            <div class="single-hero-item set-bg" data-setbg="{{asset($item->foto_1)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text">
                                <p class="room-location"><i class="icon_pin"></i>
                                    {{kelurahan($item->kelurahan_id)}}, {{kecamatan($item->kecamatan_id)}}, {{kabupaten($item->kabupaten_id)}}
                                </p>
                                <h2>{{$item->nama}}</h2>
                                <div class="room-price">
                                    <span>Harga:</span>
                                    <p>Rp. {{number_format($item->harga)}}</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>{{$item->luas_tanah}} M</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>{{$item->tempat_tidur}} Tempat Tidur</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>{{$item->kamar_mandi}} Kamar Mandi</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>{{$item->garasi}} Garasi</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>