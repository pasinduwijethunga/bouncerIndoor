<?php include 'db/dbConnection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Add Booking | SKYPOS</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>

	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="assets/js/setting-demo2.js"></script>
	<script src="assets/js/add_booking.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
    </script>
    
    <style>
        .fileUpload {
    /* position: relative; */
    overflow: hidden;
    /* margin: 10px; */
    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
    </style>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!-- Navbar Header -->
		<?php include('header.php');?>	
		<!-- End Navbar -->
		<!-- Sidebar -->
		<?php include('sidebar.php');?>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">ADD BOOKING</h4>
						
					</div>
					<div class="row">
						<div class="col-md-12">
							<form action="" method="post" id="bookingForm" enctype="multipart/form-data">
								<div class="card">
									<!-- <div class="card-header">
										<div class="card-title">Form Elements</div>
									</div> -->
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="">Book No</label>
													<input type="text" class="form-control" id="orderNo" name="orderNo" placeholder="Enter Book Number" required>
													
												</div>
												<div class="form-group">
													<label for="">Book Date</label>
													<input type="Date" class="form-control" id="bookDate" name="bookDate" placeholder="Enter Email Address" required>
												</div>
												<div class="row">
													<div class="col-6 col-md-6">
														<div class="form-group">
															<label for="">Book From</label>
															<input type="Time" class="form-control" id="bookFrom" name="bookFrom" required>
														</div>
													</div>
													<div class="col-6 col-md-6">
														<div class="form-group">
															<label for="">Book To</label>
															<input type="Time" class="form-control" id="bookTo" name="bookTo" required>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="">Name</label>
													<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
												</div>
												<div class="form-group">
													<label for="">Email Address</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
												</div>
												<div class="form-group">
													<label for="">Mobile </label>
													<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile" required>
												</div>
												<div class="form-group">
													<label for="">Nic</label>
													<input type="text" class="form-control" id="nic" name="nic" placeholder="Enter NIC" required>
												</div>
												
											</div>
											<div class="col-md-6">
												
												<div class="form-group">
                                                    <label for="">Select Indoor Or Outdoor</label>
                                                    <select class="form-control" id="doorsId" name="doorsId" onchange="loadOptionTypes(this.value)" required >
                                                        <option  selected value="" >Select Indoor Or Outdoor</option>
														<?php 
															 $sql="SELECT bt.id,bt.type FROM booking_types bt WHERE bt.status=1 and bt.optionId=1";
															 $result = mysqli_query($connection,$sql);

															 while($row = mysqli_fetch_object($result)){
																 ?>
																	<option value="<?php echo $row->id ?>" ><?php echo $row->type ?></option>
																 <?php 
															 }
														?>
                                                    </select>
                                                </div>
                                                <div class="form-group mn">
                                                    <label for="">Select Machine Or Normal</label>
                                                    <select class="form-control" id="machineNormalId" name="machineNormalId" onchange="loadOperators(this.value)" required>
                                                        <option selected hidden value="" >Select Machine Or Normal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group tm">
                                                    <label for="">Select Tutf Or Matting</label>
                                                    <select class="form-control" id="wicketsId" name="wicketsId" required >
                                                        <option selected hidden value="" >Select Tutf Or Matting</option>
                                                        </select>
                                                </div>
                                                <div class="form-group opr">
                                                    <label for="">Select Operater</label>
                                                    <select class="form-control" id="operatorId" name="operatorId" required>
                                                        <option selected hidden value="" >Select With Or Without</option>
                                                        </select>
                                                </div>
												
											</div>
	
										</div>
									</div>
									<div class="card-action">
										<button class="btn btn-primary" type="button" onclick="placeBooking()">
											<span class="btn-label">
												<i class="fa fa-check"></i>
											</span>
											Add Customer
										</button>
										<a href='list-customers.php' class="btn btn-danger">
											<span class="btn-label">
												<i class="fa fa-times"></i>
											</span>
												Cancel
										</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- footer -->
			<?php include('footer.php');?>
			<!-- End footer -->
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<?php include('rightSidebar.php');?>
		<!-- End Custom template -->
	</div>
</body>
</html>