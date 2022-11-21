
@extends('HomeLayout')
@section('content')
<div class="main-contact">
  <div class="contact-form">
      <form>
        <div class="contact-wrapper">
          <div class="contact-section">
            <h2 class="p-none m-none d-flex align-items-center justify-content-center mb-quarter text-white"><ion-icon name="mail"></ion-icon><span class="ml-half">Contact Me</span></h2>
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
            <button class="btn-open ml-whole" type="button"><ion-icon name="paper-plane"></ion-icon><span class="ml-half">Send</span></button>
          </div>
        </div>
      </form>
    </div>
</div>
@endsection
@push('css')
  <link rel="stylesheet" href={{ asset ("public/frontend/home/css/contact.scss")}}>  
@endpush
