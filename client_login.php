<?php

// The following line of code imports the header and opens the body tag
include('includes/header.php');

?>
<div class="container-fluid client-login">
    <div class="row">
            <div class="col1 col-lg-6 col-sm-12">
                <div class="back-link-div">
                    <a class="p" href="index.php"><i class="fas fa-arrow-left me-1"></i>Back</a>
                </div>
                <div class="login-form-div px-sm-0 px-md-5">
                    <div class="form-logo">
                        <img src="assets/images/form-logo.jpg" alt="UTrail logo">
                    </div>
                    <div class="section-heading text-center">
                        <h2 class="hover-underline-animation fw-bold text-center mt-2" style="color: #3D5A80;"><span class="unique-heading-section">Welcome</span> Back</h2>
                    </div>
                    <p class="text-center my-3" style="color: #3D5A80;">Enter your credentials to access your account</p>
                    <form class="login-form bg-white mx-md-5 mx-sm-0">
                        <div class="input-group mb-4">
                            <span class="input-group-text bg-white" id="basic-addon1"><i class="fas fa-envelope" style="color: #EE6C4D;"></i></span>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text bg-white" id="basic-addon2" style="color: #EE6C4D;"><i class="fas fa-key"></i></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12 col-md-4 py-2">
                                <a class="p" href="client_registration.php">Register</a>
                            </div>
                            <div class="col-sm-12 col-md-4 py-2">
                                <a class="p" href="#">Forgot password?</a>
                            </div>
                            <div class="col-sm-12 col-md-4 py-2">
                                <button type="submit" class="btn">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <div class="col2 col-lg-6 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/login-image1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <h5>Step 1</h5>
                            <h3>Log in to your account</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/login-image2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <h5>Step 2</h5>
                            <h3>Enter your delivery details and post your delivery</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/login-image3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <h5>Step 3</h5>
                            <h3>Wait for transporters to bid on your delivery</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/login-image4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <h5>Step 4</h5>
                            <h3>View and review bids made on your delivery</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/login-image5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-block">
                            <h5>Step 5</h5>
                            <h3>Select preferred bid and make deposit payment</h3>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>

<!-- Code for importing the scripts and closing the body tag begins here -->
<?php

include('includes/scripts.php');

?>
<!-- Code for importing the scripts and closing the body tag ends here -->

