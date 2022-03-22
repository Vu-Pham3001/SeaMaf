@extends('layouts.app')

@section('title', 'Tìm kiếm sản phẩm')

@section('content')
    @foreach($searchs as $search)
    <div class="d-flex mt-3 mb-3">
        <div class="mr-3" style="width: 150px; height: 150px;">
        <a href="{{ route('pro-detail', [$search->id])}}">
            <img src="{{ asset('images/'.$search->img) }}" alt="" style="width:100%; height:100%;">
        </a>
        </div>
        <div>{{ $search->name }}</div>
    </div>
    @endforeach
@endsection