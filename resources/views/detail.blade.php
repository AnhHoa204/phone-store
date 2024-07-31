@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ $phone->thumbnail }}" class="card-img" alt="{{ $phone->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $phone->title }}</h2>
                    <p class="card-text">${{ $phone->price }}</p>
                    <p class="card-text">{{ $phone->description }}</p>
                    <p class="card-text">Số lượng: {{ $phone->quantity }}</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Quay lại</a>
                    <button class="btn btn-success">Mua ngay</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

