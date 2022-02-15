@extends('master')
@section('content')
    <div class="custom-product">
        <div class="container carts">
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    {{-- @if (count($cart) > 0) --}}
                    {{-- <a class="btn btn-success" href="#">Place Order</a> <br> <br> --}}
                    {{-- @else --}}
                    @foreach ($products as $item)
                        <div class=" row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending-image" src="{{ $item->gallery }}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                    <h2>{{ $item->name }}</h2>
                                    <h5>{{ $item->description }}</h5>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove to Cart</a>
                            </div>
                            <br> <br>
                            <div class="col-sm-3">
                                <a class="btn btn-success" href="ordernow">Order Now</a>
                            </div>
                        </div>
                    @endforeach
                    {{-- @endif --}}
                    {{-- <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
