@extends('master')
@section('content')

<div class="custom-product">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            @for($i=0;$i < count($products);$i++) <li data-target="#demo" data-slide-to="{{$i}}" class="{{$i==0? 'active':''}}">
                </li>
                @endfor
        </ul>
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                    <div class="carousel-caption">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach


        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="trending-wrapper">
        <h1>Trending Products</h1>
        @foreach($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection