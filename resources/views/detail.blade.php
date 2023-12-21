@extends('layout.layout')
@section('content')
    <main>
        <div class="single-product">
            <div class="container">
                <div class="wrapper">
                    <div class="column">
                        <div class="products one">
                            <div class="flexwrap">
                                <div class="row">
                                    <div class="item is_sticky">
                                        <div class="big-image">
                                            <div class="big-image-wrapper">
                                                <div class="image-show">
                                                    <a href="#"><img src="{{ asset($itemdetails->image) }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item">
                                        <h1>{{ $itemdetails->name }}</h1>
                                        <div class="content">
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">10.000 reviews</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">{{ $itemdetails->price }}</span>
                                            </div>
                                            @if ($addedToCart)
                                                <div class="view-in-cart">
                                                    <a href="{{ route('cart.index') }}"><button class="secondary-button">View in Cart</button></a>
                                                </div>
                                            @else
                                                <form method="POST" action="{{ route('cart.add') }}" >
                                                    @csrf
                                                    <div class="actions">
                                                        <input type="hidden" name="item_id" value="{{ $itemdetails->id }}">
                                                        <div class="qty-control flexitem">
                                                            <button type="button" class="minus circle" onclick="decrement()">-</button>
                                                            <input id="detail-qty" type="text" name="quantity" value="1">
                                                            <button type="button" class="plus circle" onclick="increment()">+</button>
                                                        </div>
                                                        <div class="button-cart">
                                                            <button type="submit" class="primary-button">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endif
                                            <div class="description collapse">
                                                <ul>
                                                    <li class="has-child expand">
                                                        <a href="#0" class="icon-small">Details</a>
                                                        <div class="content">
                                                            <p>{{ $itemdetails->description }}</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('components.itemlist')
    </main>
@endsection