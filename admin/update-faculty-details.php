<!DOCTYPE html>
<!-- <?php
// if($_POST){
// 	$name = $_POST['name'];
// 	$description = $_POST['description'];
//     $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
//     $con = mysqli_connect('localhost','root','','yourmemories') or die('Unable To connect');

// 	if($name!="" && $description!="" && $image!="")
// 	{
// 		$query= "select * from category where name='$name'";
// 		$check = mysqli_query($con, $query);
// 		$num = mysqli_num_rows($check);
	
// 		if($num==1)
// 		{
// 			$sql = "update category set description='$description', image='$image' where name='$name'";
	
// 			if(mysqli_query($con, $sql)){
// 				echo '<script>alert("Category Updated Successfully")</script>';
// 			}else{
// 				echo '<script>alert("Category is not updated")</script>';
// 			}
// 		}
// 		else
// 		{
// 			echo '<script>alert("Category Not Found")</script>'; 
// 		}
// 	}
// 	else
// 	{
// 		echo '<script>alert("All Field Are Required To Be Filled")</script>'; 
// 	}
// 	mysqli_close($con);
// }
?> -->
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(function() {
			$('#btnAddeducation').click(function(){
				var newDiv = 
				$('<div style="width: 100%">'+
				'<hr style="background-color: black; border-radius: 10px; height: 2px; width: 100%">'+
				'<div style="width: 49%; float: left" class="form-group col-6">'+
						'<label class="col-form-label">Title</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: right" class="form-group col-6">'+
						'<label class="col-form-label">Institute</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: left" class="form-group col-6">'+
						'<label class="col-form-label">Joining Year</label>'+
						'<div>'+
							'<input class="form-control" type="date"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: right" class="form-group col-6">'+
						'<label class="col-form-label">Pass out Year</label>'+
						'<div>'+
							'<input class="form-control" type="date"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'</div>');
				$('#education').append(newDiv);
			});
		});
		$(function() {
			$('#btnAddproject').click(function(){
				var newDiv2 = 
				$('<div style="width: 100%">'+
				'<hr style="background-color: black; border-radius: 10px; height: 2px; width: 100%">'+
				'<div style="width: 49%; float: left" class="form-group col-6">'+
						'<label class="col-form-label">Title</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: right" class="form-group col-6">'+
						'<label class="col-form-label">Detail</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: left" class="form-group col-6">'+
					'<label class="col-form-label">Project Image (Image Format Should be JPEG)</label>'+
						'<div>'+
							'<input type="file" name="image" id="image" />'+
						'</div>'+
					'</div>');
				$('#project').append(newDiv2);
			});
		});
		$(function() {
			$('#btnAddresearch').click(function(){
				var newDiv3 = 
				$('<div style="width: 100%">'+
				'<hr style="background-color: black; border-radius: 10px; height: 2px; width: 100%">'+
				'<div style="width: 49%; float: left" class="form-group col-6">'+
						'<label class="col-form-label">Title</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: right" class="form-group col-6">'+
						'<label class="col-form-label">Detail</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: left" class="form-group col-6">'+
					'<label class="col-form-label">Research Image (Image Format Should be JPEG)</label>'+
						'<div>'+
							'<input type="file" name="image" id="image" />'+
						'</div>'+
					'</div>');
				$('#research').append(newDiv3);
			});
		});
		$(function() {
			$('#btnAddcourse').click(function(){
				var newDiv3 = 
				$('<div style="width: 100%">'+
				'<hr style="background-color: black; border-radius: 10px; height: 2px; width: 100%">'+
				'<div style="width: 49%; float: left" class="form-group col-6">'+
						'<label class="col-form-label">Title</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: right" class="form-group col-6">'+
						'<label class="col-form-label">Code</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: left" class="form-group col-6">'+
						'<label class="col-form-label">Section</label>'+
						'<div>'+
							'<input class="form-control" type="text"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'<div style="width: 49%; float: right" class="form-group col-6">'+
						'<label class="col-form-label">Batch</label>'+
						'<div>'+
							'<input class="form-control" type="number"  name="description" value="">'+
						'</div>'+
					'</div>'+
					'</div>');
				$('#course').append(newDiv3);
			});
		});
	</script>


	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/favicon.png">
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Update Faculty | Admin Portal</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="index.php" class="ttr-logo"><h3 style="padding:10px; margin-top: 18px; background-color: white">Nu-Admin Portal</h3></a>
				</div>
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../index.php" class="button_style">LOGOUT</a>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="index.php"><h4>Nu-Admin Portal</h4></a>
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="index.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashborad</span>
		                </a>
		            </li>
					<li>
						<a href="faculty.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-view-list-alt"></i></span>
		                	<span class="ttr-label">Faculty</span>
		                </a>
		            </li>
					<li>
						<a href="announcement.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-view-list-alt"></i></span>
		                	<span class="ttr-label">Announcements</span>
		                </a>
		            </li>
					<li class="ttr-seperate"></li>
					<li>
						<a href="add-faculty.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-pencil-alt"></i></span>
		                	<span class="ttr-label">Add Faculty</span>
		                </a>
					</li>
					<li>
						<a href="add-faculty-details.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-pencil-alt"></i></span>
		                	<span class="ttr-label">Add Faculty Details</span>
		                </a>
					</li>
					<li>
						<a href="delete-faculty.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-close"></i></span>
		                	<span class="ttr-label">Delete Faculty</span>
		                </a>
					</li>
					<li>
						<a href="update-faculty-details.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-close"></i></span>
		                	<span class="ttr-label">Update Faculty Details</span>
		                </a>
					</li>
					<li>
						<a href="add-announcement.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-pencil-alt"></i></span>
		                	<span class="ttr-label">Add Announcement</span>
		                </a>
					</li>
					<li>
						<a href="delete-announcement.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-close"></i></span>
		                	<span class="ttr-label">Delete Announcement</span>
		                </a>
					</li>
					<li>
						<a href="update-announcement.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-close"></i></span>
		                	<span class="ttr-label">Update Announcement</span>
		                </a>
					</li>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->


	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Update Faculty</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Update Faculty</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Update Faculty</h4>
						</div>
						<div class="widget-inner">
							<form  class="edit-profile m-b30" method="post" enctype="multipart/form-data" >
								<div class="row">
									<h1 style="text-align: center; width: 100%">Personal Information</h1>
									
									<div class="form-group col-6">
										<label class="col-form-label">Faculty First Name</label>
										<div>
											<input class="form-control" type="text" name="name" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Faculty Last Name</label>
										<div>
											<input class="form-control" type="text" name="name" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Faculty Email Address</label>
										<div>
											<input class="form-control" type="email"  name="description" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Faculty Linked In</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Faculty Joining Year</label>
										<div>
											<input class="form-control" type="date"  name="description" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Faculty Image (Image Format Should be JPEG)</label>
										<div>
											<input type="file" name="image" id="image" />
										</div>
									</div>

									<hr style="background-color: black; border-radius: 10px; height: 5px; width: 100%">
									<h1 style="text-align: center; width: 100%">Education</h1>
									
									<div style="width: 100%" id="education">
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Title</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: right" class="form-group col-6">
										<label class="col-form-label">Institute</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Joining Year</label>
										<div>
											<input class="form-control" type="date"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: right" class="form-group col-6">
										<label class="col-form-label">Pass out Year</label>
										<div>
											<input class="form-control" type="date"  name="description" value="">
										</div>
									</div>
									</div>
									<div class="col-12">
    									<button style="margin-top: 20px; width: 80%; margin-left:auto; margin-right: auto; display: block" type="button" id="btnAddeducation" class="btn">Add Education</button>
									</div>

									<hr style="background-color: black; border-radius: 10px; height: 5px; width: 100%">
									<h1 style="text-align: center; width: 100%">Projects</h1>

									<div style="width: 100%" id="project">
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Title</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: right" class="form-group col-6">
										<label class="col-form-label">Details</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Project Image (Image Format Should be JPEG)</label>
										<div>
											<input type="file" name="image" id="image" />
										</div>
									</div>
									</div>
									<div class="col-12">
    									<button style="margin-top: 20px; width: 80%; margin-left:auto; margin-right: auto; display: block" type="button" id="btnAddproject" class="btn">Add Project</button>
									</div>

									<hr style="background-color: black; border-radius: 10px; height: 5px; width: 100%">
									<h1 style="text-align: center; width: 100%">Courses</h1>

									<div style="width: 100%" id="course">
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Title</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: right" class="form-group col-6">
										<label class="col-form-label">Code</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Section</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: right" class="form-group col-6">
										<label class="col-form-label">Batch</label>
										<div>
											<input class="form-control" type="number"  name="description" value="">
										</div>
									</div>
									</div>
									<div class="col-12">
    									<button style="margin-top: 20px; width: 80%; margin-left:auto; margin-right: auto; display: block" type="button" id="btnAddcourse" class="btn">Add Course</button>
									</div>

									<hr style="background-color: black; border-radius: 10px; height: 5px; width: 100%">
									<h1 style="text-align: center; width: 100%">Research</h1>

									<div style="width: 100%" id="research">
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Title</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: right" class="form-group col-6">
										<label class="col-form-label">Details</label>
										<div>
											<input class="form-control" type="text"  name="description" value="">
										</div>
									</div>
									<div style="width: 49%; float: left" class="form-group col-6">
										<label class="col-form-label">Research Image (Image Format Should be JPEG)</label>
										<div>
											<input type="file" name="image" id="image" />
										</div>
									</div>
									</div>
									<div class="col-12">
    									<button style="margin-top: 20px; width: 80%; margin-left:auto; margin-right: auto; display: block" type="button" id="btnAddresearch" class="btn">Add Research</button>
									</div>

									<hr style="background-color: black; border-radius: 10px; height: 5px; width: 100%">
									<h1 style="text-align: center; width: 100%">Activities</h1>

									<div style="width: 100%">
										<textarea placeholder="Enter Your Social Activities Details" rows="5" cols="103" style="padding: 5px" ></textarea>
									</div>

									<hr style="background-color: black; border-radius: 10px; height: 5px; width: 100%">
									<div class="col-12">
    									<input style="margin-top: 30px; width: 50%; font-size: 30px; margin-left:auto; margin-right: auto; display: block" type="submit" class="btn" value="Upload" name="insert"></input>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<script>
// Pricing add
	function newMenuItem() {
		var newElem = $('tr.list-item').first().clone();
		newElem.find('input').val('');
		newElem.appendTo('table#item-add');
	}
	if ($("table#item-add").is('*')) {
		$('.add-item').on('click', function (e) {
			e.preventDefault();
			newMenuItem();
		});
		$(document).on("click", "#item-add .delete", function (e) {
			e.preventDefault();
			$(this).parent().parent().parent().parent().remove();
		});
	}
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>