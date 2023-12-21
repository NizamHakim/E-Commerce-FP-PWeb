<div class="menu-bottom desktop-hide">
    <div class="container">
        <div class="wrapper">
            <nav>
                <ul class="flexitem">
                    <li>
                        <a href="{{ route('item.index') }}">
                            <i class="ri-home-2-line"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="t-search">
                            <i class="ri-search-line"></i>
                            <span>Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cart.index') }}">
                            <i class="ri-shopping-cart-line"></i>
                            <span>Cart</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="search-bottom desktop-hide">
    <div class="container">
        <div class="wrapper">
            <form method="GET" action="{{ route('item.search') }}" class="search">
                <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
                <span class="icon-large"><i class="ri-search-line"></i></span>
                <input type="search" name="keyword" placeholder="Search for products">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</div>