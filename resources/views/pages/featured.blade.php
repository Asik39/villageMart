<section class="section section-3">
            <div class="title"><a>Featured</a></div>
            <div class="row parent">
                <div class="col-12 col-md-4 left mb-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="" class="py-4 px-3 text-center">
                            <p class="fs-4 mb-5 text-start">Special Offer</p>
                            <img src="assets/images/laptop.png" class="img-fluid" style="width:300px;height:auto;">
                            <p class="product-title bolded my-4 blue">i5 12th generation, 8 gb ram, 1tb HDD, 128gb SSD</p>
                            <p class="text-center fs-3 my-4">$100.00</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8 right">
                    <ul class="d-flex align-items-center justify-content-center mb-3 navigation">
                        <li><a class="mx-3 active">Featured</a></li>
                        <li><a class="mx-3">On Sale</a></li>
                        <li><a class="mx-3">Top Rated</a></li>
                    </ul>
                    <div class="box">
                        <div class="owl-carousel owl-theme carousel-3">
                            @foreach($featured as $data)
                            <div class="item">
                                <a href="">
                                    <div class="card m-2 p-4 card-hover">
                                        <p class="store-name aqua-deep">{{$data->store}}</p>
                                        <p class="product-title bolded my-4 blue">{{$data->categories}}</p>
                                        <img src="{{asset('assets/images/perfume.jpg')}}" class="img-fluid">
                                        <p class="price fs-4">{{$data->amount}}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>