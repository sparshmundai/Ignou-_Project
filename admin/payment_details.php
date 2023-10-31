<?php
require('../db.php');
require('login_authentication.php');

$payment_det = array();
$sql = "SELECT * FROM `payment`";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) 
	{
		$payment_det[$row['id']] = $row;
	}
}



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


if(isset($_POST['registration']) && $_POST['registration'] == "submit")
{
	$card_number = $_POST['card_number'];
	$expiration_date = $_POST['expiration_date'];
	$cvv = $_POST['cvv'];
	$coupon_code = $_POST['coupon_code'];
	
	
	$sql = "INSERT INTO `payment`(`status`, `last_update`, `update_by`, `card_number`, `expiration_date`, `cvv`, `coupon_code`) VALUES (1, '".date('Y-m-d H:i:s')."', ".$_SESSION['user_login']['user_id'].", '".$card_number."', '".$expiration_date."', '".$cvv."', '".$coupon_code."')";
		
	if ($conn->query($sql) === TRUE) 
	{
		header("Location: http://localhost/project/Final_project/admin/payment_details.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		exit;
	}
}
if(isset($_POST['edt_registration']))
{
	
	$card_number = $_POST['edt_card_number'];
	$expiration_date = $_POST['edt_expiration_date'];
	$cvv = $_POST['edt_cvv'];
	$coupon_code = $_POST['edt_coupon_code'];
	$id = $_POST['edt_id'];
	
	
	$sql = "UPDATE `payment` SET `card_number`='".$card_number."', `expiration_date`='".$expiration_date."', `cvv`='".$cvv."', `coupon_code`='".$coupon_code."', `last_update`='".date('Y-m-d H:i:s')."',`update_by`=".$_SESSION['user_login']['user_id']." WHERE `id` = ".$id;
		
	if ($conn->query($sql) === TRUE) 
	{
		header("Location: http://localhost/project/Final_project/admin/payment_details.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		exit;
	}
}

//print_r($_SESSION);

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include("default/header.php"); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include("default/menu.php");  ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Payment Details</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ml-auto">
                                <li><a href="#"></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
			
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
							<div class="row">
								<div class="col-md-6">
								<h3 class="box-title">Payment Details</h3>
								</div>
								<div class="col-md-6 text-right">
								<button class="box-title" data-toggle="modal" data-target="#Add">Add</button>
								</div>
							</div>
                            <p class="text-muted">Payment<code>Data</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">S.no</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Update By</th>
                                            <th class="border-top-0">Card Number</th>
                                            <th class="border-top-0">Expiration Date</th>
                                            <th class="border-top-0">CVV</th>
                                            <th class="border-top-0">Coupon Code</th>
											<th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
										$i=1;
										foreach($payment_det as $cnt => $pay)
										{
											echo '
												<tr>
													<td>'.$i.'</td>
													<td>'.$pay['status'].'</td>
													<td>'.$user_data[$pay['update_by']]['name'].'</td>
													<td>'.$pay['card_number'].'</td>
													<td>'.$pay['expiration_date'].'</td>
													<td>'.$pay['cvv'].'</td>
													<td>'.$pay['coupon_code'].'</td>
													<td><a href="#" class="user-edit" data-toggle="modal" data-target="#Edit" data-status="'.$pay['status'].'" data-card_number="'.$pay['card_number'].'" data-expiration_date="'.$pay['expiration_date'].'" data-cvv="'.$pay['cvv'].'" data-coupon_code="'.$pay['coupon_code'].'" data-id="'.$pay['id'].'" >Edit</a></td>
												</tr>
												
											';
											$i++;
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Gaurav Admin brought to you by <a
                    href="index.php">Gaurav's Admin Pannel</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
	
	<div class="modal fade" id="Add" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form method="post" action="payment_details.php">
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="card_number" placeholder="Card Number">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="expiration_date" placeholder="Expiration Date">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="cvv" placeholder="CVV">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="coupon_code" placeholder="Coupon code">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" name="registration" value="submit">
						</div>
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="Edit" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form method="post" action="payment_details.php">
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="edt_card_number" placeholder="Card Number">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<input type="text" name="edt_expiration_date" placeholder="Expiration Date">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<input type="text" name="edt_cvv" placeholder="CVV">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<input type="text" name="edt_coupon_code" placeholder="Coupon Code">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="hidden" name="edt_id" value="">
							<input type="submit" name="edt_registration" value="submit">
						</div>
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
	<script>
	$('.user-edit').on('click',function(){
		var card_number = $(this).data("card_number");
		var expiration_date = $(this).data("expiration_date");
		var cvv = $(this).data("cvv");
		var coupon_code = $(this).data("coupon_code");
		var id = $(this).data("id");
		
		$("input[name=edt_card_number]").attr("value",card_number);
		$("input[name=edt_expiration_date]").attr("value",expiration_date);
		$("input[name=edt_cvv]").attr("value",cvv);
		$("input[name=edt_coupon_code]").attr("value",coupon_code);
		$("input[name=edt_id]").attr("value",id);
		
		
	});
	</script>
	
</body>

</html>