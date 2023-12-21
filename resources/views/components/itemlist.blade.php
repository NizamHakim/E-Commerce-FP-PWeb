<div class="features">
    <div class="container">
        <div class="wrapper">
            <div class="column">
                <div class="sectop flexitem">
                    <h2><span class="circle"></span><span style="text-transform: capitalize">{{ $itemlist_title }}</span></h2>
                </div>
                <div class="products main flexwrap">
                    @foreach ($itemlist as $item)
                        <div class="item">
                            <div class="media">
                                <div class="thumbnail object-cover">
                                    <a href="{{ route('item.detail', $item->id) }}">
                                        <img src="{{ asset($item->image) }}">
                                    </a>
                                </div>
                                <div class="hoverable">
                                    <ul>
                                        <li><a href="{{ route('item.detail', $item->id) }}"><i class="ri-eye-line"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <div class="rating">
                                    <div class="stars"></div>
                                    <span class="mini-text">(10.000)</span>
                                </div>
                                <h3 class="main-links"><a href="#">{{ $item->name }}</a></h3>
                                <div class="price">
                                    <span class="current">{{ $item->price }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>