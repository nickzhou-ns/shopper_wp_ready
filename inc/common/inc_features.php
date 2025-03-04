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
<!-- inc_FEATURES -->
<section  page="inc_features"  page="inc_features" class="py-9">

<div class="container">
  <div class="row">
    <?php foreach ($arr_features as $k => $val) { ?>
    <div class="col-12 col-md-6 col-lg-3"> 
      <!-- inc_Item -->
      <div class="d-flex mb-6 mb-lg-0"> <i class="fe <?php echo $val["icon"] ?> fs-lg text-primary"></i>
        <div class="ms-6">
          <h6 class="mb-1 heading-xxs"> <?php echo $val["title"] ?> </h6>
          <p class="mb-0 fs-sm text-muted"> <?php echo $val["text"] ?> </p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
</section>