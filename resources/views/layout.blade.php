<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NGUYEN BA CONG - RUADEMON</title>
    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Availablecoder">
    <meta name="description" content="Tomas Personal Porfolio one-page template for freelance usage and person resume">
    <meta name="keywords" content="person,resume,skills,skill,portoflio,multipourpose,web template, landing page, personal portfolio, personal landing page, personal portfolio landing page template">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- - - - -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">
    <!-- - - - -->
    <!-- CSS Plugins -->
    <link rel="stylesheet" href={{ asset ("public/frontend/css/bootstrap.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/css/all.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/css/jquery.animatedheadline.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/css/animate.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/css/swiper.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/css/fancybox.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/css/odometer-theme-minimal.css")}}>
    <!-- - - - -->
    <!-- Main CSS Files -->
    <link rel="stylesheet" href={{ asset ("public/frontend/css/style_dark.css")}}>
    <link rel="stylesheet" href={{ asset ("public/frontend/css/responsive.css")}}>
    <!-- - - - -->
</head>
<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="load-splitter"></div>
        <div class="load-splitter"></div>
        <div class="loader">
            <p class="text">RuaDemon<span>.</span></p>
            <div class="loading-bar">
                <span></span>
            </div>
        </div>
    </div>
    <!-- - - - -->

    <!-- Start Header -->
    <header class="header-sliding">
        <nav class="navbar w-100 navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand logo p-0" href="index.html">
                    RUADEMON
                </a>
                <button class="navbar-toggler menu-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="header-nav-icon"></span>
                    <span class="header-nav-icon"></span>
                    <span class="header-nav-icon"></span>
                </button>
                <div class="ul-cont collapse navbar-collapse ms-0 ms-lg-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-right ms-0 ms-lg-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-1">
                            <a class="nav-link active" data-scroll="home" href="#home">Trang chủ </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#about" data-scroll="about">Giới thiệu</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#services" data-scroll="services">Dịch vụ</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#resume" data-scroll="resume">Hoạt Động</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#portfolio" data-scroll="portfolio">Các dự án đã làm</a>
                        </li>
                        <!--<li class="nav-item mx-1">-->
                        <!--    <a class="nav-link" href="#reviews" data-scroll="reviews">Reviews</a>-->
                        <!--</li>-->
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#blog" data-scroll="blog">Blog For Me </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#contact" data-scroll="contact">Liên Hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->
    <!-- Start Home -->
    <section class="home d-flex align-items-center" id="home">
        <div class="container">
            <div class="home-text text-center text-md-start">
                <p class="intro mx-auto mx-md-0">Xin chào</p>
                <p class="name">I&acute;m <span>Nguyen BA CONG</span> </p>
                <div class="head-text" id="home-text-changer">
                    <h1 class="ah-headline">
                        <span>I&acute;m </span>
                        <span class="ah-words-wrapper">
                            <b class="is-visible">Web Designer</b>
                            <b>Web Developer</b>
                            <b>Mobile Developer</b>
                        </span>
                    </h1>
                </div>
                <div class="home-social d-flex justify-content-center justify-content-md-start mt-3">
                    <a href="https://www.facebook.com/muaroi.lanhra/"><i class="fab fa-facebook-f"></i></a>
                    <!--<a href="#"><i class="fab fa-twitter"></i></a>-->
                    <!-- <a href="https://www.instagram.com/ng.n.hieu.2110/"><i class="fab fa-instagram"></i></a> -->
                    <!--<a href="#"><i class="fab fa-linkedin-in"></i></a>-->
                </div>

            </div>
        </div>
    </section>
    <!-- End Home -->
    <!-- Start About -->
    <section class="about section-padding" id="about">
        <div class="container d-flex flex-column flex-md-row">
            <div class="image wow fadeInLeft">
                <img class="img-fluid w-100" src={{ asset ("public/frontend/images/IMG_2469.JPG")}} alt="about">
                <div class="movable-border">
                    <span></span>
                </div>
            </div>
            <div class="about-content wow fadeInRight">
                <div class="main-heading about-main-heading mx-auto mx-md-0">
                    <h2>Giới thiệu </h2>
                    <span>-Tôi tên-</span>
                </div>
                <p class="about-text">
                 Nguyễn Như Hiếu : Sinh ra tại một làng quê nghèo trong vùng thôn dã, lớn lên trong một gia đình cần lao, giàu lòng yêu nước, sớm giác ngộ lý tưởng cách mạng. Tuổi trẻ thông minh đỉnh ngộ. Tương truyền mới sinh Hiếu không khóc không cười. Một hôm có 1 vị đạo sĩ đi qua thấy Hiếu chơi trước cửa, liền nói. Người này có dung mạo tọa thiên long, đầu gối sơn, chân đạp thủy, bên tả có thanh long, bên phải có bạch hổ, con nhà này chỉ mười tám năm sau, chắc chắn sẽ thành người lớn. Mọi người thấy vậy, cho là sự lạ, hết sức chăm sóc. Quả nhiên, Hiếu 6 tuổi đã đi học lớp 1, 8 tuổi đã đọc thông viết thạo, lên 9 tuổi đã biết cộng trừ nhân chia. Ai gặp cũng phải trầm trồ khâm phục. Giới học vấn uyên thâm, 18 tuổi đã xong tú tài, trên thông thiên văn, dưới tường địa lý, giữa hiểu nhân luân, ai hỏi gì cũng trả lời được, tuyệt nhiên không sai câu nào. Đến năm 19 tuổi Hiếu lui về ở ẩn. Thăm thú sự đời, thấy việc gì có lợi là làm
                </p>
                <div class="about-info">
                    <ul>
                        <li><span>Họ và tên:</span> Nguyễn Như Hiếu</li>
                        <li><span>Ngày sinh:</span> 21/10/2000</li>
                        <li><span>Email:</span> nhuhieu21102000@gmail.com</li>
                        <li><span>Địa chỉ:</span>Tân Dân - Sóc Sơn - Hà Nội</li>
                    </ul>
                </div>
                <div class="cv-button">
                    <a class="main-btn" href="#">
                        <i class="fas fa-inbox"></i>
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>
     <!--End About -->
     <!--Start Services -->
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="main-heading mx-auto">
                <h2 class="main-head-animation">Công Việc</h2>
                <span>Những gì tôi làm</span>
            </div>
            <div class="services-field mt-4 row">
                <div class="serv-box mb-2 mt-5 col-12 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="serv-cont cursor-pointer-hover p-3 position-relative">
                        <div class="icon">
                            <i class="fas fa-sitemap"></i>
                        </div>
                        <h3 class="text-center pt-4 pb-2">Web Development</h3>
                        <p class="text-center">Thiết kế trang web</p>
                    </div>
                </div>
                <div class="serv-box mb-2 mt-5 col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="serv-cont cursor-pointer-hover p-3 position-relative">
                        <div class="icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="text-center pt-4 pb-2">UI / UX design</h3>
                        <p class="text-center">Thiết kế giao diện người dùng</p>
                    </div>
                </div>
                <!--<div class="serv-box mb-2 mt-5 col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">-->
                <!--    <div class="serv-cont cursor-pointer-hover p-3 position-relative">-->
                <!--        <div class="icon">-->
                <!--            <i class="fas fa-mobile-alt"></i>-->
                <!--        </div>-->
                <!--        <h3 class="text-center pt-4 pb-2">Mobile Apps</h3>-->
                <!--        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium quo quasi. Sit, saepe impedit!</p>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="serv-box mb-2 mt-5 col-12 col-md-6 col-lg-4 wow fadeInUp">
                    <div class="serv-cont cursor-pointer-hover p-3 position-relative">
                        <div class="icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-center pt-4 pb-2">Cyber Security</h3>
                        <p class="text-center">Bảo mật trang web</p>
                    </div>
                </div>
                <!--<div class="serv-box mb-2 mt-5 col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">-->
                <!--    <div class="serv-cont cursor-pointer-hover p-3 position-relative">-->
                <!--        <div class="icon">-->
                <!--            <i class="fas fa-database"></i>-->
                <!--        </div>-->
                <!--        <h3 class="text-center pt-4 pb-2">Database Analysis</h3>-->
                <!--        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium quo quasi. Sit, saepe impedit!</p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="serv-box mb-2 mt-5 col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">-->
                <!--    <div class="serv-cont cursor-pointer-hover p-3 position-relative">-->
                <!--        <div class="icon">-->
                <!--            <i class="fas fa-mail-bulk"></i>-->
                <!--        </div>-->
                <!--        <h3 class="text-center pt-4 pb-2">Marketing</h3>-->
                <!--        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum praesentium quo quasi. Sit, saepe impedit!</p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="more-services text-center mt-4 pt-2">
                <a href="#" class="main-btn"></a>
            </div>
        </div>
    </section>
     <!--End Services -->
     <!--Start Resume -->
    <section class="resume section-padding" id="resume">
        <div class="container">
            <div class="main-heading mx-auto">
                <h2 class="main-head-animation">Sơ yếu lý lịch</h2>
                <span>Học vấn</span>
            </div>
            <div class="resume-field mt-5 row">
                <div class="experience-box mb-3 mb-lg-0 col-12 col-lg-6">
                    <div class="experience-content resume-content">
                        <div class="wow bounceIn res-head mb-3 mb-sm-5 d-flex justify-content-sm-start justify-content-center align-items-center">
                            <i class="fas fa-laptop-code"></i>
                            <h3 class="mb-0">Kinh nghiệm của tôi</h3>
                        </div>
                        <div class="wow fadeInLeft res-text">
                            <span class="res-circle"></span>
                            <h4>Website thương mại điện tử</h4>
                            <span class="date">09/2019 - 12/2019</span>
                            <p class="info">Vị trí: 1 trong 2 coder chính.<br>
                                - Thiết kế và code website thương mại điện tử  <br>
                                - Sử dụng :<br>
                                    + Ngôn ngữ lập trình PHP.<br>
                                    + Framework Laravel  <br>
                                    + Microsoft SQL Server - Kinh nghiệm <br>
                                    + Làm việc với mô hình MVC  <br>
                                    + Làm các chức năng thêm, sửa, xóa.<br>
                                    + Trau dồi kiến thức về Microsoft Sql server  .<br>
                                    + Khả năng học tập và làm việc độc lập.<br>
                                - Kết quả :<br>
                                    + Hoàn thành dự án và bảo vệ môn.</p><br>
                        </div>
                        <div class="wow fadeInLeft res-text" data-wow-delay="0.2s">
                            <span class="res-circle"></span>
                            <h4>Làm việc tại Công ty Cổ phần công nghệ kỹ thuật Vtech</h4>
                            <span class="date">09/2021 - 12/2021</span>
                            <p class="info">Vị trí: Thực tập sinh<br>
                                    - Thiết kế và code website giáo dục điện tử.<br>
                                    - Sử dụng :<br>
                                     + Ngôn ngữ lập trình HTML5/CSS và Javascript.<br>
                                     + Phần mềm photoshop cs5.<br>
                                     + Đảm nhiệm công việc thiết kế cho website.<br>
                                    - Kết quả :<br>
                                     + Hoàn thành dự án và đạt kết quả tốt trong quá trình thực tập.</p><br>
                        </div>
                        <div class="wow fadeInLeft res-text" data-wow-delay="0.4s">
                            <span class="res-circle"></span>
                            <h4>Làm việc tại Theanh28 Entertainment</h4>
                            <span class="date">06/2022 - Hiện tại</span>
                            <p class="info">Vị trí: Nhân viên lập trình PHP</p><br>
                                            - Làm dự án 28land và nhiều dự án khác của công ty giao mà mình được giao.
                        </div>
                    </div>
                </div>
                <div class="education-box col-12 col-lg-6">
                    <div class="education-content resume-content">
                        <div class="wow bounceIn res-head mb-3 mb-sm-5 d-flex justify-content-sm-start justify-content-center align-items-center">
                            <i class="fas fa-graduation-cap"></i>
                            <h3 class="mb-0">Trình Độ Học Vấn</h3>
                        </div>
                        <div class="wow fadeInLeft res-text" data-wow-delay="0.1s">
                            <span class="res-circle"></span>
                            <h4>Trường Cao đẳng Thực hành FPT Polytechnic Hà Nội </h4>
                            <span class="date">08/2018 - 08/2021</span>
                            <p class="info">Tốt nghiệp <br>
                                            Chuyên ngành: Thiết Kế Website<br>
                                            Điểm trung bình: 7.0</p>
                        </div>
                        <!--<div class="wow fadeInLeft res-text" data-wow-delay="0.3s">-->
                        <!--    <span class="res-circle"></span>-->
                        <!--    <h4>Mobile development online certificate</h4>-->
                        <!--    <span class="date">2013</span>-->
                        <!--    <p class="info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem</p>-->
                        <!--</div>-->
                        <!--<div class="wow fadeInLeft res-text" data-wow-delay="0.5s">-->
                        <!--    <span class="res-circle"></span>-->
                        <!--    <h4>Cyber Security online certificate</h4>-->
                        <!--    <span class="date">2018</span>-->
                        <!--    <p class="info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem</p>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--End Resume -->
     <!--Start Skills -->
    <section class="skills section-padding" id="skills">
        <div class="container">
            <div class="main-heading mx-auto">
                <h2 class="main-head-animation">Kỹ năng</h2>
                <span>Kĩ năng của tôi</span>
            </div>
            <div class="skill-field mt-5 row">
                <div class="skill-box col-12 col-lg-6">
                    <div class="skill-piece">
                        <p class="name mb-2">HTML</p>
                        <div class="skill-loader">
                            <span data-progress="70%" class="loader-liquid"></span>
                            <span class="loader-value">70%</span>
                        </div>
                    </div>
                    <div class="skill-piece">
                        <p class="name mb-2">CSS</p>
                        <div class="skill-loader">
                            <span data-progress="70%" class="loader-liquid"></span>
                            <span class="loader-value">70%</span>
                        </div>
                    </div>
                    <div class="skill-piece">
                        <p class="name mb-2">JS</p>
                        <div class="skill-loader">
                            <span data-progress="70%" class="loader-liquid"></span>
                            <span class="loader-value">70%</span>
                        </div>
                    </div>
                </div>
                <div class="skill-box col-12 col-lg-6">
                    <div class="skill-piece">
                        <p class="name mb-2">Bootstrap</p>
                        <div class="skill-loader">
                            <span data-progress="50%" class="loader-liquid"></span>
                            <span class="loader-value">50%</span>
                        </div>
                    </div>
                    <div class="skill-piece">
                        <p class="name mb-2">PHP</p>
                        <div class="skill-loader">
                            <span data-progress="50%" class="loader-liquid"></span>
                            <span class="loader-value">50%</span>
                        </div>
                    </div>
                    <div class="skill-piece">
                        <p class="name mb-2">Photoshop</p>
                        <div class="skill-loader">
                            <span data-progress="50%" class="loader-liquid"></span>
                            <span class="loader-value">50%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--End Skills -->
     <!--Start Projects -->
    <section class="portfolio section-padding" id="portfolio">
        <div class="container">
            <div class="main-heading mx-auto">
                <h2 class="main-head-animation">Dự Án</h2>
                <span>Của Tôi</span>
            </div>
            <div class="prog-filter wow fadeIn">
                <ul class="ps-0">
                    <li class="cursor-pointer-hover active" data-filter="all">Tất cả</li>
                    <li class="cursor-pointer-hover" data-filter=".design">Design</li>
                    <li class="cursor-pointer-hover" data-filter=".development">Development</li>
                    <!--<li class="cursor-pointer-hover" data-filter=".marketing">Marketing</li>-->
                </ul>
            </div>
            <div class="port-field row" id="portfolio-shuffle">
                <div class="mix design prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="1">
                    <a data-fancybox="gallery" class="d-block position-relative" data-caption="Design: Project Title" href="images/portfolio/anhnen.jpg")}}>
                        <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/portfolio/anhnen.jpg")}} alt="portfolio">
                        <div class="port-disc">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="fas fa-search-plus"></i>
                            <h4>Project Title</h4>
                            <p class="type mb-0">Design</p>
                        </div>
                    </a>
                </div>
                <div class="mix development prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="2">
                    <a data-fancybox="gallery" data-caption="Development: Project Title" class="d-block position-relative" href="images/portfolio/anhnen.jpg")}}>
                        <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/portfolio/anhnen.jpg")}} alt="portfolio">
                        <div class="port-disc">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="fas fa-search-plus"></i>
                            <h4>Project Title</h4>
                            <p class="type mb-0">Development</p>
                        </div>
                    </a>
                </div>
                <div class="mix design prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="3">
                    <a data-fancybox="gallery" data-caption="Design: Project Title" class="d-block position-relative" href="images/portfolio/anhnen.jpg")}}>
                        <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/portfolio/anhnen.jpg")}} alt="portfolio">
                        <div class="port-disc">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="fas fa-search-plus"></i>
                            <h4>Project Title</h4>
                            <p class="type mb-0">Design</p>
                        </div>
                    </a>
                </div>
                <div class="mix marketing prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="4">
                   <a data-fancybox="gallery" data-caption="Marketing: Project Title" class="d-block position-relative" href="images/portfolio/portfolio4.jpg")}}>
                       <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/portfolio/portfolio4.jpg")}} alt="portfolio">
                       <div class="port-disc">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           <i class="fas fa-search-plus"></i>
                           <h4>Project Title</h4>
                           <p class="type mb-0">Marketing</p>
                       </div>
                   </a>
                </div>
                <div class="mix development prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="5">
                   <a data-fancybox="gallery" data-caption="Development: Project Title" class="d-block position-relative" href="images/portfolio/portfolio5.jpg")}}>
                       <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/portfolio/portfolio5.jpg")}} alt="portfolio">
                       <div class="port-disc">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           <i class="fas fa-search-plus"></i>
                           <h4>Project Title</h4>
                           <p class="type mb-0">Development</p>
                       </div>
                   </a>
                </div>
                <div class="mix marketing prog-box col-12 col-md-6 col-lg-4 mb-4" data-order="6">
                   <a data-fancybox="gallery" data-caption="Marketing: Project Title" class="d-block position-relative" href="images/portfolio/portfolio6.jpg")}}>
                       <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/portfolio/portfolio6.jpg")}} alt="portfolio">
                       <div class="port-disc">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                           <i class="fas fa-search-plus"></i>
                           <h4>Project Title</h4>
                           <p class="type mb-0">Marketing</p>
                       </div>
                   </a>
                </div>
            </div>
            <div class="more-projects text-center mt-4 pt-2">
                <a href="#" class="main-btn"></a>
            </div>
        </div>
       
    </section>
     <!--End Projects -->
     <!--Start Counter -->
    <section class="counter pt-5 pb-5" id="counter">
       <div class="container">
           <div class="row counter-area">
               <div class="wow fadeInLeft col-12 col-lg-3 col-md-6 text-center">
                   <i class="far fa-hand-rock d-block mb-2"></i>
                   <span class="odometer" data-count="10">00</span>
                   <h4>Years of experience</h4>
               </div>      
               <div class="wow fadeInLeft col-12 col-lg-3 col-md-6 text-center" data-wow-delay="0.3s">
                   <i class="far fa-handshake d-block mb-2"></i>
                   <span class="odometer" data-count="173">00</span>
                   <h4>Successful Projects </h4>
               </div>
               <div class="wow fadeInLeft col-12 col-lg-3 col-md-6 text-center" data-wow-delay="0.6s">
                   <i class="far fa-smile-beam d-block mb-2"></i>
                   <span class="odometer" data-count="261">00</span>
                   <h4>Happy Clients</h4>
               </div>
               <div class="wow fadeInLeft col-12 col-lg-3 col-md-6 text-center" data-wow-delay="0.9s">
                   <i class="fas fa-award d-block mb-2"></i>
                   <span class="odometer" data-count="22">00</span>
                   <h4>Awards achieved</h4>
               </div>
           </div>
       </div>
    </section>
     <!--End Counter -->
     <!--Start Reviews -->
    <section class="reviews section-padding" id="reviews">
       <div class="container">
           <div class="main-heading mx-auto">
               <h2 class="main-head-animation">Reviews</h2>
               <span>Clients Feedback</span>
           </div>
           <div class="review-field row justify-content-between align-items-center">
               <div class="wow bounceInUp review-swiper-image col-3">
                   <div class="swiper-wrapper">
                       <div class="swiper-slide px-0">
                           <img class="img-fluid w-100" src={{ asset ("public/frontend/images/clients/client1.jpg")}} alt="clients reviews">
                       </div>
                       <div class="swiper-slide px-0">
                           <img class="img-fluid w-100" src={{ asset ("public/frontend/images/clients/client2.jpg")}} alt="clients reviews">
                       </div>
                       <div class="swiper-slide px-0">
                           <img class="img-fluid w-100" src={{ asset ("public/frontend/images/clients/client3.jpg")}} alt="clients reviews">
                       </div>
                   </div>
               </div>
               <div class="review-swiper-text position-relative col-12 col-lg-8">
                   <div class="swiper-wrapper">
                       <div class="swiper-slide">
                           <div class="client-info">
                               <div class="review-head py-3">
                                   <img class="text-slider-image mx-auto" src={{ asset ("public/frontend/images/clients/client1.jpg")}} alt="clients reviews">
                                   <div class="rev-box d-flex align-items-center justify-content-lg-start justify-content-center">
                                       <i class="fas fa-quote-left pe-3 pt-2"></i>
                                       <div class="review-details">
                                           <h4 class="client-name mb-2">Hunter Rad</h4>
                                           <div class="rating d-flex">
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <q>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in</q>
                               <div class="review-dates d-flex justify-content-between mt-3">
                                   <div class="client-project"><span>Project Type: </span>Website design</div>
                                   <p class="date"><span>Receiving date: </span>30 jan 2018</p>
                               </div>
                           </div>
                       </div>
                       <div class="swiper-slide">
                           <div class="client-info">
                               <div class="review-head py-3">
                                   <img class="text-slider-image mx-auto" src={{ asset ("public/frontend/images/clients/client2.jpg")}} alt="clients reviews">
                                   <div class="rev-box d-flex align-items-center justify-content-lg-start justify-content-center">
                                       <i class="fas fa-quote-left pe-3 pt-2"></i>
                                       <div class="review-details">
                                           <h4 class="client-name mb-2">Gleda Wilson</h4>
                                           <div class="rating d-flex">
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <q>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm</q>
                               <div class="review-dates d-flex justify-content-between mt-3">
                                   <div class="client-project"><span>Project Type: </span>Database modification</div>
                                   <p class="date"><span>Receiving date: </span>5 Feb 2019</p>
                               </div>
                           </div>
                       </div>
                       <div class="swiper-slide">
                           <div class="client-info">
                               <div class="review-head py-3">
                                   <img class="text-slider-image mx-auto" src={{ asset ("public/frontend/images/clients/client3.jpg")}} alt="clients reviews">
                                   <div class="rev-box d-flex align-items-center justify-content-lg-start justify-content-center">
                                       <i class="fas fa-quote-left pe-3 pt-2"></i>
                                       <div class="review-details">
                                           <h4 class="client-name mb-2">Eadric Jakob</h4>
                                           <div class="rating d-flex">
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                               <i class="mx-1 fas fa-star"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <q>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in</q>
                               <div class="review-dates d-flex justify-content-between mt-3">
                                   <div class="client-project"><span>Project Type: </span>Mobile application</div>
                                   <p class="date"><span>Receiving date: </span>17 Sept 2020</p>
                               </div>
                           </div>
                       </div>
                       <div class="swiper-pagination swiper-pagination-white cursor-pointer-hover"></div>
                       <div class="swiper-button-next d-none d-sm-flex swiper-button-white cursor-pointer-hover"></div>
                       <div class="swiper-button-prev d-none d-sm-flex swiper-button-white cursor-pointer-hover"></div>
                   </div>
               </div>
           </div>
