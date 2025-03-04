<?php
$arr_features = array(
  array(
    'id' => '1',
    'title' => 'Free shipping',
    'text' => "From all orders over $100",
    'icon' => 'fe-truck',
    'class' => 'bg-warning-soft',
  ),
  array(
    'id' => '2',
    'title' => 'Free returns',
    'text' => "Return money within 30 days",
    'icon' => 'fe-repeat',
    'class' => 'bg-info-soft',
  ),
  array(
    'id' => '3',
    'title' => 'OVER 10,000 STYLES',
    'text' => "We have everything you need",
    'icon' => 'fe-tag',
    'class' => 'bg-warning-soft',
  ),

);
?>
<!-- FEATURES -->
<section  page="inc_features_index_boxed" >
  <div class="container">
    <div class="row">
      <?php foreach ($arr_features as $k => $val) { ?>
      <div class="col-12 col-md-4 <?php echo $val["class"] ?>"> 
        
        <!-- Item -->
        <div class="d-flex justify-content-center py-7"> 
          
          <!-- Icon --> 
          <i class="fe <?php echo $val["icon"] ?> fs-lg text-primary"></i> 
          
          <!-- Body -->
          <div class="ms-6"> 
            
            <!-- Heading -->
            <h6 class="heading-xxs mb-1"> <?php echo $val["title"] ?> </h6>
            
            <!-- Text -->
            <p class="mb-0 fs-sm text-muted"> <?php echo $val["text"] ?> </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
