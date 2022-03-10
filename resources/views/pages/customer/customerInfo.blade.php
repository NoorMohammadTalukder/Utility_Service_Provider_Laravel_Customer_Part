@extends('layouts.app1')
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
    <h1>Hi {{Session::get ("customerId")}}</h1>
</body>
</html>
@endsection