@extends('layout.layout')
@section('content')

    <div class="single-cart">
        <div class="container">
            <div class="wrapper">
                <div class="breadcrumb">
                    <ul class="flexitem">
                        <li><a href="#">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
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
                                        <tr>
                                            <td class="flexitem">
                                                <div class="thumbnail object-cover">
                                                    <a href="#"><img src="https://placehold.co/200x200"></a>
                                                </div>
                                                <div class="content">
                                                    <strong><a href="#">Dimmable Ceiling Light Modern</a></strong>
                                                    <p>Color: Gold</p>
                                                </div>
                                            </td>
                                            <td>$279.99</td>
                                            <td>
                                                <div class="qty-control flexitem">
                                                    <button class="minus">-</button>
                                                    <input type="text" value="2" min="1">
                                                    <button class="plus">+</button>
                                                </div>
                                            </td>
                                            <td>$559.98</td>
                                            <td><a href="#" class="item-remove"><i class="ri-close-line"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class="cart-summary styled">
                            <div class="item">
                                <div class="coupon">
                                    <input type="text" placeholder="Enter coupon">
                                    <button>Apply</button>
                                </div>

                                <div class="shipping-rate collapse">
                                    <div class="has-child expand">
                                        <a href="#" class="icon-small">Estimate Shipping and Tax</a>
                                        <div class="content">
                                            <div class="countries">
                                                <form action="">
                                                    <label for="country">Country</label>
                                                    <select name="country" id="country">
                                                        <option value=""></option>
                                                        <option value="1">Afganistan</option>
                                                        <option value="2">Aland Islan</option>
                                                        <option value="3">Albania</option>
                                                        <option value="4" selected="selected">United States</option>
                                                        <option value="5">Others</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="states">
                                                <form action="">
                                                    <label for="state">State/Province</label>
                                                    <select name="state" id="state">
                                                        <option value="">Select a region, state or province</option>
                                                        <option value="1">Alabama</option>
                                                        <option value="2">Alaska</option>
                                                        <option value="3">American Samoa</option>
                                                        <option value="4">Arizona</option>
                                                        <option value="5">Arkansas</option>
                                                        <option value="6">Others</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="postal-code">
                                                <form action="">
                                                    <label for="postal">Zip/Postal Code</label>
                                                    <input type="number" name="postal" id="postal">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-total">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>$2155.95</td>
                                            </tr>
                                            <tr>
                                                <th>Discount</th>
                                                <td>$100.00</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping <span class="mini-text">(Flat)</span></th>
                                                <td>$10.00</td>
                                            </tr>
                                            <tr class="grand-total">
                                                <th>TOTAL</th>
                                                <td><strong>$2065.95</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="#" class="secondary-button">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection