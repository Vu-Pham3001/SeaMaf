@extends('admin.layout.admin')

@section('title', 'Danh sách người dùng')

@section('content')
    @include('admin.menu.alert')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>

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
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Cập nhật gần nhất</th>
                        <th>Giỏ hàng</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><span class="tag tag-success">{{$user->updated_at}}</span></td>
                            <td>
                                <a href="{{route('cartuser', [$user->id])}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </td>
                            <td>
                                <form action="" method="">
                                    @csrf
                                    <!-- <i class="fas fa-trash-alt" type="submit"></i> -->
                                    <button type="submit" class="bg-white border-0">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <span>{!! $users->appends(request()->all())->onEachSide(1)->links() !!}</span>
@endsection