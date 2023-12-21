@extends('layout.layout')
@section('content')

    <div class="single-cart">
        <div class="container">
            <div class="wrapper">
                <div class="page-title">
                    <h1>Shopping Cart</h1>
                </div>
                <div class="products one cart">
                    <div class="flexwrap">
                        <form action="" class="form-cart">
                            <div class="item">
                                <table id="cart-table">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $cart)
                                            <tr>
                                                <td class="flexitem">
                                                    <div class="thumbnail object-cover">
                                                        <a href="{{ route('item.detail', $cart->item_id) }}"><img src="{{ asset($cart->item->image) }}"></a>
                                                    </div>
                                                    <div class="content">
                                                        <strong><a href="{{ route('item.detail', $cart->item_id) }}">{{ $cart->item->name }}</a></strong>
                                                    </div>
                                                </td>
                                                <td>{{ $cart->item->price }}</td>
                                                <td>{{ $cart->quantity }}</td>
                                                <td id="sub-total"></td>
                                                <td><a href="/cart/remove/{{ $cart->id }}" class="item-remove"><i class="ri-close-line"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class="cart-summary styled">
                            <div class="item">
                                <form method="POST" action="{{ route('order.create') }}">
                                    @csrf
                                    <div class="shipping-rate collapse">
                                        <div class="has-child expand">
                                            <a href="#" class="icon-small" style="margin-bottom: 0">Address</a>
                                            <div class="content">
                                                <textarea name="address" id="" cols="30" rows="10" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td id="cart-total"></td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td>Free Shipping</td>
                                                </tr>
                                                <tr class="grand-total">
                                                    <th>TOTAL</th>
                                                    <td><strong id="grand-total"></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <input id="order-total" name="total" type="hidden" value="">
                                        <button type="submit" class="secondary-button">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection