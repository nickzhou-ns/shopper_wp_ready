<!-- inc_NAVBAR -->
<nav   page="inc_navbar_common"    class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container"> 
    
    <!-- Brand --> 
    <a class="navbar-brand" href="overview.php"> Shopper. </a> 
    
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarCollapse"> 
      
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
        <li class="nav-item dropdown position-static"> 
          
          <!-- Toggle --> 
          <a class="nav-link" data-bs-toggle="dropdown" href="#">Catalog</a> 
          
          <!-- Menu -->
          <div class="dropdown-menu w-100"> 
            
            <!-- Tabs -->
            <div class="mb-2 mb-lg-0 border-bottom-lg">
              <div class="container">
                <div class="row">
                  <div class="col-12"> 
                    
                    <!-- Nav -->
                    <nav class="nav nav-tabs nav-overflow fs-xs border-bottom border-bottom-lg-0"> <a class="nav-link text-uppercase active" data-bs-toggle="tab" href="#navTab"> Women </a> <a class="nav-link text-uppercase" data-bs-toggle="tab" href="#navTab"> Men </a> <a class="nav-link text-uppercase" data-bs-toggle="tab" href="#navTab"> Kids </a> </nav>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Tab content -->
            <div class="card card-lg">
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="navTab">
                    <div class="container">
                      <div class="row">
                        <div class="col-6 col-md"> 
                          
                          <!-- Heading -->
                          <div class="mb-5 fw-bold">Clothing</div>
                          
                          <!-- Links -->
                          <ul class="list-styled mb-6 mb-md-0 fs-sm">
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">All Clothing</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Blouses & Shirts</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Coats & Jackets</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Dresses</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Hoodies & Sweats</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Denim</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Jeans</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Jumpers & Cardigans</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Leggings</a> </li>
                          </ul>
                        </div>
                        <div class="col-6 col-md"> 
                          
                          <!-- Heading -->
                          <div class="mb-5 fw-bold">Shoes & Boots</div>
                          
                          <!-- Links -->
                          <ul class="list-styled mb-6 mb-md-0 fs-sm">
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">All Shoes & Boots</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Branded Shoes</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Boots</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Heels</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Trainers</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Sandals</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Shoes</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Wide Fit Shoes</a> </li>
                          </ul>
                        </div>
                        <div class="col-6 col-md"> 
                          
                          <!-- Heading -->
                          <div class="mb-5 fw-bold">Bags & Accessories</div>
                          
                          <!-- Links -->
                          <ul class="list-styled mb-0 fs-sm">
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">All Bags & Accessories</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Accessories</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Bags & Purses</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Luggage</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Belts</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Hats</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Hair Accessories</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Jewellery</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Travel Accessories</a> </li>
                          </ul>
                        </div>
                        <div class="col-6 col-md"> 
                          
                          <!-- Heading -->
                          <div class="mb-5 fw-bold">Collections</div>
                          
                          <!-- Links -->
                          <ul class="list-styled mb-0 fs-sm">
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">All Collections</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Occasionwear</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Going Out</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Workwear</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Holiday Shop</a> </li>
                            <li class="list-styled-item"> <a class="list-styled-link" href="shop.php">Jean Fit Guide</a> </li>
                          </ul>
                        </div>
                        <div class="col-4 d-none d-lg-block"> 
                          
                          <!-- Card -->
                          <div class="card"> 
                            
                            <!-- Image --> 
                            <img class="card-img" src="<?=get_template_directory_uri()?>/assets/img/products/product_110.jpg" alt="..."> 
                            
                            <!-- Overlay -->
                            <div class="card-img-overlay bg-dark-0 bg-hover align-items-center">
                              <div class="text-center"> <a class="btn btn-white stretched-link" href="shop.php"> Shop Sweaters <i class="fe fe-arrow-right ms-2"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_topbar.php">Topbar</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_collapse.php">Collapse</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_simple.php">Simple</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shop_masonry.php">Masonry</a> </li>
                    </ul>
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Product</div>
                    
                    <!-- Links -->
                    <ul class="list-styled fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="product.php">Default</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="product_images-left.php">Images Left</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="product_image-grid.php">Image Grid</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="product_image-slider.php">Image Slider</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="product_images-stacked.php">Images Stacked</a> </li>
                    </ul>
                  </div>
                  <div class="col"> 
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Support</div>
                    
                    <!-- Links -->
                    <ul class="list-styled mb-7 fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="shopping-cart.php">Shopping Cart</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="checkout.php">Checkout</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="order-completed.php">Order Completed</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="shipping-and-returns.php">Shipping & Returns</a> </li>
                    </ul>
                    
                    <!-- Heading -->
                    <div class="mb-5 fw-bold">Account</div>
                    
                    <!-- Links -->
                    <ul class="list-styled fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_order.php">Order</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_orders.php">Orders</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_wishlist.php">Wishlist</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_personal-info.php">Personal Info</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_address.php">Addresses</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_address-edit.php">Addresses: New</a> </li>
                    </ul>
                  </div>
                  <div class="col"> 
                    
                    <!-- Links -->
                    <ul class="list-styled mb-7 fs-sm">
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_payment.php">Payment</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_payment-edit.php">Payment: New</a> </li>
                      <li class="list-styled-item"> <a class="list-styled-link" href="account_payment-choose.php">Payment: Choose</a> </li>
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
                  <li class="list-styled-item"> <a class="list-styled-link" href="store-locator.php">Store Locator</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="faq.php">FAQ</a> </li>
                  <li class="list-styled-item"> <a class="list-styled-link" href="coming-soon.php">Coming Soon</a> </li>
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
      <ul class="navbar-nav flex-row">
        <li class="nav-item"> <a class="nav-link" data-bs-toggle="offcanvas" href="#modalSearch"> <i class="fe fe-search"></i> </a> </li>
        <li class="nav-item ms-lg-n4"> <a class="nav-link" href="account_orders.php"> <i class="fe fe-user"></i> </a> </li>
        <li class="nav-item ms-lg-n4"> <a class="nav-link" href="account_wishlist.php"> <i class="fe fe-heart"></i> </a> </li>
        <li class="nav-item ms-lg-n4"> <a class="nav-link" data-bs-toggle="offcanvas" href="#modalShoppingCart"> <span data-cart-items="2"> <i class="fe fe-shopping-cart"></i> </span> </a> </li>
      </ul>
    </div>
  </div>
</nav>
