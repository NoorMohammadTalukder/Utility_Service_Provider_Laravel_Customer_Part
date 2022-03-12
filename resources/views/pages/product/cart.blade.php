@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
<center>
    <div class=col-lg-6>
    @if(Session::has('cart'))
        <table class="table table-bordered">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Qty</td>
                <th>Description of problem</th>
                <th>Unit Price</th>
                <th>Total</th>
             
            </tr>
            @php
            $total = 0
            @endphp
            @foreach ($cart as $item)
                <tr>
                    <td><img src="{{asset('images/'.$item->image)}}" width="50px" height="50px"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->qty}}</td>
                    <td>{{$item->problem}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->price * $item->qty}}</td>
                    @php 
                        $total += $item->price * $item->qty
                    @endphp
                </tr>
            @endforeach
            <tr>
                <td></td><td></td><td></td>
                <th class="bg-primary">Total Amount:</th>
                <th class="bg-warning">{{$total}} BDT</th>
            </tr>
        </table>
        <form action="{{route('checkout')}}" method="post">
            {{@csrf_field()}}
            <input type="hidden" name="total_price" value="{{$total}}">
            <input type="submit" class="btn btn-success" value="Confirm Order">
        </form>
    @else
       <center><h3 class="text-danger">Cart is empty..Add some service</h3></center>
    @endif
    </div>
</center>
</body>
</html>
@endsection