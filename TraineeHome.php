<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if($user_data['user_role'] == 'trainer') {
      header('Location: Trainer.php');
    } else if (!$user_data) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Trainee Home</title>
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
	<div class="main-top" id="home">
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="TraineeProgram.php">Programs</a></li>
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

		<!-- banner -->
		<div class="main">
			<div class="container">
				<div class="style-banner text-center">
					<h3 class="mb-2">EXCEPTIONAL LIFE FITNESS</h3>
					<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
<section class="mt-4 ml-2">
	<ul class="nav nav-tabs">
		<li class="nav-item">
		  <a class="nav-link active" data-toggle="tab" href="#programs">Our Programs</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" data-toggle="tab" href="#trainers">Our Trainers</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#NearGym">Near By Gym</a>
		  </li>
		<li class="nav-item">
		  <a class="nav-link" data-toggle="tab" href="#promotion">Our promotion & offers</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#supplements">Our Supplements</a>
		  </li>
	  </ul>
	  
	  <!-- Tab panes -->
	  <div class="tab-content mt-5 ">
		<div class="tab-pane container active " id="programs">
			<div class="row col-sm-12">
				<div class="col-sm-4">
					<div class="card">
						<img src="./images/health-fitness-tips-weight.jpg" class="card-img-top" alt="card_img">
						<div class="card-body">
						  <h5 class="card-title">Fitness Program</h5>
						  <p class="card-text">Sets 5 Reps 10 Tempo 2010 Rest 60sec Lie on a flat bench holding a barbell with your hands slightly wider than shoulder-width apart. Brace your core, then lower the bar towards your chest. Press it back up to the start. </p>
						  <div class="text-right">
							<a href="./TraineeProgram.php" class="btn btn-primary mt-2">View</a>

						</div>						</div>
					  </div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<img src="./images/yoga.jpg" class="card-img-top" alt="card_img">
						<div class="card-body">
						  <h5 class="card-title">Yoga Program
						</h5>
						  <p class="card-text">Sets 5 Reps 6-10 Tempo 2110 Rest 60sec Grip rings or parallel bars with your arms straight. Keeping your chest up, bend your elbows to lower your body as far as your shoulders allow. Press back up powerfully to return to the start.</p>
						<div class="text-right">
							<a href="#" class="btn btn-primary mt-2">View</a>

						</div>
						</div>
					  </div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<img src="./images/dance.jpg" class="card-img-top" alt="Card_img">
						<div class="card-body">
						  <h5 class="card-title">Dance
						</h5>
						  <p class="card-text">Sets 3 Reps 12-15 Tempo 2010 Rest 60sec Lie on an incline bench holding a dumbbell in each hand by your shoulders. Press the weights up until your arms are straight, then lower them back to the start under control.

						</p>
						<div class="text-right">
							<a href="#" class="btn btn-primary mt-2">View</a>

						</div>						</div>
					  </div>
				</div>
			</div>
		</div>
		<div class="tab-pane container fade" id="trainers">
			<div class="row col-sm-12">
				<div class="col-sm-4">
					<div class="card">
						<img src="./images/3.jpg" class="card-img-top" alt="card_img">
						<div class="card-body">
						  <h5 class="card-title">Ahmed hamdy</h5>
						  <p class="card-text">Sets 5 Reps 10 Tempo 2010 Rest 60sec Lie on a flat bench holding a barbell with your hands slightly wider than shoulder-width apart. Brace your core, then lower the bar towards your chest. Press it back up to the start. </p>
						  <div class="text-right">
							<a href="./TraineeAdvice.php" class="btn btn-primary mt-2">Ask Advice</a>

						</div>						</div>
					  </div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<img src="./images/2.jpg" class="card-img-top" alt="card_img">
						<div class="card-body">
						  <h5 class="card-title">ahmed hamdy
						</h5>
						  <p class="card-text">Sets 5 Reps 6-10 Tempo 2110 Rest 60sec Grip rings or parallel bars with your arms straight. Keeping your chest up, bend your elbows to lower your body as far as your shoulders allow. Press back up powerfully to return to the start.</p>
						<div class="text-right">
							<a href="#" class="btn btn-primary mt-2">Ask Advice</a>

						</div>
						</div>
					  </div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<img src="./images/1.jpg" class="card-img-top" alt="Card_img">
						<div class="card-body">
						  <h5 class="card-title">ahmed hamdy
						</h5>
						  <p class="card-text">Sets 3 Reps 12-15 Tempo 2010 Rest 60sec Lie on an incline bench holding a dumbbell in each hand by your shoulders. Press the weights up until your arms are straight, then lower them back to the start under control.

						</p>
						<div class="text-right">
							<a href="#" class="btn btn-primary mt-2">Ask Advice</a>

						</div>						</div>
					  </div>
				</div>
			</div>
		</div>
		<div class="tab-pane container fade" id="promotion">
			<div class="inner_sec_info_agile_w3_info">
				<div class="row price-grid-main">
					<div class="col-lg-4 col-sm-6 price-info">
						<div class="prices border p-4">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$30</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Standard</h4>
								</div>
								<ul class="mt-4">
									<li>Mini - Toddler</li>
									<li class="my-3">Coffee Break</li>
									<li>Total Classes - 15</li>
									<li class="my-3">Group Lesson</li>
								</ul>
								<a href="./TraineePormotion.php" class="button mt-4">Get</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6  price-info price-mkres-2">
						<div class="prices border p-4 active">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$80</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Premium</h4>
								</div>
								<ul class="mt-4">
									<li>Group Lesson</li>
									<li class="my-3">Coffee Break</li>
									<li>Mini - Toddler</li>
									<li class="my-3">Total Classes - 15</li>
								</ul>
								<a href="#" class="button mt-4">Get</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6  price-info price-mkres">
						<div class="prices border p-4">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$60</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Golden</h4>
								</div>
								<ul class="mt-4">
									<li>Total Classes - 15</li>
									<li class="my-3">Coffee Break</li>
									<li>Mini - Toddler</li>
									<li class="my-3">Group Lesson</li>
								</ul>
								<a href="#" class="button mt-4">Get</a>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="tab-pane container fade" id="supplements">

			<div class="inner_sec_info_agile_w3_info">
				<div class="row price-grid-main">
					<div class="col-lg-4 col-sm-6 price-info">
						<div class="prices border p-4">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$30</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								
								<div class="prices-h border-bottom p-4">
									<h4>Amino</h4>
								</div>
								<img src="./images/amino-9000.png" class="card-img-top" style="width: 100px;" alt="card_img">
								<ul class="mt-4">
									<li>Gaspari Nutrition’s AMINOMAX 8000 </li>
									<li class="my-3">is a scientifically designed blend of 91%</li>								
								</ul>
								<a href="./TraineeSumplement.php" class="button mt-4">Book</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6  price-info price-mkres-2">
						<div class="prices border p-4 active">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$80</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>Fat Burners</h4>

								</div>
								<img src="./images/burner.jpg" class="card-img-top" style="width: 100px;" alt="card_img">

								<ul class="mt-4">
									<li>Patented Chromium Complex
									</li>
									<li class="my-3">Biologically Active/Niacin Bound</li>
									
								</ul>
								<a href="#" class="button mt-4">Book</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6  price-info price-mkres">
						<div class="prices border p-4">
							<div class="prices-top">
								<div class="dodecagon s1">
									<div class="dodecagon-in s1">
										<div class="dodecagon-bg s1">
											<h3 class="text-center text-white rounded-circle">$60</h3>
										</div>
									</div>
								</div>
							</div>
							<div class="prices-bottom text-center">
								<div class="prices-h border-bottom p-4">
									<h4>hydroxycut hardcore 
									</h4>

								</div>
								<img src="./images/Hydroxy.jpg" class="card-img-top" style="width: 100px;" alt="card_img">

								<ul class="mt-4">
									<li>SUPER-THERMOGENESIS</li>
									<li class="my-3">EXTREME ENERGY</li>
								
								</ul>
								<a href="#" class="button mt-4">Book</a>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>

	  </div>
</section>

	<!-- footer -->
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
	<!-- //footer -->
<script src="./js/jquery.js"></script>
<script src="./js/propper.js"></script>
<script src="./js/bootstrap.min.js"></script>


</body>

</html>