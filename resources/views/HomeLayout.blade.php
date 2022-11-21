<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My profile - Lưu trữ thông tin của bạn">
    <link rel="icon" href={{ asset ('public/frontend/home/img/logo.png') }}>
    <title>My profile</title>
    <!-- load CSS genaral-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/home/fontawesome/css/fontawesome-all.min.css")}}/> 
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/general.scss")}}>     
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/clock.css")}}>    
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/responsive.css")}}>    
    <!-- load CSS page-->  
    @stack('css')
</head>
<body id="app">
    @include("include.header")
    @include("include.clock")
    {{-- @include("include.keyboard") --}}

    @yield('content')

    @include("include.IconAnimation")
    @include("include.IconContact")
    @include("include.loading")
    @include("include.footer")
</body>
    <!-- load JS -->
    <script src={{ asset ("public/frontend/home/js/jquery-3.2.1.slim.min.js")}}></script>
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="{{ asset("public/frontend/home/js/particle.js") }}"></script>
    <script src={{ asset ("public/frontend/home/js/genaral.js")}}></script> 
    @stack('js');
</html>