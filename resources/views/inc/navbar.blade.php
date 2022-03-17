<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="{{route('home')}}"><h2 class="text-primary">Home</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ">
      @if (Session::get("customerId")==false) 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('signup')}}"><h5 class="btn btn-warning">Signup</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('signin')}}"><h5 class="btn btn-warning" >Signin</h5></a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link active" href="{{route('list')}}"><h5 class="btn btn-warning">Our Services</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('cart')}}"><h5 class="btn btn-warning">Cart</h5></a>
        </li>
       
        
        @if (Session::get("customerId")) 
        <li class="nav-item">
          <a class="nav-link active" href="{{route('orderHistory')}}"><h5 class="text-success btn btn-warning">Order History</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('customerInfo')}}"><h5 class="text-success btn btn-warning">User Info</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('customerUpdateInformation')}}"><h5 class="text-success btn btn-warning">Update Information</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('customerLogout')}}"><h5 class=" btn btn-danger">Logout</h5></a>
        </li>
        @endif
        
      </ul>
    </div>
  </div>
</nav>