<?php
require ('db.php');
require('user_login_authentication.php');

$user_data = array();
$sql = "SELECT * FROM `admin_login`";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) 
	{
		$user_data[$row['id']] = $row;
	}
}

if(isset($_POST['payment']))
{
	$card_number = $_POST['card_number'];
	$expiration_date = $_POST['expiration_date'];
	$cvv = $_POST['cvv'];
	$coupon_code = $_POST['coupon_code'];
	
	$sql = "INSERT INTO `payment`(`status`, `last_update`, `update_by`, `card_number`, `expiration_date`, `cvv`, `coupon_code`) VALUES (1, '".date('Y-m-d H:i:s')."', 1, '".$card_number."', '".$expiration_date."', '".$cvv."', '".$coupon_code."')";
		
	if ($conn->query($sql) === TRUE) 
	{
		//header("Location: http://localhost/project/Final_project/payment.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		exit;
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

    <title>Payment Page</title>

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
          <a class="navbar-brand" href="index.html"><h2>ELECTRO <em>MARKET</em></h2></a>
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
</br></br></br></br></br></br></br></br></br>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="container">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
<div class="col-xs-12 col-md-4">


<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" >Payment Details</h3>
<div class="display-td" ><!--                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">-->
</div>
</div>                    
</div>
<div class="panel-body">
<form role="form" id="payment-form" method="post" action="payment.php">
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="cardNumber">CARD NUMBER</label>
<div class="input-group">
<input type="tel" class="form-control" name="card_number" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-7 col-md-7">
<div class="form-group"> 
<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline"></span> DATE</label>
<input type="tel" class="form-control" name="expiration_date" placeholder="MM / YY" autocomplete="cc-exp" required />
</div>
</div>
<div class="col-xs-5 col-md-5 pull-right">
<div class="form-group">
<label for="cardCVC">CVV CODE</label>
<input type="tel" class="form-control" name="cvv" placeholder="CVV" autocomplete="cc-csc" required />
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="couponCode">COUPON CODE</label>
<input type="text" class="form-control" name="coupon_code" />
</div>
</div>      
                
</div>
<div class="row">
<div class="col-xs-12">
<button class="btn btn-success btn-lg btn-block" name="payment" value="payment" onclick="alertbox()"><a style="color:white" href="index.php">Payment</a></button> 
</div>
</div>
<div class="row" style="display:none;">
<div class="col-xs-12">
<p class="payment-errors"></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</form>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 Electro Market Co., Ltd.   - Design by: Gaurav uadsi(186549676)</p>
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


    <script language = "text/JavaScript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
	<script>
        function alertbox()
        {
          alert('Payment has done successfully, your order will be deliver in 3 days,at your door step.');
        }
		</script>

  </body>

</html>
