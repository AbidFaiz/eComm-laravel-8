@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="search-wrapper">
                <h2>Result for Products</h2>
                @foreach($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                            <h5>{{$item['description']}}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection