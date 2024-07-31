@extends('layouts.app')

@section('content')
<div class="my-4">
    <div class="card bg-light mb-4">
        <div class="card-body">
            <div class="card-title">
                <h2>{{ $category->name }}</h2>
            </div>
            <hr>
            <div class="row">
                @foreach($phones as $phone)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="{{ $phone->thumbnail }}" class="card-img-top card-img" alt="{{ $phone->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $phone->title }}</h5>
                                <p class="card-text">${{ $phone->price }}</p>
                                <a href="{{ route('detail', $phone->id) }}" class="btn btn-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
