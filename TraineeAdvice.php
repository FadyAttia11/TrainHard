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

	$all_trainers_query = "select * from users where user_role = 'trainer'";
	$all_trainers = mysqli_query($con, $all_trainers_query);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Ask Advice</title>
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
						<li><a href="TraineeProgram.php">Programs</a></li>
						<li class="active"><a href="TraineeAdvice.php">Trainers</a></li>
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
	<h1 class="mb-4">All Trainers</h1>
	<div class="row col-sm-12 ">
		<?php 

			while($row = mysqli_fetch_array($all_trainers)) {
		?>
		<div class="col-sm-6 m-auto">
			<div class="card">
				<img src=<?php echo "./uploads/". $row['image'] ?> class="card-img-top" alt="card_img" style="width:400px; margin: 0 auto;">
				<div class="card-body">
					<h5 class="card-title">Trainer: <?php echo $row['user_name'] ?></h5>
					<textarea name="question" id="question" placeholder="write your question here.." rows="5" style="width: 100%"></textarea>
					<div class="text-right">
						<input type="submit" class="btn btn-primary mt-2" data-toggle="modal" data-target="#myModal">
							Ask For Advice
					</div>	
				</div>
			</div>
		</div>
		<?php } ?>
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
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="mail.html">Mail Us</a></li>
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
			  <h4 class="modal-title">Ask Advice</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
	  
			<!-- Modal body -->
			<div class="modal-body">
				<h5><a href="balance.html">Your Balance: 200</a></h5>
				<div class="mt-2">
					<form>
					<div class="form-group">
						<label >Question</label>
						<textarea class="form-control" placeholder="write your questions here">
							
							</textarea>
					</div>
				
					
					
				
					</form>
				</div>
			</div>
	  
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
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