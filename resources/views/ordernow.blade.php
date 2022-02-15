@extends('master')
@section('content')
<div class="bod">
    
    <div class="container border custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{ $total }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery </td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>$ {{ $total + 10 }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="pwd">Payment Method</label> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                    </div>
                    <div class="col-sm-6 text-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-secondary">Order Now</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
