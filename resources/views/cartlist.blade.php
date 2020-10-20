@extends('master')
@section('content')
   <div class="custom-product">
           
           <div class="col-sm-12">
                <div class="container trending-wrapper">
                <h3>Result for Products</h3>                
                @foreach($products as $product)
                <div class="row searched-item list-devider">
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
                        <button class="btn btn-warning">Remove from Cart</button>
                    </div>
                </div>    
                @endforeach  
                </div>
           </div>
           
   </div>
@endsection