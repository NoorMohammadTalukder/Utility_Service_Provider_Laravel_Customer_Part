@extends('layouts.app1')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dash Board</title>
</head>
<body >
    
    <div class="col-lg-4 col-sm-6 mx-auto " >
        <h4 class="text-center text-danger mt-5">For Security Reason Kindly Provide Your Password</h4>
                    
                <form   action="{{route('updateInformationPassFormSubmit')}}" class="form-group  border border-primary shadow-lg p-3 mb-5 bg-body rounded rounded-3  " method="post">
                    {{csrf_field()}}

                    <label for="">Password</label>
                    <input type="password" name="password" id="" value="{{old('password')}}" class="form-control">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <br>

                    <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>
                    
                </div>




    
</body>
</html>
@endsection