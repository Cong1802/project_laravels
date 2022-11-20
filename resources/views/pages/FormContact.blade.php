<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->           
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/bootstrap.min.css")}}>  
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/contact.scss")}}>  
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/general.scss")}}>  
    <link rel="stylesheet" href={{ asset ("public/frontend/home/css/clock.css")}}>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Document</title>
</head>
<body id="app">
  @include("include.clock")
  @include("include.header")
  <div class="main-contact">
    <div class="contact-form">
        <form>
          <div class="contact-wrapper">
            <div class="contact-section">
              <h2 class="p-none m-none mb-quarter text-white"><ion-icon name="mail"></ion-icon><span class="ml-half">Contact Me</span></h2>
            </div>
            <div class="contact-section">
              <div class="form-item">
                <input id="txtFullName" type="text" placeholder="Full Name (Optional)">
                <label class="lbl-floating" for="txtFullName">Full Name (Optional)</label><ion-icon name="person"></ion-icon>
              </div>
              <div class="form-item">
                <input id="txtEmail" type="email" placeholder="E-Mail Address">
                <label class="lbl-floating" for="txtEmail">E-Mail Address</label><ion-icon name="at"></ion-icon>
              </div>
              <div class="form-item">
                <textarea id="txtContent" placeholder="Your message to the developer" rows="5"></textarea>
                <label class="lbl-floating" for="txtContent">Your message to the developer</label><ion-icon name="copy"></ion-icon>
              </div>
            </div>
            <div class="contact-section text-right">
              <label class="contact-cancel" for="frmContactForm"><ion-icon name="close-circle"></ion-icon><span class="ml-quarter">Cancel</span></label>
              <button class="btn-open ml-whole" type="button"><ion-icon name="paper-plane"></ion-icon><span class="ml-half">Send</span></button>
            </div>
          </div>
        </form>
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
</html>
