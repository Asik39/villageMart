<section class="section section-5">
            <div class="title"><a>Best Sellers</a></div>
                <ul class="d-flex align-items-center justify-content-between mb-3">
                    <div class="navigation">
                        <li><a class="active">Best Sellers</a></li>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-3 navigation-right">
                        <li><a class="active">Top 20</a></li>
                        <li><a class="">Tv & Audio</a></li>
                        <li><a class="">Cameras</a></li>
                        <li><a class="">Audio</a></li>
                        <li><a class="">Smartphones</a></li>
                        <li><a class="">Accesoriess</a></li>
                    </div>
                </ul>
                <div class="row">                        
                        @foreach($featured as $data)
                        <div class="col-4">
                            <div class="item">
                                <a href="">
                                    <div class="card m-2 p-4 card-hover">
                                        <p class="store-name aqua-deep">{{$data->store}}</p>
                                        <p class="product-title bolded my-4 blue">{{$data->categories}}</p>
                                        <img src="{{asset('assets/images/'.$data->img_address)}}" class="img-fluid">
                                        <p class="price fs-4">{{$data->amount}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    </div>
        </section>