@extends('master')
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        @foreach($products as $product)
            <div class="carousel-item {{$product['id'] == 1 ? 'active':''}}">
            <a href="detail/{{$product['id']}}">
                <img src="{{$product['gallery']}}" class="d-block w-100 slider-img" alt="...">
                <div class="carousel-caption slider-text">
                <h3>{{$product['name']}}</h3>
                <p>{{$product['description']}}</p>
                </div>
            </a>
            </div>
        @endforeach
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
        <div class="container trending-wrapper">
            <h3>Trending Products</h3>
            <div class="row">
                
                <?php $i = 1; ?>
                @foreach($products as $product)
                <div class="trending-item">
                    <a href="detail/{{$product['id']}}">
                    <img src="{{$product['gallery']}}" class="trending-img" alt="...">
                    <div class="">
                    <h6>{{$product['name']}}</h6>
                    </div>
                    </a>
                </div>    
            
            <?php if ($i++ == 5) break; ?>
                @endforeach  
                </div>
        </div>
@endsection