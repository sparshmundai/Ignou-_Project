<?php
require('../db.php');
require('login_authentication.php');

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
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	
	$sql = "INSERT INTO `admin_login`(`name`, `username`, `password`, `type`, `status`, `last_update`, `update_by`) VALUES ('".$name."', '".$username."', '".$password."', '".$type."', 1, '".date('Y-m-d H:i:s')."',".$_SESSION['user_login']['user_id'].")";
		
	if ($conn->query($sql) === TRUE) 
	{
		header("Location: http://localhost/project/Final_project/admin/index.php");
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
	$username = $_POST['edt_username'];
	$password = $_POST['edt_password'];
	$type = $_POST['edt_type'];
	$id = $_POST['edt_id'];
	
	$sql = "UPDATE `admin_login` SET `name`='".$name."',`username`='".$username."',`password`='".$password."',`type`='".$type."',`last_update`='".date('Y-m-d H:i:s')."',`update_by`=".$_SESSION['user_login']['user_id']." WHERE `id` = ".$id;
		
	if ($conn->query($sql) === TRUE) 
	{
		header("Location: http://localhost/project/Final_project/admin/index.php");
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
                        <h4 class="page-title text-uppercase font-medium font-14">Admin User</h4>
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
								<h3 class="box-title">Admin User</h3>
								</div>
								<div class="col-md-6 text-right">
								<button class="box-title" data-toggle="modal" data-target="#Add">Add</button>
								</div>
							</div>
                            <p class="text-muted">Admin<code>Data</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">S.no</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">User Name</th>
                                            <th class="border-top-0">Password</th>
                                            <th class="border-top-0">Type</th>
                                            <th class="border-top-0">Update By</th>
											<th class="border-top-0">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
										$i=1;
										foreach($user_data as $cnt => $user_arr)
										{
											echo '
												<tr>
													<td>'.$i.'</td>
													<td>'.$user_arr['name'].'</td>
													<td>'.$user_arr['username'].'</td>
													<td>'.$user_arr['password'].'</td>
													<td>'.$user_arr['type'].'</td>
													<td>'.$user_data[$user_arr['update_by']]['name'].'</td>
													<td><a href="#" class="user-edit" data-toggle="modal" data-target="#Edit" data-name="'.$user_arr['name'].'" data-email="'.$user_arr['username'].'" data-password="'.$user_arr['password'].'" data-type="'.$user_arr['type'].'" data-id="'.$user_arr['id'].'" >Edit</a></td>
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
            <footer class="footer text-center"> 2020 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
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
					<form method="post" action="index.php">
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="UserName">
						</div>
						<div class="col-md-6">
							<input type="text" name="username" placeholder="Email_id">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="password" placeholder="Password">
						</div>
						<div class="col-md-6">
							<select name="type">
								<option value="Admin">Admin</option>
								<option value="faculty">Faculty</option>
								<option value="student">Student</option>
							</select>
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
					<form method="post" action="index.php">
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="edt_name" placeholder="Name">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="text" name="edt_username" placeholder="Email">
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<input type="text" name="edt_password" placeholder="Password">
						</div>
						<div class="col-md-6">
							<select name="edt_type">
								<option value="Admin">Admin</option>
								<option value="faculty">Faculty</option>
								<option value="student">Student</option>
							</select>
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
		var name = $(this).data("name");
		var email = $(this).data("email");
		var pass = $(this).data("password");
		var type = $(this).data("type");
		var id = $(this).data("id");
		
		$("input[name=edt_name]").attr("value",name);
		$("input[name=edt_username]").attr("value",email);
		$("input[name=edt_password]").attr("value",pass);
		$("input[name=edt_id]").attr("value",id);
		$("select[name=edt_type]").find("option[value="+type+"]").attr("selected","selected");
		
	});
	</script>
	
</body>

</html>