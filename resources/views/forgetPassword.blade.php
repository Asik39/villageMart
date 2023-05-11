@extends('layout.app')

@section('title','Forget Password')

@section('content')
<section class="main">
<div class="container my-5">
      <div class="row justify-content-center">
         <div class="col-lg-5 col-md-7 col-sm-9">
            <div class="card">
               <div class="card-body">
                  <span class="text-center mb-4 fs-2">Forgot Password</span>
                  <form>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                     </div>
                     <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection