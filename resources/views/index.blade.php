@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Danh sách sản phẩm
    </div>

    <div class="row">

        <!-- Kiểm tra biến $products được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại hoặc có số lượng băng 0 (không có sản phẩm nào) thì hiển thị thông báo -->
        @if(!isset($product) || count($product) === 0)
            <p class="text-danger">Không có sản phẩn nào.</p>
        @else

        <!-- Nếu biến $products tồn tại thì hiển thị sản phẩm -->
            @foreach($product as $key => $value)
                <div class="col-4">
                    <div class="card text-left" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->name }}</h5>
                            <p class="card-text">{{ $value->description }}</p>
                            <p class="card-text text-dark">${{ $value->price }}</p>
                            <p class="card-text text-danger">Số lượt xem: {{ $value->view_count }}</p>

                            <!-- Nút XEM chuyển hướng người dùng sang trang chi tiết -->
                            <a href="{{ route('show', $value->id) }}" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
