@extends('master')
@section('content')
   <div class="custom-product">
           
           <div class="col-sm-12">
                <div class="container trending-wrapper">
                <h3>My Orders</h3>                
                @foreach($orders as $order)
                <div class="row searched-item list-devider shadow p-3 mb-5 bg-white rounded">
                    <div class="col-sm-3">
                        <a href="detail/{{$order->id}}">
                        <img src="{{$order->gallery}}" class="trending-img" alt="...">
                        <div class="">
                            <h6>{{$order->name}}</h6>
                            <h6>{{$order->description}}</h6>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <div class="">
                            <h5>Name: {{$order->name}}</h5>
                            <h6>Delivery Status: {{$order->status}}</h6>
                            <h6>Delivery Address: {{$order->address}}</h6>
                            <h6>Payment Status: {{$order->payment_status}}</h6>
                            <h6>Payment Method: {{$order->payment_method}}</h6>
                        </div>
                    </div>
                </div>    
                @endforeach  
                </div>
                
           </div>
           
   </div>
@endsection