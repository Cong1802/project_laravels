<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf_token" content="{{ csrf_token() }}" />
  <!-- Favicons -->
  <link href={{ asset("public/frontend/img/favicon.png")}} rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset("public/frontend/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{ asset("public/frontend/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{ asset("public/frontend/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{ asset("public/frontend/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{ asset("public/frontend/vendor/remixicon/remixicon.css")}} rel="stylesheet">
  <link href={{ asset("public/frontend/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset("public/frontend/css/style.css")}} rel="stylesheet">
  <link href={{ asset("public/frontend/css/scss.scss")}} rel="stylesheet">


  <!-- =======================================================
  * Template Name: Personal - v4.9.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <div id="particles-js"></div>

  <header id="header">
    <div class="container">
      <h1>
        <a href="{{ URL::to('/') }}"><img src="https://theanh28.vn/data/assets/logo/logo-web281.png"></a>
      </h1>
      <h2>Kênh truyền thông giải trí <span>số 1 Việt Nam</span></h2>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          @foreach ($categories as $key => $category)
          <li><a class="nav-link" onclick="changePage('{{ $category->category_id }}')" href="#main">{{ $category->category_name }}</a></li>
          @endforeach
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </header>
  @yield('content')
  <!-- Vendor JS Files -->
  <script src={{ asset("public/frontend/vendor/purecounter/purecounter_vanilla.js")}}></script>
  <script src={{ asset("public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{ asset("public/frontend/vendor/glightbox/js/glightbox.min.js")}}></script>
  <script src={{ asset("public/frontend/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
  <script src={{ asset("public/frontend/vendor/swiper/swiper-bundle.min.js")}}></script>
  <script src={{ asset("public/frontend/vendor/waypoints/noframework.waypoints.js")}}></script>
  <script src={{ asset("public/frontend/vendor/php-email-form/validate.js")}}></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type='text/javascript' src='https://28network.net/wp-content/themes/28network/assets/js/particles.js?ver=1.0.0' id='particles-js'></script>
  <script type='text/javascript' src='https://28network.net/wp-content/themes/28network/assets/js/particles-config.js?ver=1.0.0' id='particles-config-js'></script>



  <!-- Template Main JS File -->
  <script src={{ asset("public/frontend/js/main.js")}}></script>
  <script>
    $("#leftside-navigation .sub-menu").click(function(e) {
      $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
      e.stopPropagation()
    })


    $.ajaxSetup({
      headers:
      {
          'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
      }
    });
    function changePage(id)
    {
      $.ajax({
        url: "{{ URL::to('RenderContent') }}",
        type:"post",
        data:{
          category_id:id,
        },
        success: function(data)
        {
          var html = '';
          var dem = 0;
          var data = JSON.parse(data);
          $("#leftside-navigation ul li").remove();
          $.each(data, function(index, val) {
              dem++;
              if(dem == 1)
              {
                $('embed').attr('src',val.url);
              }
              html += '<li data-url="'+location.pathname+val.url+'" onclick="renderPDF(this)" class="sub-menu"><ion-icon name="caret-forward-outline"></ion-icon> <span>'+val.channel_name+'</span></li>'
          });
          $("#leftside-navigation ul").append(html);
        }
      })
    }
    function renderPDF(e)
    {
      $('.sub-menu').each(function(){
        $(this).removeClass('active');
      })
      $(e).addClass('active');
      var url = $(e).attr('data-url');
      $('embed').attr('src',url);
    }
    
  </script>
</body>

</html>