<!--  -->
       </div>
    </section>
     <!-- End Reviews -->
     <!-- Start Blog -->
    <section class="blog section-padding" id="blog">
        <div class="container">
            <div class="main-heading mx-auto">
                <h2 class="main-head-animation">Blog</h2>
                <span>Bài viết </span>
            </div>
            <div class="blog-field pt-4 row">
               <div class="wow fadeInDown blog-box mb-4 col-12 col-md-6 col-lg-4">
                   <div class="blog-content">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal1" data-popup="first-pop" class="show-pop image d-block position-relative overflow-hidden">
                           <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/blog/blog1.jpg")}} alt="blog image">
                           <span class="blog-title">Web</span>
                       </a>
                       <h3 class="blog-head my-2 px-2">Web development technology</h3>
                       <p class="blog-text mb-3 px-2">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz</p>
                       <hr class="my-0">
                       <div class="blog-links d-flex justify-content-between align-items-center p-2">
                           <div class="blog-rating">
                               <a class="blog-like ms-1 me-3" href="#">173</a>
                               <a class="blog-comment" href="#">34</a>
                           </div>
                           <div class="more">
                               <a class="show-pop" href="#" data-bs-toggle="modal" data-bs-target="#blogModal1">Read More</a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="wow fadeInDown blog-box mb-4 col-12 col-md-6 col-lg-4" data-wow-delay="0.4s">
                   <div class="blog-content">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal2" class="image d-block position-relative overflow-hidden">
                           <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/blog/blog2.jpg")}} alt="blog image">
                           <span class="blog-title">Mobile</span>
                       </a>
                       <h3 class="blog-head my-2 px-2">Flutter technology</h3>
                       <p class="blog-text mb-3 px-2">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz</p>
                       <hr class="my-0">
                       <div class="blog-links d-flex justify-content-between align-items-center p-2">
                           <div class="blog-rating">
                               <a class="blog-like ms-1 me-3" href="#">173</a>
                               <a class="blog-comment" href="#">34</a>
                           </div>
                           <div class="more">
                               <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal2">Read More</a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="wow fadeInDown blog-box mb-4 mx-auto col-12 col-md-6 col-lg-4" data-wow-delay="0.8s">
                   <div class="blog-content">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal3" class="image d-block position-relative overflow-hidden">
                           <img class="img-fluid w-100 d-block" src={{ asset ("public/frontend/images/blog/blog3.jpg")}} alt="blog image">
                           <span class="blog-title">Design</span>
                       </a>
                       <h3 class="blog-head my-2 px-2">Attractive designs</h3>
                       <p class="blog-text mb-3 px-2">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz</p>
                       <hr class="my-0">
                       <div class="blog-links d-flex justify-content-between align-items-center p-2">
                           <div class="blog-rating">
                               <a class="blog-like ms-1 me-3" href="#">173</a>
                               <a class="blog-comment" href="#">34</a>
                           </div>
                           <div class="more">
                               <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal3">Read More</a>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="more-blogs text-center mt-4 pt-2">
                <a href="#" class="main-btn">Chưa có gì để viết ạ :(</a>
            </div>
        </div>
    </section>
     <!--End Blog -->
     <!--Start Contact -->
    <section class="contact section-padding" id="contact">
        <div class="container">
            <div class="main-heading mx-auto">
                <h2 class="main-head-animation">Liên Hệ</h2>
                <span>Gửi Liên Hệ </span>
            </div>
            <div class="contact-field my-4 row flex-wrap-reverse">
                <div class="contact-info-field p-2 col-12 col-md-4">
                    <div class="location">
                        <!--<i class="fas fa-street-view"></i>-->
                        <h5>Địa Chỉ
                            <a
                                data-fancybox
                                data-type="iframe"
                                data-preload="false"
                                data-width="640"
                                data-height="480"
                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1172.9349234002402!2d105.76504082921744!3d21.250457249033833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35e3325df9e27d81!2zMjHCsDE1JzAxLjYiTiAxMDXCsDQ1JzU2LjEiRQ!5e1!3m2!1svi!2s!4v1663927748071!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </h5>
                        <address class="mb-0">Xuân Long - Tân Dân - Sóc Sơn - Hà Nội</address>
                    </div>
                    <div class="email">
                        <i class="far fa-envelope"></i>
                        <h5>Email</h5>
                        <a href="mailto:nhuhieu21102000@gmail.com">nhuhieu21102000@gmail.com</a>
                    </div>
                    <div class="phone">
                        <i class="fas fa-phone-alt"></i>
                        <h5>Số điện thoại</h5>
                        <a href="tel:#">+84 0867682000</a>
                    </div>
                    <div class="social">
                        <i class="fas fa-share-alt"></i>
                        <h5>Link liên kết mạng xã hội của tôi</h5>
                        <div class="social-links pt-2 d-flex align-items-center justify-content-center">
                            <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="contact-form-field p-4 col-12 col-md-8">
                    <form class="contact-form" action="php/contact.php" method="POST">
                        <div class="name mb-3">
                            <input class="w-100 p-2" type="text" name="name" required placeholder="Name">
                        </div>
                        <div class="email mb-3">
                            <input class="w-100 p-2" type="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required placeholder="Email">
                        </div>
                        <div class="message mb-3">
                            <textarea class="w-100 p-2" name="message" required placeholder="Message"></textarea>
                        </div>
                        <button type="submit">Gửi</button>
                        <p class="mt-3 contact-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
     <!--End Contact -->
     <!--Start Footer -->
    <footer>
        <div class="container position-relative d-flex flex-column flex-md-row align-items-center justify-content-between">
            <p class="copy mb-2 mb-md-0">&copy; NGUYEN BA CONG - N.C.B</p>
            <div class="addition-links">
                <a href="#"></a>
                
                <a href="#"></a>
            </div>
            <a class="scroll-top" href="#">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- start pop -->
    <div class="modal fade" id="blogModal1" tabindex="-1">
        <div class="modal-dialog">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header position-relative">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="far fa-times-circle"></i>
                        </button>
                    </div>
                    <span class="pop-info">Blog-Details
                        <a href="#">Web</a>
                    </span>
                    <img src={{ asset ("public/frontend/images/blog/blog1.jpg")}} alt="blog image">
                    <div class="modal-body">
                        <h3 class="blog-title">Web development technology</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic</p>
                        <div class="blog-quote">
                            <q>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab</q>
                        </div>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <div class="blog-share d-flex">
                            <span class="pe-2">Share:</span>
                            <ul class="ps-0 mb-0 d-flex">
                                <li class="px-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            26 Oct 2021
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="blogModal2" tabindex="-1">
        <div class="modal-dialog">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header position-relative">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="far fa-times-circle"></i>
                        </button>
                    </div>
                    <span class="pop-info">Blog-Details
                        <a href="#">Mobile</a>
                    </span>
                    <img src={{ asset ("public/frontend/images/blog/blog2.jpg")}} alt="blog image">
                    <div class="modal-body">
                        <h3 class="blog-title">Flutter technology</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic</p>
                        <div class="blog-quote">
                            <q>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab</q>
                        </div>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <div class="blog-share d-flex">
                            <span class="pe-2">Share:</span>
                            <ul class="ps-0 mb-0 d-flex">
                                <li class="px-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            26 Oct 2021
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="blogModal3" tabindex="-1">
        <div class="modal-dialog">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-header position-relative">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="far fa-times-circle"></i>
                        </button>
                    </div>
                    <span class="pop-info">Blog-Details
                        <a href="#">Design</a>
                    </span>
                    <img src={{ asset ("public/frontend/images/blog/blog3.jpg")}} alt="blog image">
                    <div class="modal-body">
                        <h3 class="blog-title">Attractive designs</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic</p>
                        <div class="blog-quote">
                            <q>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab</q>
                        </div>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <div class="blog-share d-flex">
                            <span class="pe-2">Share:</span>
                            <ul class="ps-0 mb-0 d-flex">
                                <li class="px-2"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="px-2"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            26 Oct 2021
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pop -->

    <!-- Start Cursor -->
    <div class="fancy-cursor-dot"></div>
    <!-- End Cursor -->

    <!-- JS Files -->
    <script src={{ asset ("public/frontend/js/jQuery.js")}}></script>
    <script src={{ asset ("public/frontend/js/jquery.appear.js")}}></script>
    <script src={{ asset ("public/frontend/js/bootstrap.js")}}></script>
    <script src={{ asset ("public/frontend/js/jquery.animatedheadline.js")}}></script>
    <script src={{ asset ("public/frontend/js/particles.js")}}></script>
    <script src={{ asset ("public/frontend/js/particles_shape_dark.js")}}></script>
    <script src={{ asset ("public/frontend/js/swiper.js")}}></script>
    <script src={{ asset ("public/frontend/js/wow.js")}}></script>
    <script src={{ asset ("public/frontend/js/odometer.js")}}></script>
    <script src={{ asset ("public/frontend/js/mixitup.js")}}></script>
    <script src={{ asset ("public/frontend/js/fancybox.umd.js")}}></script>
    <script src={{ asset ("public/frontend/js/main.js")}}></script>
    <!-- - - - -->
</body>
</html>