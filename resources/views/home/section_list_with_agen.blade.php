<section class="feature-section" style='padding-top:15px; padding-bottom: 0px;'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Listing From Our Agents</span>
                    <h2>Featured Properties</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="feature-carousel owl-carousel">
                @foreach($rumah as $item)
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="{{asset($item->foto_1)}}">
                                <div class="pic-tag">
                                    <div class="f-text">{{$item->tipe->nama}}</div>
                                    <div class="s-text">For Sale</div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="{{asset($item->agen->foto)}}" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span>{{$item->agen->nama}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4>{{$item->nama}}</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> {{kelurahan($item->kelurahan_id)}}, {{kecamatan($item->kecamatan_id)}}</li>
                                        <li><i class="fa fa-tag"></i> {{$item->tipe->nama}}</li>
                                    </ul>
                                    <h5 class="price">Rp. {{number_format($item->harga)}}</h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>{{$item->luas_tanah}} M</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>{{$item->tempat_tidur}}</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>{{$item->kamar_mandi}}</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>{{$item->garasi}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>