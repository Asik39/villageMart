<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Fab icon -->
    <link rel="icon" href="{{asset('assets/images/Fav_Icon.png')}}">
    <!-- bootstrap link -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap_css/bootstrap.min.css')}}">
    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/sass.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <!-- font awesome link -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font_awesome/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font_awesome/regular.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font_awesome/fontawesome.css')}}">
    <!-- Google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <!-- OwlCarousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl_carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl_carousel/owl.theme.default.min.css')}}">
</head>
<body>
    @include('layout.header')
    @include('layout.sidebar')
    <section class="main">
    @include('layout.topbar')
    </section>
    
    @yield('content')

    @include('layout.footer')
    <!-- Script link -->
    <script src="{{asset('assets/js/jquery-v3.6.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap_js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/custome.js')}}"></script>
    <script src="{{asset('assets/js/custome_jquery.js')}}"></script>
    <script src="{{asset('assets/js/carousel.js')}}"></script>

</body>
</html>