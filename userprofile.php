<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if(!$user_data) {
      header('Location: index.php');
    } 
?>

<!DOCTYPE html>
<html>

<head>
	<title>User Profile</title>
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
	<link rel="stylesheet" href="styles.css">
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
	<fieldset class="m-3">
		<legend>User Information</legend>
		<div class="row col-sm-12">
			<div class="col-sm-11">
				<div class="ml-2">
					<p>Full Name: </p>
					<span><?php echo $user_data['user_name']; ?></span>
				</div>
				<div class="ml-2 mt-2">
					<p>User Role: </p>
					<span><?php echo $user_data['user_role']; ?></span>
				</div>
				<div class="ml-2 mt-2">
					<p>Email: </p>
					<span><?php echo $user_data['email']; ?></span>
				</div>
				<div class="ml-2 mt-2">
					<p>Phone :</p>
					<span>0<?php echo $user_data['phone']; ?></span>
				</div>
				<div class="ml-2 mt-2">
					<p>Balance :</p>
					<span>$<?php echo $user_data['balance']; ?></span>
				</div>
				<div class="ml-2 mt-2">
					<p>Age: </p>
					<span><?php echo $user_data['age']; ?></span>
				</div>
				<div class="ml-2 mt-2">
					<p>Gender: </p>
					<span><?php echo $user_data['gender']; ?></span>
				</div>
			</div>
			<div class="col-sm-1">
				<img src=<?php echo "./uploads/". $user_data['image'] ?> alt="avatar" class="profile-pic" />
			</div>
		</div>
		<fieldset class="p-2 m-4">
			<legend>History</legend>
			<div class="ml-2">
				<span>Program Booked </span>
				<span class="btn btn-primary">view</span>
			</div>
			<div class="ml-2 mt-2">
				<span>Ask for mentorShip </span>
				<span class="btn btn-primary">view</span>
			</div>
			<div class="ml-2 mt-2">
				<span>Supplements Booked </span>
				<span class="btn btn-primary">view</span>
			</div>
		</fieldset>
	</fieldset>
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