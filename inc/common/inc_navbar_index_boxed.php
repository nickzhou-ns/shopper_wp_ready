<!-- NAVBAR -->
<nav  page="inc_navbar_index_boxed"  class="navbar navbar-expand-xl navbar-light z-index_fixed">
  <div class="container"> 
    
    <!-- Brand --> 
    <a class="navbar-brand" href="overview.php"> Shopper. </a> 
    
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBoxedTopCollapse" aria-controls="navbarBoxedTopCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarBoxedTopCollapse"> 
      
      <!-- Nav -->
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown"> 
          
          <!-- Toggle --> 
          <a class="nav-link" data-bs-toggle="dropdown" href="index.php"><?=$nav_home ;?></a> 
          
          <!-- Menu -->
          <div class="dropdown-menu">
            <div class="card card-lg">
              <div class="card-body">
                <ul class="list-styled fs-sm">
                  <li class="list-styled-item"> <a class="list-styled-link" href="index.php">Default</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="index_classic.php">Classic</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="index_fashion.php">Fashion</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="index_boxed.php">Boxed</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="index_simple.php">Simple</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="index_asymmetric.php">Asymmetric</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="index_sidenav.php">Sidenav</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="index_landing.php">Landing</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"> 
          
          <!-- Toggle --> 
          <a class="nav-link" data-bs-toggle="dropdown" href="shop.php"><?=$nav_shop ;?></a> 
          
          <!-- Menu -->
          <div class="dropdown-menu" style="min-width: 650px;">
            <div class="card card-lg">
              <div class="card-body">
                <div class="row">
                  <div class="col"> 
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Shop</div>
                    
                    <!-- Links -->
                    <ul class="list-styled mb-7 fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Default</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_topba.php">Topbar</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_collapse.php">Collapse</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_simple.php">Simple</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_masonry.php">Masonry</a> </li>
                    </ul>
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Product</div>
                    
                    <!-- Links -->
                    <ul class="list-styled fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="product.php">Default</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="productt_images_left.php">Images Left</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="productt_images_grid.php">Image Grid</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="productt_images_slider.php">Image Slider</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="productt_images_stacked.php">Images Stacked</a> </li>
                    </ul>
                  </div>
                  <div class="col"> 
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Support</div>
                    
                    <!-- Links -->
                    <ul class="list-styled mb-7 fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="shopping_cart.php">Shopping Cart</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="checkout.php">Checkout</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="orde_completed.php">Order Completed</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shipping_and_returns.php">Shipping & Returns</a> </li>
                    </ul>
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Account</div>
                    
                    <!-- Links -->
                    <ul class="list-styled fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_order.php">Order</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_orders.php">Orders</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_wishlist.php">Wishlist</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_personal_info.php">Personal Info</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_address.php">Addresses</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_address-edit">Addresses: New</a> </li>
                    </ul>
                  </div>
                  <div class="col"> 
                    
                    <!-- Links -->
                    <ul class="list-styled mb-7 fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_payment.php">Payment</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_payment_edit.php">Payment: New</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_payment_choose.php">Payment: Choose</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="auth.php">Auth</a> </li>
                    </ul>
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Modals</div>
                    
                    <!-- Links -->
                    <ul class="list-styled fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalNewsletterHorizontal"> Newsletter: Horizontal </a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalNewsletterVertical"> Newsletter: Vertical </a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalProduct"> Product </a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="offcanvas" href="#modalSearch"> Search </a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="offcanvas" href="#modalShoppingCart"> Shopping Cart </a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalSizeChart"> Size Chart </a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" data-bs-toggle="modal" href="#modalWaitList"> Wait List </a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"> 
          
          <!-- Toggle --> 
          <a class="nav-link" data-bs-toggle="dropdown" href="#">Pages</a> 
          
          <!-- Menu -->
          <div class="dropdown-menu">
            <div class="card card-lg">
              <div class="card-body">
                <ul class="list-styled fs-sm">
                  <li class="list-styled-item"> <a class="list-styled-link" href="about.php"><?=$nav_About ;?></a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="contact_us.php"><?=$nav_contact ;?></a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="store_locator.php">Store Locator</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="faq.php">FAQ</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="coming_soon.php">Coming Soon</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="404.php">404</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"> 
          
          <!-- Toggle --> 
          <a class="nav-link" data-bs-toggle="dropdown" href="blog.php"><?=$nav_blog ;?></a> 
          
          <!-- Menu -->
          <div class="dropdown-menu">
            <div class="card card-lg">
              <div class="card-body">
                <ul class="list-styled fs-sm">
                  <li class="list-styled-item"> <a class="list-styled-link" href="blog.php">Blog</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="blog_post.php"><?=$nav_blog_post ;?></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item"> <a class="nav-link" href="docs/getting-started.php">Docs</a> </li>
      </ul>
      
      <!-- Nav -->
      <ul class="navbar-nav nav-divided">
        <li class="nav-item dropdown"> 
          
          <!-- Toggle --> 
          <a class="nav-link text-body dropdown-toggle" data-bs-toggle="dropdown" href="#">United States</a> 
          
          <!-- Menu -->
          <div class="dropdown-menu">
            <div class="card card-lg">
              <div class="card-body">
                <ul class="list-styled fs-sm">
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">United States</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">Canada</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">Germany</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"> 
          
          <!-- Toggle --> 
          <a class="nav-link text-body dropdown-toggle" data-bs-toggle="dropdown" href="#">USD</a> 
          
          <!-- Menu -->
          <div class="dropdown-menu">
            <div class="card card-lg">
              <div class="card-body">
                <ul class="list-styled fs-sm">
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">USD</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">EUR</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"> 
          
          <!-- Toggle --> 
          <a class="nav-link text-body dropdown-toggle" data-bs-toggle="dropdown" href="#">EN</a> 
          
          <!-- Menu -->
          <div class="dropdown-menu">
            <div class="card card-lg">
              <div class="card-body">
                <ul class="list-styled fs-sm">
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">English</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">French</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="#!">German</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
      
      <!-- Nav -->
      <ul class="navbar-nav flex-row">
        <li class="nav-item"> <a class="nav-link" data-bs-toggle="offcanvas" href="#modalSearch"> <i class="fe fe-search"></i> </a> </li>
        <li class="nav-item ms-lg-n4"> <a class="nav-link" href="account_orders.php"> <i class="fe fe-user"></i> </a> </li>
        <li class="nav-item ms-lg-n4"> <a class="nav-link" href="account_wishlist.php"> <i class="fe fe-heart"></i> </a> </li>
        <li class="nav-item ms-lg-n4"> <a class="nav-link" data-bs-toggle="offcanvas" href="#modalShoppingCart"> <span data-cart-items="2"> <i class="fe fe-shopping-cart"></i> </span> </a> </li>
      </ul>
    </div>
  </div>
</nav>
