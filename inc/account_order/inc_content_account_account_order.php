<!-- inc_CONTENT -->
<section page="inc_content_account_account_order"  class="pt-7 pb-12">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- Heading -->
        <h3 class="mb-10">My Account</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-3"> 
        
        <!-- Nav -->
        <nav class="mb-10 mb-md-0">
          <div class="list-group list-group-sm list-group-strong list-group-flush-x"> <a class="list-group-item list-group-item-action dropend-toggle active" href="account-orders.php"> Orders </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-wishlist.php"> Widhlist </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-personal-info.php"> Personal Info </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account_address.php"> Addresses </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-payment.php"> Payment Methods </a> <a class="list-group-item list-group-item-action dropend-toggle" href="#!"> Logout </a> </div>
        </nav>
      </div>
      <div class="col-12 col-md-9 col-lg-8 offset-lg-1"> 
        
        <!-- Order -->
        <div class="card card-lg mb-5 border">
          <div class="card-body pb-0"> 
            
            <!-- Info -->
            <div class="card card-sm">
              <div class="card-body bg-light">
                <div class="row">
                  <div class="col-6 col-lg-3"> 
                    
                    <!-- Heading -->
                    <h6 class="heading-xxxs text-muted">Order No:</h6>
                    
                    <!-- Text -->
                    <p class="mb-lg-0 fs-sm fw-bold"> 673290789 </p>
                  </div>
                  <div class="col-6 col-lg-3"> 
                    
                    <!-- Heading -->
                    <h6 class="heading-xxxs text-muted">Shipped date:</h6>
                    
                    <!-- Text -->
                    <p class="mb-lg-0 fs-sm fw-bold">
                      <time datetime="2019-10-01"> 01 Oct, 2019 </time>
                    </p>
                  </div>
                  <div class="col-6 col-lg-3"> 
                    
                    <!-- Heading -->
                    <h6 class="heading-xxxs text-muted">Status:</h6>
                    
                    <!-- Text -->
                    <p class="mb-0 fs-sm fw-bold"> Awating Delivery </p>
                  </div>
                  <div class="col-6 col-lg-3"> 
                    
                    <!-- Heading -->
                    <h6 class="heading-xxxs text-muted">Order Amount:</h6>
                    
                    <!-- Text -->
                    <p class="mb-0 fs-sm fw-bold"> $259.00 </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer"> 
            
            <!-- Heading -->
            <h6 class="mb-7">Order Items (3)</h6>
            
            <!-- Divider -->
            <hr class="my-5">
            
            <!-- List group -->
            <ul class="list-group list-group-lg list-group-flush-y list-group-flush-x">
              <li class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-4 col-md-3 col-xl-2"> 
                    
                    <!-- Image --> 
                    <a href="product.php"><img src="<?=get_template_directory_uri()?>/assets/img/products/product-6.jpg" alt="..." class="img-fluid"></a> </div>
                  <div class="col"> 
                    
                    <!-- Title -->
                    <p class="mb-4 fs-sm fw-bold"> <a class="text-body" href="product.php">Cotton floral print Dress x 1</a> <br>
                      <span class="text-muted">$40.00</span> </p>
                    
                    <!-- Text -->
                    <div class="fs-sm text-muted"> Size: M <br>
                      Color: Red </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-4 col-md-3 col-xl-2"> 
                    
                    <!-- Image --> 
                    <a href="product.php"><img src="<?=get_template_directory_uri()?>/assets/img/products/product-10.jpg" alt="..." class="img-fluid"></a> </div>
                  <div class="col"> 
                    
                    <!-- Title -->
                    <p class="mb-4 fs-sm fw-bold"> <a class="text-body" href="product.php">Suede cross body Bag x 1</a> <br>
                      <span class="text-muted">$49.00</span> </p>
                    
                    <!-- Text -->
                    <div class="fs-sm text-muted"> Color: Brown </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-4 col-md-3 col-xl-2"> 
                    
                    <!-- Image --> 
                    <a href="product.php"><img src="<?=get_template_directory_uri()?>/assets/img/products/product-48.jpg" alt="..." class="img-fluid"></a> </div>
                  <div class="col"> 
                    
                    <!-- Title -->
                    <p class="mb-4 fs-sm fw-bold"> <a class="text-body" href="product.php">Sweatshirt with Pocket</a> <br>
                      <span class="text-muted">$39.00</span> </p>
                    
                    <!-- Text -->
                    <div class="fs-sm text-muted"> Size: L <br>
                      Color: Pink </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Total -->
        <div class="card card-lg mb-5 border">
          <div class="card-body"> 
            
            <!-- Heading -->
            <h6 class="mb-7">Order Total</h6>
            
            <!-- List group -->
            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
              <li class="list-group-item d-flex"> <span>Subtotal</span> <span class="ms-auto">$128.00</span> </li>
              <li class="list-group-item d-flex"> <span>Tax</span> <span class="ms-auto">$0.00</span> </li>
              <li class="list-group-item d-flex"> <span>Shipping</span> <span class="ms-auto">$8.00</span> </li>
              <li class="list-group-item d-flex fs-lg fw-bold"> <span>Total</span> <span class="ms-auto">$136.00</span> </li>
            </ul>
          </div>
        </div>
        
        <!-- Details -->
        <div class="card card-lg border">
          <div class="card-body"> 
            
            <!-- Heading -->
            <h6 class="mb-7">Billing & Shipping Details</h6>
            
            <!-- Content -->
            <div class="row">
              <div class="col-12 col-md-4"> 
                
                <!-- Heading -->
                <p class="mb-4 fw-bold"> Billing Address: </p>
                <p class="mb-7 mb-md-0 text-gray-500"> Daniel Robinson, <br>
                  3997 Raccoon Run, <br>
                  Kingston, 45644, <br>
                  United States, <br>
                  6146389574 </p>
              </div>
              <div class="col-12 col-md-4"> 
                
                <!-- Heading -->
                <p class="mb-4 fw-bold"> Shipping Address: </p>
                <p class="mb-7 mb-md-0 text-gray-500"> Daniel Robinson, <br>
                  3997 Raccoon Run, <br>
                  Kingston, 45644, <br>
                  United States, <br>
                  6146389574 </p>
              </div>
              <div class="col-12 col-md-4"> 
                
                <!-- Heading -->
                <p class="mb-4 fw-bold"> Shipping Method: </p>
                <p class="mb-7 text-gray-500"> Standart Shipping <br>
                  (5 - 7 days) </p>
                
                <!-- Heading -->
                <p class="mb-4 fw-bold"> Payment Method: </p>
                <p class="mb-0 text-gray-500"> Debit Mastercard </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
