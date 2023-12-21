<div class="header-nav">
    <div class="container">
        <div class="wrapper flexitem">
            <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
            <div class="left flexitem">
                <div class="logo"><a href="/"><span class="circle"></span>pweb.Store</a></div>
                <nav class="mobile-hide">
                    <ul class="flexitem second-links">
                        <li><a href="{{ route('item.index') }}">Home</a></li>
                        <li><a href="{{ route('item.categories') }}">Categories</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right">
                <ul class="flexitem second-links">
                    @if (Auth::check())
                        <a href="{{ route('cart.index') }}">
                            <div class="icon-large mobile-hide">
                                <i class="ri-shopping-cart-line"></i>
                            </div>
                        </a>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>