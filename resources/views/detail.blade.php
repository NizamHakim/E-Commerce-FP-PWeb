@extends('layout.layout')
@section('content')
    <main>
        <div class="single-product">
            <div class="container">
                <div class="wrapper">
                    <div class="breadcrumb">
                        <ul class="flexitem">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li>Man Slip On Shoes Casual with Arch Support Insoles</li>
                        </ul>
                    </div>

                    <div class="column">
                        <div class="products one">
                            <div class="flexwrap">
                                <div class="row">
                                    <div class="item is_sticky">
                                        <div class="price">
                                            <span class="discount">32%<br>OFF</span>
                                        </div>
                                        <div class="big-image">
                                            <div class="big-image-wrapper">
                                                <div class="image-show">
                                                    <a href="#"><img src="https://placehold.co/500x500"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item">
                                        <h1>Man Slip On Shoes Casual with Arch Support Insoles</h1>
                                        <div class="content">
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <a href="#" class="mini-text">2,251 reviews</a>
                                                <a href="#" class="add-review mini-text">Add Your Review</a>
                                            </div>
                                            <div class="stock-sku">
                                                <span class="available">In Stock</span>
                                                <span class="sku mini-text">SKU-881</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$80.90</span>
                                                <span class="normal">$119.90</span>
                                            </div>
                                            <div class="actions">
                                                <div class="qty-control flexitem">
                                                    <button class="minus circle">-</button>
                                                    <input type="text" value="1">
                                                    <button class="plus circle">+</button>
                                                </div>
                                                <div class="button-cart">
                                                    <button class="primary-button">Add to cart</button>
                                                </div>
                                            </div>
                                            <div class="description collapse">
                                                <ul>
                                                    <li class="has-child expand">
                                                        <a href="#0" class="icon-small">Information</a>
                                                        <ul class="content">
                                                            <li><span>Brands</span> <span>Nike</span></li>
                                                            <li><span>Activity</span> <span>Running</span></li>
                                                            <li><span>Material</span> <span>Fleece</span></li>
                                                            <li><span>Gender</span> <span>Men</span></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-child">
                                                        <a href="#0" class="icon-small">Details</a>
                                                        <div class="content">
                                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima rerum adipisci odio laborum! Dignissimos, assumenda? Labore iure porro nesciunt cupiditate qui dolorem, voluptatem fugiat et exercitationem iste nulla obcaecati recusandae.</p>
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
        @include('components.featured')
    </main>
@endsection