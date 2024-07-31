@extends('layouts.app')

@section('content')
<div class="my-4">
    <div class="card bg-light mb-4">
        <div class="card-body">
            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Danh mục</h2>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            @foreach($categories as $category)
                                <div class="col-md-2 mb-4">
                                    <div class="card border-primary text-center">
                                        <div class="card-body p-2">
                                            <h5 class="card-title">{{ $category->name }}</h5>
                                            <a href="{{ route('category', $category->id) }}" class="btn btn-primary btn-sm">Xem sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Sản phẩm có giá cao nhất</h2>
                        </div>
                        <hr>
                        <div class="row">
                            @foreach($highestPricePhones as $phone)
                                <div class="col-md-3 mb-4">
                                    <div class="card border-danger">
                                        <img src="{{ $phone->thumbnail }}" class="card-img-top card-img" alt="{{ $phone->title }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $phone->title }}</h5>
                                            <p class="card-text">${{ $phone->price }}</p>
                                            <a href="{{ route('detail', $phone->id) }}" class="btn btn-danger">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdn.tgdd.vn/2024/06/banner/Trang-cate-S23-FE-1200x300.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.tgdd.vn/2024/07/banner/1200x300--1--1200x300.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.tgdd.vn/2024/06/banner/1200x300-1200x300-7.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Sản phẩm có giá thấp nhất</h2>
                        </div>
                        <hr>
                        <div class="row">
                            @foreach($lowestPricePhones as $phone)
                                <div class="col-md-3 mb-4">
                                    <div class="card border-success">
                                        <img src="{{ $phone->thumbnail }}" class="card-img-top card-img" alt="{{ $phone->title }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $phone->title }}</h5>
                                            <p class="card-text">${{ $phone->price }}</p>
                                            <a href="{{ route('detail', $phone->id) }}" class="btn btn-success">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        // Activate carousel
        $('.carousel').carousel();
    </script>
@endpush
