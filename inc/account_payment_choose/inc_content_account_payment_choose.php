<!-- inc_CONTENT -->
<section page="inc_content_account_payment_choose" class="pt-7 pb-12">
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
          <div class="list-group list-group-sm list-group-strong list-group-flush-x"> <a class="list-group-item list-group-item-action dropend-toggle " href="account_orders.php"> Orders </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account_wishlist.php"> Widhlist </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account_personal_info.php"> Personal Info </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account_address.php"> Addresses </a> <a class="list-group-item list-group-item-action dropend-toggle active" href="account-payment.php"> Payment Methods </a> <a class="list-group-item list-group-item-action dropend-toggle" href="#!"> Logout </a> </div>
        </nav>
      </div>
      <div class="col-12 col-md-9 col-lg-8 offset-lg-1"> 
        
        <!-- Form -->
        <form>
          
          <!-- Card -->
          <div class="form-group card card-sm border">
            <div class="card-body"> 
              
              <!-- Radio -->
              <div class="form-check custom-radio"> 
                
                <!-- Input -->
                <input class="form-check-input collapsed" id="checkoutPaymentCard" name="payment" type="radio" checked>
                
                <!-- Label -->
                <label class="form-check-label d-flex justify-content-between w-100 fs-sm text-body text-nowrap" for="checkoutPaymentCard"> I want to add Debit / Credit Card <img class="ms-2" src="<?=get_template_directory_uri()?>/assets/img/brands/color/cards.svg" alt="..."> </label>
              </div>
            </div>
          </div>
          
          <!-- Card -->
          <div class="form-group card card-sm border">
            <div class="card-body"> 
              
              <!-- Radio -->
              <div class="form-check custom-radio"> 
                
                <!-- Input -->
                <input class="form-check-input" id="checkoutPaymentPaypal" name="payment" type="radio">
                
                <!-- Label -->
                <label class="form-check-label d-flex justify-content-between w-100 fs-sm text-body text-nowrap" for="checkoutPaymentPaypal"> I want to add PayPall <img src="<?=get_template_directory_uri()?>/assets/img/brands/color/paypal.svg" alt="..."> </label>
              </div>
            </div>
          </div>
          
          <!-- Button -->
          <button class="btn btn-dark" type="submit"> Continue <i class="fe fe-arrow-right ms-2"></i> </button>
        </form>
      </div>
    </div>
  </div>
</section>
