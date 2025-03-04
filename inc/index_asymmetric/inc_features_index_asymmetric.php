<?php
$arr_features = array(
  array(
    'id' => '1',
    'title' => 'Free shipping',
    'text' => "From all orders over $100",
    'icon' => 'fe-truck',
    'url' => '1',
  ),
  array(
    'id' => '2',
    'title' => 'Free returns',
    'text' => "Return money within 30 days",
    'icon' => 'fe-repeat',
    'url' => '1',
  ),
  array(
    'id' => '3',
    'title' => 'Secure shopping',
    'text' => "You're in safe hands",
    'icon' => 'fe-lock',
    'url' => '1',
  ),
  array(
    'id' => '4',
    'title' => 'Over 10,000 Styles',
    'text' => "We have everything you need",
    'icon' => 'fe-tag',
    'url' => '1',
  ),
);
?>
<!-- FEATURES -->
<section  page="inc_features_index_asymmetric"  class="py-10 bg-light">
  <div class="container">
    <div class="row">
      <?php foreach ($arr_features as $k => $val) { ?>
      <div class="col-12 col-md-6 col-lg-3"> 
        <!-- Item -->
        <div class="text-center mb-6 mb-lg-0"> 
          
          <!-- Icon -->
          <div class="mb-4 h3 text-primary"> <i class="fe <?php echo $val["icon"] ?>"></i> </div>
          <!-- Heading -->
          <h6 class="heading-xxs mb-1"> <?php echo $val["title"] ?> </h6>
          <!-- Text -->
          <p class="mb-0 fs-sm text-muted"> <?php echo $val["text"] ?> </p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
