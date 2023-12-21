@extends('layout.layout')
@section('content')
    <main>
        <div class="slider">
            <div class="container">
                <div class="wrapper">
                    <div class="myslider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="image object-cover">
                                        <img src="{{ asset('images/home-kitchen/home_kitchen_5.jpg') }}">
                                    </div>
                                    <div class="text-content flexcol">
                                        <h4>Home & Kitchen</h4>
                                        <h2><span>Sleep Tight!</span><br><span>Smooth Bed Sheet</span></h2>
                                        <a href="{{ route('item.detail', 23) }}" class="primary-button">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="image object-cover">
                                        <img src="images/pet-supplies/pet_supplies_3.jpg">
                                    </div>
                                    <div class="text-content flexcol">
                                        <h4>Pet Supplies</h4>
                                        <h2><span>Happy Pet!</span><br><span>Comfy Pet Bed</span></h2>
                                        <a href="{{ route('item.detail', 27) }}" class="primary-button">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="image object-cover">
                                        <img src="images/fashion/fashion_6.jpg">
                                    </div>
                                    <div class="text-content flexcol">
                                        <h4>Fashion</h4>
                                        <h2><span>Dazzling Light?</span><br><span>Fancy Sunglasses</span></h2>
                                        <a href="{{ route('item.detail', 18) }}" class="primary-button">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="trending">
            <div class="container">
                <div class="wrapper">
                    <div class="sectop flexitem">
                        <h2><span class="circle"></span><span>Trending Products</span></h2>
                    </div>
                    <div class="column">
                        <div class="flexwrap">
                            <div class="row products big">
                                <div class="item">
                                    <div class="media">
                                        <div class="image">
                                            <a href="{{ route('item.detail', $trending5[0]->id) }}">
                                                <img src="{{ asset($trending5[0]->image) }}">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li><a href="{{ route('item.detail', $trending5[0]->id) }}"><i class="ri-eye-line"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(10.000)</span>
                                        </div>
                                        <h3 class="main-links"><a href="{{ route('item.detail', $trending5[0]->id) }}">{{ $trending5[0]->name }}</a></h3>
                                        <div class="price">
                                            <span class="current">Rp{{ $trending5[0]->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row products mini">
                                @for ($i = 1; $i <= 3; $i++)
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="{{ route('item.detail', $trending5[$i]->id) }}">
                                                    <img src="{{ $trending5[$i]->image }}">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li><a href="{{ route('item.detail', $trending5[$i]->id) }}"><i class="ri-eye-line"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="{{ route('item.detail', $trending5[$i]->id) }}">{{ $trending5[$i]->name }}</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(10.000)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">Rp{{ $trending5[$i]->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="row products mini">
                                @for ($i = 4; $i <= 6; $i++)
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="{{ route('item.detail', $trending5[$i]->id) }}">
                                                    <img src="{{ $trending5[$i]->image }}">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li><a href="{{ route('item.detail', $trending5[$i]->id) }}"><i class="ri-eye-line"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="{{ route('item.detail', $trending5[$i]->id) }}">{{ $trending5[$i]->name }}</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(10.000)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">Rp{{ $trending5[$i]->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.itemlist')
    </main>
@endsection

