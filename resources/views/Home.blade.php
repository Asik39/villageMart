@extends('layout.app')

@section('title','Home')

@section('content')
<section class="main">
    @include('pages.slider')
    @include('pages.adCenter')
    @include('pages.featured')
    @include('pages.bestdeal')
    @include('pages.brand')
    @include('pages.bestSeller')
</section>

@endsection