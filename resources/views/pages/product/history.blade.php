@extends('layouts.app')
@section('content')
<h1>Order History</h1>
    <table class="table table-border">
        <tr>
            <th>Order Id</th>
            <th>Price</th>
            <th>Date and Time</th>
           
            

        </tr>
        @foreach($history as $element)
        <tr>
            <td>{{$element->order_id}}</td>
            <td>{{$element->unit_price}}</td>
            <td>{{$element->created_at}}</td>
         
            
           

        </tr>
        @endforeach

    </table>
@endsection