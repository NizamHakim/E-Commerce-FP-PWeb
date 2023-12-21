<div class="header-top mobile-hide">
    <div class="container">
        <div class="wrapper flexitem">
            <div class="left">
                <ul class="flexitem main-links">
                    @if (Auth::check())
                        <li>Hello, {{ Auth::user()->username }}</li>
                    @else
                        <li>Welcome to pweb.Store</li>
                    @endif
                </ul>
            </div>
            <div class="right">
                <ul class="flexitem main-links">
                    @if (Auth::check())
                        <li><a href="{{ route('logout') }}">Logout <i class="ri-logout-box-r-line"></i></a></li>
                    @else
                        <li><a href="{{ route('login')  }}"><i class="ri-login-box-line"></i> Login/Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>