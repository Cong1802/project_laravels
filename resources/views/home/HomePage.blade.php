@extends('HomeLayout')
@section('content')
<div id="tm-wrap">
    <div class="tm-main-content ">
        <div class="container tm-site-header-container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 d-none d-md-block tm-site-header-col">
                    <div class="tm-site-header">
                        <section class="wrapper">
                            <div class="top">My Profile</div>
                            <div class="bottom" aria-hidden="true">My Profile</div>
                        </section>
                        <img src={{ asset ("public/frontend/home/img/underline.png")}} class="img-fluid mb-4">
                        <p>Go to reach your dream</p>        
                    </div>                        
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="content">
                        <div class="grid">
                            <div class="grid__item" id="home-link">
                                <div class="product">
                                    <div class="tm-nav-link">
                                        <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                        <span class="tm-nav-text">Welcome</span>
                                        <div class="product__bg"></div>     
                                    </div>                                    
                                    <div class="product__description">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/Z0ktfskN/peter-broomfield-m3m-ln-R90u-M-unsplash.jpg)"></div>
                                                <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/MTTSXjbn/brandon-atchison-e-BJWhlq-WR54-unsplash.jpg)"></div>
                                                <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/8cfgmQYD/campbell-3-ZUs-NJhi-Ik-unsplash.jpg)"></div>
                                                <div class="swiper-slide" style="background-image:url(https://i.postimg.cc/8Ck5BcmS/evgeny-tchebotarev-aiwu-Lj-LPFn-U-unsplash.jpg)"></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <div class="grid__item" id="team-link">
                                <div class="product">
                                    <div class="tm-nav-link">
                                        <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                        <span class="tm-nav-text">Creators</span>
                                        <div class="product__bg"></div>            
                                    </div>                                     
                                    <div class="product__description">
                                        <div class="p-sm-4 p-2">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Background of Our Team</h2>        
                                                </div>
                                            </div>
                                            <div class="row tm-reverse-sm">
                                                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                    <p class="mb-4">Vestibulum aliquet, arcu accumsan lobortis bibendum, justo velit efficitur lorem, at pulvinar mi justo nec lacus. Nullam et libero aliquet, luctus nunc sit amet, tincidunt ligula. Sed finibus ante sed tortor cursus, nec malesuada lectus interdum.</p>
                                                    <p class="mb-4">Sed ex turpis, vulputate in efficitur id, lobortis eget nibh. Pellentesque maximus ipsum eget velit imperdiet sodales. Suspendisse in blandit mi.</p>
                                                    <p class="mb-5">Pellentesque finibus felis risus, ut malesuada felis viverra at. Quisque accumsan in mi non hendrerit.</p>
                                                    <a href="#" class="btn tm-btn-gray">Read More</a>        
                                                </div>                                                
                                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                    <img src={{ asset ("public/frontend/home/img/team.jpg")}} class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid__item">
                                <div class="product">
                                    <div class="tm-nav-link">
                                        <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                        <span class="tm-nav-text">Our Work</span>
                                        <div class="product__bg"></div>             
                                    </div>                                                                 
                                    <div class="product__description">
                                        <div class="p-sm-4 p-2">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Our Work</h2>        
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <p>Aliquam interdum, nisl sed faucibus tempor, massa velit laoreet ipsum, et faucibus sapien magna at enim. Suspendisse a dictum tortor, vel rhoncus libero. Integer at lacus velit. Nullam dapibus venenatis placerat.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="p-sm-4 p-2 tm-img-container">
                                                        <div class="tm-img-slider" id="tmImgSlider">
                                                          <a href="#" class="tm-slider-img-link"><img src={{ asset ("public/frontend/home/img/gallery-img-01-tn.jpg")}} alt="Image 1" class="img-fluid tm-slider-img"></a>
                                                          <a href="#" class="tm-slider-img-link"><img src={{ asset ("public/frontend/home/img/gallery-img-02-tn.jpg")}} alt="Image 2" class="img-fluid tm-slider-img"></a>
                                                          <a href="#" class="tm-slider-img-link"><img src={{ asset ("public/frontend/home/img/gallery-img-03-tn.jpg")}} alt="Image 3" class="img-fluid tm-slider-img"></a>
                                                          <a href="#" class="tm-slider-img-link"><img src={{ asset ("public/frontend/home/img/gallery-img-04-tn.jpg")}} alt="Image 4" class="img-fluid tm-slider-img"></a>
                                                          <a href="#" class="tm-slider-img-link"><img src={{ asset ("public/frontend/home/img/gallery-img-05-tn.jpg")}} alt="Image 5" class="img-fluid tm-slider-img"></a>
                                                          <a href="#" class="tm-slider-img-link"><img src={{ asset ("public/frontend/home/img/gallery-img-06-tn.jpg")}} alt="Image 6" class="img-fluid tm-slider-img"></a>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                            </div>

                            <div class="grid__item">
                                <div class="product">
                                    <div class="tm-nav-link">
                                        <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                        <span class="tm-nav-text">Contact</span>
                                        <div class="product__bg"></div>             
                                    </div>                                                              
                                    <div class="product__description">
                                        <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <h2 class="tm-page-title">Contact Us</h2>        
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <p>Lorem ipsum dolor site amet, consectetur adipiscing elit. Aliquam interdum, nisl sed faucibus tempor, massa velit laoreet ipsum, et faucibus sapien magna at enim. Suspendisse a dictum tortor, vel rhoncus libero.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <form action="index.html" method="post" class="contact-form">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                              <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                              <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group">
                                                          <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary tm-btn-submit">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>                       
                </div>
            </div>                
        </div>
    </div> 
</div>
@endsection
@push('css')
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/tooplate-style.css")}}> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <style>
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 80px;
        }
    
        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
            -webkit-box-reflect: below 1px linear-gradient(transparent, 
            transparent, #0006);
        }
    </style>
@endpush
@push('js')
    <script src={{ asset ("public/frontend/home/js/anime.min.js")}}></script>
    <script src={{ asset ("public/frontend/home/js/main.js")}}></script>     
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
@endpush