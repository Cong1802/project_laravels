<header class="col-12 d-md-flex d-block justify-content-between align-items-center px-md-5 px-0">
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
        <div class="btn">
            <a href="{{ URL::to('creator') }}">
                <span class="d-none d-sm-block">Creator</span>
                <span class="d-block d-sm-none"><ion-icon name="person-circle-outline"></ion-icon></span>
            </a>
        </div>
        <div class="btn">
            <a href="{{ URL::to('Contact') }}">
                <span class="d-none d-sm-block">Contact</span>
                <span class="d-block d-sm-none"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
            </a>
        </div>
        <div class="btn">
            <a href="{{ URL::to('login') }}">
                <span class="d-none d-sm-block">Login</span>
                <span class="d-block d-sm-none"><ion-icon name="enter-outline"></ion-icon></span>
            </a>
        </div>
    </div>
</header>