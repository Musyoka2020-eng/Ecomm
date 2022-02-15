@extends('master')
@section('content')

    <div class="custom-product">
        <div class="container border clearfix">
        <center>
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h3>My Orders</h3>
                    @foreach ($orders as $item)
                        <div class=" row searched-item ">
                            <div class="col-sm-4 myord-r">
                                    <h2>Name : {{ $item->name }}</h2>
                                    <h5>Delivery Status : {{ $item->status }}</h5>
                                    <h5>Address : {{ $item->address }}</h5>
                                    <h5>Payment Status : {{ $item->payment_status }}</h5>
                                    <h5>Payment Method : {{ $item->payment_method }}</h5>
                            </div>
                            <div class="col-sm-4 myord-l pull-right">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending-image" src="{{ $item->gallery }}">
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </center>
        </div>
    </div>
@endsection
