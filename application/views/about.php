<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Doctor Finder - Home page</title>

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
					<a class='nav-link' href='<?php echo base_url('welcome/all_doc'); ?>'>All Doctors</a>
				</li>

				<li class='nav-item'>
					<a class='nav-link' href='<?php echo base_url('welcome/all_hos'); ?>'>All Hospital</a>
				</li>

				<li class='nav-item'>
					<a class='nav-link ' href='<?php echo base_url('welcome/about'); ?>'>About</a>
				</li>


			</ul>
		</div>
	</div>
</nav>
<!-- Navbar end -->

<div class="container">

	<div class="introduction text-center">
		<h2>About Us</h2>
		<span>Introduce the story behind your app here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
        pellentesque eu, pretium quis.</span>
	</div>

	<div class="row team-member">
		<div class="col-md-6 col-sm-6 text-center">
			<img class="rounded-circle" src="../files/images/shafayat.png">
			<div class="card shadow-lg">
				<div class="member-info ">
					<h3>Shafayat Hossain Bayezid</h3>
					<span class="designation">Designer and Developer</span>
				</div>
				<span class="key-note">A dedicated, detailed and capable Web & Android App Developer with three years of experience.
                    I'm passionate to work as a front-end Web and Android App developer, able to find out solutions of complex problems and loves to take task as a challenge..</span>

				<div class="social align-items-center">
					<a href="www.facebook.com/shafayat.bayezid" target="_blank" class="mx-2"><i class="fa fa-facebook"></i></a>
					<a href="twitter.com/shafayatbayezid" target="_blank" class="mx-2"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/shafayatbayezid" target="_blank" class="mx-2"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 text-center">
			<img class="rounded-circle" src="../files/images/amit.jpg">
			<div class="card shadow-lg">
				<div class="member-info ">
					<h3>Amit Kumar Singha</h3>
					<span class="designation">Designer and Developer</span>
				</div>
				<span class="key-note">I am very much passionate about web and app development. Have 2+ years pf experience in this sector. Dedicated to my work and exited to work with a team.</span>

				<div class="social ">
					<a href="" class="mx-2"><i class="fa fa-facebook"></i></a>
					<a href="" class="mx-2"><i class="fa fa-twitter"></i></a>
					<a href="" class="mx-2"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

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


</body>
</html>
