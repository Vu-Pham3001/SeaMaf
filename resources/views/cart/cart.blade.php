@extends('layouts.app')

@section('title', 'Giỏ hàng')

@section('content')
    @include('admin.menu.alert')
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table" style="background-color: #f0f0f0; padding:40px 34px 0; border-top-left-radius: 27px; border-top-right-radius:27px;">
                    <h1 class="font-weight-bold">Your Cart</h1>
                    <div>
                        <table style="background-color: #f0f0f0; ">
                            <thead>
                                <tr>
                                    <th style="width: 150px;">Product</th>
                                    <th style="width: 150px;">Tên sản phẩm</th>
                                    <th style="width: 100px;">Số lượng</th>
                                    <th style="width: 100px;">Giá bán</th>
                                    <th style="width: 100px;">Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($proIdCart as $id)
                                    <tr>
                                        <td><img src="{{asset('images/'.$id->product->img)}}" alt="" style="width: 100px; height:100px;"></td>
                                        <td>{{$id->product->name}}</td>
                                        <td>{{$id->quanlity}}</td>
                                        <td>$ {{$id->product->price}}</td>
                                        <td>
                                            <form action="{{ route('del-cart', [$id->product_id])}}" method="POST">
                                                @csrf
                                                <!-- <i class="fas fa-trash-alt" type="submit"></i> -->
                                                <button type="submit" class="bg-white border-0">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="total-price" style="background-color: #f51167; height: 65px; border-bottom-left-radius:27px; border-bottom-right-radius:27px;">
                    <h6 class="position-relative" style="color: #fff; left:360px; line-height:65px; font-size:18px;"> Total <span style="margin-left:15px;">$ 3.00</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
