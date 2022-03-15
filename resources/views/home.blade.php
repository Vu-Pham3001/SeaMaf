@extends('layouts.app')

@section('title', 'RVM SeaMaf')

@section('content')
    <div class="body container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./assets/img/img-body1.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/img-body2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/img-body3.jpeg" alt="Third slide">
                </div>
            </div>
        </div>
        <div class="content-body d-flex flex-column justify-content-center align-items-center">
            <div class="content-title-body" data-aos="">Event planning and Management</div>
            <p>We do event planning management for all different types of events from weddings, birthdays ,coopera...</p>
            <div class="d-flex">
                <button class="btn-content btn-content-buy btn btn-primary">BUY NOW</button>
                <button class="btn-content btn-content-inqui btn btn-primary ml-3">INQUIRES</button>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="container-fluid">
            <div class="row" style="height: 70px;">
                <div class="col-md-4 d-flex justify-content-center align-items-center features-lr">
                    <div class="features-icon">
                        <img src="./assets/img/1.png" alt="icon" class="img-features" style="width: 30px; height: 23px;">
                    </div>

                    <div class="features-content ml-2">Fast Secure Payments</div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center features-mid">
                    <div class="features-icon-mid">
                        <img src="./assets/img/2.png" alt="icon" class="img-features features-icon-mid">
                    </div>

                    <div class="features-content-mid ml-2">Premium Products</div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center features-lr">
                    <div class="features-icon">
                        <img src="./assets/img/3.png" alt="icon" class="img-features" style="width: 30px; height: 23px;">
                    </div>

                    <div class="features-content ml-2">Affordable Delivery</div>
                </div>
            </div>
        </div>
    </div>

    <div class="products mt-3">
        <div class="container">
            <div class="title-product">LATEST PRODUCTS</div>
            <div class="container mt-3">
                <div class="row list-product">
                    @foreach($products as $product)
                        @include('product.list_product')
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 banner banner-left mt-3">
                    <div class="text-uppercase">SALE</div>
                    <div class="text-while">HANDMADE</div>
                    <div class="text-light mt-3 mb-3">HURRY! 60% OFF!</div>
                    <button class="btn-banner btn btn-primary">Shop Now</button>
                </div>
                <div class="col-lg-6 col-md-12 banner banner-right mt-3">
                    <div class="text-uppercase" style="background-color: #50e550;">NEW</div>
                    <div class="text-while">EVENTS</div>
                    <div class="text-light mt-3 mb-3">WEDDING & PARTY ACCESSORIES</div>
                    <button class="btn-banner btn btn-primary">Shop Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="pro-filter mt-5">
        <div class="title-pro-filter">BROWSE TOP SELLING PRODUCTS</div>
        <div class="container">
            <div class="row">
                @foreach($top as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-m-6 col-6 mt-5">
                        <div class="pro-filter-item position-relative" style="position:relative; height: 200px;">
                            <a href="{{ route('pro-detail', [$product->id])}}">
                                <img class="img-product123 w-100 h-100" src="{{asset('images/'.$product->img)}}" alt="{{$product->name}}">
                            </a>
                            <div class="pi-pic border">
                                <div class="text-pro-filter d-flex justify-content-center align-items-center">{{ $product->sale }}</div>
                                <div class="icon-pro-filter d-flex flex-column">
                                    <span>
                                        <i class="far fa-heart heart-pro-filter"></i>
                                    </span>
                                    <span>
                                        <i class="fas fa-shopping-bag mt-3 mb-3 bag-pro-filter"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex" style="position:relative">
                                <div class="pro-name" style="width: 70%;">{{ $product->name }}</div>
                                <div class="price" style="position: absolute; right: 0;">$ {{ $product->price }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="feedback">
            <div class="feedback-new">New</div>
            <div class="feedback-intro d-flex align-items-center">
                <div>
                    <div class="title-feedback">BEADING TOOLS</div>
                    <div class="feedback-content mt-2">3% DISCOUNT</div>
                    <button class="btn-feedback btn btn-primary mt-2">Shop Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
