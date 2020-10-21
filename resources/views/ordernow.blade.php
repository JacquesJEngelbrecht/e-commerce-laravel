@extends('master')
@section('content')
   <div class="custom-product">
        <div class="col-sm-12">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0.00</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$ {{$total + 10}}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/order_placement" method="POST">@csrf
                    <div class="form-group">
                        <textarea name="address" class="form-control" placeholder="Enter Delivery Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="payment">Payment Method</label><br>
                        <input type="radio" value="onlibe" name="payment"> <span>Online Payment</span><br>
                        <input type="radio" value="emi" name="payment"> <span>EMI Payment</span><br>
                        <input type="radio" value="cod" name="payment"> <span>Payment on Delivery</span><br>
                    </div>
                    <button type="submit" class="btn btn-default">Order Now</button>
                </form>
            </div>
        </div>        
   </div>
@endsection