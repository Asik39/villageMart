<section class="section section-2">
            <div class="title"><a>Brands</a></div>
            <div class="owl-carousel owl-theme carousel-2">
                @foreach($brand as $data)
                <div class="item">
                    <div class="card d-flex align-items-center justify-content-center" style="background:var(--light-80);">
                        <img src="{{asset('assets/images/'.$data->img_address)}}" style="height:40px !important;">
                    </div>
                </div>
                @endforeach
                
            </div>
        </section>