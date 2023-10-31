<?php
require("db.php");

$prod = array();
$prod_id = isset($_GET['prod_id'])?$_GET['prod_id']:0;
if($prod_id != 0)
{
	$sql = "select * from `product` where `id` = ".$prod_id." and `status`= 1 ";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()){
			$prod = $row;
		}
	}
	
	$sql_query = "select * from `brand` where `status` = 1 and `id`= ".$prod['brand'];
	$sub_brand = array();
	$att_result = $conn->query($sql_query);
	if($att_result->num_rows > 0)
	{
		while($row = $att_result->fetch_assoc()) 
		{
			$sub_brand = $row;
		}
	}
}
else
{
	echo "no product find.";
	exit;
}
//echo '<script type="application/javascript">alert("you have to do login before payment");</script>';
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
<?php
include("header.php");
?>
<div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><?=$sub_brand['brand'];?></h2>
            </div>
          </div>
		  <div class="col-md-6">
            <div class="left-content">
              <h4><?=$prod['name'];?></h4>
              <p><?=$prod['description'];?>.</p>
              <h6>₹ <?=$prod['price'];?></h6>
			  <form>
             <a href="payment.php" class="filled-button">Make Payment</a> 
            </form>
			</div>
          </div>
		  
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?=$prod['img_url'];?>" alt="">
            </div>
          </div>
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