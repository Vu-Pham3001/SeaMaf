@extends('admin.layout.admin')

@section('title', 'danh sách sản phẩm')

@section('content')
    @include('admin.menu.alert')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách sản phẩm</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width:50px;">ID</th>
                                <th style="width:120px;">Name</th>
                                <th style="width:120px;">Thể loại</th>
                                <th style="width:120px;">Giá bán</th>
                                <th style="width:500px;">Mô tả</th>
                                <th>Edit</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->categori_id}}</td>
                                <td><span class="tag tag-success">{{$product->price}}</span></td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <a href="{{route('edit-product', [$product->id])}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('del-product', [$product->id])}}" method="POST">
                                        @csrf
                                        <!-- <i class="fas fa-trash-alt" type="submit"></i> -->
                                        <button type="submit" class="bg-white border-0">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    <!-- <a href="{{route('edit-product', [$product->id])}}" class="btn btn-danger btn-sm btn_del">
                                        <i class="fas fa-trash-alt"></i>
                                    </a> -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>
            
            <span>{!! $products->appends(request()->all())->onEachSide(1)->links() !!}</span>
            <!-- /.card -->
        </div>
    </div>
@endsection