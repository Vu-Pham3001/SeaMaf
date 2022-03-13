@extends('admin.layout.admin')

@section('title', 'Xóa sản phẩm')

@section('content')
    <form action="{{route('update-product', [$id_pro->id])}}" method="POST">
        <div class="card-body">
            @include('admin.menu.alert')
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom:0;">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name-product" value="{{$id_pro->name}}" required autocomplete="name-product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-bottom:0;">Thể loại</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="categori_id" value="{{$id_pro->categori_id}}" required autocomplete="categori_id">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" style="margin-bottom:0;">Ảnh sản phẩm</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="img" required autocomplete="img">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="description" style="margin-bottom:0;">Description</lable>
                            <textarea name="description" id="description" class="form-control" value="{{$id_pro->description}}" required autocomplete="description"></textarea>
                        </div>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="form-group">
                            <lable for="code" style="font-weight:700;">Mã sản phẩm</lable>
                            <input type="text" id="code" class="form-control" name="code" value="{{$id_pro->code}}" required autocomplete="code">
                        </div>
                        <div class="form-group">
                            <lable for="price" style="font-weight:700;">Price</lable>
                            <input type="text" id="price" class="form-control" name="price" value="{{$id_pro->price}}" required autocomplete="price">
                        </div>

                        <div class="form-group">
                            <lable for="is_top" style="font-weight:700;">Nổi bật</lable>
                            <input type="text" id="is_top" class="form-control" value="{{$id_pro->is_top}}" name="is_top">
                        </div>

                        <div class="form-group">
                            <lable for="sale" style="font-weight:700;">Sale/New</lable>
                            <input type="text" id="sale" class="form-control" name="sale" value="{{$id_pro->sale}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Xóa</button>
        </div>
        @csrf
    </form>
@endsection