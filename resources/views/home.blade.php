@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
@section('content')
<body style="" >
    <header class="container">
        <!-- carousel startede from here -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{URL('images/c1.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="" style="color:black">Welcome Home Utility Service</h1>
                            <p style="color:black">We are available 24hr</p>
                        </div>
                </div>
                <div class="carousel-item">
                    <img src="{{URL('images/c2.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 style="color:black">We offer the best service</h1>
                            <p style="color:black">So you can trust us</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{URL('images/c3.jpg')}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 style="color:black">Recomended by many users</h1>
                            <p style="color:black">Signup now</p>
                        </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <main>
            <!-- <section class="container mt-3">
               
                        <h1 class="text-center">Our Recomended Services</h1>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card h-100 bg-white p-3 rounded-3 ">
                                <div class="">
                                    <div class="bg-warning">
                                        <img src="images/Daco_1703273 1.png" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Nike Shoe</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                    <h3>$450</h3>
                                    <button type="button" class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 bg-white p-3 rounded-3 ">
                                <div class="">
                                    <div class="bg-warning">
                                        <img src="images/Daco_1703273 1.png" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Nike Shoe</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                    <h3>$450</h3>
                                    <button type="button" class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 bg-white p-3 rounded-3 ">
                                <div class="">
                                    <div class="bg-warning">
                                        <img src="images/Daco_1703273 1.png" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Nike Shoe</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                    <h3>$450</h3>
                                    <button type="button" class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 bg-white p-3 rounded-3 ">
                                <div class="">
                                    <div class="bg-warning">
                                        <img src="images/Daco_1703273 1.png" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Nike Shoe</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                    <h3>$450</h3>
                                    <button type="button" class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card h-100 bg-white p-3 rounded-3 ">
                                <div class="">
                                    <div class="bg-warning">
                                        <img src="images/Daco_1703273 1.png" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Nike Shoe</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                    <h3>$450</h3>
                                    <button type="button" class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card h-100 bg-white p-3 rounded-3 ">
                                <div class="">
                                    <div class="bg-warning">
                                        <img src="images/Daco_1703273 1.png" class="card-img-top" alt="...">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Nike Shoe</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                    <h3>$450</h3>
                                    <button type="button" class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>

                    </div>

                




                        

                    

                   

            </section> -->

          


            <!-- customer review -->
            <!-- moment part -->
        <section class="moment container mt-5">
            <div class="row  justify-content-center align-items-center">
                <div class="col-lg-8 col-sm-12 ">
                    <!-- <iframe width="300" height="315" src="https://www.youtube.com/embed/nrng4eH1jTE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <iframe width="640" height="640" src="https://www.youtube.com/embed/Ey0ESUxWTL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class=" col-lg-4 col-sm-12 ">
                    <div>
                        <h1>Real Happy Customers, Real Stories</h1>
                        <p>Such service platforms are available in other countries. I’ve personally used those when I was abroad. I’m very pleased that such a portal is available here in Bangladesh as well. Thank you Sheba.xyz.</p>
                        <p><b>-Zaben Yousuf Nur</b></p>
                    </div>
                    
                </div>
            </div>
        </section>

         <!-- frequently question part -->
         <section class="container mt-5 mx-auto shadow-lg ">
            <div>
                <h1 class="text-center">Frequently Asked Questions</h1>
            </div>
            <div class="row justify-content-evenly align-items-center">
                <div class="col-lg-12 col-sm-12 ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What is your privacy policy??
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Sheba.xyz has established a Privacy Policy that explains to users how their information is collected and used. The Privacy Policy is referenced above and hereby incorporated into the Terms of Use set forth herein. Your use of this Product is governed by the Privacy Policy.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                               What ARE THE SANCTIONS FOR VIOLATING ANY OF THE RULES FOR SERVICE USERS?
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">If a SERVICE USER violates any of the above-referenced rules in connection with his or her Posting, Sheba.xyz, in its sole discretion, may take any of the following actions: (a) cancel the Posting; (b) limit the SERVICE USER's Account privileges; (c) suspend the SERVICE USER's Account; and/or (d) decrease the SERVICE USER's status earned via the Feedback page.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    What is your refund and cancellation policy?
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">If the return is caused by the consumer, consumer should be responsible for the shipping fee. The specific fee should be based on the express company you choose. If due to our reasons, the goods received are damaged or
                                    not correct, and the consumer is not required to bear the shipping fee for this reason. Our policy lasts 30 days. If 30 days have gone by since your purchase, unfortunately we can’t offer you a refund or exchange.</div>
                            </div>
                        </div>

                    </div>

                </div>
                

            </div>

        </section>

        
    </main>

     <!-- footer started -->

     <footer class="text-center d-flex justify-content-center align-items-center  mt-5 row bg-dark container-fluid mx-auto">
            <p class="pt-3 col-lg-6 text-white"><b>©2022. All Right Reserved By Noor Mohammad Talukder </b></p>
                <div class="col-lg-6">
                    <h4 class="text-white mt-2">Get the App</h4>
                        <a class="" href="https://play.google.com/store/apps/details?id=com.spotify.music">
                        <img width="150" src="{{URL('images/a1.png')}}" alt="">
                        </a> <br><br>
                        <a href="https://play.google.com/store/apps/details?id=com.shazam.android">
                        <img class="pb-5" width="150" src="{{URL('images/a2.png')}}" alt="">
                        </a>
                </div>
    </footer>




</body>

@endsection
</html>