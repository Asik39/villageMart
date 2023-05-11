<section class="section section-4">
            <div class="title"><a>Best Deals</a></div>
            <ul class="d-flex align-items-center justify-content-center mb-3 navigation">
                <li><a class="mx-3 active">Best Deals</a></li>
                <li><a class="mx-3">Tv & Audio</a></li>
                <li><a class="mx-3">Cameras</a></li>
                <li><a class="mx-3">Audio</a></li>
                <li><a class="mx-3">Smartphones</a></li>
                <li><a class="mx-3">Accesoriess</a></li>
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
                    {{ $featured->links() }}
    
        </section>