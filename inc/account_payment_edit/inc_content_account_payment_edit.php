<!-- inc_CONTENT -->
<section page="inc_content_account_payment_edit" class="pt-7 pb-12">
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
          <div class="list-group list-group-sm list-group-strong list-group-flush-x"> <a class="list-group-item list-group-item-action dropend-toggle " href="account-orders.php"> Orders </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-wishlist.php"> Widhlist </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-personal-info.php"> Personal Info </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account_address.php"> Addresses </a> <a class="list-group-item list-group-item-action dropend-toggle active" href="account-payment.php"> Payment Methods </a> <a class="list-group-item list-group-item-action dropend-toggle" href="#!"> Logout </a> </div>
        </nav>
      </div>
      <div class="col-12 col-md-9 col-lg-8 offset-lg-1"> 
        
        <!-- Heading -->
        <h6 class="mb-7"> Add Debit / Credit Card </h6>
        
        <!-- Form -->
        <form>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="cardNumber">Card Number *</label>
                <input class="form-control" id="cardNumber" type="text" placeholder="Card Number" required>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="nameOnCard">Name on Card *</label>
                <input class="form-control" id="nameOnCard" type="text" placeholder="Name on Card" required>
              </div>
            </div>
            <div class="col-12"> 
              
              <!-- Label -->
              <label class="form-label"> Expiry Date * </label>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label class="visually-hidden" for="paymentMonth">Month</label>
                <select class="form-select" id="paymentMonth" required>
                  <option selected disabled value="">Month *</option>
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label class="visually-hidden" for="paymentCardYear">Year</label>
                <select class="form-select" id="paymentCardYear" required>
                  <option selected disabled value="">Year *</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="form-group">
                <div class="input-group input-group-merge">
                  <input class="form-control" id="paymentCardCVV" type="text" placeholder="CVV *" required>
                  <div class="input-group-append"> <span class="input-group-text" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards." data-bs-original-title="" title=""> <span><i class="fe fe-help-circle"></i></span> </span> </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="defaultPaymentMethod">
                  <label class="form-check-label" for="defaultPaymentMethod">Default payment method</label>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Button -->
          <button class="btn btn-dark" type="submit"> Add Card </button>
        </form>
      </div>
    </div>
  </div>
</section>
