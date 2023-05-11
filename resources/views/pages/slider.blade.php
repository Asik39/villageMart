
<section class="section-1">
            <div class="section-top">
                <div>
                    <li>
                        <a href="" class="active">All Pages <i class="fa-solid fa-chevron-right right-icon"></i>
                           
                        </a>
                    </li>
                    <li><a href="">Featured Brands</a></li>
                    <li><a href="">Trending Styles</a></li>
                    <li><a href="">Gift Cards</a></li>
                </div>
                <div>
                   <a href="">Free shipping on order now</a> 
                </div>
            </div>

            <div class="section-bottom">
                <div class="owl-carousel owl-theme carousel-1">
                    @foreach($slider as $data)
                    <a href="">
                        <div class="item">
                            <img src="{{asset('assets/images/'.$data->img_address)}}">                           
                        </div>
                    </a>
                    @endforeach
                    
                </div>
            </div>
        </section>