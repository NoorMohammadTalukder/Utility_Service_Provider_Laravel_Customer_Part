@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signin</title>
</head>
<body>
    <section class="container mt-5">
    <div class="row  justify-content-center align-items-center" >
                <div class="col-lg-6 col-sm-6 " >
                    <h1 class="text-primary">Signin</h1>
                <form   action="{{route('signin')}}" class="form-group  border border-primary shadow-lg p-3 mb-5 bg-body rounded rounded-3  " method="post">
                    {{csrf_field()}}

                   
                    <input type="email" class="form-control rounded-left" name="email" <?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?> value = "<?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?>"  required>
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <span><br>
						{{Cookie::get('email')}}
				</span>
                    <br>

                    <label for="">Password</label>
                    <input type="password" name="password" id="" value="{{old('password')}}" class="form-control">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <br>

                    <label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" name="remember">
									<span class="checkmark"></span>
					</label>

                    
                    <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>
                    
                </div>
                <div class="col-lg-6 col-sm-6 ">
                    <img class="img-fluid" src="{{URL('images/c-signin.jpg')}}" alt="">
                </div>
    </div>
    
    </section>
    
</body>
</html>
@endsection