@extends('master')
@section('content')
        <div class="container trending-wrapper">
            <h3>Result</h3>
            <div class="row">
            @foreach($products as $product)
                <div class="searched-item">
                    <a href="detail/{{$product['id']}}">
                    <img src="{{$product['gallery']}}" class="trending-img" alt="...">
                    <div class="">
                        <h6>{{$product['name']}}</h6>
                        <h6>{{$product['description']}}</h6>
                    </div>
                    </a>
                </div>    
            @endforeach  
            </div>
        </div>
@endsection