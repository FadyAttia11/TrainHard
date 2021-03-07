<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

	if($user_data['user_role'] == 'trainer') {
		header('Location: TrainerProgram.php');
	  } else if (!$user_data) {
		  header('Location: index.php');
	  }
?>

<!DOCTYPE html>
<html>

<head>
	<title>Make offers</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
	<!-- main banner -->
	<div class="userprofile" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<!-- nav -->
				<nav class="py-lg-4 py-3 px-xl-5 px-lg-3 px-2">
					<div id="logo">
						<h1><a class="" href="index.php"><span class="fa fa-spinner mr-2" aria-hidden="true"></span>Oneshot killers</a></h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mt-2">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="TraineeProgram.php">Programs</a></li>
						<li><a href="TraineeAdvice.php">Trainers</a></li>
						<li><a href="Gyms.php">Gyms</a></li>
						<li><a href="TraineePormotion.php">Promotions</a></li>
						<li><a href="TraineeSumplement.php">Supplements</a></li>
						<li><a href="userprofile.php"><?php echo $user_data['user_role']; ?>: <?php echo $user_data['user_name']; ?></a></li>
						<li><a href="logout.php" class="text-danger">Logout</a></li>
					</ul>
				</nav>
				<!-- //nav -->
			</div>
		</header>
		<!-- //header -->
	</div>
<section class="mt-4 ml-2">
	<div class="row col-sm-12 ">
		<div class="col-sm-6 m-auto">
			<div class="card">
				<img src="./images/health-fitness-tips-weight.jpg" class="card-img-top" alt="card_img">
				<div class="card-body">
				  <h5 class="card-title">Fitness Program</h5>
				  <p class="card-text">Sets 5 Reps 10 Tempo 2010 Rest 60sec Lie on a flat bench holding a barbell with your hands slightly wider than shoulder-width apart. Brace your core, then lower the bar towards your chest. Press it back up to the start. </p>
				  <p class="card-text">300 L.E per month</p>
				  <p class="card-text">20 Hour</p>
				  <p class="card-text">Ali Mazher</p>
				  <div class="text-right">
					<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#myModal">
						Book Now
					  </button>

				</div>	
								</div>
			  </div>
		</div>
	
	</div>

</section>

<div class="footer mt-5">
	<div class="container-fluid footer_content">
		<div class="row">
			<div class="col-sm-4">
					<h2>Subscribe <span>Newsletter</span></h2>
					<p class="subscribe_footer">By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
					
				
			</div>
			<div class="col-sm-4">
					<h2>Our <span>Links</span> </h3>
					  <ul class="links">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Mail Us</a></li>
						</ul>
			</div>
			<div class="col-sm-4">
					<h2>Contact <span>Us</span></h2>
						<ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>Cairo <label> Egypt.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
		</div>
		<div class="copyright text-center mt-5">
			<p>© 2020 gym. All rights reserved</a>
			</p>
		</div>
	</div>
</div>
	<div class="modal" id="myModal">
		<div class="modal-dialog">
		  <div class="modal-content">
	  
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title">Program</h4>

			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
	  
			<!-- Modal body -->
			<div class="modal-body">
				
				<h5><a href="balance.html">Your Balance: 200</a></h5>
				<div class="mt-2">
					<form>
					<div class="form-group">
						<label >First Name</label>
						<input type="text" placeholder="First Name" class="form-control" />
					</div>
					<div class="form-group">
						<label >Last Name</label>
						<input type="text" placeholder="Last Name" class="form-control" />

					</div>
					<div class="form-group">
						<label >Gender</label>
						<select class="form-control">
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label >Email</label>
						<input type="text" placeholder="Email" class="form-control" />
					</div>
					<div class="form-group">
						<label >Number of Month Needed</label>
						<input type="text" placeholder="Number of Month Needed" class="form-control" />
					</div>
					<div class="form-group">
						<label >Type of Payment</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1">
							 Cash
							</label>
						  </div>
						  <div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2">
							  Credit
							</label>
						  </div>
						</div>
					
					
				
					</form>
				</div>
			</div>
	  
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Book Now</button>
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
	  
		  </div>
		</div>
	  </div>
	<!-- //footer -->
<script src="./js/jquery.js"></script>
<script src="./js/propper.js"></script>
<script src="./js/bootstrap.min.js"></script>


</body>

</html>