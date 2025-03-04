<!-- inc_CONTENT -->
<section   page="inc_content_account_address_edit"  class="pt-7 pb-12">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"> 
        
        <!-- inc_Heading -->
        <h3 class="mb-10">My Account</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-3"> 
        
        <!-- inc_Nav -->
        <nav class="mb-10 mb-md-0">
          <div class="list-group list-group-sm list-group-strong list-group-flush-x"> <a class="list-group-item list-group-item-action dropend-toggle " href="account-orders.php"> Orders </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-wishlist.php"> Widhlist </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-personal-info.php"> Personal Info </a> <a class="list-group-item list-group-item-action dropend-toggle active" href="account_address.php"> Addresses </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-payment.php"> Payment Methods </a> <a class="list-group-item list-group-item-action dropend-toggle" href="#!"> Logout </a> </div>
        </nav>
      </div>
      <div class="col-12 col-md-9 col-lg-8 offset-lg-1"> 
        
        <!-- inc_Heading -->
        <h6 class="mb-7"> Add Address </h6>
        
        <!-- inc_Form -->
        <form>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="firstName">First Name *</label>
                <input class="form-control" id="firstName" type="text" placeholder="First Name" required>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="lastName">Last Name *</label>
                <input class="form-control" id="lastName" type="text" placeholder="Last Name" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label" for="emailAddress">Email Address *</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label" for="companyName">Company Name</label>
                <input class="form-control" id="companyName" type="text" placeholder="Company Name" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label" for="country">Country *</label>
                <input class="form-control" id="country" type="text" placeholder="Country" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label" for="addressLineOne">Address Line 1 *</label>
                <input class="form-control" id="addressLineOne" type="text" placeholder="Address Line 1" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label" for="addressLineTwo">Address Line 2</label>
                <input class="form-control" id="addressLineTwo" type="text" placeholder="Address Line 2" required>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="townCity">Town / City *</label>
                <input class="form-control" id="townCity" type="text" placeholder="Town / City" required>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label" for="zipPostcode">ZIP / Postcode *</label>
                <input class="form-control" id="zipPostcode" type="text" placeholder="ZIP / Postcode" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="form-label" for="mobilePhone">Mobile Phone *</label>
                <input class="form-control" id="mobilePhone" type="tel" placeholder="Mobile Phone" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="defaultDeliveryAddress">
                  <label class="form-check-label" for="defaultDeliveryAddress">Default delivery address</label>
                </div>
                <div class="form-check mb-0">
                  <input type="checkbox" class="form-check-input" id="defaultShippingAddress">
                  <label class="form-check-label" for="defaultShippingAddress">Default shipping address</label>
                </div>
              </div>
            </div>
          </div>
          
          <!-- inc_Button -->
          <button class="btn btn-dark" type="submit"> Add Address </button>
        </form>
      </div>
    </div>
  </div>
</section>
