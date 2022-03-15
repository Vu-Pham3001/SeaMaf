@extends('admin.layout.admin')

@section('title', 'thêm sản phẩm')

@section('content')
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            @include('admin.menu.alert')
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="margin-bottom:0;">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name-product" required autocomplete="name-product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="margin-bottom:0;">Thể loại</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="categori_id" required autocomplete="categori_id">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" style="margin-bottom:0;">Ảnh sản phẩm</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" type="button">Upload</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <lable for="description" style="margin-bottom:0;">Description</lable>
                            <textarea name="description" id="description" class="form-control" required autocomplete="description"></textarea>
                        </div>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="form-group">
                            <lable for="code" style="font-weight:700;">Mã sản phẩm</lable>
                            <input type="text" id="code" class="form-control" name="code" required autocomplete="code">
                        </div>
                        <div class="form-group">
                            <lable for="price" style="font-weight:700;">Price</lable>
                            <input type="text" id="price" class="form-control" name="price" required autocomplete="price">
                        </div>

                        <div class="form-group">
                            <lable for="is_top" style="font-weight:700;">Nổi bật</lable>
                            <input type="text" id="is_top" class="form-control" name="is_top">
                        </div>

                        <div class="form-group">
                            <lable for="sale" style="font-weight:700;">Sale/New</lable>
                            <input type="text" id="sale" class="form-control" name="sale">
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @csrf
    </form>
@endsection