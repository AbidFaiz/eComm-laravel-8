@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="search-wrapper">
                <h2>Cart List</h2>
                @foreach($products as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}" alt="{{$item->name}}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection