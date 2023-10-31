<?php
require('../db.php');
require('login_authentication.php');

$product_name = array();
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) 
	{
		$product_name[$row['id']] = $row;
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


$product_cat = array();
$sql = "SELECT * FROM `product_category`";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) 
	{
		$product_cat[$row['id']] = $row;
	}
}
$brand_na = array();
$sql = "SELECT * FROM `brand`";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) 
	{
		$brand_na[$row['id']] = $row;
	}
}

if(isset($_POST['registration']) && $_POST['registration'] == "submit")
{
	$name = $_POST['name'];
	$status = $_POST['status'];
	$img_url = $_POST['img_url'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$brand = $_POST['brand'];
	
	$sql = "INSERT INTO `product`(`name`, `status`, `last_update`, `update_by`, `img_url`, `category`, `price`, `description`, `brand` ) VALUES ('".$name."', 1, '".date('Y-m-d H:i:s')."', ".$_SESSION['user_login']['user_id'].", '".$img_url."', '".$category."', '".$price."', '".$description."', '".$brand."') ";
		
	if ($conn->query($sql) === TRUE) 
	{
		header("Location: http://localhost/project/Final_project/admin/product.php");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		exit;
	}
}
if(isset($_POST['edt_registration']))
{
	$name = $_POST['edt_name'];
	$id = $_POST['edt_id'];
	$status = $_POST['edt_status'];
	$img_url = $_POST['edt_img_url'];
	$category = $_POST['edt_category'];
	$price = $_POST['edt_price'];
	$description = $_POST['edt_description'];
	$brand = $_POST['edt_brand'];
	
	
	
	
	
	$sql = "UPDATE `product` SET `name`='".$name."', `status`='".$status."', `img_url`='".$img_url."', `category`='".$category."', `price`='".$price."', `description`='".$description."', `brand`='".$brand."', `last_update`='".date('Y-m-d H:i:s')."',`update_by`=".$_SESSION['user_login']['user_id']." WHERE `id` = ".$id;
		
	if ($conn->query($sql) === TRUE) 
	{
		header("Location: http://localhost/project/Final_project/admin/product.php");
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
                        <h4 class="page-title text-uppercase font-medium font-14">Product Detail</h4>
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
								<h3 class="box-title">Product</h3>
								</div>
								<div class="col-md-6 text-right">
								<button class="box-title" data-toggle="modal" data-target="#Add">Add</button>
								</div>
							</div>
                            <p class="text-muted">Product <code>Data</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">S.no</th>
                                            <th class="border-top-0">Product Name</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Last Update</th>
                                            <th class="border-top-0">Update By</th>
                                            <th class="border-top-0">Image url</th>
                                            <th class="border-top-0">Category</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Brands</th>
											<th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
										$i=1;
										foreach($product_name as $cnt => $product)
										{
											echo '
												<tr>
													<td>'.$i.'</td>
													<td>'.$product['name'].'</td>
													<td>'.$product['status'].'</td>
													<td>'.$product['last_update'].'</td>
													<td>'.$user_data[$product['update_by']]['name'].'</td>
													<td>'.$product['img_url'].'</td>
													<td>'.$product_cat[$product['category']]['name'].'</td>
													<td>'.$product['price'].'</td>
													<td>'.$product['description'].'</td>
													<td>'.$brand_na[$product['brand']]['brand'].'</td>
													<td><a href="#" class="user-edit" data-toggle="modal" data-target="#Edit" data-product="'.$product['name'].'" data-status="'.$product['status'].'" data-last_update="'.$product['last_update'].'"data-img_url="'.$product['img_url'].'"data-category="'.$product['category'].'"data-price="'.$product['price'].'"data-description="'.$product['description'].'"data-brand="'.$product['brand'].'"data-id="'.$product['id'].'" >Edit</a></td>
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
					<form method="post" action="product.php">
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" name="name" placeholder="Product Name">
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" name="status" placeholder="Status">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" name="img_url" placeholder="image_url">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<select class="form-control" name="category">
							<?php foreach($product_cat as $id=>$arr){ ?>
								<option value="<?=$id;?>"><?=$arr['name'];?></option>
							<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div  class="col-md-6">
							<input type="text" class="form-control" name="price" placeholder="Price">
						</div>
					</div>
					<div class="row">
						<div  class="col-md-6">
							<input type="text" class="form-control" name="description" placeholder="Description">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<select class="form-control" name="brand">
									<?php foreach($brand_na as $id=>$arr){ ?>
										<option value="<?=$id;?>"><?=$arr['brand'];?></option>
									<?php } ?>
							</select>
						</div>
					</div>
						<div class="col-md-12">
							<input type="submit" class="form-control" name="registration" value="submit">
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
					<form method="post" action="product.php">
					<div class="row">
						<div class="col-md-12">
							<input type="text" class="form-control" name="edt_name" placeholder="Product_Name">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" class="form-control" name="edt_status" placeholder="Status">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" class="form-control" name="edt_img_url" placeholder="Image Url">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<select class="form-control" name="edt_category">
								<?php foreach($product_cat as $id => $arr){ ?>
								<option value="<?=$id;?>"><?=$arr['name']; ?></option>
								<?php } ?>
								
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="text" name="edt_price" placeholder="Price">
						</div>
					</div>
						<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="text" name="edt_description" placeholder="Description">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<select class="form-control" name="edt_brand">
								<?php foreach($brand_na as $id=>$arr){ ?>
									<option value="<?=$id;?>"><?=$arr['brand'];?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="hidden" name="edt_id" value="">
							<input class="form-control" type="submit" name="edt_registration" value="submit">
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
		var name = $(this).data("product");
		var status = $(this).data("status");
		var img_url = $(this).data("img_url");
		var category = $(this).data("category");
		var price = $(this).data("price");
		var description = $(this).data("description");
		var brand = $(this).data("brand");
		var id = $(this).data("id");
		
		$("input[name=edt_name]").attr("value",name);
		$("input[name=edt_status]").attr("value",status);
		$("input[name=edt_img_url]").attr("value",img_url);
		$("select[name=edt_category]").find("option[value="+category+"]").attr("selected","selected");
		$("input[name=edt_price]").attr("value",price);
		$("input[name=edt_description]").attr("value",description);
		$("select[name=edt_brand]").find("option[value="+brand+"]").attr("selected","selected");
		$("input[name=edt_id]").attr("value",id);
		
	});
	</script>
	
</body>

</html>