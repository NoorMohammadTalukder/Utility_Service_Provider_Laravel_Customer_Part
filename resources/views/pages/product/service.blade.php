@extends('layouts.app')
@section('content')
    <div class="row ">
    <div class="col-lg-6 mx-auto bg- mt-5 ">
       <center>
       @foreach ($products as $item)
            <div class="card col-lg-12 mt-5 shadow-lg rounded " style="width: 36rem;">
                <img style="height:400px;"  class="card-img-top img-fluid " src="{{asset('images/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                <h3 class="card-text text-center">{{$item->name}}</h3>
                <h4>Starting from at BDT: {{$item->price}}</h4>
                <a input type="submit" href="{{route('serviceDetail',['id'=>$item->id,])}}" class="btn btn-Success " style="color:white">Get Service</a></p>
                </div>
            </div>
        @endforeach
       </center>
      
    </div>
    </div>       
@endsection