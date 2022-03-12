@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup</title>
</head>
<body>
        <section class="container mt-5">
            <div class="row  justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-6 ">
                    <img class="img-fluid" src="{{URL('images/c-signup.jpg')}}" alt="">
                </div>




                <div class=" col-lg-6 col-sm-6 p-5 shadow-lg   rounded  ">
                    <h1 class="text-primary">Signup</h1>
                   <form class="" action="{{route('signup')}}" class="form-group shadow-lg p-3 mb-5 bg-body rounded" method="post">
                        {{csrf_field()}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{old('name')}}" class="form-control">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <br>

                        <label for="">Email</label>
                        <input type="email" name="email" id="" value="{{old('email')}}" class="form-control">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <br>

                        <label for="">Phone</label>
                        <input type="text" name="phone" id="" value="{{old('phone')}}" class="form-control">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <br>
                    

                        <label for="">Address</label>
                        <input type="text" name="address" id="" value="{{old('address')}}" class="form-control">
                        @error('address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <br>

                        <label for="">Password</label>
                        <input type="password" name="password" id="" value="{{old('address')}}" class="form-control">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <br>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <p class="text-center pt-2">Already have an account? <a style="text-decoration:none;" href="{{route('signin')}}"> Signin</a></p>

                    </form>
                    
                    
                    
                </div>
            </div>
        </section>
</body>
</html>
@endsection