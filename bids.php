<!-- Code for bids page begins here -->

<?php

// The following line of code imports the header and opens the body tag
include('includes/header.php');
// The following line of code imports the client's navigation bar
include('includes/client_navigation.php');

?>

<!-- Code for bids section begins here -->
<div class="section-heading text-center">
    <h2 class="hover-underline-animation fw-bold text-center mb-3" style="color: #3D5A80;">View <span class="unique-heading-section">Bids</span></h2>
</div>

<section class="bids-section" style="background: rgba(238, 108, 77, 0.3);">
    <div class="container py-4">
        <div class="input-group mb-3 ms-auto" style="display:flex; justify-content: center; align-items: center; width: 250px;">
            <p class="pe-2 pt-3">Sort by: <i class="fas fa-sort"></i></p>
            <select class="form-select" aria-label="Default select example">
                <option selected>Lowest bid</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>            
        </div>

        <div class="row bid mb-3">
            <div class="col-sm-12 col-md-8 col1">
                <div class="bidder-profile">
                    <div class="bidder-image">
                        <img src="assets/images/user-image.jpg" alt="Bidder's picture">
                    </div>
                    <p class="bidder-name ps-2 pt-2">Matthew</p>
                </div>

                <p class="bidder-message">Hi, I'm bidding providing that you will only need my van and I for assistance, if more items are added to whats originally stated later on, a new price will have to be reviewed.</p>

                <p class="bidder-contact"><span class="smaller-text">Call to discuss this bid:</span> <br> <i class="fas fa-phone-alt pe-1"></i>0712345678</p>

            </div>
            <div class="col-sm-12 col-md-4 col2">
                <p class="bid-amount" style="font-size: 14px;">
                    <span class="full-amount h5" style="font-size: 18px;">Ksh 1,500</span> <span style="font-weight: 500; color: #EE6C4D;">Total Price</span> <br> Book now for only <span style="font-size: 16px; font-weight: 500; color: #EE6C4D;">Ksh 800</span> deposit!
                </p>

                <p class="bid-summary" style="font-size: 16px; font-weight: 500; color: #EE6C4D; margin-bottom: 0px;">Bid Summary</p>
                <p class="vehicle-type" style="margin-bottom: 0px; font-size: 14px;"><i class="fas fa-truck-pickup pe-2"></i>Isuzu pickup</p>
                <p class="proposed-date" style="font-size: 14px;"><i class="fas fa-calendar-alt pe-2"></i>Flexible with dates</p>
                <button type="button" class="btn book-btn btn-success d-block" data-bs-toggle="modal" data-bs-target="#paymentModal">Proceed and Book <i class="fas fa-thumbs-up ps-2"></i></button>
            </div>
        </div>
        <div class="row bid mb-3">
            <div class="col-sm-12 col-md-8 col1">
                <div class="bidder-profile">
                    <div class="bidder-image">
                        <img src="assets/images/user-image.jpg" alt="Bidder's picture">
                    </div>
                    <p class="bidder-name ps-2 pt-2">Matthew</p>
                </div>

                <p class="bidder-message">Hi, I'm bidding providing that you will only need my van and I for assistance, if more items are added to whats originally stated later on, a new price will have to be reviewed.</p>

                <p class="bidder-contact"><span class="smaller-text">Call to discuss this bid:</span> <br> <i class="fas fa-phone-alt pe-1"></i>0712345678</p>

            </div>
            <div class="col-sm-12 col-md-4 col2">
                <p class="bid-amount" style="font-size: 14px;">
                    <span class="full-amount h5" style="font-size: 18px;">Ksh 1,500</span> <span style="font-weight: 500; color: #EE6C4D;">Total Price</span> <br> Book now for only <span style="font-size: 16px; font-weight: 500; color: #EE6C4D;">Ksh 800</span> deposit!
                </p>

                <p class="bid-summary" style="font-size: 16px; font-weight: 500; color: #EE6C4D; margin-bottom: 0px;">Bid Summary</p>
                <p class="vehicle-type" style="margin-bottom: 0px; font-size: 14px;"><i class="fas fa-truck-pickup pe-2"></i>Isuzu pickup</p>
                <p class="proposed-date" style="font-size: 14px;"><i class="fas fa-calendar-alt pe-2"></i>Flexible with dates</p>
                <button type="button" class="btn book-btn btn-success d-block" data-bs-toggle="modal" data-bs-target="#paymentModal">Proceed and Book <i class="fas fa-thumbs-up ps-2"></i></button>
            </div>
        </div>
    </div>
</section>


<!-- Code for bids section ends here -->

<!-- Code for importing the footer, scripts and closing the body tag begins here -->
<?php

include('includes/footer.php');
include('includes/scripts.php');

?>
<!-- Code for importing the scripts and closing the body tag ends here -->

<!-- Code for bids page ends here -->