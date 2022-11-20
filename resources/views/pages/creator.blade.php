<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->           
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/bootstrap.min.css")}}>  
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/creator.scss")}}>  
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/general.scss")}}>  
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/clock.css")}}>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Document</title>
</head>
<body id="app">
  @include("include.clock")
  @include("include.header")
  <div class="card" data-state="#about">
    <div class="card-header">
      <div class="card-cover" style="background-image: url('https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80')"></div>
      <img class="card-avatar" src="https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="avatar" />
      <h1 class="card-fullname">William Rocheald</h1>
      <h2 class="card-jobtitle">UI Developer</h2>
    </div>
    <div class="card-main">
      <div class="card-section is-active" id="about">
        <div class="card-content">
          <div class="card-subtitle">About</div>
          <p class="card-desc">Whatever tattooed stumptown art party sriracha gentrify hashtag intelligentsia readymade schlitz brooklyn disrupt.</p>
        </div>
        <div class="card-social">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
        </div>
      </div>
      <div class="card-section" id="experience">
        <div class="card-content">
          <div class="card-subtitle">WORK EXPERIENCE</div>
          <div class="card-timeline">
            <div class="card-item" data-year="2014">
              <div class="card-item-title">Front-end Developer at <span>JotForm</span></div>
              <div class="card-item-desc">Disrupt stumptown retro everyday carry unicorn.</div>
            </div>
            <div class="card-item" data-year="2016">
              <div class="card-item-title">UI Developer at <span>GitHub</span></div>
              <div class="card-item-desc">Developed new conversion funnels and disrupt.</div>
            </div>
            <div class="card-item" data-year="2018">
              <div class="card-item-title">Illustrator at <span>Google</span></div>
              <div class="card-item-desc">Onboarding illustrations for App.</div>
            </div>
            <div class="card-item" data-year="2020">
              <div class="card-item-title">Full-Stack Developer at <span>CodePen</span></div>
              <div class="card-item-desc">Responsible for the encomposing brand expreience.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-section" id="contact">
        <div class="card-content">
          <div class="card-subtitle">CONTACT</div>
          <div class="card-contact-wrapper">
            <div class="card-contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                <circle cx="12" cy="10" r="3" /></svg>
              Algonquin Rd, Three Oaks Vintage, MI, 49128
            </div>
            <div class="card-contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" /></svg>(269) 756-9809</div>
            <div class="card-contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <path d="M22 6l-10 7L2 6" /></svg>
              william@rocheald.com
            </div>
            <button class="contact-me">WORK TOGETHER</button>
          </div>
        </div>
      </div>
      <div class="card-buttons">
        <button data-section="#about" class="is-active tab-profile">About</button>
        <button data-section="#experience" class="tab-profile">Experience</button>
        <button data-section="#contact" class="tab-profile">Contact</button>
      </div>
    </div>
  </div>
  @include("include.IconContact")
  @include("include.IconAnimation")
  @include("include.footer")
  @include("include.loading")
</body>
<script src={{ asset ("public/frontend/home/js/jquery-3.2.1.slim.min.js")}}></script>   
<script src={{ asset ("public/frontend/home/js/anime.min.js")}}></script>
<script type="module" src="{{ asset("public/frontend/home/js/particle.js") }}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src={{ asset ("public/frontend/home/js/main.js")}}></script>   
</html>