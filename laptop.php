<?php 
require("db.php");

$cat_id = 2;
$sql_query = "select * from `brand` where `status` = 1 and `cate_id`= ".$cat_id;
$sub_brand = array();
$att_result = $conn->query($sql_query);
if($att_result->num_rows > 0)
{
	while($row = $att_result->fetch_assoc()) 
	{
		$sub_brand[$row['id']] = $row;
	}

}
$sql_query = "select * from `product_category` where `status` = 1 and `id`= ".$cat_id;
$cat = "";
$att_result = $conn->query($sql_query);
if($att_result->num_rows > 0)
{
	while($row = $att_result->fetch_assoc()) 
	{
		$cat = $row['name'];
	}

}
$sql_query = "select * from `product` where `status` = 1 and `category`= ".$cat_id." AND `brand`=6";
$products = array();
$att_result = $conn->query($sql_query);
if($att_result->num_rows > 0)
{
	while($row = $att_result->fetch_assoc()) 
	{
		$products[$row['id']] = $row;
	}

}
?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>ELECTRO MARKET.com</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
		<img src="logo.JPG" width="80" height="30">
          <a class="navbar-brand" href="index.php"><h2>ELECTRO <em>MARKET</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">Our Products</a>
              </li>
			  
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
			 
			   <li class="nav-item">
                <a class="nav-link" href="Login_form\user_login.php">login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>



    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
   


<?php include("default/sub_navbar.php") ?>

     <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>ACER Laptop</h2>
              <a href="products.php">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
		  <?php foreach($products as $id => $arr) { ?>
			  <div class="col-md-4">
            <div class="product-item">
              <a href="<?="product_detail.php?prod_id=".$id;?>"><img src="<?=$arr['img_url']?>" alt=""></a>
              <div class="down-content">
                <a href="<?="product_detail.php?prod_id=".$id;?>"><h4><?=$arr['name']?></h4></a>
                <h6>₹ <?=$arr['price']?></h6>
                <p> <?=$arr['description']?>.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>















	
	 <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 Electro Market Co., Ltd.
            
            - Design by: Gaurav uadsi(186549676)</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>