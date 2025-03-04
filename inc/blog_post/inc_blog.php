<?php
$arr_blog = array(
  array(
    'id' => '1',
    'title' => 'Us yielding Fish sea night night the said him two',
    'text' => "Fill his waters wherein signs likeness waters. Second light gathered appear sixth.",
    'img' => 'assets/img/blog/blog-1.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 20',
  ),
  array(
    'id' => '2',
    'title' => 'Tree earth fowl given moveth deep lesser After',
    'text' => "Called life don't called darkness spirit have,
  abundantly so Wherein the third cattle.",
    'img' => 'assets/img/blog/blog-2.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 18',
  ),
  array(
    'id' => '3',
    'title' => ' Given Set was without from god divide rule Hath',
    'text' => " Midst land were us fill divided. Him Subdue living
  without he beginning second.",
    'img' => 'assets/img/blog/blog-3.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 08',
  ),
);
?>
<!-- inc_BLOG -->
<section page="inc_blog" class="py-12">
  <div class="container">
    <div class="row align-items-center mb-10">
      <div class="col-12"> 
        <!-- inc_Heading -->
        <h2 class="mb-4 mb-sm-0 text-center">Latest in Blog</h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($arr_blog as $k => $val) { ?>
      <div class="col-12 col-md-4"> 
        <!-- inc_Card -->
        <div class="card mb-7 mb-md-0"> 
          <!-- inc_Image --> 
          <img src="<?php echo $val["img"] ?>" alt="..." class="card-img-top"> 
          <!-- inc_Badge -->
          <div class="badge bg-white text-body card-badge card-badge-start text-uppercase">
            <time datetime="2019-06-20"> <?php echo $val["date"] ?> </time>
          </div>
          <!-- inc_Body -->
          <div class="card-body px-0 py-7"> 
            <!-- inc_Heading -->
            <h6 class="mb-3"> <?php echo $val["title"] ?> </h6>
            <!-- inc_Text -->
            <p class="mb-2"> <?php echo $val["text"] ?> </p>
            <!-- inc_Link --> 
            <a class="btn btn-link px-0 text-body" href="blog_post.php"> Read more <i class="fe fe-arrow-right ms-2"></i> </a> </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
