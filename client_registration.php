<?php

// The following line of code imports the header and opens the body tag
include('includes/header.php');

?>
<div class="container-fluid client-registration">
    <div class="row">
            <div class="col1 col-lg-6 col-sm-12">
                <div class="back-link-div">
                    <a class="p" href="index.php"><i class="fas fa-arrow-left me-1"></i>Back Home</a>
                </div>
                <div class="registration-form-div px-sm-0 px-md-5">
                    <div class="form-logo">
                        <img src="assets/images/form-logo.jpg" alt="UTrail logo">
                    </div>
                    <div class="section-heading text-center">
                        <h2 class="hover-underline-animation fw-bold text-center mt-2" style="color: #3D5A80;">Get <span class="unique-heading-section">Started</span></h2>
                    </div>
                    <p class="text-center my-3" style="color: #3D5A80;">Fill in some details to create your account</p>
                    <form class="registration-form bg-white mx-md-5 mx-sm-0">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-white" id="basic-addon0"><i class="fas fa-user" style="color: #EE6C4D;"></i></span>
                            <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter your name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-white" id="basic-addon1"><i class="fas fa-envelope" style="color: #EE6C4D;"></i></span>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-white" id="basic-addon2" style="color: #EE6C4D;"><i class="fas fa-key"></i></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleConfirmPassword1" placeholder="Confirm password">
                        </div>
                        <button type="submit" class="btn">Create account</button>
                        <p>Already have an account? <a class="p" href="client_login.php">Login</a></p>
                    </form>
                </div>
            </div>
        <div class="col2 col-lg-6 col-sm-12 d-none d-lg-block">
            <div class="register-message">
                <div class="register-message-text text-left">
                    <h3>An entire world awaits!<br><span class="fw-bold">Create an account</span><span class="h4"> to get started.</span></h3>
                    <div class="register-message-bottom-div"></div>
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

