@extends('layouts.app')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    @include('admin.menu.alert')
    <div class="page-top-product mt-3">
        <div class="container">
            <div class="title-page-product" style="font-size:24px; font-weight: 700;">{{$pro_detai->categori_id}}</div>
        </div>
    </div>
    <div class="page-body mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="" style="height:450px;">
                        <img src="{{asset('images/'.$pro_detai->img)}}" alt="{{$pro_detai->name}}" style="width:100%; height:100%;">
                    </div>

                    <div class="d-flex">
                        @foreach($pro_img as $img)
                            <div class="mt-3 ml-3">
                                <div class="" style="width:120px; height: 120px;" >
                                    <img class="w-100 h-100" src="{{$img->path}}" alt="{{$pro_detai->name}}" style="width:100%; height:100%;">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="" style="font-size:18px; font-weight: 700;">{{$pro_detai->name}}</div>
                    <div class="mt-3" style="font-size:24px; font-weight: 700;">$ {{$pro_detai->price}}</div>
                    <div class="mt-3" style="font-size: 15px;">Availability: In Stock</div>

                    <form action="{{route('addcart')}}" method="POST">
                        @csrf
                        <input type="text" value="{{$pro_detai->id}}" class="d-none" name="product_id">
                        <button class="btn btn-danger mt-3" type="submit">ADD TO CART</button>
                    </form>

                    <div class="mt-3 mb-2">
                        <div style="font-size:20px; font-weight:700;">DESCRIPTION:</div>
                        <div style="font-size:15px;">{{$pro_detai->description}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center" style="font-size:24px; font-weight:600;">RELATED PRODUCTS</div>
        <div class="row list-product mt-3 mb-3">
            @foreach($cate as $cate_id)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-m-6 col-6 mb-5">
                    <div class="pro-filter-item" style="position:relative; height: 200px;">
                        <a href="{{ route('pro-detail', [$cate_id->id])}}">
                            <img class="img-product123" src="{{asset('images/'.$cate_id->img)}}" alt="{{$cate_id->name}}" style="width:100%; height:100%;">
                        </a>
                        <div class="pi-pic border">
                            <div class="text-pro-filter d-flex justify-content-center align-items-center">{{ $cate_id->sale }}</div>
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
                            <span class="pro-name" style="width: 70%;">{{ $cate_id->name }}</span>
                            <div class="price" style="position: absolute; right: 0;">$ {{ $cate_id->price }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
