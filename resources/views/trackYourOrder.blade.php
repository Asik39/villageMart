@extends('layout.app')

@section('title','Track Your Order')

@section('content')
<section class="main">
    <div class="d-flex flex-column" id="allcom">
		<span class="text-center fs-1">Track your order</span>

		<br>
		<p>
			To track your order please enter your order ID in the box below and press the "Track" button. This was given to your receipt and in the confirmation email you should have received. 
		</p>

		<br>

		<span>Order ID</span>
		<br>
		<input type="text" name="" placeholder="Found in your order confirmation email" id="in">

		<br>
		<span>Billing email</span>
		<br>
		<input type="text" name="" placeholder="Email you used during checkout" id="in">

		<br>
		<button class="btn btn-secondary col-sm-2">Track</button>
	</div>
</section>

@endsection