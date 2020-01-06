<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>All Doctors</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">


	<!-- Bootstrap CSS -->
	<!--    <link rel="stylesheet" type="text/css" href="css/library/bootstrap-reboot.css">-->
	<link rel="stylesheet" type="text/css" href="../files/css/library/bootstrap4.3.1.css">
	<link rel="stylesheet" type="text/css" href="../files/css/library/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" href='../files/css/main.css'>
	<link rel="stylesheet" href='../files/css/header.css'>
	<link rel="stylesheet" href='../files/css/footer.css'>

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


</head>
<body>


<!-- Navbar -->
<nav class='navbar navbar-expand-sm navbar-light'>
	<div class='container-fluid'>
		<a class='navbar-brand' href='<?php echo base_url(); ?>'>
			Doctor Finder
		</a>

		<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive'
				aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
			<span class='navbar-toggler-icon'></span>
		</button>
		<div class='collapse navbar-collapse' id='navbarResponsive'>
			<ul class='navbar-nav ml-auto'>

				<li class='nav-item active'>
					<a class='nav-link' href='<?php echo base_url(); ?>'>HOME
						<span class='sr-only'>(current)</span>
					</a>
				</li>

				<li class='nav-item'>
					<a class='nav-link' href='<?php echo base_url('al_doc/index'); ?>'>All Doctors</a>
				</li>

				<li class='nav-item'>
					<a class='nav-link' href='<?php echo base_url('al_hos/index'); ?>'>All Hospital</a>
				</li>

				<li class='nav-item'>
					<a class='nav-link ' href='<?php echo base_url('welcome/about'); ?>'>About</a>
				</li>


			</ul>
		</div>
	</div>
</nav>
<!-- Navbar end -->

<!-- Welcome section -->
<div id="welcome-section">
	<div class="overlay">
		<div class="container-fluid">
			<div class="row d-flex">
				<div class="col-lg-12 mx-auto text-center">
					<div class="title">
						<h1>Find Doctors Near You</h1>
						<span>Find Doctors nearby you by clicking the search button</span>
					</div>
					<div class="form-section shadow">
						<form action="<?php echo base_url('welcome/search_doc')?>" method="post">

							<div class="input-group  d-flex ">
								<div class="col-lg-3 col-md-3 col-sm-12 my-2 align-self-center ">
									<input type="search" placeholder="Name" name="name" class="form-control">
								</div>

								<div class="col-lg-3 col-md-3 my-2 col-sm-12 align-self-center ">
									<input type="search" placeholder="Degree" name="degree"
										   class="form-control">
								</div>

								<div class="col-lg-3 col-md-3 my-2 col-sm-12 align-self-center ">
									<input type="search" placeholder="Speciality" name="spaciality"
										   class="form-control">
								</div>

								<div class="col-lg-3 col-md-3 my-2 col-sm-12 align-self-center search">
									<button type="submit" name="search" class="form-control">SEARCH</button>
								</div>
							</div>
						</form>
						<!-- End -->

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- welcome section end -->

<!--All Hospitals-->
<div id="doctors-section">
	<div class="container">
		<div class="row justify-content-center">
			<!-- hospitals -->
			<?php
			foreach($data as $row)
			{



			?>
			<!-- doctors -->
			<div class="col-md-4 col-lg-4 col-sm-6 d-flex mb-4">
				<div class="doctors align-self-center h-100 w-100">

					<div class="d-flex doctor-info">
						<div class="doctor-img align-self-start">
							<img src="../files/images/doctors.png"
								 alt="Shafayat Hossain" class="img-responsive img-circle rounded-circle"/>
						</div>
						<div class="ml-auto align-self-center text-right">
							<span class="title"><?php echo $row->name?></span>
							<span class="subtitle"><?php echo $row->specialty?></span>
							<span class="subtitle"><?php echo $row->degree?></span>
						</div>
					</div>

					<div class="align-self-end doctor-details mt-4">
						<span class="details-info"><b>Hospital:</b> <?php echo $row->name?></span>
						<span class="details-info"><b>Visiting hour:</b><?php echo $row->visiting_hour?></span>
						<span class="details-info"><b>Weekday:</b> <?php echo $row->weekday?></span>
						<span class="details-info"><b>Get Appointment:</b> <?php echo $row->contact?></span>
					</div>

				</div>
			</div>

				<?php
			}
			?>


		</div>
	</div>
</div>
<!--All Hospitals ends-->


<!-- Footer Section -->
<div id="footer">
	<div class="container">
		<div class="row footer-bottom">
			<div class="container">
				<div class="text-center">

					<div class="title">Get the app</div>

					<div class="details">Download our apps now. lorem ipsum dolor sit amet, consectetuer adipiscing
						elit.
						Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.
					</div>

					<!--                    <div class="btns">-->
					<!--                        <a href=""><img src="./images/google-paly.png"></a>-->
					<!--                    </div>-->

				</div>
			</div>

		</div>

	</div>
</div>
<!-- Footer Section end-->


<!-- JS Scripts -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="../files/js/library/bootstrap.bundle.js"></script>
<script src="../files/js/library/bootstrap.min.js"></script>
<script src="../files/js/main.js"></script>


</body>
</html>
