@extends('master')
@section('content')
   <div class="custom-product">
           
           <div class="col-sm-12">
                <div class="container trending-wrapper">
                <h3>Result for Products</h3>
                <a class="btn btn-success" href="ordernow">Order Now</a>                
                @foreach($products as $product)
                <div class="row searched-item list-devider shadow p-3 mb-5 bg-white rounded">
                    <div class="col-sm-3">
                        <a href="detail/{{$product->id}}">
                        <img src="{{$product->gallery}}" class="trending-img" alt="...">
                        <div class="">
                            <h6>{{$product->name}}</h6>
                            <h6>{{$product->description}}</h6>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <div class="">
                            <h6>{{$product->name}}</h6>
                            <h6>{{$product->description}}</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <a href="/removecart/{{$product->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>    
                @endforeach  
                <a class="btn btn-success" href="ordernow">Order Now</a>
                </div>
                
           </div>
           
   </div>
@endsection