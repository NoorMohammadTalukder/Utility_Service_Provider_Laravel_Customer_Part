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
    
           <center>
           <h4>Service Id: {{$p->id}} </h4>
            <h4>Service Type: {{$p->name}}</h4>
           </center>
          
      
    <div class="row  justify-content-center align-items-center mt-5" >
                <div class="col-lg-8 col-sm-6 " >
                    <h1>Enter You Service Detail</h1>
                <form   action="{{route('addtocart')}}" class="form-group  border border-primary shadow-lg p-3 mb-5 bg-body rounded rounded-3  " method="post">
                    {{csrf_field()}}

                    <label for="">Enter Your Problem Description</label>
                    <input type="problem" name="problem" id="" value="{{old('problem')}}" class="form-control">
                    @error('problem')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <br>

                    <label for="">Add Quantity</label>
                    <input type="qty" name="qty" id="" value="{{old('qty')}}" class="form-control">
                    @error('qty')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <br>

                    
                    <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>
               
    </div>
    
    </section>
    
</body>
</html>
@endsection