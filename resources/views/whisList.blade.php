@extends('layout.app')

@section('title','Wish List')

@section('content')
<section class="main">
<div class="d-flex flex-column  mb-5">
		<!-- Wishlist title -->
		<p class="text-center fs-1">My wishlist on Village Mart</p>



		<!-- all Wishlist product list table are here -->

		<div class="d-flex flex-row mt-5 mb-3">
			<table class="table table-strip">
				<thead>
					<tr>
						<td><p class="ms-5 fs-6">Action</p></td>
						<td class="ms-5"></td>
						<td><p class="ms-4 fs-6">Product</p></td>
					</tr>
				</thead>

				<tbody>



					<tr class="bg-light">
						<td><button class="mt-3 ms-5" id="but1"><img src="{{asset('assets/images/wish1.svg')}}"></button></td>
						<td><img src="{{asset('assets/images/wish2.jpg')}}" id="wish2" class="shadow bg-body rounded"></td>
						<td><p class="mt-3 fs-6"  id="Product_text">Productive Laptop</p></td>
					</tr>

					<tr class="bg-light">
						<td><button class="mt-3 ms-5" id="but1"><img src="{{asset('assets/images/wish1.svg')}}"></button></td>
						<td><img src="{{asset('assets/images/wish3.jpg')}}" id="wish2" class="shadow bg-body rounded"></td>
						<td><p class="mt-3 fs-6"  id="Product_text">Men watch</p></td>
					</tr>


					<tr class="bg-light">
						<td><button class="mt-3 ms-5" id="but1"><img src="{{asset('assets/images/wish1.svg')}}"></button></td>
						<td><img src="{{asset('assets/images/wish4.jpg')}}" id="wish2" class="shadow bg-body rounded"></td>
						<td><p class="mt-3 fs-6" id="Product_text">SmartPone</p></td>
					</tr>


				</tbody>
			</table>

		</div>


	</div>
</section>

@endsection


	