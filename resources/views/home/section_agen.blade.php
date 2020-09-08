<section class="agent-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>We Are To Help You</span>
                    <h2>Our Agents</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="agent-carousel owl-carousel">
                @foreach($agen as $item)
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="{{asset($item->foto)}}" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>{{$item->nama}} <span>{{$item->email}}</span></h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>