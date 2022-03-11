@extends('layouts.app')
@section('content')
    <div class="row ">
    <div class="col-lg-6 mx-au">
        @foreach ($products as $item)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text text-center">{{$item->name}}<br>
                <span>Price: BDT{{$item->price}}</span><br>
                <a href="" class="btn btn-primary" style="color:white">Add to Cart</a></p>
                </div>
            </div>
        @endforeach
    </div>
    </div>       
@endsection