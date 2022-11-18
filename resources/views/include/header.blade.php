<header class="col-12 d-flex justify-content-between align-items-center px-5">
    <div onclick="location.href='{{ URL::to('/') }}'" id="logo">
        <div class="circles">
            <div></div>
            <div></div>
            <div></div>
            <span></span>
        </div>
        <p>MY PROFILE</p>
    </div>
    <div class="containers d-flex justify-content-end">
        <div class="btn"><a href="{{ URL::to('creator') }}">Creator</a></div>
        <div class="btn"><a href="{{ URL::to('Contact') }}">Contact</a></div>
        <div class="btn"><a href="{{ URL::to('admin/login') }}">Login</a></div>
    </div>
</header>