
<section class="sidebar">
        <div class="brand">
            <a href="{{url('./')}}">Village Mart</a>
        </div>
        <ul class="side-menu" id="category">
            <li><a href="" class="active bolded"><i class="fa-solid fa-list icon"></i> All Departments</a></li>
            <li><a href="" class="bolded">Value of the Day</a></li>
            <li><a href="" class="bolded">Top 100 Offers</a></li>
            <li><a href="" class="bolded">New Arrivals</a></li>
            @foreach($category as $row)
            <li class="dropdown">
                <a>{{$row->category}} <i class="fa-solid fa-chevron-right right-icon"></i>      
                </a>
            
                <ul class="dropdown-item">
                    @foreach($subCat as $data)
                    @if($row->id==$data->category_id)
                    <li><a href="">{{$data->sub_category}}</a></li>
                    @endif
                    @endforeach
                </ul>
            
            </li>
          @endforeach
         
          
        </ul>
    </section>   
  

   