<section class="section section-2">
            <div class="title"><a>Product Add Center</a></div>
            <div class="owl-carousel owl-theme carousel-2">
                @foreach($adCenter as $data)
                    <div class="item">
                        <div class="card card-hover">
                            <div class="d-flex align-items-center flex-column flex-sm-row">
                                
                                <img src="{{asset('assets/images/laptop.png')}}">
                                <div>
                                    <p>{{$data->title}}</p>
                                    <a href="" class="bolded">{{$data->more}}</a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </section>