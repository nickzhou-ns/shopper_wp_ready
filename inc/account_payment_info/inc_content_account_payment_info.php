<!-- inc_CONTENT -->
<section page="inc_content_account_payment_info" class="pt-7 pb-12">
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
          <div class="list-group list-group-sm list-group-strong list-group-flush-x"> <a class="list-group-item list-group-item-action dropend-toggle " href="account-orders.php"> Orders </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-wishlist.php"> Widhlist </a> <a class="list-group-item list-group-item-action dropend-toggle active" href="account-personal-info.php"> Personal Info </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account_address.php"> Addresses </a> <a class="list-group-item list-group-item-action dropend-toggle " href="account-payment.php"> Payment Methods </a> <a class="list-group-item list-group-item-action dropend-toggle" href="#!"> Logout </a> </div>
        </nav>
      </div>
      <div class="col-12 col-md-9 col-lg-8 offset-lg-1"> 
        
        <!-- Form -->
        <form>
          <div class="row">
            <div class="col-12 col-md-6"> 
              
              <!-- Email -->
              <div class="form-group">
                <label class="form-label" for="accountFirstName"> First Name * </label>
                <input class="form-control form-control-sm" id="accountFirstName" type="text" placeholder="First Name *" value="Daniel" required>
              </div>
            </div>
            <div class="col-12 col-md-6"> 
              
              <!-- Email -->
              <div class="form-group">
                <label class="form-label" for="accountLastName"> Last Name * </label>
                <input class="form-control form-control-sm" id="accountLastName" type="text" placeholder="Last Name *" value="Robinson" required>
              </div>
            </div>
            <div class="col-12"> 
              
              <!-- Email -->
              <div class="form-group">
                <label class="form-label" for="accountEmail"> Email Address * </label>
                <input class="form-control form-control-sm" id="accountEmail" type="email" placeholder="Email Address *" value="user@email.com" required>
              </div>
            </div>
            <div class="col-12 col-md-6"> 
              
              <!-- Password -->
              <div class="form-group">
                <label class="form-label" for="accountPassword"> Current Password * </label>
                <input class="form-control form-control-sm" id="accountPassword" type="password" placeholder="Current Password *" required>
              </div>
            </div>
            <div class="col-12 col-md-6"> 
              
              <!-- Password -->
              <div class="form-group">
                <label class="form-label" for="AccountNewPassword"> New Password * </label>
                <input class="form-control form-control-sm" id="AccountNewPassword" type="password" placeholder="New Password *" required>
              </div>
            </div>
            <div class="col-12 col-lg-6"> 
              
              <!-- Birthday -->
              <div class="form-group"> 
                
                <!-- Label -->
                <label class="form-label">Date of Birth</label>
                
                <!-- Inputs -->
                <div class="row gx-5">
                  <div class="col-auto"> 
                    
                    <!-- Date -->
                    <label class="visually-hidden" for="accountDate"> Date </label>
                    <select class="form-select form-select-sm" id="accountDate">
                      <option>10</option>
                      <option>11</option>
                      <option selected>12</option>
                    </select>
                  </div>
                  <div class="col"> 
                    
                    <!-- Date -->
                    <label class="visually-hidden" for="accountMonth"> Month </label>
                    <select class="form-select form-select-sm" id="accountMonth">
                      <option>January</option>
                      <option selected>February</option>
                      <option>March</option>
                    </select>
                  </div>
                  <div class="col-auto"> 
                    
                    <!-- Date -->
                    <label class="visually-hidden" for="accountYear"> Year </label>
                    <select class="form-select form-select-sm" id="accountYear">
                      <option>1990</option>
                      <option selected>1991</option>
                      <option>1992</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6"> 
              
              <!-- Gender -->
              <div class="form-group mb-8"> 
                
                <!-- Label -->
                <label class="form-label">Gender</label>
                
                <!-- Inputs -->
                <div> 
                  
                  <!-- Male -->
                  <input class="btn-check" type="radio" name="gender" id="male" checked>
                  <label class="btn btn-sm btn-outline-border" for="male">Male</label>
                  
                  <!-- Female -->
                  <input class="btn-check" type="radio" name="gender" id="female">
                  <label class="btn btn-sm btn-outline-border" for="female">Female</label>
                </div>
              </div>
            </div>
            <div class="col-12"> 
              
              <!-- Button -->
              <button class="btn btn-dark" type="submit">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
