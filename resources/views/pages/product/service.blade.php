@extends('layouts.app')
@section('content')
    <div class="row ">
    <div class="col-lg-6 mx-auto bg- mt-5 bg-primary">
       <center>
       @foreach ($products as $item)
            <div class="card col-lg-12 mt-2" style="width: 36rem;">
                <img style="height:200px"  class="card-img-top img-fluid " src="{{asset('images/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text text-center">{{$item->name}}<br>
                <span>Price: BDT{{$item->price}}</span><br>
                <a href="{{route('addtocart',['id'=>$item->id])}}" class="btn btn-Success" style="color:white">Get Service</a></p>
                </div>
            </div>
        @endforeach
       </center>
    </div>
    </div>       
@endsection