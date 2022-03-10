 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light container">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('customerDash')}}"><h3 class="text-primary">Dash Board</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('customerInfo')}}"><h5 class="text-primary">User Info</h5></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('customerLogout')}}"><h5 class="text-danger">Logout</h5></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>