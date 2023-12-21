@extends('layout.layout')
@section('content')
    <main>
        <div class="banners">
            <div class="container">
                <div class="wrapper">
                    <div class="column">
                        <div class="product-categories flexwrap">
                            @foreach ($categories as $category)
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="{{ asset($categoryImages[$category->id]->image) }}">
                                        </div>
                                        <div class="content mini-links">
                                            <h4><a href="{{ route('item.category', $category->id) }}">{{ $category->name }}</a></h4>
                                            <ul class="flexcol">
                                                @for ($i = 0; $i < 4; $i++)
                                                    <li><a href="{{ route('item.detail', $category->items[$i]->id) }}">{{ $category->items[$i]->name }}</a></li>
                                                @endfor
                                            </ul>
                                            <div class="second-links">
                                                <a href="{{ route('item.category', $category->id) }}" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection