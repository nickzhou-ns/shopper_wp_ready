<?php
$arr_details = array(
  array(
    'id' => '1',
    'title' => "Women",
    'text' => "Shop Women",
    'img' => get_template_directory_uri() . 'assets/img/covers/cover-1.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '2',
    'title' => "Men",
    'text' => " Shop Men",
    'img' => get_template_directory_uri() . 'assets/img/covers/cover-2.jpg',
    'url' => 'shop.php',
  ),
  array(
    'id' => '3',
    'title' => "Kids",
    'text' => "Shop Kids",
    'img' => get_template_directory_uri() . 'assets/img/covers/cover-3.jpg',
    'url' => 'shop.php',
  ),

);
?>
<!-- inc_CATEGORIES -->
<section page="inc_categories">
  <div class="row gx-0 d-block d-lg-flex flickity flickity-lg-none" data-flickity='{"watchCSS": true}'> 
    
    <!-- inc_Item -->
    <?php foreach ($arr_details as $k => $val) { ?>
    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column bg-cover" style="background-image: url(<?php echo $val["img"] ?>);">
      <div class="card bg-dark-5 bg-hover text-white text-center" style="min-height: 470px;">
        <div class="card-body mt-auto mb-n11 py-8"> 
          
          <!-- inc_Heading -->
          <h1 class="mb-0 fw-bolder"><?php echo $val["title"] ?></h1>
        </div>
        <div class="card-body mt-auto py-8"> 
          
          <!-- inc_Button --> 
          <a class="btn btn-white stretched-link" href="<?php echo $val["url"] ?>"><?php echo $val["text"] ?><i class="fe fe-arrow-right ms-2"></i> </a> </div>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
