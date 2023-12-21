<div class="header-main mobile-hide">
    <div class="container">
        <div class="wrapper flexitem">
            <div class="left">
                <div class="dpt-cat">
                    <div class="dpt-head">
                        <div class="main-text">All Departments</div>
                        <div class="mini-text mobile-hide">{{ $itemscount }} Items</div>
                        <a href="#" class="dpt-trigger mobile-hide">
                            <i class="ri-menu-3-line ri-xl"></i>
                            <i class="ri-close-line ri-xl"></i>
                        </a>
                    </div>
                    <div class="dpt-menu">
                        <ul class="second-links">
                            <li>
                                <a href="{{ route('item.category', 1) }}">
                                    <div class="icon-large"><i class="ri-bear-smile-line"></i></div>
                                    Beauty
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('item.category', 2) }}">
                                    <div class="icon-large"><i class="ri-bluetooth-connect-line"></i></div>
                                    Electronic
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('item.category', 3) }}">
                                    <div class="icon-large"><i class="ri-t-shirt-air-line"></i></div>
                                    Fashion
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('item.category', 4) }}">
                                    <div class="icon-large"><i class="ri-home-8-line"></i></div>
                                    Home & Kitchen
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('item.category', 5) }}">
                                    <div class="icon-large"><i class="ri-android-line"></i></div>
                                    Pet Supplies
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('item.category', 6) }}">
                                    <div class="icon-large"><i class="ri-basketball-line"></i></div>
                                    Sports
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="search-box">
                    <form method="GET" action="{{ route('item.search') }}" class="search">
                        <span class="icon-large"><i class="ri-search-line"></i></span>
                        <input type="search" name="keyword" placeholder="Search for products">
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>