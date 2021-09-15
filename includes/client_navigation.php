<section class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand ms-2" href="#">
        <img src="assets/images/logo.jpg" alt="" width="190" height="55">      
      </a>        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item ms-lg-4">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#">Our Services</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <!-- Navigation link that triggers post a delivery modal -->
          <li class="nav-item ms-lg-4">
            <a href="#postDeliveryModal" class="nav-link" data-bs-toggle="modal">Post a Delivery</a>
          </li>
          <!-- Code for post a delivery modal begins here -->
          <div class="modal fade" id="postDeliveryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="section-heading text-center mt-4">
                  <h5 class="hover-underline-animation fw-bold" style="color: #3D5A80;"><span class="unique-heading-section">Post</span> a Delivery</h5>
                </div>
                <p class="text-center" style="color: #3D5A80;">Enter the details of your delivery here</p>
                <div class="modal-body">
                  <form action="">
                    <div class="mb-2">
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Type of delivery</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>            
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-12 col-md-6">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Pick up location</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>            
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Drop off location</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>            
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-sm-12 col-md-6">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Pick up date</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>            
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Delivery period</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>            
                      </div>
                    </div>
                    <p class="fs-6" style="color: #3D5A80;">Enter the dimensions of your load here <br>(Rough estimates are allowed)</p>
                    <div class="row mb-2">
                      <div class="col">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>L</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select> 
                      </div>
                      <div class="col">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>W</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select> 
                      </div>
                      <div class="col">
                      <select class="form-select" aria-label="Default select example">
                          <option selected>H</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>            
                      </div>
                      <div class="col">
                      <select class="form-select" aria-label="Default select example">
                          <option selected>cm</option>
                          <option value="1">m</option>
                      </select>            
                      </div>
                    </div>
                    <p class="fs-6" style="color: #3D5A80;">+ Add an image (Optional)</p>
                    <div class="mb-2">
                      <textarea class="form-control" id="moreDescription" placeholder="Enter any extra information here" rows="5"></textarea>                    
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-success">Post</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Code for post a delivery modal ends here -->
          <li class="nav-item dropdown ms-lg-4">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More <i class="fas fa-angle-down ms-1"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="my_deliveries.php">My Deliveries</a></li>
            <li><a class="dropdown-item" href="past_deliveries.php">Past Deliveries</a></li>
            <li><a class="dropdown-item" href="#">Edit my Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">Log out</a></li>
          </ul>
        </li>
        </ul>
        <div class="user-image mx-lg-4">
            <img src="assets/images/user-image.jpg" alt="User image">
        </div>
    </div>
  </nav>
</section>
