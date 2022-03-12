@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Info</title>
</head>
<body>
  
<h1 class="text-center">Your Profile Details</h1>
    <div class=" col-lg-4 mx-auto" style="background-color:rgb(240,160,75)">
    <table class="table table-border">
        
        @foreach($details as $detail)
        <tr>
            <td><b>User id:</b>{{$detail->id}}</td>
        </tr>
        <tr>
            <td><b>Name:</b>{{$detail->name}}</td>
        </tr>
        <tr>
            <td><b>Email:</b>{{$detail->email}}</td>
        </tr>
        <tr>
            <td><b>Phone:</b>{{$detail->phone}}</td>
        <tr>
            <td><b>Address:</b>{{$detail->address}}</td>
        </tr>
        @endforeach

    </table>
    </div>

</body>
</html>
@endsection