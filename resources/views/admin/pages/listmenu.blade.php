@extends('admin.layout.admin')

@section('title', 'danh sách sản phẩm')

@section('content')
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
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
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
                            <form action="/admin/listmenu" method="POST">
                                @method('DELETE')
                                @csrf
                                <!-- <a href="#" class="btn btn-danger btn-sm btn_del" value="{{$product->id}}" onclick="removeRow('.$product->id.',  \'/admin/listmenu/destroy\')">
                                    <i class="fas fa-trash-alt"></i>
                                </a> -->
                                <button type="Submit">Delete</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection