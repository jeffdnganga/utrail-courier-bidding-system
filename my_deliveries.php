<!-- Code for My Deliveries page after client has signed in begins here -->

<?php

// The following line of code imports the header and opens the body tag
include('includes/header.php');
// The following line of code imports the client's navigation bar
include('includes/client_navigation.php');

?>

<!-- Code for my deliveries section begins here -->
<section class="my-deliveries">
    <div class="container py-5">
        <div class="section-heading text-center">
            <h2 class="hover-underline-animation fw-bold text-center mb-5" style="color: #3D5A80;"><span class="unique-heading-section">My</span> Deliveries</h2>
        </div>
        <div class="card my-4">
            <div class="row g-0 main-row">
                <div class="col-sm-12 col-md-3">
                    <img src="assets/images/load-image1.jpg" class="img-fluid" alt="Load image">
                </div>
                <div class="col-sm-12 col-md-9 pt-md-5 pt-sm-2 delivery-info-col">
                    <div class="row card-block delivery-information">
                        <div class="col-sm-12 col-md-4 ps-4 pt-2">
                            <h3>Packaged item</h3>
                        </div>
                        <div class="col-sm-12 col-md-4 ps-4 pt-2">
                            <p>Dimensions: 50x50x50cm<br>Weight: 2Kg<br>Route: Nairobi to Nakuru</p>
                        </div>
                        <div class="col-sm-12 col-md-4 pt-md-4 pt-sm-2 text-center">
                            <a class="btn" href="bids.php">View bids</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer w-100 text-center">
                <div class="row delivery-actions">
                    <div class="col">
                        <a class="p" href="#"><i class="fas fa-pen pe-1"></i> Edit Delivery</a>
                    </div>
                    <div class="col">
                        <a class="p" href="#"><i class="fas fa-times pe-1"></i> Cancel Delivery</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-4">
            <div class="row g-0 main-row">
                <div class="col-sm-12 col-md-3">
                    <img src="assets/images/load-image1.jpg" class="img-fluid" alt="Load image">
                </div>
                <div class="col-sm-12 col-md-9 pt-md-5 pt-sm-2 delivery-info-col">
                    <div class="row card-block delivery-information">
                        <div class="col-sm-12 col-md-4 ps-4 pt-2">
                            <h3>Packaged item</h3>
                        </div>
                        <div class="col-sm-12 col-md-4 ps-4 pt-2">
                            <p>Dimensions: 50x50x50cm<br>Weight: 2Kg<br>Route: Nairobi to Nakuru</p>
                        </div>
                        <div class="col-sm-12 col-md-4 pt-md-4 pt-sm-2 text-center">
                            <a class="btn" href="bids.php">View bids</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer w-100 text-center">
                <div class="row delivery-actions">
                    <div class="col">
                        <a class="p" href="#"><i class="fas fa-pen pe-1"></i> Edit Delivery</a>
                    </div>
                    <div class="col">
                        <a class="p" href="#"><i class="fas fa-times pe-1"></i> Cancel Delivery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Code for my deliveries section ends here -->

<!-- Code for importing the footer, scripts and closing the body tag begins here -->
<?php

include('includes/footer.php');
include('includes/scripts.php');

?>
<!-- Code for importing the scripts and closing the body tag ends here -->

<!-- Code for My Deliveries page after client has signed in ends here -->