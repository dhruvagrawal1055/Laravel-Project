@extends('layouts.app')
@include('navbar')
<div class="container">
    <h1>Menu</h1>
    <div class="row">
        @foreach ($menuItems as $item)
            <div class="col-md-4">
                <div class="card mb-4 shadow-lg">
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <p class="card-text"><strong>Price: {{ $item->price }}</strong></p>
                    </div>
                    <div class="card-footer bg-transparent border-top">
                        <form method="post" action="{{ route('cart.add') }}">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
