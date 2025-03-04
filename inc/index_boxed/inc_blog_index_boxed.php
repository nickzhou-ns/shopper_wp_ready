<?php
$arr_blog = array(
  array(
    'id' => '1',
    'title' => 'Us yielding Fish sea night night the said him two',
    'text' => "Fill his waters wherein signs likeness waters. Second light gathered appear sixth.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-1.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 20',
  ),
  array(
    'id' => '2',
    'title' => 'Tree earth fowl given moveth deep lesser After',
    'text' => "Called life don't called darkness spirit have,
  abundantly so Wherein the third cattle.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-2.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 18',
  ),
  array(
    'id' => '3',
    'title' => ' Given Set was without from god divide rule Hath',
    'text' => " Midst land were us fill divided. Him Subdue living
  without he beginning second.",
    'img' => get_template_directory_uri() . 'assets/img/blog/blog-3.jpg',
    'url' => 'blog_post.php',
    'date' => 'Jun 08',
  ),
);
?>
<!-- BLOG -->
<section  page="inc_blog_index_boxed"  class="py-12">
  <div class="container">
    <div class="row align-items-center mb-10">
      <div class="col-12 col-sm"> 
        
        <!-- Heading -->
        <h2 class="mb-4 mb-sm-0 text-center text-sm-start">Latest in Blog</h2>
      </div>
      <div class="col-12 col-sm-auto"> 
        
        <!-- Link -->
        <div class="text-center text-sm-start"> <a class="link-underline" href="blog.php"> Discover more </a> </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($arr_blog as $k => $val) { ?>
      <div class="col-12 col-md-4"> 
        
        <!-- Card -->
        <div class="card mb-7 mb-md-0"> 
          
          <!-- Image --> 
          <img class="card-img-top" src="<?php echo $val["img"] ?>" alt="..."> 
          
          <!-- Badge -->
          <div class="badge bg-white text-body card-badge card-badge-start text-uppercase">
            <time datetime="2019-06-20"> <?php echo $val["date"] ?> </time>
          </div>
          
          <!-- Body -->
          <div class="card-body px-0 py-7"> 
            
            <!-- Heading -->
            <h6 class="mb-3"> <?php echo $val["title"] ?> </h6>
            
            <!-- Text -->
            <p class="mb-2"> <?php echo $val["text"] ?> </p>
            
            <!-- Link --> 
            <a class="btn btn-link stretched-link px-0 text-body" href="<?php echo $val["url"] ?>"> Read more <i class="fe fe-arrow-right ms-2"></i> </a> </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
