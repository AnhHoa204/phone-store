@extends('layouts.app')

@section('content')
<h1 class="my-4">Danh sách điện thoại</h1>
<form action="{{ route('list') }}" method="GET" class="mb-4">
    <div class="form-row">
        <div class="col-md-4">
            <select name="category" id="category" class="form-control">
                <option value="">Chọn loại</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <input type="text" name="search" id="search" class="form-control" placeholder="Tìm kiếm...">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Tìm</button>
        </div>
    </div>
</form>
<div class="row">
    @foreach($phones as $phone)
        <div class="col-md-3 mb-4 mt-4"> <!-- Thêm mt-4 ở đây -->
            <div class="card">
                <img src="{{ $phone->thumbnail }}" class="card-img-top" alt="{{ $phone->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $phone->title }}</h5>
                    <p class="card-text">${{ $phone->price }}</p>
                    <a href="{{ route('detail', $phone->id) }}" class="btn btn-primary">Chi tiết</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
