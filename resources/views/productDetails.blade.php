@extends('layout.app')

@section('title','Product Details')

@section('content')
<section class="main">
    <div class="d-flex flex-row my-5 ms-5 " id="main_div">
		<img id="img1" class="border border-3 border-info shadow mb-5 bg-body rounded" src="{{asset('assets/images/img1.jpg')}}" alt="Cinque Terre">

		<div>
			<!-- Search icon image -->
			<img id="img2" class="ms-4 mt-3  me-5" src="{{asset('assets/images/img2.svg')}}">
		</div>

		<div>
		<!-- Catagory name -->
			<p class="text-black-50 fs-6">Audio speaker</p>


			<div >
				<!-- Product name -->
				<p class="fs-2 fw-bold">Wireless Audio System Multiroom 360</p>
			</div>


			<div class="d-flex flex-row mt-4">
				<!-- about stock or avialbility -->
				<span class="fs-5 ">Availability: </span>
				<span class="ms-2 text-success fs-5">In stock </span>
				<!-- <h5 class="ms-2 text-danger">Out of stock </h5> -->
			</div>


			<div id="line" class="mt-3" ><!-- Horizontal line. This dive use custom css. --></div>


			<!-- Wishlist and compare options are here -->
			<div class="d-flex flex-row mt-5">
				<img src="{{asset('assets/images/img3.svg')}}" id="img3" >
				<span class="fs-5">Wishlist</span>

				<img src="{{asset('assets/images/img4.svg')}}" id="img4" class="ms-4">
				<span class="fs-5">Compare</span>
			</div>


			<!-- Details in points -->
			<div class="text-black-50 mt-4">
				<ul style="list-style-type:disc;">
					<li>360 omnidirectional Sound</li>
					<li>Easy Intuitive Control</li>
					<li>Multiroom app</li>
				</ul>
			</div>


			<!-- Price Section -->
			<div class="d-flex flex-row">
				<img src="{{asset('assets/images/img5.svg')}}" id="img5" class="mt-1">
				<span class="fs-1">2,299.00</span>
			</div>



	<!-- Bottom accories, specification, Reviews etc options -->
			<div class="d-flex flex-row  " id="bottom_options">
			<span class="fs-3" id="bottom_options1">Accessories</span>
			<span class="ms-5 fs-3" id="bottom_options2">Description</span>
			<span class="ms-5 fs-3" id="bottom_options3">Specification</span>
			<span class="ms-5 fs-3" id="bottom_options4">Reviews</span>

			</div>



		</div>


	</div>

    

</section>

@endsection