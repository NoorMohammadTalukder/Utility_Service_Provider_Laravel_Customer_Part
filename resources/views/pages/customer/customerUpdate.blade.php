@extends('layouts.app')
@section('content')
<h2>Update Information</h2>
<form action="{{route('customerUpdate')}}" class="form-group" method="post">
{{csrf_field()}}
        <label for="">ID</label>
        <input type="text" name="id" id="" value="{{$user->id}}" class="form-control" readonly>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>


        <label for="">Name</label>
        <input type="text" name="name" id="" value="{{$user->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>

        <label for="">Email</label>
        <input type="email" name="email" id="" value="{{$user->email}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>

        <label for="">Phone</label>
        <input type="text" name="phone" id="" value="{{ $user->phone}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
       

        <label for="">Address</label>
        <input type="text" name="address" id="" value="{{ $user->address}}" class="form-control">
        @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <br>
      

        <input type="submit">                
</form>
@endsection