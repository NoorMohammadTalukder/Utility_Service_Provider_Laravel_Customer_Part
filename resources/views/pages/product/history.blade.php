@extends('layouts.app')
@section('content')
<center>
<h1>Order History</h1>
    <div class="col-lg-6">
    <table class="table table-border">
        <tr>
            <th>Order Id</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Service Type</th>
            <th>Order Status</th>
            <th>Service Provider Name</th>
            <th>Date and Time</th>
            
           
            

        </tr>
        @foreach($history as $element)
        <tr>
            <td>{{$element->order_id}}</td>
            <td>{{$element->unit_price}}</td>
            <td>{{$element->quantity}}</td>
            <td>{{$element->totalPrice}}</td>
            <td>{{$element->serviceName}}</td>
            <td>{{$element->orderStatus}}</td>
            <td>{{$element->serviceProvider}}</td>
            <td>{{$element->created_at}}</td>
         
            
           

        </tr>
        @endforeach

    </table>
    </div>
</center>
@endsection