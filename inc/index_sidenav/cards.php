<?php
include( "arr/index_sidenav_cards.php" );
?>
 <!-- CARDS -->
 <section page="cards" class="pb-12">
     <div class="row">
         <div class="col-12 col-xl-6 d-flex flex-column">

             <!-- Card -->
             <a class="card mb-7 justify-content-center bg-cover" href="shop.php" style="min-height: 510px;">

                 <!-- Background -->
                 <div class="card-bg">
                     <div class="card-bg-img bg-cover"
                         style="background-image: url(assets/img/products/product-73.jpg);"></div>
                 </div>

                 <!-- Body -->
                 <div class="card-body text-center text-white">

                     <!-- Preheading -->
                     <p class="text-uppercase">Enjoy an extra</p>

                     <!-- Heading -->
                     <h2 class="display-2 text-uppercase">50% off </h2>

                     <!-- Subheading -->
                     <h4>Summer Styles</h4>

                 </div>

             </a>

         </div>
         <div class="col-12 col-xl-6">
             <div class="row">


                 <?php foreach ($arr_cards_1 as $k => $val) { ?>
                 <div class="col-12 col-md-6">
                     <!-- Card -->
                     <div class="card mb-7 bg-cover"
                         style="min-height: 240px; background-image: url(<?php echo $val["img"] ?>);">

                         <!-- Overlay -->
                         <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                             <div class="text-center">
                                 <p class="fw-bold">
                                     <a class="text-body"
                                         href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> <br>
                                     <span class="text-muted"><?php echo $val["sum"] ?></span>
                                 </p>
                                 <p class="mb-0">
                                     <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                         data-bs-target="#modalProduct">
                                         <i class="fe fe-eye"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-shopping-cart"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-heart"></i>
                                     </button>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php } ?>
             </div>
         </div>

         <?php foreach ($arr_cards_2 as $k => $val) { ?>

         <div class="col-12 col-md-6 col-xl-3">

             <!-- Card -->
             <div class="card mb-7 bg-cover"
                 style="min-height: 240px; background-image: url(<?php echo $val["img"] ?>);">

                 <!-- Badge -->
                 <?php echo $val["sale"] ?>

                 <!-- Overlay -->
                 <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                     <div class="text-center">
                         <p class="fw-bold">
                             <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> <br>
                             <span class="text-muted"><?php echo $val["sum"] ?></span>
                         </p>
                         <p class="mb-0">
                             <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                 data-bs-target="#modalProduct">
                                 <i class="fe fe-eye"></i>
                             </button>
                             <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                 <i class="fe fe-shopping-cart"></i>
                             </button>
                             <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                 <i class="fe fe-heart"></i>
                             </button>
                         </p>
                     </div>
                 </div>

             </div>

         </div>
         <?php } ?>

         <div class="col-12 col-xl-3">
             <div class="row">
                 <div class="col-12 col-md-6 col-xl-12">

                     <!-- Card -->
                     <div class="card mb-7 bg-cover"
                         style="min-height: 240px; background-image: url(assets/img/products/product-82.jpg);">

                         <!-- Badge -->
                         <div class="badge bg-dark card-badge card-badge-start text-uppercase">
                             Sale
                         </div>

                         <!-- Overlay -->
                         <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                             <div class="text-center">
                                 <p class="fw-bold">
                                     <a class="text-body" href="product.php">Cotton leaf print Shirt</a> <br>
                                     <span class="text-muted">$65.00</span>
                                 </p>
                                 <p class="mb-0">
                                     <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                         data-bs-target="#modalProduct">
                                         <i class="fe fe-eye"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-shopping-cart"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-heart"></i>
                                     </button>
                                 </p>
                             </div>
                         </div>

                     </div>

                 </div>
                 <div class="col-12 col-md-6 col-xl-12">

                     <!-- Card -->
                     <div class="card mb-7 bg-cover"
                         style="min-height: 240px; background-image: url(assets/img/products/product-83.jpg);">

                         <!-- Overlay -->
                         <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                             <div class="text-center">
                                 <p class="fw-bold">
                                     <a class="text-body" href="product.php">Cotton leaf print Shirt</a> <br>
                                     <span class="text-muted">$65.00</span>
                                 </p>
                                 <p class="mb-0">
                                     <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                         data-bs-target="#modalProduct">
                                         <i class="fe fe-eye"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-shopping-cart"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-heart"></i>
                                     </button>
                                 </p>
                             </div>
                         </div>

                     </div>

                 </div>
             </div>
         </div>
         <div class="col-12 col-xl-6 d-flex flex-column">

             <!-- Card -->
             <div class="card justify-content-end mb-7 bg-cover" style="min-height: 510px;">

                 <!-- Background -->
                 <div class="card-bg">
                     <div class="card-bg-img bg-cover"
                         style="background-image: url(assets/img/products/product-84.jpg);"></div>
                 </div>

                 <!-- Body -->
                 <div class="card-body p-9">

                     <!-- Heading -->
                     <h3 class="mb-0">Watch Collection</h3>

                     <!-- Subheading -->
                     <a class="btn btn-link stretched-link   px-0 text-body" href="shop.php">
                         Shop Now <i class="fe fe-arrow-right ms-2"></i>
                     </a>

                 </div>

             </div>

         </div>
         <div class="col-12 col-xl-3">
             <div class="row">
                 <div class="col-12 col-md-6 col-xl-12">

                     <!-- Card -->
                     <div class="card mb-7 bg-cover"
                         style="min-height: 240px; background-image: url(assets/img/products/product-85.jpg);">

                         <!-- Overlay -->
                         <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                             <div class="text-center">
                                 <p class="fw-bold">
                                     <a class="text-body" href="product.php">Cotton leaf print Shirt</a> <br>
                                     <span class="text-muted">$65.00</span>
                                 </p>
                                 <p class="mb-0">
                                     <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                         data-bs-target="#modalProduct">
                                         <i class="fe fe-eye"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-shopping-cart"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-heart"></i>
                                     </button>
                                 </p>
                             </div>
                         </div>

                     </div>

                 </div>
                 <div class="col-12 col-md-6 col-xl-12">

                     <!-- Card -->
                     <div class="card mb-7 bg-cover"
                         style="min-height: 240px; background-image: url(assets/img/products/product-86.jpg);">

                         <!-- Badge -->
                         <div class="badge bg-white text-body card-badge card-badge-start text-uppercase">
                             New
                         </div>

                         <!-- Overlay -->
                         <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                             <div class="text-center">
                                 <p class="fw-bold">
                                     <a class="text-body" href="product.php">Cotton leaf print Shirt</a> <br>
                                     <span class="text-muted">$65.00</span>
                                 </p>
                                 <p class="mb-0">
                                     <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                         data-bs-target="#modalProduct">
                                         <i class="fe fe-eye"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-shopping-cart"></i>
                                     </button>
                                     <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                         <i class="fe fe-heart"></i>
                                     </button>
                                 </p>
                             </div>
                         </div>

                     </div>

                 </div>
             </div>
         </div>


         <?php foreach ($arr_cards_3 as $k => $val) { ?>
         <div class="col-12 col-md-6 col-xl-3">

             <!-- Card -->
             <div class="card mb-7 bg-cover"
                 style="min-height: 240px; background-image: url(<?php echo $val["img"] ?>);">

                 <!-- Badge -->
                 <?php echo $val["sale"] ?>

                 <!-- Overlay -->
                 <div class="card-img-overlay card-img-overlay-hover align-items-center bg-white-90">
                     <div class="text-center">
                         <p class="fw-bold">
                             <a class="text-body" href="<?php echo $val["url"] ?>"><?php echo $val["title"] ?></a> <br>
                             <span class="text-muted"><?php echo $val["sum"] ?></span>
                         </p>
                         <p class="mb-0">
                             <button class="btn btn-xs btn-link btn-circle" data-bs-toggle="modal"
                                 data-bs-target="#modalProduct">
                                 <i class="fe fe-eye"></i>
                             </button>
                             <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                 <i class="fe fe-shopping-cart"></i>
                             </button>
                             <button class="btn btn-xs btn-link btn-circle" data-toggle="button">
                                 <i class="fe fe-heart"></i>
                             </button>
                         </p>
                     </div>
                 </div>

             </div>

         </div>
         <?php } ?>
     </div>

     <!-- Progress -->
     <div class="row justify-content-center mt-7">
         <div class="col-12 text-center">

             <!-- Caption -->
             <p class="fs-sm text-muted">
                 Showing 16 of 24 products
             </p>

             <!-- Progress -->
             <div class="progress mx-auto mb-7" style="max-width: 250px;">
                 <div class="progress-bar bg-dark" role="progressbar" style="width: 66%" aria-valuenow="66"
                     aria-valuemin="0" aria-valuemax="100"></div>
             </div>

             <!-- Button -->
             <a class="btn btn-sm btn-outline-dark" href="#!">
                 Load more
             </a>

         </div>
     </div>

 </section>